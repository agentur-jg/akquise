<?php
/**
 * Theme setup and assets.
 */

if (! defined('ABSPATH')) {
    exit;
}

define('AGENTUR_JG_GTM_CONTAINER_ID', 'GTM-WH6T9TKC');

function agentur_jg_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'agentur-jg-theme'),
    ]);
}
add_action('after_setup_theme', 'agentur_jg_theme_setup');

function agentur_jg_theme_assets(): void
{
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    $css_path = $theme_dir . '/assets/css/main.css';
    $js_path = $theme_dir . '/assets/js/main.js';

    wp_enqueue_style(
        'agentur-jg-theme-main',
        $theme_uri . '/assets/css/main.css',
        [],
        file_exists($css_path) ? filemtime($css_path) : '1.0.0'
    );

    wp_enqueue_script(
        'agentur-jg-theme-main',
        $theme_uri . '/assets/js/main.js',
        [],
        file_exists($js_path) ? filemtime($js_path) : '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'agentur_jg_theme_assets');

function agentur_jg_google_consent_mode(): void
{
    ?>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}

        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied',
            'functionality_storage': 'denied',
            'personalization_storage': 'denied',
            'security_storage': 'granted',
            'wait_for_update': 500
        });

        window.agenturJgLoadGoogleTagManager = function() {
            var containerId = <?php echo wp_json_encode(AGENTUR_JG_GTM_CONTAINER_ID); ?>;

            if (window.agenturJgGoogleTagManagerLoaded) {
                return;
            }

            window.agenturJgGoogleTagManagerLoaded = true;
            window.dataLayer.push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });

            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtm.js?id=' + encodeURIComponent(containerId);
            document.head.appendChild(script);
        };

        window.agenturJgGrantGoogleAnalytics = function() {
            gtag('consent', 'update', {
                'analytics_storage': 'granted',
                'functionality_storage': 'granted',
                'security_storage': 'granted'
            });

            window.dataLayer.push({
                event: 'agentur_jg_consent_google_analytics'
            });
            window.agenturJgLoadGoogleTagManager();
        };

        window.agenturJgGrantGoogleAds = function() {
            gtag('consent', 'update', {
                'ad_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
                'personalization_storage': 'granted'
            });

            window.dataLayer.push({
                event: 'agentur_jg_consent_google_ads'
            });
            window.agenturJgLoadGoogleTagManager();
        };

        window.agenturJgGrantHotjar = function() {
            window.dataLayer.push({
                event: 'agentur_jg_consent_hotjar'
            });
            window.agenturJgLoadGoogleTagManager();
        };

        window.agenturJgLoadGoogleTagManager();
    </script>
    <?php
}
add_action('wp_head', 'agentur_jg_google_consent_mode', 1);

function agentur_jg_prive_consent_scripts(): void
{
    ?>
    <style>
        #cc-main {
            --cc-bg: #151b1f;
            --cc-primary-color: #f6f8fa;
            --cc-secondary-color: #e1e7ef;
            --cc-btn-primary-bg: #f6f8fa;
            --cc-btn-primary-color: #111820;
            --cc-btn-primary-border-color: #f6f8fa;
            --cc-btn-primary-hover-bg: #ffffff;
            --cc-btn-primary-hover-color: #111820;
            --cc-btn-primary-hover-border-color: #ffffff;
            --cc-btn-secondary-bg: #f6f8fa;
            --cc-btn-secondary-color: #111820;
            --cc-btn-secondary-border-color: #f6f8fa;
            --cc-btn-secondary-hover-bg: #ffffff;
            --cc-btn-secondary-hover-color: #111820;
            --cc-btn-secondary-hover-border-color: #ffffff;
            --cc-toggle-on-bg: #98c1d9;
            --cc-toggle-off-bg: #4a5561;
            --cc-toggle-on-knob-bg: #111820;
            --cc-toggle-off-knob-bg: #111820;
            --cc-separator-border-color: rgba(246, 248, 250, 0.2);
            color-scheme: dark;
        }

        #cc-main .cm__btn,
        #cc-main .pm__btn,
        #cc-main button {
            min-height: 48px !important;
            border: 2px solid #f6f8fa !important;
            background: #f6f8fa !important;
            color: #111820 !important;
            font-weight: 700 !important;
            text-decoration: none !important;
        }

        #cc-main .cm__btn:hover,
        #cc-main .pm__btn:hover,
        #cc-main button:hover {
            background: #ffffff !important;
            color: #111820 !important;
            border-color: #ffffff !important;
        }

        #cc-main a {
            color: #ffffff !important;
            text-decoration-thickness: 2px !important;
            text-underline-offset: 0.18em !important;
        }

        #cc-main :focus-visible {
            outline: 3px solid #98c1d9 !important;
            outline-offset: 3px !important;
        }
    </style>
    <script type="text/plain" data-cookiecategory="Google Analytics">
        window.agenturJgGrantGoogleAnalytics();
    </script>
    <script type="text/plain" data-cookiecategory="Hotjar">
        window.agenturJgGrantHotjar();
    </script>
    <script>
        (function() {
            var methods = ['debug', 'info', 'log'];
            var ignoredPrefixes = ['CookieConsent [', 'accepted cookies:'];

            methods.forEach(function(method) {
                var original = window.console && window.console[method];

                if (typeof original !== 'function') {
                    return;
                }

                window.console[method] = function() {
                    var firstArg = arguments[0];

                    if (typeof firstArg === 'string') {
                        for (var i = 0; i < ignoredPrefixes.length; i++) {
                            if (firstArg.indexOf(ignoredPrefixes[i]) === 0) {
                                return;
                            }
                        }
                    }

                    return original.apply(this, arguments);
                };
            });
        })();
    </script>
    <script src="https://app.prive.eu/consent"
            data-cc-tools="Google Analytics,Hotjar"
            data-cc-privacy="<?php echo esc_url(home_url('/datenschutz/')); ?>"
            data-cc-imprint="<?php echo esc_url(home_url('/impressum/')); ?>"
            data-cc-color="#F6F8FA"
            data-cc-theme="dark"
            data-cc-language="de"
            data-cc-non-eu-consent="true">
    </script>
    <?php
}
add_action('wp_footer', 'agentur_jg_prive_consent_scripts', 100);

