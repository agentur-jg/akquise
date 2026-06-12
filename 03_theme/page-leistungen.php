<?php
/*
Template Name: Leistungen Übersicht
*/

$leistungen = [
    [
        'slug' => 'website-erstellen-lassen',
        'label' => 'Website erstellen lassen',
        'description' => 'Professioneller Webauftritt, der erklärt, überzeugt und Anfragen gewinnt.',
        'icon' => 'website',
    ],
    [
        'slug' => 'website-optimierung',
        'label' => 'Website-Optimierung',
        'description' => 'Bestehende Website verbessern, statt von vorne anfangen.',
        'icon' => 'optimize',
    ],
    [
        'slug' => 'seo',
        'label' => 'SEO',
        'description' => 'Sichtbar werden, wenn Kunden aktiv nach Ihren Leistungen suchen.',
        'icon' => 'search',
    ],
    [
        'slug' => 'google-ads',
        'label' => 'Google Ads',
        'description' => 'Sofortige Sichtbarkeit für messbare Kampagnen mit klarem ROI.',
        'icon' => 'ads',
    ],
    [
        'slug' => 'mehr-anfragen',
        'label' => 'Mehr Anfragen aus Ihrer Website',
        'description' => 'Besucher in Anfragen umwandeln - nicht nur Traffic steigern.',
        'icon' => 'conversion',
    ],
    [
        'slug' => 'website-analyse',
        'label' => 'Website-Analyse & Tracking',
        'description' => 'Verstehen, was auf Ihrer Website wirklich funktioniert.',
        'icon' => 'tracking',
    ],
];

if (! function_exists('agentur_jg_leistung_icon')) {
    function agentur_jg_leistung_icon(string $icon): void
    {
        $icons = [
            'website' => '<rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M3 9h18"></path><path d="M7 15h5"></path>',
            'optimize' => '<path d="M4 19V5"></path><path d="M4 15h8"></path><path d="M12 15a4 4 0 1 0 0-8H4"></path><path d="m17 16 3 3"></path>',
            'search' => '<circle cx="10.5" cy="10.5" r="5.5"></circle><path d="m15 15 5 5"></path><path d="M8 10.5h5"></path>',
            'ads' => '<path d="M4 19 11 5h2l7 14"></path><path d="M7.5 14h9"></path><path d="M9 19h6"></path>',
            'conversion' => '<path d="M4 7h9"></path><path d="m10 4 3 3-3 3"></path><path d="M20 17h-9"></path><path d="m14 14-3 3 3 3"></path><circle cx="7" cy="17" r="2"></circle><circle cx="17" cy="7" r="2"></circle>',
            'tracking' => '<path d="M4 19V5"></path><path d="M4 19h16"></path><path d="M8 15v-4"></path><path d="M12 15V8"></path><path d="M16 15v-6"></path>',
        ];

        echo '<svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
        echo $icons[$icon] ?? $icons['website'];
        echo '</svg>';
    }
}

get_header();
?>

