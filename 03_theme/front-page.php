<?php
$leistungen = [
    [
        'slug' => 'website-erstellen-lassen',
        'title' => 'Website-Erstellung',
        'description' => 'Eine Website, die Ihr Angebot klar macht, Vertrauen aufbaut und Anfragen vorbereitet.',
        'fit' => 'Sie noch keine professionelle Website haben oder neu starten möchten.',
        'icon' => 'website',
    ],
    [
        'slug' => 'website-optimierung',
        'title' => 'Website-Optimierung',
        'description' => 'Bestehende Seiten gezielt verbessern, damit Struktur, Inhalte und Wirkung wieder passen.',
        'fit' => 'Ihre Website vorhanden ist, aber nicht genug Anfragen oder Vertrauen erzeugt.',
        'icon' => 'optimize',
    ],
    [
        'slug' => 'seo',
        'title' => 'SEO & lokale Sichtbarkeit',
        'description' => 'Gefunden werden, wenn Menschen in Ihrer Region aktiv nach Ihren Leistungen suchen.',
        'fit' => 'Ihre Konkurrenz bei Google sichtbarer ist als Sie.',
        'icon' => 'search',
    ],
    [
        'slug' => 'google-ads',
        'title' => 'Google Ads',
        'description' => 'Gezielte Kampagnen für schnelle Sichtbarkeit, klare Suchintention und messbare Ergebnisse.',
        'fit' => 'Sie schneller passende Besucher auf wichtige Angebotsseiten bringen möchten.',
        'icon' => 'ads',
    ],
    [
        'slug' => 'mehr-anfragen',
        'title' => 'Mehr Anfragen',
        'description' => 'Aus Besuchern passende Kontakte machen - mit besseren Botschaften und klaren Wegen.',
        'fit' => 'genug Besucher kommen, aber zu wenige davon Kontakt aufnehmen.',
        'icon' => 'conversion',
    ],
    [
        'slug' => 'website-analyse',
        'title' => 'Tracking & Auswertung',
        'description' => 'Verstehen, was funktioniert, wo Nutzer abspringen und welcher Schritt als nächstes zählt.',
        'fit' => 'Sie Entscheidungen nicht länger aus dem Bauchgefühl treffen wollen.',
        'icon' => 'tracking',
    ],
];

$orientierung = [
    [
        'label' => 'Referenzen',
        'description' => 'Einblicke in echte Projekte und was daraus entstanden ist.',
        'url' => home_url('/referenzen/'),
    ],
    [
        'label' => 'Über mich',
        'description' => 'Wer hinter Agentur JG steht und wie die Zusammenarbeit gedacht ist.',
        'url' => home_url('/ueber-mich/'),
    ],
    [
        'label' => 'Ablauf',
        'description' => 'Vom ersten Gespräch bis zur laufenden Verbesserung.',
        'url' => home_url('/ablauf/'),
    ],
];