function agentur_jg_prive_accessibility_fallback(): void
{
    ?>
    <script>
        (function() {
            var css = [
                '#cc-main{--cc-btn-primary-bg:#f6f8fa!important;--cc-btn-primary-color:#111820!important;--cc-btn-secondary-bg:#f6f8fa!important;--cc-btn-secondary-color:#111820!important;--cc-toggle-on-bg:#98c1d9!important;}',
                '#cc-main .cm__btn,#cc-main .pm__btn,#cc-main button,.cc-window button,.cc-banner button,.cookie-consent button,[class*="cookie"] button,[class*="consent"] button{min-height:48px!important;border:2px solid #f6f8fa!important;background:#f6f8fa!important;color:#111820!important;font-weight:700!important;text-decoration:none!important;}',
                '#cc-main .cm__btn:hover,#cc-main .pm__btn:hover,#cc-main button:hover,.cc-window button:hover,.cc-banner button:hover,.cookie-consent button:hover,[class*="cookie"] button:hover,[class*="consent"] button:hover{background:#fff!important;color:#111820!important;border-color:#fff!important;}',
                '#cc-main a,.cc-window a,.cc-banner a,.cookie-consent a,[class*="cookie"] a,[class*="consent"] a{color:#fff!important;text-decoration-thickness:2px!important;text-underline-offset:.18em!important;}',
                '#cc-main :focus-visible,.cc-window :focus-visible,.cc-banner :focus-visible,.cookie-consent :focus-visible,[class*="cookie"] :focus-visible,[class*="consent"] :focus-visible{outline:3px solid #98c1d9!important;outline-offset:3px!important;}'
            ].join('');

            function addStyle(root) {
                if (!root || root.querySelector && root.querySelector('#agentur-jg-prive-a11y')) {
                    return;
                }

                var style = document.createElement('style');
                style.id = 'agentur-jg-prive-a11y';
                style.textContent = css;
                (root.head || root).appendChild(style);
            }

            function applyStyles() {
                addStyle(document);

                document.querySelectorAll('*').forEach(function(element) {
                    if (element.shadowRoot) {
                        addStyle(element.shadowRoot);
                    }
                });
            }

            applyStyles();
            window.setTimeout(applyStyles, 250);
            window.setTimeout(applyStyles, 1000);

            if ('MutationObserver' in window) {
                new MutationObserver(applyStyles).observe(document.documentElement, {
                    childList: true,
                    subtree: true
                });
            }
        })();
    </script>
    <?php
}
add_action('wp_footer', 'agentur_jg_prive_accessibility_fallback', 101);

