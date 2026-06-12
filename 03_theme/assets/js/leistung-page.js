(function () {
  'use strict';

  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function initAccordion() {
    document.querySelectorAll('.faq-trigger').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var item = btn.closest('.faq-item');
        var isOpen = item.classList.contains('open');

        item.parentElement.querySelectorAll('.faq-item.open').forEach(function (openItem) {
          if (openItem !== item) {
            openItem.classList.remove('open');
            openItem.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
          }
        });

        item.classList.toggle('open', !isOpen);
        btn.setAttribute('aria-expanded', String(!isOpen));
      });
    });
  }

  function setHeroFinal() {
    document.querySelectorAll('[data-metric]').forEach(function (metric) {
      var bars = metric.querySelectorAll('.hero-bar');
      var pct = metric.querySelector('.hero-pct');

      bars.forEach(function (bar) {
        bar.style.width = bar.dataset.target + '%';
      });

      if (pct && bars.length) {
        var finalValue = pct.dataset.target || bars[0].dataset.target;
        var suffix = pct.textContent.indexOf('%') !== -1 ? '%' : '';
        pct.textContent = finalValue + suffix;
      }
    });

    document.querySelectorAll('.hero-rank').forEach(function (rank) {
      rank.textContent = '#' + rank.dataset.target;
    });

    document.querySelectorAll('.hero-gauge').forEach(function (gauge) {
      var target = parseInt(gauge.dataset.target, 10);
      var length = parseFloat(gauge.getAttribute('stroke-dasharray')) || 301.6;
      gauge.style.strokeDashoffset = length * (1 - target / 100);
    });

    document.querySelectorAll('.hero-pct[data-target]').forEach(function (pct) {
      if (!pct.closest('[data-metric]')) {
        pct.textContent = pct.dataset.target;
      }
    });
  }

  function animateHeroMetrics() {
    if (prefersReduced || !window.gsap) {
      setHeroFinal();
      return;
    }

    document.querySelectorAll('[data-metric]').forEach(function (metric, i) {
      var bars = metric.querySelectorAll('.hero-bar');
      var pct = metric.querySelector('.hero-pct');

      if (!bars.length) {
        return;
      }

      var delay = 0.3 + i * 0.14;

      bars.forEach(function (bar) {
        var target = parseInt(bar.dataset.target, 10);

        window.gsap.fromTo(
          bar,
          { width: '0%' },
          { width: target + '%', duration: 1.1, ease: 'power2.out', delay: delay }
        );
      });

      if (!pct) {
        return;
      }

      var pctTarget = pct.dataset.target ? parseInt(pct.dataset.target, 10) : parseInt(bars[0].dataset.target, 10);
      var pctSuffix = pct.textContent.indexOf('%') !== -1 ? '%' : '';
      var obj = { v: 0 };
      window.gsap.to(obj, {
        v: pctTarget,
        duration: 1.1,
        ease: 'power2.out',
        delay: delay,
        onUpdate: function () {
          pct.textContent = Math.round(obj.v) + pctSuffix;
        },
      });
    });
  }

  function animateHeroWidgets() {
    if (prefersReduced || !window.gsap) {
      setHeroFinal();
      return;
    }

    document.querySelectorAll('.hero-rank').forEach(function (rank, i) {
      var from = parseInt(rank.dataset.from, 10);
      var target = parseInt(rank.dataset.target, 10);
      var obj = { v: isNaN(from) ? target : from };

      window.gsap.to(obj, {
        v: target,
        duration: 1.1,
        ease: 'power2.out',
        delay: 0.35 + i * 0.12,
        onUpdate: function () {
          rank.textContent = '#' + Math.round(obj.v);
        },
      });
    });

    document.querySelectorAll('.hero-gauge').forEach(function (gauge) {
      var target = parseInt(gauge.dataset.target, 10);
      var length = parseFloat(gauge.getAttribute('stroke-dasharray')) || 301.6;

      window.gsap.fromTo(
        gauge,
        { strokeDashoffset: length },
        { strokeDashoffset: length * (1 - target / 100), duration: 1.25, ease: 'power2.out', delay: 0.28 }
      );
    });

    document.querySelectorAll('.hero-pct[data-target]').forEach(function (pct) {
      if (pct.closest('[data-metric]')) {
        return;
      }

      var target = parseInt(pct.dataset.target, 10);
      var obj = { v: 0 };

      window.gsap.to(obj, {
        v: target,
        duration: 1.1,
        ease: 'power2.out',
        delay: 0.35,
        onUpdate: function () {
          pct.textContent = Math.round(obj.v);
        },
      });
    });
  }

  function formatAusgangslageValue(value, decimals) {
    return Number(value).toLocaleString('de-DE', {
      minimumFractionDigits: decimals,
      maximumFractionDigits: decimals,
    });
  }

  function setAusgangslageFinal() {
    document.querySelectorAll('.aus-count[data-target]').forEach(function (count) {
      var decimals = parseInt(count.dataset.decimals || '0', 10);
      var prefix = count.dataset.prefix || '';
      var suffix = count.dataset.suffix || '';

      count.textContent = prefix + formatAusgangslageValue(parseFloat(count.dataset.target), decimals) + suffix;
    });

    document.querySelectorAll('.aus-gauge[data-target]').forEach(function (gauge) {
      var target = parseFloat(gauge.dataset.target);
      var length = parseFloat(gauge.getAttribute('stroke-dasharray')) || 126;

      gauge.style.strokeDashoffset = length * (1 - target / 100);
    });

    document.querySelectorAll('.aus-needle[data-target]').forEach(function (needle) {
      var target = parseFloat(needle.dataset.target);

      needle.style.transform = 'rotate(' + (-90 + target * 1.8) + 'deg)';
    });

    document.querySelectorAll('.aus-split-fill').forEach(function (bar) {
      bar.style.transform = 'scaleX(1)';
    });
  }

  function animateAusgangslageCount(count, timeline, position) {
    var target = parseFloat(count.dataset.target);
    var decimals = parseInt(count.dataset.decimals || '0', 10);
    var prefix = count.dataset.prefix || '';
    var suffix = count.dataset.suffix || '';
    var obj = { v: 0 };

    timeline.to(obj, {
      v: target,
      duration: 1,
      ease: 'power2.out',
      onUpdate: function () {
        count.textContent = prefix + formatAusgangslageValue(obj.v, decimals) + suffix;
      },
    }, position);
  }

  function createAusgangslageTimeline(widget) {
    var triggerConfig = window.ScrollTrigger
      ? { scrollTrigger: { trigger: widget, start: 'top 78%', once: true } }
      : {};

    return window.gsap.timeline(triggerConfig);
  }

  function initAusgangslageWidget() {
    var widget = document.querySelector('[data-ausgangslage-widget]');

    if (!widget) {
      return;
    }

    if (prefersReduced || !window.gsap) {
      setAusgangslageFinal();
      return;
    }

    var type = widget.dataset.ausgangslageWidget;
    var timeline = createAusgangslageTimeline(widget);

    if (type === 'website-erstellen-lassen') {
      timeline
        .from(widget.querySelectorAll('.aus-source'), { y: 12, opacity: 0, duration: 0.42, stagger: 0.09, ease: 'power2.out' })
        .from(widget.querySelector('.aus-old-site'), { x: -16, opacity: 0, duration: 0.5, ease: 'power2.out' }, '-=0.05')
        .from(widget.querySelector('.aus-compare'), { scale: 0.75, opacity: 0, duration: 0.32, ease: 'back.out(1.6)' }, '-=0.12')
        .from(widget.querySelector('.aus-competitor'), { x: 16, opacity: 0, duration: 0.5, ease: 'power2.out' }, '-=0.08')
        .from(widget.querySelector('.aus-warning'), { y: 12, opacity: 0, duration: 0.45, ease: 'power2.out' }, '-=0.05');
    } else if (type === 'website-optimierung') {
      var gauge = widget.querySelector('.aus-gauge');
      var needle = widget.querySelector('.aus-needle');
      var length = gauge ? parseFloat(gauge.getAttribute('stroke-dasharray')) || 126 : 126;

      if (gauge) {
        timeline.fromTo(gauge, { strokeDashoffset: length }, { strokeDashoffset: length * 0.66, duration: 1.05, ease: 'power2.out' }, 0);
      }

      if (needle) {
        timeline.fromTo(needle, { rotate: -90 }, { rotate: -28.8, duration: 1.05, ease: 'power2.out' }, 0);
      }

      widget.querySelectorAll('.aus-count[data-target]').forEach(function (count, i) {
        animateAusgangslageCount(count, timeline, i === 0 ? 0 : 0.18 + i * 0.1);
      });

      timeline.from(widget.querySelectorAll('.aus-metric'), { y: 12, opacity: 0, duration: 0.45, stagger: 0.09, ease: 'power2.out' }, 0.18);
    } else if (type === 'seo') {
      timeline
        .from(widget.querySelectorAll('.aus-result:not(.aus-own-result)'), { y: 14, opacity: 0, duration: 0.42, stagger: 0.1, ease: 'power2.out' })
        .from(widget.querySelector('.aus-own-result'), { y: -22, opacity: 0, duration: 0.62, ease: 'back.out(1.4)' }, '+=0.05');
    } else if (type === 'google-ads') {
      timeline.from(widget.querySelectorAll('.aus-kpi'), { y: 14, opacity: 0, duration: 0.48, stagger: 0.11, ease: 'power2.out' });

      widget.querySelectorAll('.aus-count[data-target]').forEach(function (count, i) {
        animateAusgangslageCount(count, timeline, 0.1 + i * 0.12);
      });

      timeline.to(widget.querySelector('.aus-cost'), { borderColor: 'rgba(224,160,77,0.9)', backgroundColor: 'rgba(224,160,77,0.18)', duration: 0.35, yoyo: true, repeat: 1 }, '+=0.05');
    } else if (type === 'mehr-anfragen') {
      var split = widget.querySelector('.aus-split-fill');

      if (split) {
        timeline.fromTo(split, { scaleX: 0, transformOrigin: 'left center' }, { scaleX: 1, duration: 1.05, ease: 'power2.out' }, 0);
      }

      widget.querySelectorAll('.aus-count[data-target]').forEach(function (count) {
        animateAusgangslageCount(count, timeline, 0);
      });
    } else if (type === 'website-analyse') {
      timeline
        .from(widget.querySelector('.aus-missing-badge'), { y: 10, opacity: 0, duration: 0.42, ease: 'power2.out' })
        .from(widget.querySelectorAll('.aus-dashboard-card'), { y: 16, opacity: 0, duration: 0.48, stagger: 0.1, ease: 'power2.out' }, '-=0.1')
        .to(widget.querySelectorAll('.aus-question'), { opacity: 0.35, duration: 0.45, yoyo: true, repeat: 3, stagger: 0.08, ease: 'power1.inOut' }, '-=0.05');
    }
  }

  var revealBound = false;

  function checkReveal() {
    var vh = window.innerHeight || document.documentElement.clientHeight;

    document.querySelectorAll('[data-reveal]:not(.is-in)').forEach(function (el) {
      var rect = el.getBoundingClientRect();

      if (rect.top < vh * 0.9 && rect.bottom > 0) {
        el.classList.add('is-in');
      }
    });
  }

  function setStagger() {
    document.querySelectorAll('[data-reveal]').forEach(function (el) {
      var siblings = el.parentElement
        ? el.parentElement.querySelectorAll(':scope > [data-reveal]')
        : [el];
      var idx = Array.prototype.indexOf.call(siblings, el);

      el.style.transitionDelay = idx > 0 ? Math.min(idx * 0.08, 0.4) + 's' : '0s';
    });
  }

  function initAnimations() {
    if (!revealBound) {
      window.addEventListener('scroll', checkReveal, { passive: true });
      window.addEventListener('resize', checkReveal);
      revealBound = true;
    }

    if (prefersReduced) {
      setHeroFinal();
      setAusgangslageFinal();
      return;
    }

    requestAnimationFrame(function (t1) {
      requestAnimationFrame(function (t2) {
        if ((t2 - t1) > 0.4) {
          document.documentElement.classList.add('anim');
          setStagger();
          checkReveal();
          requestAnimationFrame(checkReveal);
          animateHeroMetrics();
          animateHeroWidgets();
          initAusgangslageWidget();
        }
      });
    });
  }

  function boot() {
    initAccordion();
    initAnimations();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