<div class="pt-[76px]">
    <section class="relative isolate overflow-hidden border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(26,34,56,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(26,34,56,0.055)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_70%_25%,#000,transparent_72%)]"></div>

        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="max-w-3xl">
                <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                    <?php esc_html_e('Leistungsangebot', 'agentur-jg-theme'); ?>
                </p>

                <h1 class="text-[clamp(2.35rem,5vw,4rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-[#1A2238]">
                    <?php esc_html_e('Leistungen', 'agentur-jg-theme'); ?>
                </h1>

                <p class="mt-7 max-w-2xl text-lg leading-8 text-[#51607C]">
                    <?php esc_html_e('Online-Marketing funktioniert selten als Einzelgewerk. Website, Sichtbarkeit, Kampagnen, Conversion und Tracking müssen zusammenarbeiten, damit aus Besuchern passende Anfragen werden.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-4 max-w-2xl text-lg leading-8 text-[#51607C]">
                    <?php esc_html_e('Deshalb entwickelt Agentur JG Leistungen als aufeinander abgestimmtes System - passend zur Ausgangslage, zum Budget und zum nächsten sinnvollen Schritt.', 'agentur-jg-theme'); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($leistungen as $leistung) : ?>
                    <a href="<?php echo esc_url(home_url('/leistungen/' . $leistung['slug'] . '/')); ?>"
                       class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#3D5A80]">
                        <span class="flex h-12 w-12 items-center justify-center rounded-[12px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.10)] transition group-hover:bg-white group-hover:ring-[rgba(61,90,128,0.28)]">
                            <?php agentur_jg_leistung_icon($leistung['icon']); ?>
                        </span>
                        <h2 class="mt-6 text-xl font-bold tracking-[-0.02em] text-[#1A2238]">
                            <?php echo esc_html($leistung['label']); ?>
                        </h2>
                        <p class="mt-3 text-base leading-7 text-[#51607C]">
                            <?php echo esc_html($leistung['description']); ?>
                        </p>
                        <span class="mt-6 inline-flex items-center text-sm font-semibold text-[#3D5A80]">
                            <?php esc_html_e('Mehr erfahren', 'agentur-jg-theme'); ?>
                            <span class="ml-2 transition group-hover:translate-x-1" aria-hidden="true">-&gt;</span>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="border-y border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-20">
            <div class="max-w-3xl">
                <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                    <?php esc_html_e('Zusammenspiel', 'agentur-jg-theme'); ?>
                </p>
                <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                    <?php esc_html_e('Einzelne Maßnahmen bringen mehr, wenn sie in dieselbe Richtung arbeiten.', 'agentur-jg-theme'); ?>
                </h2>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-3">
                <div class="border-l-2 border-[#3D5A80] bg-white px-6 py-6">
                    <h3 class="text-lg font-bold text-[#1A2238]"><?php esc_html_e('Klar erklären', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]"><?php esc_html_e('Ihre Website macht verständlich, wofür Sie stehen und warum Kunden Ihnen vertrauen können.', 'agentur-jg-theme'); ?></p>
                </div>
                <div class="border-l-2 border-[#3D5A80] bg-white px-6 py-6">
                    <h3 class="text-lg font-bold text-[#1A2238]"><?php esc_html_e('Gezielt sichtbar werden', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]"><?php esc_html_e('SEO und Ads bringen passende Menschen auf die richtigen Seiten - nicht einfach nur mehr Traffic.', 'agentur-jg-theme'); ?></p>
                </div>
                <div class="border-l-2 border-[#3D5A80] bg-white px-6 py-6">
                    <h3 class="text-lg font-bold text-[#1A2238]"><?php esc_html_e('Messbar verbessern', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]"><?php esc_html_e('Tracking und Conversion-Optimierung zeigen, was funktioniert und wo der nächste Hebel liegt.', 'agentur-jg-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#1A2238]">
        <div class="mx-auto flex max-w-[1200px] flex-col gap-8 px-5 py-14 sm:px-8 lg:flex-row lg:items-center lg:justify-between lg:px-10">
            <div class="max-w-2xl">
                <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#98C1D9] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                    <?php esc_html_e('Nächster Schritt', 'agentur-jg-theme'); ?>
                </p>
                <h2 class="mt-4 text-[clamp(1.8rem,3vw,2.6rem)] font-bold leading-tight tracking-[-0.03em] text-white">
                    <?php esc_html_e('Nicht sicher, was Sie brauchen?', 'agentur-jg-theme'); ?>
                </h2>
                <p class="mt-4 text-base leading-7 text-[#D8E1EC]">
                    <?php esc_html_e('Schildern Sie kurz Ihre Ausgangslage. Ich sage Ihnen ehrlich, welcher Schritt sinnvoll ist - und welcher nicht.', 'agentur-jg-theme'); ?>
                </p>
            </div>
            <a class="inline-flex items-center justify-center rounded-[10px] bg-white px-6 py-4 text-base font-semibold text-[#1A2238] shadow-sm transition hover:-translate-y-px hover:bg-[#F6F8FA] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                <?php esc_html_e('Termin buchen', 'agentur-jg-theme'); ?>
            </a>
        </div>
    </section>
</div>

<?php get_footer(); ?>