function agentur_jg_local_business_schema(): void
{
    if (! is_front_page()) {
        return;
    }

    $home_url = home_url('/');

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => ['LocalBusiness', 'ProfessionalService'],
        '@id' => $home_url . '#business',
        'name' => 'Agentur JG',
        'url' => $home_url,
        'telephone' => '+491777091573',
        'description' => 'Webdesign & Online-Marketing für kleine und mittelständische Unternehmen.',
        'priceRange' => '€€',
        'areaServed' => [
            [
                '@type' => 'AdministrativeArea',
                'name' => 'Rhein-Lahn-Kreis',
            ],
            [
                '@type' => 'City',
                'name' => 'Katzenelnbogen',
            ],
            [
                '@type' => 'City',
                'name' => 'Koblenz',
            ],
            [
                '@type' => 'City',
                'name' => 'Limburg an der Lahn',
            ],
        ],
        'makesOffer' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Website-Erstellung',
                ],
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Website-Optimierung',
                ],
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'SEO und lokale Sichtbarkeit',
                ],
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Google Ads',
                ],
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Conversion-Optimierung für mehr Anfragen',
                ],
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Website-Analyse und Tracking',
                ],
            ],
        ],
    ];

    printf(
        '<script type="application/ld+json">%s</script>' . "\n",
        wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
    );
}
add_action('wp_head', 'agentur_jg_local_business_schema', 30);

function agentur_jg_disable_rank_math_front_page_schema(array $data): array
{
    if (is_front_page()) {
        return [];
    }

    return $data;
}
add_filter('rank_math/json_ld', 'agentur_jg_disable_rank_math_front_page_schema', 99);

function agentur_jg_private_asset_rewrite(): void
{
    add_rewrite_rule(
        '^agentur-jg-private/jona-portrait/?$',
        'index.php?agentur_jg_private_asset=jona_portrait',
        'top'
    );
}
add_action('init', 'agentur_jg_private_asset_rewrite');

function agentur_jg_private_asset_query_vars(array $vars): array
{
    $vars[] = 'agentur_jg_private_asset';

    return $vars;
}
add_filter('query_vars', 'agentur_jg_private_asset_query_vars');

function agentur_jg_private_asset_flush_rewrites(): void
{
    agentur_jg_private_asset_rewrite();
    flush_rewrite_rules(false);
}
add_action('after_switch_theme', 'agentur_jg_private_asset_flush_rewrites');

function agentur_jg_private_asset_maybe_flush_rewrites(): void
{
    $rewrite_version = '20260605-private-assets-v1';

    if (get_option('agentur_jg_rewrite_version') === $rewrite_version) {
        return;
    }

    agentur_jg_private_asset_flush_rewrites();
    update_option('agentur_jg_rewrite_version', $rewrite_version);
}
add_action('init', 'agentur_jg_private_asset_maybe_flush_rewrites', 20);

function agentur_jg_private_asset_request_is_allowed(): bool
{
    if (empty($_SERVER['HTTP_REFERER'])) {
        return false;
    }

    $referer_host = parse_url((string) $_SERVER['HTTP_REFERER'], PHP_URL_HOST);
    $site_host = parse_url(home_url('/'), PHP_URL_HOST);
    $request_host = parse_url('//' . (string) ($_SERVER['HTTP_HOST'] ?? ''), PHP_URL_HOST);

    if (! is_string($referer_host)) {
        return false;
    }

    $allowed_hosts = array_filter([$site_host, $request_host], 'is_string');
    $allowed_hosts = array_map('strtolower', $allowed_hosts);

    return in_array(strtolower($referer_host), $allowed_hosts, true);
}

function agentur_jg_private_asset_response(): void
{
    if (get_query_var('agentur_jg_private_asset') !== 'jona_portrait') {
        return;
    }

    $file_path = get_template_directory() . '/assets/images/privat/1cd3194e-5d5e-43dc-8ba4-b8df2339199d.webp';

    if (! agentur_jg_private_asset_request_is_allowed() || ! file_exists($file_path)) {
        status_header(404);
        nocache_headers();
        exit;
    }

    header('Content-Type: image/webp');
    header('X-Robots-Tag: noindex, noimageindex, noarchive');
    header('Cache-Control: private, no-store, no-cache, must-revalidate, max-age=0');
    header('Content-Length: ' . filesize($file_path));

    readfile($file_path);
    exit;
}
add_action('template_redirect', 'agentur_jg_private_asset_response');

function agentur_jg_private_asset_robots(string $output, bool $public): string
{
    $private_assets_path = parse_url(get_theme_file_uri('/assets/images/privat/'), PHP_URL_PATH);
    $private_endpoint_path = parse_url(home_url('/agentur-jg-private/'), PHP_URL_PATH);

    if (! is_string($private_assets_path) || $private_assets_path === '' || ! is_string($private_endpoint_path) || $private_endpoint_path === '') {
        return $output;
    }

    $rules = sprintf(
        "\nUser-agent: *\nDisallow: %s\nDisallow: %s\n",
        trailingslashit($private_assets_path),
        trailingslashit($private_endpoint_path)
    );

    return rtrim($output) . "\n" . $rules;
}
add_filter('robots_txt', 'agentur_jg_private_asset_robots', 10, 2);

