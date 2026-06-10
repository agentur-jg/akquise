<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-slate-950 antialiased'); ?>>
<?php wp_body_open(); ?>

<header class="site-header" data-site-header>
    <div class="site-header__inner">
        <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Agentur JG Startseite', 'agentur-jg-theme'); ?>">
            <img
                class="site-brand__mark"
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/AgenturJG_Logo-Initialien.png'); ?>"
                alt=""
                width="1254"
                height="1254"
                aria-hidden="true"
            >
            <span class="site-brand__text">
                <span class="site-brand__name"><?php esc_html_e('Agentur JG', 'agentur-jg-theme'); ?></span>
                <span class="site-brand__subline"><?php esc_html_e('Strategisches Onlinemarketing', 'agentur-jg-theme'); ?></span>
            </span>
        </a>

        <nav class="site-nav" aria-label="<?php esc_attr_e('Hauptnavigation', 'agentur-jg-theme'); ?>">
            <a href="<?php echo esc_url(home_url('/#leistungen')); ?>"><?php esc_html_e('Leistungen', 'agentur-jg-theme'); ?></a>
            <a href="<?php echo esc_url(home_url('/#methode')); ?>"><?php esc_html_e('Ablauf', 'agentur-jg-theme'); ?></a>
            <a href="<?php echo esc_url(home_url('/#referenzen')); ?>"><?php esc_html_e('Referenzen', 'agentur-jg-theme'); ?></a>
            <a href="<?php echo esc_url(home_url('/#ueber-jona')); ?>"><?php esc_html_e('Über mich', 'agentur-jg-theme'); ?></a>
        </nav>

        <div class="site-header__actions">
            <a class="site-header__cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
            </a>
            <button
                class="site-menu-toggle"
                type="button"
                aria-label="<?php esc_attr_e('Menü öffnen', 'agentur-jg-theme'); ?>"
                aria-controls="site-mobile-nav"
                aria-expanded="false"
                data-menu-toggle
            >
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <line x1="4" y1="7" x2="20" y2="7"></line>
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="17" x2="20" y2="17"></line>
                </svg>
            </button>
        </div>
    </div>

    <nav id="site-mobile-nav" class="site-mobile-nav" aria-label="<?php esc_attr_e('Mobile Navigation', 'agentur-jg-theme'); ?>" hidden data-mobile-nav>
        <a href="<?php echo esc_url(home_url('/#leistungen')); ?>"><?php esc_html_e('Leistungen', 'agentur-jg-theme'); ?></a>
        <a href="<?php echo esc_url(home_url('/#methode')); ?>"><?php esc_html_e('Ablauf', 'agentur-jg-theme'); ?></a>
        <a href="<?php echo esc_url(home_url('/#referenzen')); ?>"><?php esc_html_e('Referenzen', 'agentur-jg-theme'); ?></a>
        <a href="<?php echo esc_url(home_url('/#ueber-jona')); ?>"><?php esc_html_e('Über mich', 'agentur-jg-theme'); ?></a>
        <a class="site-mobile-nav__cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
            <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
        </a>
    </nav>
</header>

<main id="content">
