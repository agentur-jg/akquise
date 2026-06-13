import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const ready = (callback) => {
  if (document.readyState !== 'loading') {
    callback();
    return;
  }

  document.addEventListener('DOMContentLoaded', callback);
};

ready(() => {
  document.documentElement.classList.add('js');

  const header = document.querySelector('[data-site-header]');
  const toggle = document.querySelector('[data-menu-toggle]');
  const mobileNav = document.querySelector('[data-mobile-nav]');
  const scrollToHashTarget = () => {
    const hash = window.location.hash;

    if (!hash || hash.length < 2) {
      return;
    }

    const target = document.getElementById(decodeURIComponent(hash.slice(1)));

    if (!target) {
      return;
    }

    const headerOffset = header ? header.offsetHeight : 0;
    const targetY = target.getBoundingClientRect().top + window.scrollY - headerOffset;

    window.scrollTo({
      top: Math.max(targetY, 0),
      behavior: 'auto',
    });
  };

  if (header) {
    let lastScrollY = window.scrollY;

    const updateHeaderState = () => {
      const currentScrollY = window.scrollY;
      const isMenuOpen = header.classList.contains('is-open');
      const isScrollingDown = currentScrollY > lastScrollY;
      const scrollDelta = Math.abs(currentScrollY - lastScrollY);

      header.classList.toggle('is-scrolled', currentScrollY > 24);

      if (currentScrollY <= 24 || isMenuOpen) {
        header.classList.remove('is-hidden');
      } else if (scrollDelta > 6) {
        header.classList.toggle('is-hidden', isScrollingDown);
      }

      lastScrollY = Math.max(currentScrollY, 0);
    };

    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, { passive: true });
  }

  if (header && toggle && mobileNav) {
    const setMenuOpen = (isOpen) => {
      header.classList.toggle('is-open', isOpen);
      header.classList.remove('is-hidden');
      toggle.setAttribute('aria-expanded', String(isOpen));
      toggle.setAttribute('aria-label', isOpen ? 'Menü schließen' : 'Menü öffnen');
      mobileNav.hidden = !isOpen;
    };

    toggle.addEventListener('click', () => {
      setMenuOpen(toggle.getAttribute('aria-expanded') !== 'true');
    });

    mobileNav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => setMenuOpen(false));
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        setMenuOpen(false);
      }
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth >= 1024) {
        setMenuOpen(false);
      }
    });
  }

  document.querySelectorAll('[data-private-image]').forEach((privateImage) => {
    privateImage.addEventListener('contextmenu', (event) => event.preventDefault());
    privateImage.addEventListener('dragstart', (event) => event.preventDefault());
  });

  const scrollStatements = document.querySelectorAll('[data-scroll-reveal]');

  if (scrollStatements.length && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const preparedStatements = new Set();

    const prepareStatement = (statement) => {
      const text = statement.textContent.trim();
      const words = text.split(/\s+/);

      statement.setAttribute('aria-label', text);
      statement.innerHTML = words
        .map((word) => `<span class="scroll-reveal__word" aria-hidden="true">${word}</span>`)
        .join(' ');

      const wordNodes = statement.querySelectorAll('.scroll-reveal__word');

      gsap.set(wordNodes, {
        autoAlpha: 0.16,
        y: 18,
        filter: 'blur(6px)',
      });

      preparedStatements.add(statement);

      return Array.from(wordNodes);
    };

    document.querySelectorAll('[data-scroll-statement-section]').forEach((section) => {
      const sectionStatements = Array.from(section.querySelectorAll('[data-scroll-reveal]'));

      if (!sectionStatements.length) {
        return;
      }

      const sectionWords = sectionStatements.flatMap(prepareStatement);
      const scrollLength = section.dataset.scrollRevealEnd || `+=${Math.max(170, sectionStatements.length * 90)}%`;

      gsap.to(sectionWords, {
        autoAlpha: 1,
        y: 0,
        filter: 'blur(0px)',
        ease: 'none',
        stagger: 0.035,
        scrollTrigger: {
          trigger: section,
          start: 'top top',
          end: scrollLength,
          scrub: true,
          pin: true,
          anticipatePin: 1,
        },
      });
    });

    scrollStatements.forEach((statement) => {
      if (preparedStatements.has(statement)) {
        return;
      }

      const wordNodes = prepareStatement(statement);

      gsap.to(wordNodes, {
        autoAlpha: 1,
        y: 0,
        filter: 'blur(0px)',
        ease: 'none',
        stagger: 0.035,
        scrollTrigger: {
          trigger: statement,
          start: 'top top',
          end: '+=170%',
          scrub: true,
          pin: true,
          anticipatePin: 1,
        },
      });
    });
  }

  if (window.location.hash) {
    requestAnimationFrame(() => {
      ScrollTrigger.refresh();
      scrollToHashTarget();
    });

    window.addEventListener('load', () => {
      ScrollTrigger.refresh();
      scrollToHashTarget();
    });
  }
});