/**
 * Contact form handler for /kontakt/.
 * Validates input, sends notification email, then redirects.
 */
function agentur_jg_handle_contact_form(): void
{
    if (empty($_POST['agentur_jg_contact_nonce'])) {
        return;
    }

    if (! wp_verify_nonce($_POST['agentur_jg_contact_nonce'], 'agentur_jg_contact')) {
        wp_die(esc_html__('Sicherheitsüberprüfung fehlgeschlagen. Bitte laden Sie die Seite neu.', 'agentur-jg-theme'));
    }

    $name        = sanitize_text_field($_POST['name'] ?? '');
    $unternehmen = sanitize_text_field($_POST['unternehmen'] ?? '');
    $kontakt     = sanitize_text_field($_POST['kontakt'] ?? '');
    $anliegen    = sanitize_textarea_field($_POST['anliegen'] ?? '');
    $datenschutz = ! empty($_POST['datenschutz']);

    $base_url = home_url('/kontakt/');

    if (empty($name) || empty($kontakt) || empty($anliegen) || ! $datenschutz) {
        $form_token = wp_generate_password(20, false, false);

        set_transient(
            'agentur_jg_contact_form_' . $form_token,
            [
                'name'        => $name,
                'unternehmen' => $unternehmen,
                'kontakt'     => $kontakt,
                'anliegen'    => $anliegen,
                'datenschutz' => $datenschutz,
            ],
            10 * MINUTE_IN_SECONDS
        );

        wp_safe_redirect(
            add_query_arg(
                [
                    'angefragt' => 'fehler',
                    'formular'  => $form_token,
                ],
                $base_url
            )
        );
        exit;
    }

    $subject = sprintf('[Agentur JG] Neue Anfrage von %s', $name);

    $body  = "Name: {$name}\n";
    if ($unternehmen !== '') {
        $body .= "Unternehmen: {$unternehmen}\n";
    }
    $body .= "Kontakt: {$kontakt}\n\n";
    $body .= "Anliegen:\n{$anliegen}\n";

    wp_mail(
        'kontakt@agentur-jg.de',
        $subject,
        $body,
        ['Content-Type: text/plain; charset=UTF-8']
    );

    wp_safe_redirect(add_query_arg('angefragt', '1', $base_url));
    exit;
}
add_action('init', 'agentur_jg_handle_contact_form', 10);

function agentur_jg_seo_config(): array
{
    static $cache = null;

    if ($cache !== null) {
        return $cache;
    }

    if (is_front_page()) {
        $slug = 'home';
    } else {
        $slug = get_post_field('post_name', get_queried_object_id());
    }

    if (empty($slug)) {
        $cache = [];
        return $cache;
    }

    $file = get_template_directory() . '/seo/' . $slug . '.json';

    if (! file_exists($file)) {
        $cache = [];
        return $cache;
    }

    $cache = json_decode(file_get_contents($file), true) ?? [];
    return $cache;
}

add_filter('rank_math/frontend/title', function (string $title): string {
    $config = agentur_jg_seo_config();
    return $config['title'] ?? $title;
});

add_filter('rank_math/frontend/description', function (string $description): string {
    $config = agentur_jg_seo_config();
    return $config['description'] ?? $description;
});

function agentur_jg_faq_schema(): void
{
    if (! is_singular()) {
        return;
    }

    $config = agentur_jg_seo_config();

    if (empty($config['faq']) || ! is_array($config['faq'])) {
        return;
    }

    $questions = [];

    foreach ($config['faq'] as $faq) {
        if (empty($faq['q']) || empty($faq['a'])) {
            continue;
        }

        $questions[] = [
            '@type' => 'Question',
            'name' => wp_strip_all_tags((string) $faq['q']),
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => wp_strip_all_tags((string) $faq['a']),
            ],
        ];
    }

    if ($questions === []) {
        return;
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $questions,
    ];

    printf(
        '<script type="application/ld+json">%s</script>' . "\n",
        wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
    );
}
add_action('wp_head', 'agentur_jg_faq_schema', 31);

function agentur_jg_google_fonts(): void
{
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <?php
}
add_action('wp_head', 'agentur_jg_google_fonts', 2);

function agentur_jg_leistung_page_assets(): void
{
    if (! is_page_template('page-leistung.php')) {
        return;
    }

    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $js_path   = $theme_dir . '/assets/js/leistung-page.js';

    wp_enqueue_script(
        'agentur-jg-gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        [],
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'agentur-jg-leistung-page',
        $theme_uri . '/assets/js/leistung-page.js',
        ['agentur-jg-gsap'],
        file_exists($js_path) ? (string) filemtime($js_path) : '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'agentur_jg_leistung_page_assets');
