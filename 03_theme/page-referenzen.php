<?php
/**
 * Template for the page slug /referenzen/.
 */

$referenzen = [
    [
        'domain'       => 'kopp-umwelt.de',
        'url'          => 'https://kopp-umwelt.de',
        'image'        => 'KOPP-Umwelt_Website_Referenz_AgenturJG.webp',
        'image_alt'    => __('Screenshot der KOPP Umwelt Website', 'agentur-jg-theme'),
        'branche'      => __('Entsorgung & Containerdienst', 'agentur-jg-theme'),
        'ort'          => __('Heidenrod-Kemel', 'agentur-jg-theme'),
        'name'         => __('KOPP Umwelt', 'agentur-jg-theme'),
        'intro'        => __('Aus einer veralteten Website wurde eine digitale Plattform für Buchungen, Bestandskunden, Sichtbarkeit und Recruiting.', 'agentur-jg-theme'),
        'tags'         => [
            __('Shop integriert', 'agentur-jg-theme'),
            __('SEO & Google Ads', 'agentur-jg-theme'),
            __('Kundenportal angebunden', 'agentur-jg-theme'),
            __('Recruiting unterstützt', 'agentur-jg-theme'),
        ],
        'ausgangslage' => __('Die bisherige Website war einfach aufgebaut, gestalterisch veraltet und bildete die heutigen Anforderungen des Unternehmens nicht mehr ab.', 'agentur-jg-theme'),
        'umsetzung'    => __('Integration eines Shops für Containerdienstleistungen, Anbindung des Kundenportals, Aufbau von SEO- und Google-Ads-Maßnahmen sowie Veröffentlichung optimierter Stellenanzeigen.', 'agentur-jg-theme'),
        'wirkung'      => __('Containerleistungen wurden direkt über die Website buchbar - ohne Telefonat, ohne manuellen Aufwand. Offene Stellen wurden binnen weniger Wochen über die neue Online-Präsenz besetzt. SEO-Inhalte beantworten häufige Fragen bereits vor dem ersten Kontakt.', 'agentur-jg-theme'),
    ],
    [
        'domain'       => 'max-kfz.de',
        'url'          => 'https://max-kfz.de',
        'image'        => 'MAX-KFZ_Website_Referenz_AgenturJG.webp',
        'image_alt'    => __('Screenshot der Max KFZ Website', 'agentur-jg-theme'),
        'branche'      => __('KFZ-Werkstatt', 'agentur-jg-theme'),
        'ort'          => __('Holzhausen a.d. Haide', 'agentur-jg-theme'),
        'name'         => __('Max KFZ', 'agentur-jg-theme'),
        'intro'        => __('Zum Start der neuen Werkstatt entstand eine Website, die Vertrauen aufbaut, Kontaktwege bündelt und Terminbuchungen vorbereitet.', 'agentur-jg-theme'),
        'tags'         => [
            __('Neue Website', 'agentur-jg-theme'),
            __('Zielgruppenanalyse', 'agentur-jg-theme'),
            __('WhatsApp eingebunden', 'agentur-jg-theme'),
            __('Terminbuchung vorbereitet', 'agentur-jg-theme'),
        ],
        'ausgangslage' => __('Max brauchte für seine neue KFZ-Werkstatt eine professionelle digitale Grundlage, die zum Budget und zur lokalen Zielgruppe passt.', 'agentur-jg-theme'),
        'umsetzung'    => __('Analyse der Zielgruppe, Aufbau einer maßgeschneiderten Website und Bündelung wichtiger Kontakt- und Vertrauenskanäle wie WhatsApp und Terminbuchung.', 'agentur-jg-theme'),
        'wirkung'      => __('Die neue Werkstatt hatte von Anfang an einen professionellen digitalen Auftritt. Interessenten finden schnell, was sie brauchen, und kommen bereits gut informiert in das erste Gespräch.', 'agentur-jg-theme'),
    ],
];

get_header();
?>