if (! function_exists('agentur_jg_front_page_icon')) {
    function agentur_jg_front_page_icon(string $icon): void
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

<section class="relative isolate overflow-hidden bg-white pt-[76px]">
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(26,34,56,0.045)_1px,transparent_1px),linear-gradient(90deg,rgba(26,34,56,0.045)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_70%_25%,#000,transparent_72%)]"></div>

    <div class="mx-auto grid min-h-[calc(100vh-76px)] max-w-[1200px] items-center gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[1.05fr_0.95fr] lg:px-10 lg:py-20">
        <div class="max-w-3xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Websites & Online-Marketing aus Katzenelnbogen', 'agentur-jg-theme'); ?>
            </p>

            <h1 class="max-w-[11ch] text-[clamp(2.55rem,5.2vw,4.35rem)] font-extrabold leading-[1.02] tracking-[-0.035em] text-[#1A2238]">
                <?php esc_html_e('Ihre Website sollte mehr leisten als nur online zu sein.', 'agentur-jg-theme'); ?>
            </h1>

            <p class="mt-7 max-w-2xl text-[clamp(1.06rem,1.5vw,1.24rem)] leading-8 text-[#51607C]">
                <?php esc_html_e('Ich bin Jona - ich helfe kleinen und mittelständischen Unternehmen dabei, online sichtbar zu werden, die richtigen Menschen auf ihre Website zu bringen und daraus messbar mehr Anfragen, Bewerbungen oder Umsatz zu gewinnen.', 'agentur-jg-theme'); ?>
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
                </a>
                <a class="inline-flex items-center justify-center rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white/70 px-6 py-4 text-base font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/referenzen/')); ?>">
                    <?php esc_html_e('Referenzen ansehen', 'agentur-jg-theme'); ?>
                </a>
            </div>

            <div class="mt-9 flex flex-wrap gap-x-5 gap-y-2 text-sm font-medium text-[#636E89]">
                <span><?php esc_html_e('Persönlich betreut von Jona', 'agentur-jg-theme'); ?></span>
                <span class="hidden text-[#98A8BE] sm:inline" aria-hidden="true">/</span>
                <span><?php esc_html_e('Verständlich erklärt', 'agentur-jg-theme'); ?></span>
                <span class="hidden text-[#98A8BE] sm:inline" aria-hidden="true">/</span>
                <span><?php esc_html_e('Messbar verbessert', 'agentur-jg-theme'); ?></span>
            </div>
        </div>

        <div class="hidden lg:block lg:justify-self-end">
            <div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_18px_50px_rgba(20,26,43,0.14)]">
                <div class="flex h-11 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-4">
                    <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/60"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/60"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/60"></span>
                    <span class="ml-auto rounded-md border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] text-[#51607C] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                        <?php esc_html_e('ihre-website.de', 'agentur-jg-theme'); ?>
                    </span>
                </div>

                <div class="bg-[linear-gradient(135deg,#F6F8FA,#EDEFF3)] p-5 sm:p-6">
                    <div class="grid gap-4 sm:grid-cols-5 sm:items-center">
                        <div class="grid gap-2 sm:col-span-2">
                            <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                <?php esc_html_e('Aufmerksamkeit', 'agentur-jg-theme'); ?>
                            </p>
                            <div class="grid gap-2">
                                <div class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-3 py-3 text-sm font-semibold text-[#1A2238] shadow-sm"><?php esc_html_e('Google', 'agentur-jg-theme'); ?></div>
                                <div class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-3 py-3 text-sm font-semibold text-[#1A2238] shadow-sm"><?php esc_html_e('Empfehlung', 'agentur-jg-theme'); ?></div>
                                <div class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-3 py-3 text-sm font-semibold text-[#1A2238] shadow-sm"><?php esc_html_e('Ads & Social', 'agentur-jg-theme'); ?></div>
                            </div>
                        </div>

                        <div class="hidden justify-center sm:flex" aria-hidden="true">
                            <svg class="h-36 w-14 text-[#98A8BE]" viewBox="0 0 48 112" fill="none">
                                <path d="M8 18h12c12 0 20 8 20 20v36c0 12-8 20-20 20H8" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"></path>
                                <path d="m31 48 9 9-9 9" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>

                        <div class="sm:col-span-2">
                            <div class="rounded-[14px] border border-[rgba(26,34,56,0.12)] bg-white p-5 text-center shadow-sm">
                                <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                    <?php esc_html_e('Ihre Website', 'agentur-jg-theme'); ?>
                                </p>
                                <p class="mt-3 text-2xl font-extrabold tracking-[-0.03em] text-[#1A2238]">
                                    <?php esc_html_e('Verstehen. Vertrauen. Handeln.', 'agentur-jg-theme'); ?>
                                </p>
                                <div class="mt-5 grid gap-2 text-left">
                                    <div class="flex items-center gap-2 rounded-[10px] bg-[#F6F8FA] px-3 py-2 text-sm font-medium text-[#51607C]">
                                        <span class="h-1.5 w-1.5 rounded-sm bg-[#3D5A80]" aria-hidden="true"></span>
                                        <?php esc_html_e('Angebot klar erklärt', 'agentur-jg-theme'); ?>
                                    </div>
                                    <div class="flex items-center gap-2 rounded-[10px] bg-[#F6F8FA] px-3 py-2 text-sm font-medium text-[#51607C]">
                                        <span class="h-1.5 w-1.5 rounded-sm bg-[#3D5A80]" aria-hidden="true"></span>
                                        <?php esc_html_e('Nächster Schritt sichtbar', 'agentur-jg-theme'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] bg-white p-4 sm:grid-cols-3">
                    <div class="rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-4 shadow-sm">
                        <div class="text-2xl font-bold tracking-[-0.02em] text-[#1A2238]"><?php esc_html_e('Anfrage', 'agentur-jg-theme'); ?></div>
                        <div class="mt-1 text-[0.64rem] uppercase tracking-[0.08em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Kunden gewinnen', 'agentur-jg-theme'); ?></div>
                    </div>
                    <div class="rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-4 shadow-sm">
                        <div class="text-2xl font-bold tracking-[-0.02em] text-[#1A2238]"><?php esc_html_e('Bewerbung', 'agentur-jg-theme'); ?></div>
                        <div class="mt-1 text-[0.64rem] uppercase tracking-[0.08em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Team erweitern', 'agentur-jg-theme'); ?></div>
                    </div>
                    <div class="rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-4 shadow-sm">
                        <div class="text-2xl font-bold tracking-[-0.02em] text-[#1A2238]"><?php esc_html_e('Umsatz', 'agentur-jg-theme'); ?></div>
                        <div class="mt-1 text-[0.64rem] uppercase tracking-[0.08em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Wert schaffen', 'agentur-jg-theme'); ?></div>
                    </div>
                </div>
            </div>

            <p class="mt-4 flex items-center gap-2 text-sm text-[#636E89]">
                <span class="h-1.5 w-1.5 rounded-sm bg-[#98A8BE]" aria-hidden="true"></span>
                <?php esc_html_e('Die Website als Mittelpunkt Ihres Online-Marketings', 'agentur-jg-theme'); ?>
            </p>
        </div>
    </div>
</section>

<section class="border-t border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]" data-scroll-statement-section>
    <div class="mx-auto flex min-h-screen max-w-[1200px] items-center px-5 py-24 sm:px-8 lg:px-10">
        <div class="max-w-6xl">
            <h2 class="scroll-reveal text-[clamp(2.55rem,5.2vw,4.35rem)] font-extrabold leading-[1.02] tracking-[-0.035em] text-[#1A2238]" data-scroll-reveal>
                <?php esc_html_e('Sie würden keinen Vertriebsmitarbeiter ohne Ziel, keine Stellenanzeige ohne Rückmeldung und kein Angebot ohne Nachfrage laufen lassen. Warum sollte Ihre Website anders funktionieren?', 'agentur-jg-theme'); ?>
            </h2>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="mx-auto grid max-w-[1200px] gap-8 px-5 py-16 sm:px-8 lg:grid-cols-[0.9fr_1.1fr] lg:px-10 lg:py-24">
        <div>
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Ausgangspunkt', 'agentur-jg-theme'); ?>
            </p>
            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                <?php esc_html_e('Gute Arbeit allein reicht online nicht aus.', 'agentur-jg-theme'); ?>
            </h2>
        </div>

        <div class="text-lg leading-8 text-[#51607C]">
            <p>
                <?php esc_html_e('Viele Unternehmen haben ein starkes Angebot, werden online aber zu spät gefunden, nicht klar genug verstanden oder verlieren passende Interessenten auf dem Weg zur Anfrage.', 'agentur-jg-theme'); ?>
            </p>
            <p class="mt-4">
                <?php esc_html_e('Agentur JG verbindet Website, Sichtbarkeit, Kampagnen und Auswertung zu einem System, das zu Ihrer Ausgangslage passt und messbar besser werden kann.', 'agentur-jg-theme'); ?>
            </p>
            <div class="mt-8 rounded-[14px] border border-[rgba(61,90,128,0.18)] bg-[#F6F8FA] p-5">
                <p class="text-base font-semibold leading-7 text-[#1A2238]">
                    <?php esc_html_e('Der schnellste Einstieg: schauen Sie, welche Leistung gerade zu Ihrem nächsten Engpass passt.', 'agentur-jg-theme'); ?>
                </p>
                <a class="mt-4 inline-flex items-center text-sm font-semibold text-[#3D5A80]" href="<?php echo esc_url(home_url('/leistungen/')); ?>">
                    <?php esc_html_e('Alle Leistungen ansehen', 'agentur-jg-theme'); ?>
                    <span class="ml-2" aria-hidden="true">-&gt;</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="leistungen" class="border-y border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
    <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
        <div class="max-w-3xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Leistungen für inhabergeführte Betriebe', 'agentur-jg-theme'); ?>
            </p>
            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                <?php esc_html_e('Was Ihre Website braucht, hängt davon ab, wo sie gerade steht.', 'agentur-jg-theme'); ?>
            </h2>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($leistungen as $leistung) : ?>
                <a href="<?php echo esc_url(home_url('/leistungen/' . $leistung['slug'] . '/')); ?>"
                   class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#3D5A80]">
                    <span class="flex h-12 w-12 items-center justify-center rounded-[12px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.10)] transition group-hover:bg-white group-hover:ring-[rgba(61,90,128,0.28)]">
                        <?php agentur_jg_front_page_icon($leistung['icon']); ?>
                    </span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.02em] text-[#1A2238]">
                        <?php echo esc_html($leistung['title']); ?>
                    </h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]">
                        <?php echo esc_html($leistung['description']); ?>
                    </p>
                    <p class="mt-4 border-t border-[rgba(26,34,56,0.10)] pt-4 text-sm leading-6 text-[#636E89]">
                        <span class="font-semibold text-[#1A2238]"><?php esc_html_e('Sinnvoll, wenn:', 'agentur-jg-theme'); ?></span>
                        <?php echo esc_html($leistung['fit']); ?>
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

<section class="bg-white">
    <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
        <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr] lg:items-end">
            <div>
                <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                    <?php esc_html_e('Orientierung', 'agentur-jg-theme'); ?>
                </p>
                <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                    <?php esc_html_e('Erst einordnen, dann entscheiden.', 'agentur-jg-theme'); ?>
                </h2>
            </div>
            <p class="max-w-2xl text-lg leading-8 text-[#51607C] lg:justify-self-end">
                <?php esc_html_e('Hier finden Sie Projekte, meinen Hintergrund und den genauen Ablauf der Zusammenarbeit.', 'agentur-jg-theme'); ?>
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-3">
            <?php foreach ($orientierung as $item) : ?>
                <a href="<?php echo esc_url($item['url']); ?>"
                   class="group border-l-2 border-[#3D5A80] bg-[#F6F8FA] px-6 py-6 transition hover:bg-white hover:shadow-[0_16px_40px_rgba(20,26,43,0.08)] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#3D5A80]">
                    <h3 class="text-xl font-bold tracking-[-0.02em] text-[#1A2238]">
                        <?php echo esc_html($item['label']); ?>
                    </h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]">
                        <?php echo esc_html($item['description']); ?>
                    </p>
                    <span class="mt-5 inline-flex items-center text-sm font-semibold text-[#3D5A80]">
                        <?php esc_html_e('Ansehen', 'agentur-jg-theme'); ?>
                        <span class="ml-2 transition group-hover:translate-x-1" aria-hidden="true">-&gt;</span>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="mt-12 border-t border-[rgba(26,34,56,0.10)] pt-10">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-2xl">
                    <h2 class="text-[clamp(1.8rem,3vw,2.6rem)] font-bold leading-tight tracking-[-0.03em] text-[#1A2238]">
                        <?php esc_html_e('Sie möchten wissen, welcher Schritt für Sie sinnvoll ist?', 'agentur-jg-theme'); ?>
                    </h2>
                    <p class="mt-4 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e('Schildern Sie kurz Ihre Ausgangslage. Ich gebe Ihnen eine ehrliche Einschätzung, was sich lohnt und was warten kann.', 'agentur-jg-theme'); ?>
                    </p>
                </div>
                <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