<main class="pt-[76px]">
    <section class="relative isolate overflow-hidden border-b border-[rgba(26,34,56,0.10)] bg-white">
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(26,34,56,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(26,34,56,0.055)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_70%_25%,#000,transparent_72%)]"></div>

        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="max-w-3xl">
                <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                    <?php esc_html_e('Referenzen', 'agentur-jg-theme'); ?>
                </p>

                <h1 class="text-[clamp(2.35rem,5vw,4.1rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-[#1A2238]">
                    <?php esc_html_e('Projekte, die zeigen, wie digitale Sichtbarkeit entsteht.', 'agentur-jg-theme'); ?>
                </h1>

                <p class="mt-7 max-w-2xl text-lg leading-8 text-[#51607C]">
                    <?php esc_html_e('Manchmal geht es darum, eine bestehende Website zu einem digitalen Vertriebs- und Recruiting-Werkzeug auszubauen. Manchmal darum, für ein neues Unternehmen von Anfang an eine solide Grundlage zu schaffen.', 'agentur-jg-theme'); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F6F8FA]">
        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="grid gap-9">
                <?php foreach ($referenzen as $referenz) : ?>
                    <article class="overflow-hidden rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_18px_50px_rgba(20,26,43,0.08)]">
                        <div class="border-b border-[rgba(26,34,56,0.10)] bg-[#EDEFF3] p-4 sm:p-6 lg:p-7">
                            <div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-sm">
                                <div class="flex h-11 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-4">
                                    <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                                    <span class="ml-auto rounded-md border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] text-[#51607C] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                        <?php echo esc_html($referenz['domain']); ?>
                                    </span>
                                </div>
                                <img class="aspect-[16/9] w-full object-cover object-top" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $referenz['image']); ?>" alt="<?php echo esc_attr($referenz['image_alt']); ?>">
                            </div>
                        </div>

                        <div class="grid gap-8 p-5 sm:p-7 lg:grid-cols-[0.75fr_1.25fr] lg:p-9">
                            <div>
                                <div class="flex flex-wrap items-center gap-3">
                                    <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php echo esc_html($referenz['branche']); ?></span>
                                    <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php echo esc_html($referenz['ort']); ?></span>
                                </div>
                                <h3 class="mt-5 text-[clamp(1.65rem,2.8vw,2.35rem)] font-bold leading-tight tracking-[-0.03em] text-[#1A2238]"><?php echo esc_html($referenz['name']); ?></h3>
                                <p class="mt-4 text-lg leading-8 text-[#51607C]">
                                    <?php echo esc_html($referenz['intro']); ?>
                                </p>

                                <div class="mt-7 flex flex-wrap gap-2">
                                    <?php foreach ($referenz['tags'] as $tag) : ?>
                                        <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php echo esc_html($tag); ?></span>
                                    <?php endforeach; ?>
                                </div>

                                <a class="mt-7 inline-flex items-center justify-center rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white px-5 py-3 text-sm font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-[#F6F8FA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url($referenz['url']); ?>" target="_blank" rel="nofollow noopener noreferrer">
                                    <?php esc_html_e('Jetzt live ansehen', 'agentur-jg-theme'); ?>
                                </a>
                            </div>

                            <div class="grid gap-5">
                                <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Ausgangslage', 'agentur-jg-theme'); ?></h4>
                                    <p class="text-base leading-7 text-[#51607C]"><?php echo esc_html($referenz['ausgangslage']); ?></p>
                                </div>
                                <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Umsetzung', 'agentur-jg-theme'); ?></h4>
                                    <p class="text-base leading-7 text-[#51607C]"><?php echo esc_html($referenz['umsetzung']); ?></p>
                                </div>
                                <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                                    <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Wirkung', 'agentur-jg-theme'); ?></h4>
                                    <p class="text-base leading-7 text-[#51607C]"><?php echo esc_html($referenz['wirkung']); ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="mx-auto mt-12 max-w-3xl text-center">
                <p class="text-lg leading-8 text-[#51607C]">
                    <?php esc_html_e('Nicht jedes Projekt braucht denselben Umfang. Wichtig ist, dass Website, Zielgruppe und nächster Schritt zusammenpassen.', 'agentur-jg-theme'); ?>
                </p>
                <div class="mt-7">
                    <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                        <?php esc_html_e('Eigenes Projekt besprechen', 'agentur-jg-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
