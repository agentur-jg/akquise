<?php
$jona_private_portrait_url = home_url('/agentur-jg-private/jona-portrait/');

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
                <?php esc_html_e('Agentur JG hilft kleinen und mittelständischen Unternehmen dabei, online sichtbar zu werden, die richtigen Menschen auf ihre Website zu bringen und daraus messbar mehr Anfragen, Bewerbungen oder Umsatz zu gewinnen.', 'agentur-jg-theme'); ?>
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
                </a>
                <a class="inline-flex items-center justify-center rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white/70 px-6 py-4 text-base font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="#referenzen">
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
                            <svg class="h-28 w-12 text-[#98A8BE]" viewBox="0 0 48 112" fill="none">
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

<section id="problem" class="bg-white">
    <div class="mx-auto max-w-[1200px] px-5 pb-20 pt-16 sm:px-8 lg:px-10 lg:pb-28 lg:pt-20">
        <div class="max-w-4xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Typische Ausgangslagen', 'agentur-jg-theme'); ?>
            </p>
            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                <?php esc_html_e('Gute Arbeit allein reicht online nicht aus.', 'agentur-jg-theme'); ?>
            </h2>
            <p class="mt-6 max-w-3xl text-lg leading-8 text-[#51607C]">
                <?php esc_html_e('Ob Handwerksbetrieb, Dienstleister oder lokaler Anbieter: Wer online nicht klar sichtbar und verständlich ist, wird von potenziellen Kunden oft zu spät oder gar nicht gefunden.', 'agentur-jg-theme'); ?>
            </p>
        </div>

        <div class="mt-14 overflow-hidden rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
            <div class="flex flex-col gap-5 border-b border-[rgba(26,34,56,0.10)] bg-white/70 px-5 py-5 sm:px-7 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                        <?php esc_html_e('Woran es häufig scheitert', 'agentur-jg-theme'); ?>
                    </p>
                    <p class="mt-2 text-sm leading-6 text-[#51607C]">
                        <?php esc_html_e('Die Ausgangslagen sind unterschiedlich, aber die Ursachen liegen oft in Sichtbarkeit, Vertrauen und Messbarkeit.', 'agentur-jg-theme'); ?>
                    </p>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Sichtbarkeit', 'agentur-jg-theme'); ?></span>
                    <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Anfragen', 'agentur-jg-theme'); ?></span>
                    <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Messung', 'agentur-jg-theme'); ?></span>
                </div>
            </div>

            <div class="grid lg:grid-cols-2">
                <div class="border-b border-[rgba(26,34,56,0.10)] bg-white/40 px-5 py-7 sm:px-7 lg:border-r">
                    <div class="grid gap-4 sm:grid-cols-[56px_1fr]">
                        <span class="text-sm font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">01</span>
                        <div>
                            <span class="mb-3 inline-flex rounded-full bg-white px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Auftritt', 'agentur-jg-theme'); ?></span>
                            <h3 class="text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Keine professionelle Website', 'agentur-jg-theme'); ?></h3>
                            <p class="mt-2 text-base leading-7 text-[#51607C]"><?php esc_html_e('Ihr Unternehmen ist gut, aber online kaum greifbar.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-[rgba(26,34,56,0.10)] bg-white px-5 py-7 sm:px-7">
                    <div class="grid gap-4 sm:grid-cols-[56px_1fr]">
                        <span class="text-sm font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">02</span>
                        <div>
                            <span class="mb-3 inline-flex rounded-full bg-[#EDEFF3] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Anfragen', 'agentur-jg-theme'); ?></span>
                            <h3 class="text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Keine Anfragen', 'agentur-jg-theme'); ?></h3>
                            <p class="mt-2 text-base leading-7 text-[#51607C]"><?php esc_html_e('Die Website ist vorhanden, aber Sie wissen nicht, ob sie wirklich arbeitet.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-[rgba(26,34,56,0.10)] bg-white px-5 py-7 sm:px-7 lg:border-r">
                    <div class="grid gap-4 sm:grid-cols-[56px_1fr]">
                        <span class="text-sm font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">03</span>
                        <div>
                            <span class="mb-3 inline-flex rounded-full bg-white px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Google', 'agentur-jg-theme'); ?></span>
                            <h3 class="text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Keine Google-Sichtbarkeit', 'agentur-jg-theme'); ?></h3>
                            <p class="mt-2 text-base leading-7 text-[#51607C]"><?php esc_html_e('Potenzielle Kunden sehen zuerst Ihre Konkurrenz.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-[rgba(26,34,56,0.10)] bg-white/40 px-5 py-7 sm:px-7">
                    <div class="grid gap-4 sm:grid-cols-[56px_1fr]">
                        <span class="text-sm font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">04</span>
                        <div>
                            <span class="mb-3 inline-flex rounded-full bg-white px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Qualität', 'agentur-jg-theme'); ?></span>
                            <h3 class="text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Falsche Anfragen', 'agentur-jg-theme'); ?></h3>
                            <p class="mt-2 text-base leading-7 text-[#51607C]"><?php esc_html_e('Zu weit weg, zu preissensibel oder nicht passend zu Ihrem Angebot.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-[rgba(26,34,56,0.10)] bg-white/40 px-5 py-7 sm:px-7 lg:border-b-0 lg:border-r">
                    <div class="grid gap-4 sm:grid-cols-[56px_1fr]">
                        <span class="text-sm font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">05</span>
                        <div>
                            <span class="mb-3 inline-flex rounded-full bg-white px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Recruiting', 'agentur-jg-theme'); ?></span>
                            <h3 class="text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Zu wenige Bewerbungen', 'agentur-jg-theme'); ?></h3>
                            <p class="mt-2 text-base leading-7 text-[#51607C]"><?php esc_html_e('Ihr Unternehmen wird online nicht als attraktiver Arbeitgeber sichtbar.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="bg-white px-5 py-7 sm:px-7">
                    <div class="grid gap-4 sm:grid-cols-[56px_1fr]">
                        <span class="text-sm font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">06</span>
                        <div>
                            <span class="mb-3 inline-flex rounded-full bg-[#EDEFF3] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Tracking', 'agentur-jg-theme'); ?></span>
                            <h3 class="text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Keine klaren Zahlen', 'agentur-jg-theme'); ?></h3>
                            <p class="mt-2 text-base leading-7 text-[#51607C]"><?php esc_html_e('Keine belastbaren Werte zu Besuchern, Klicks, Anfragen oder Bewerbungen.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 grid gap-6 border-l-4 border-[#3D5A80] bg-[#F6F8FA] py-6 pl-6 pr-5 sm:pl-8 lg:grid-cols-[1fr_auto] lg:items-center">
            <p class="max-w-4xl text-lg leading-8 text-[#51607C]">
                <?php esc_html_e('Genau hier setzt Agentur JG an: Ich betrachte Ihre Website nicht als schönes Einzelprojekt, sondern als zentralen Ort, an dem aus Aufmerksamkeit Vertrauen und aus Vertrauen Handlung wird.', 'agentur-jg-theme'); ?>
            </p>
            <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                <?php esc_html_e('Mein Anliegen schildern', 'agentur-jg-theme'); ?>
            </a>
        </div>
    </div>
</section>

<section id="perspektive" class="relative isolate overflow-hidden bg-[#1A2238] text-white">
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(255,255,255,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.055)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_72%_45%,#000,transparent_74%)]"></div>
    <div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>

    <div class="mx-auto grid max-w-[1200px] gap-12 px-5 py-20 sm:px-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-10 lg:py-28">
        <div class="max-w-2xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#AEBAD2] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#AEBAD2]">
                <?php esc_html_e('Website als Mittelpunkt', 'agentur-jg-theme'); ?>
            </p>

            <h2 class="text-[clamp(2.25rem,4.8vw,3.85rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-white">
                <?php esc_html_e('Alle Wege führen zur Website, aber nur eine gute Website führt zur Anfrage.', 'agentur-jg-theme'); ?>
            </h2>

            <p class="mt-7 text-lg leading-8 text-[#D7DEEA]">
                <?php esc_html_e('Google, Empfehlungen, Anzeigen, Social Media und persönliche Gespräche erzeugen Aufmerksamkeit. Entscheidend ist, was danach passiert: Versteht der Besucher Ihr Angebot? Entsteht Vertrauen? Wird der nächste Schritt klar?', 'agentur-jg-theme'); ?>
            </p>
        </div>

        <div class="relative">
            <div class="absolute -inset-6 -z-10 rounded-[28px] bg-[#3D5A80]/20 blur-2xl"></div>

            <div class="overflow-hidden rounded-[18px] border border-white/12 bg-white/[0.06] shadow-[0_24px_70px_rgba(0,0,0,0.28)] backdrop-blur">
                <div class="border-b border-white/10 bg-white/[0.05] px-5 py-4">
                    <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#AEBAD2] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                        <?php esc_html_e('Der Weg zur Anfrage', 'agentur-jg-theme'); ?>
                    </p>
                </div>

                <div class="p-5 sm:p-7">
                    <div class="grid gap-3 sm:grid-cols-5">
                        <div class="rounded-[10px] border border-white/10 bg-white/[0.07] px-3 py-3 text-center text-xs font-semibold uppercase tracking-[0.08em] text-[#D7DEEA] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Google', 'agentur-jg-theme'); ?></div>
                        <div class="rounded-[10px] border border-white/10 bg-white/[0.07] px-3 py-3 text-center text-xs font-semibold uppercase tracking-[0.08em] text-[#D7DEEA] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Empfehlung', 'agentur-jg-theme'); ?></div>
                        <div class="rounded-[10px] border border-white/10 bg-white/[0.07] px-3 py-3 text-center text-xs font-semibold uppercase tracking-[0.08em] text-[#D7DEEA] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Ads', 'agentur-jg-theme'); ?></div>
                        <div class="rounded-[10px] border border-white/10 bg-white/[0.07] px-3 py-3 text-center text-xs font-semibold uppercase tracking-[0.08em] text-[#D7DEEA] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Social', 'agentur-jg-theme'); ?></div>
                        <div class="rounded-[10px] border border-white/10 bg-white/[0.07] px-3 py-3 text-center text-xs font-semibold uppercase tracking-[0.08em] text-[#D7DEEA] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Regional', 'agentur-jg-theme'); ?></div>
                    </div>

                    <div class="relative my-5 h-14">
                        <div class="absolute left-1/2 top-0 h-full w-px -translate-x-1/2 bg-[#98C1D9]/55"></div>
                        <div class="absolute left-[10%] top-0 h-full w-px bg-white/15"></div>
                        <div class="absolute left-[30%] top-0 h-full w-px bg-white/15"></div>
                        <div class="absolute left-[70%] top-0 h-full w-px bg-white/15"></div>
                        <div class="absolute left-[90%] top-0 h-full w-px bg-white/15"></div>
                        <div class="absolute bottom-0 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full border border-[#98C1D9]/50 bg-[#1A2238] text-[#98C1D9]">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 5v14"></path>
                                <path d="m19 12-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-[16px] border border-white/14 bg-[#F6F8FA] text-[#1A2238] shadow-[0_18px_45px_rgba(0,0,0,0.22)]">
                        <div class="flex h-11 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-white px-4">
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="ml-auto rounded-md border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3 py-1 text-[0.68rem] text-[#51607C] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                <?php esc_html_e('ihre-website.de', 'agentur-jg-theme'); ?>
                            </span>
                        </div>

                        <div class="grid gap-5 p-5 sm:grid-cols-[1fr_0.95fr] sm:p-6">
                            <div>
                                <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                    <?php esc_html_e('Ihre Website', 'agentur-jg-theme'); ?>
                                </p>
                                <p class="mt-3 text-2xl font-bold leading-tight tracking-[-0.02em] text-[#1A2238]">
                                    <?php esc_html_e('Verstehen. Vertrauen. Handeln.', 'agentur-jg-theme'); ?>
                                </p>
                                <p class="mt-3 text-sm leading-6 text-[#51607C]">
                                    <?php esc_html_e('Der zentrale Ort, an dem aus Aufmerksamkeit eine konkrete Entscheidung wird.', 'agentur-jg-theme'); ?>
                                </p>
                            </div>

                            <div class="grid gap-3">
                                <div class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-4 py-3">
                                    <div class="text-sm font-semibold text-[#1A2238]"><?php esc_html_e('Angebot klar erklärt', 'agentur-jg-theme'); ?></div>
                                    <div class="mt-1 h-1.5 overflow-hidden rounded-full bg-[#EDEFF3]"><span class="block h-full w-[84%] rounded-full bg-[#3D5A80]"></span></div>
                                </div>
                                <div class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-4 py-3">
                                    <div class="text-sm font-semibold text-[#1A2238]"><?php esc_html_e('Vertrauen aufgebaut', 'agentur-jg-theme'); ?></div>
                                    <div class="mt-1 h-1.5 overflow-hidden rounded-full bg-[#EDEFF3]"><span class="block h-full w-[72%] rounded-full bg-[#4E6E97]"></span></div>
                                </div>
                                <div class="rounded-[10px] border border-[rgba(26,34,56,0.10)] bg-white px-4 py-3">
                                    <div class="text-sm font-semibold text-[#1A2238]"><?php esc_html_e('Nächster Schritt sichtbar', 'agentur-jg-theme'); ?></div>
                                    <div class="mt-1 h-1.5 overflow-hidden rounded-full bg-[#EDEFF3]"><span class="block h-full w-[91%] rounded-full bg-[#98C1D9]"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative my-5 h-12">
                        <div class="absolute left-1/2 top-0 h-full w-px -translate-x-1/2 bg-[#98C1D9]/55"></div>
                        <div class="absolute top-1/2 left-[17%] h-px w-[66%] -translate-y-1/2 bg-white/15"></div>
                        <div class="absolute top-1/2 left-1/2 flex h-7 w-7 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full border border-[#98C1D9]/50 bg-[#1A2238] text-[#98C1D9]">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 5v14"></path>
                                <path d="m19 12-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="grid gap-3 sm:grid-cols-3">
                        <div class="rounded-[12px] border border-[#98C1D9]/25 bg-[#98C1D9]/12 px-4 py-4">
                            <p class="text-xs font-medium uppercase tracking-[0.14em] text-[#AEBAD2] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Ergebnis', 'agentur-jg-theme'); ?></p>
                            <p class="mt-2 text-xl font-bold tracking-[-0.02em] text-white"><?php esc_html_e('Anfrage', 'agentur-jg-theme'); ?></p>
                        </div>
                        <div class="rounded-[12px] border border-[#98C1D9]/25 bg-[#98C1D9]/12 px-4 py-4">
                            <p class="text-xs font-medium uppercase tracking-[0.14em] text-[#AEBAD2] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Ergebnis', 'agentur-jg-theme'); ?></p>
                            <p class="mt-2 text-xl font-bold tracking-[-0.02em] text-white"><?php esc_html_e('Bewerbung', 'agentur-jg-theme'); ?></p>
                        </div>
                        <div class="rounded-[12px] border border-[#98C1D9]/25 bg-[#98C1D9]/12 px-4 py-4">
                            <p class="text-xs font-medium uppercase tracking-[0.14em] text-[#AEBAD2] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Ergebnis', 'agentur-jg-theme'); ?></p>
                            <p class="mt-2 text-xl font-bold tracking-[-0.02em] text-white"><?php esc_html_e('Umsatz', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 grid gap-3 sm:grid-cols-3">
                <div class="border-l border-white/18 pl-4">
                    <p class="text-sm text-[#AEBAD2]"><?php esc_html_e('Nicht nur online sein', 'agentur-jg-theme'); ?></p>
                    <p class="mt-1 font-semibold text-white"><?php esc_html_e('gefunden werden', 'agentur-jg-theme'); ?></p>
                </div>
                <div class="border-l border-white/18 pl-4">
                    <p class="text-sm text-[#AEBAD2]"><?php esc_html_e('Nicht nur gut aussehen', 'agentur-jg-theme'); ?></p>
                    <p class="mt-1 font-semibold text-white"><?php esc_html_e('Vertrauen aufbauen', 'agentur-jg-theme'); ?></p>
                </div>
                <div class="border-l border-white/18 pl-4">
                    <p class="text-sm text-[#AEBAD2]"><?php esc_html_e('Nicht nur Besucher sammeln', 'agentur-jg-theme'); ?></p>
                    <p class="mt-1 font-semibold text-white"><?php esc_html_e('Handlungen auslösen', 'agentur-jg-theme'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="leistungen" class="bg-white">
    <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 lg:px-10 lg:py-28">
        <div class="mx-auto max-w-3xl text-center">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Leistungen', 'agentur-jg-theme'); ?>
            </p>

            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                <?php esc_html_e('Die passenden Bausteine für Ihren nächsten Schritt.', 'agentur-jg-theme'); ?>
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-[#51607C]">
                <?php esc_html_e('Nicht jedes Unternehmen braucht dieselben Maßnahmen. Entscheidend ist, wo Sie gerade stehen, was Ihre Website leisten soll und welcher Schritt wirtschaftlich sinnvoll ist.', 'agentur-jg-theme'); ?>
            </p>
        </div>

        <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">
                <div class="flex h-11 w-11 items-center justify-center rounded-[10px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                        <path d="M3 9h18"></path>
                        <path d="M7 7h.01"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Website-Erstellung', 'agentur-jg-theme'); ?></h3>
                <p class="mt-3 text-base leading-7 text-[#51607C]">
                    <?php esc_html_e('Für Unternehmen, die noch keine professionelle Website haben oder eine neue digitale Grundlage brauchen.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-5 border-t border-[rgba(26,34,56,0.10)] pt-4 text-sm leading-6 text-[#636E89]">
                    <span class="font-semibold text-[#1A2238]"><?php esc_html_e('Sinnvoll, wenn:', 'agentur-jg-theme'); ?></span>
                    <?php esc_html_e(' online noch kein klarer, vertrauenswürdiger Unternehmensauftritt existiert.', 'agentur-jg-theme'); ?>
                </p>
            </article>

            <article class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">
                <div class="flex h-11 w-11 items-center justify-center rounded-[10px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 21v-7"></path>
                        <path d="M4 10V3"></path>
                        <path d="M12 21v-9"></path>
                        <path d="M12 8V3"></path>
                        <path d="M20 21v-5"></path>
                        <path d="M20 12V3"></path>
                        <path d="M2 14h4"></path>
                        <path d="M10 8h4"></path>
                        <path d="M18 16h4"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Website-Optimierung', 'agentur-jg-theme'); ?></h3>
                <p class="mt-3 text-base leading-7 text-[#51607C]">
                    <?php esc_html_e('Für bestehende Websites, die schöner aussehen als sie funktionieren oder kaum Anfragen bringen.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-5 border-t border-[rgba(26,34,56,0.10)] pt-4 text-sm leading-6 text-[#636E89]">
                    <span class="font-semibold text-[#1A2238]"><?php esc_html_e('Sinnvoll, wenn:', 'agentur-jg-theme'); ?></span>
                    <?php esc_html_e(' Ihre Seite vorhanden ist, aber zu wenig daraus entsteht.', 'agentur-jg-theme'); ?>
                </p>
            </article>

            <article class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">
                <div class="flex h-11 w-11 items-center justify-center rounded-[10px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="11" cy="11" r="7"></circle>
                        <path d="m20 20-3.5-3.5"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('SEO & lokale Sichtbarkeit', 'agentur-jg-theme'); ?></h3>
                <p class="mt-3 text-base leading-7 text-[#51607C]">
                    <?php esc_html_e('Damit potenzielle Kunden Ihr Unternehmen finden, wenn sie bei Google nach Ihrer Leistung suchen.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-5 border-t border-[rgba(26,34,56,0.10)] pt-4 text-sm leading-6 text-[#636E89]">
                    <span class="font-semibold text-[#1A2238]"><?php esc_html_e('Sinnvoll, wenn:', 'agentur-jg-theme'); ?></span>
                    <?php esc_html_e(' Ihre Konkurrenz online sichtbarer ist als Sie.', 'agentur-jg-theme'); ?>
                </p>
            </article>

            <article class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">
                <div class="flex h-11 w-11 items-center justify-center rounded-[10px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="9"></circle>
                        <circle cx="12" cy="12" r="5"></circle>
                        <circle cx="12" cy="12" r="1.5"></circle>
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Google Ads', 'agentur-jg-theme'); ?></h3>
                <p class="mt-3 text-base leading-7 text-[#51607C]">
                    <?php esc_html_e('Für gezielte Besucher, die bereits Interesse oder konkreten Bedarf haben.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-5 border-t border-[rgba(26,34,56,0.10)] pt-4 text-sm leading-6 text-[#636E89]">
                    <span class="font-semibold text-[#1A2238]"><?php esc_html_e('Sinnvoll, wenn:', 'agentur-jg-theme'); ?></span>
                    <?php esc_html_e(' kurzfristig passende Anfragen entstehen sollen.', 'agentur-jg-theme'); ?>
                </p>
            </article>

            <article class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">
                <div class="flex h-11 w-11 items-center justify-center rounded-[10px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 18h16"></path>
                        <path d="M6 15l4-4 3 3 5-7"></path>
                        <path d="M15 7h3v3"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Mehr Anfragen aus vorhandenen Besuchern', 'agentur-jg-theme'); ?></h3>
                <p class="mt-3 text-base leading-7 text-[#51607C]">
                    <?php esc_html_e('Damit aus Besuchern mehr Anfragen, Bewerbungen oder Kontakte werden.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-5 border-t border-[rgba(26,34,56,0.10)] pt-4 text-sm leading-6 text-[#636E89]">
                    <span class="font-semibold text-[#1A2238]"><?php esc_html_e('Sinnvoll, wenn:', 'agentur-jg-theme'); ?></span>
                    <?php esc_html_e(' Besucher vorhanden sind, aber zu selten handeln.', 'agentur-jg-theme'); ?>
                </p>
            </article>

            <article class="group rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">
                <div class="flex h-11 w-11 items-center justify-center rounded-[10px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 20V10"></path>
                        <path d="M10 20V4"></path>
                        <path d="M16 20v-7"></path>
                        <path d="M22 20H2"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Tracking & Auswertung', 'agentur-jg-theme'); ?></h3>
                <p class="mt-3 text-base leading-7 text-[#51607C]">
                    <?php esc_html_e('Damit sichtbar wird, wie Ihre Website arbeitet und welche Maßnahmen sich lohnen.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-5 border-t border-[rgba(26,34,56,0.10)] pt-4 text-sm leading-6 text-[#636E89]">
                    <span class="font-semibold text-[#1A2238]"><?php esc_html_e('Sinnvoll, wenn:', 'agentur-jg-theme'); ?></span>
                    <?php esc_html_e(' Sie heute nicht genau wissen, was Ihre Website bringt.', 'agentur-jg-theme'); ?>
                </p>
            </article>
        </div>

        <div class="mx-auto mt-12 max-w-3xl text-center">
            <p class="text-lg leading-8 text-[#51607C]">
                <?php esc_html_e('Oft ist nicht eine einzelne Maßnahme entscheidend, sondern die richtige Reihenfolge.', 'agentur-jg-theme'); ?>
            </p>
            <div class="mt-7">
                <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Nächsten Schritt besprechen', 'agentur-jg-theme'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="methode" class="bg-[#F6F8FA]">
    <div class="mx-auto max-w-[1200px] px-5 py-20 text-center sm:px-8 lg:px-10 lg:py-28">
        <div class="mx-auto max-w-3xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Der Weg zur wirksamen Website', 'agentur-jg-theme'); ?>
            </p>

            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                <?php esc_html_e('Aus einer Website wird erst dann ein Werkzeug, wenn sie ein klares Ziel verfolgt.', 'agentur-jg-theme'); ?>
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-[#51607C]">
                <?php esc_html_e('Deshalb starte ich nicht bei Farben, Layouts oder einzelnen Maßnahmen. Zuerst klären wir, was Ihre Website leisten soll, wen sie erreichen muss und woran später sichtbar wird, ob sie funktioniert.', 'agentur-jg-theme'); ?>
            </p>
        </div>

        <div class="relative mt-14 overflow-hidden rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white text-left shadow-[0_18px_50px_rgba(20,26,43,0.08)]">
            <div class="absolute left-0 right-0 top-[76px] hidden h-px bg-[rgba(26,34,56,0.10)] lg:block" aria-hidden="true"></div>

            <div class="grid lg:grid-cols-5">
                <article class="relative border-b border-[rgba(26,34,56,0.10)] px-5 py-7 sm:px-7 lg:border-b-0 lg:border-r">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">01</span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Ziel klären', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e('Mehr Kunden, mehr Umsatz, mehr Bewerbungen oder mehr qualifizierte Anfragen? Erst wenn das Ziel klar ist, lässt sich die Website sinnvoll bewerten.', 'agentur-jg-theme'); ?>
                    </p>
                </article>

                <article class="relative border-b border-[rgba(26,34,56,0.10)] px-5 py-7 sm:px-7 lg:border-b-0 lg:border-r">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">02</span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Ist-Zustand prüfen', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e('Gibt es bereits eine Website? Wie wirkt sie? Wird etwas gemessen? Wir schauen auf vorhandene Inhalte, Besucher, Anfragen und Schwachstellen.', 'agentur-jg-theme'); ?>
                    </p>
                </article>

                <article class="relative border-b border-[rgba(26,34,56,0.10)] px-5 py-7 sm:px-7 lg:border-b-0 lg:border-r">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">03</span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Zielgruppe und Angebot verstehen', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e('Wir klären, welche Menschen erreicht werden sollen, welche Probleme sie haben und wie Ihr Angebot verständlich und überzeugend präsentiert wird.', 'agentur-jg-theme'); ?>
                    </p>
                </article>

                <article class="relative border-b border-[rgba(26,34,56,0.10)] px-5 py-7 sm:px-7 lg:border-b-0 lg:border-r">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">04</span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Website aufbauen oder verbessern', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e('Je nach Ausgangslage entsteht eine neue Website oder eine bestehende Seite wird so optimiert, dass sie Vertrauen aufbaut und zur Handlung führt.', 'agentur-jg-theme'); ?>
                    </p>
                </article>

                <article class="relative px-5 py-7 sm:px-7">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">05</span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Besucher gewinnen und messen', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e('Über SEO, Google Ads oder lokale Sichtbarkeit bringen wir relevante Menschen auf die Website und messen, was daraus entsteht.', 'agentur-jg-theme'); ?>
                    </p>
                </article>
            </div>
        </div>

        <div class="mt-10">
            <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                <?php esc_html_e('Eigene Ausgangslage besprechen', 'agentur-jg-theme'); ?>
            </a>
        </div>
    </div>
</section>

<section id="referenzen" class="bg-[#F6F8FA]">
    <div class="mx-auto max-w-[1200px] px-5 py-20 sm:px-8 lg:px-10 lg:py-28">
        <div class="max-w-3xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Referenzen', 'agentur-jg-theme'); ?>
            </p>

            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                <?php esc_html_e('Zwei Projekte. Zwei Ausgangslagen. Ein Ziel: digitale Auftritte, die wirklich arbeiten.', 'agentur-jg-theme'); ?>
            </h2>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-[#51607C]">
                <?php esc_html_e('Manchmal geht es darum, eine bestehende Website zu einem digitalen Vertriebs- und Recruiting-Werkzeug auszubauen. Manchmal darum, für ein neues Unternehmen von Anfang an eine solide Grundlage zu schaffen.', 'agentur-jg-theme'); ?>
            </p>
        </div>

        <div class="mt-14 grid gap-9">
            <article class="overflow-hidden rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_18px_50px_rgba(20,26,43,0.08)]">
                <div class="border-b border-[rgba(26,34,56,0.10)] bg-[#EDEFF3] p-4 sm:p-6 lg:p-7">
                    <div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-sm">
                        <div class="flex h-11 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-4">
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="ml-auto rounded-md border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] text-[#51607C] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                <?php esc_html_e('kopp-umwelt.de', 'agentur-jg-theme'); ?>
                            </span>
                        </div>
                        <img class="aspect-[16/9] w-full object-cover object-top" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/KOPP-Umwelt_Website_Referenz_AgenturJG.webp'); ?>" alt="<?php esc_attr_e('Screenshot der KOPP Umwelt Website', 'agentur-jg-theme'); ?>">
                    </div>
                </div>

                <div class="grid gap-8 p-5 sm:p-7 lg:grid-cols-[0.75fr_1.25fr] lg:p-9">
                    <div>
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Entsorgung & Containerdienst', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Heidenrod-Kemel', 'agentur-jg-theme'); ?></span>
                        </div>
                        <h3 class="mt-5 text-[clamp(1.65rem,2.8vw,2.35rem)] font-bold leading-tight tracking-[-0.03em] text-[#1A2238]"><?php esc_html_e('KOPP Umwelt', 'agentur-jg-theme'); ?></h3>
                        <p class="mt-4 text-lg leading-8 text-[#51607C]">
                            <?php esc_html_e('Aus einer veralteten Website wurde eine digitale Plattform für Buchungen, Bestandskunden, Sichtbarkeit und Recruiting.', 'agentur-jg-theme'); ?>
                        </p>

                        <div class="mt-7 flex flex-wrap gap-2">
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('Shop integriert', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('SEO & Google Ads', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('Kundenportal angebunden', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('Recruiting unterstützt', 'agentur-jg-theme'); ?></span>
                        </div>

                        <a class="mt-7 inline-flex items-center justify-center rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white px-5 py-3 text-sm font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-[#F6F8FA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="https://kopp-umwelt.de" target="_blank" rel="nofollow noopener noreferrer">
                            <?php esc_html_e('Jetzt live ansehen', 'agentur-jg-theme'); ?>
                        </a>
                    </div>

                    <div class="grid gap-5">
                        <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                            <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Ausgangslage', 'agentur-jg-theme'); ?></h4>
                            <p class="text-base leading-7 text-[#51607C]"><?php esc_html_e('Die bisherige Website war einfach aufgebaut, gestalterisch veraltet und bildete die heutigen Anforderungen des Unternehmens nicht mehr ab.', 'agentur-jg-theme'); ?></p>
                        </div>
                        <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                            <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Umsetzung', 'agentur-jg-theme'); ?></h4>
                            <p class="text-base leading-7 text-[#51607C]"><?php esc_html_e('Integration eines Shops für Containerdienstleistungen, Anbindung des Kundenportals, Aufbau von SEO- und Google-Ads-Maßnahmen sowie Veröffentlichung optimierter Stellenanzeigen.', 'agentur-jg-theme'); ?></p>
                        </div>
                        <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                            <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Wirkung', 'agentur-jg-theme'); ?></h4>
                            <p class="text-base leading-7 text-[#51607C]"><?php esc_html_e('Containerleistungen wurden direkt über die Website buchbar – ohne Telefonat, ohne manuellen Aufwand. Offene Stellen wurden binnen weniger Wochen über die neue Online-Präsenz besetzt. SEO-Inhalte beantworten häufige Fragen bereits vor dem ersten Kontakt.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="overflow-hidden rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_18px_50px_rgba(20,26,43,0.08)]">
                <div class="border-b border-[rgba(26,34,56,0.10)] bg-[#EDEFF3] p-4 sm:p-6 lg:p-7">
                    <div class="overflow-hidden rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white shadow-sm">
                        <div class="flex h-11 items-center gap-2 border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-4">
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-[#98A8BE]/70"></span>
                            <span class="ml-auto rounded-md border border-[rgba(26,34,56,0.10)] bg-white px-3 py-1 text-[0.68rem] text-[#51607C] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                <?php esc_html_e('max-kfz.de', 'agentur-jg-theme'); ?>
                            </span>
                        </div>
                        <img class="aspect-[16/9] w-full object-cover object-top" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/MAX-KFZ_Website_Referenz_AgenturJG.webp'); ?>" alt="<?php esc_attr_e('Screenshot der Max KFZ Website', 'agentur-jg-theme'); ?>">
                    </div>
                </div>

                <div class="grid gap-8 p-5 sm:p-7 lg:grid-cols-[0.75fr_1.25fr] lg:p-9">
                    <div>
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('KFZ-Werkstatt', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-3 py-1 text-[0.68rem] font-medium uppercase tracking-[0.12em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Holzhausen a.d. Haide', 'agentur-jg-theme'); ?></span>
                        </div>
                        <h3 class="mt-5 text-[clamp(1.65rem,2.8vw,2.35rem)] font-bold leading-tight tracking-[-0.03em] text-[#1A2238]"><?php esc_html_e('Max KFZ', 'agentur-jg-theme'); ?></h3>
                        <p class="mt-4 text-lg leading-8 text-[#51607C]">
                            <?php esc_html_e('Zum Start der neuen Werkstatt entstand eine Website, die Vertrauen aufbaut, Kontaktwege bündelt und Terminbuchungen vorbereitet.', 'agentur-jg-theme'); ?>
                        </p>

                        <div class="mt-7 flex flex-wrap gap-2">
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('Neue Website', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('Zielgruppenanalyse', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('WhatsApp eingebunden', 'agentur-jg-theme'); ?></span>
                            <span class="rounded-full bg-[#EDEFF3] px-3 py-1 text-sm font-medium text-[#34507A]"><?php esc_html_e('Terminbuchung vorbereitet', 'agentur-jg-theme'); ?></span>
                        </div>

                        <a class="mt-7 inline-flex items-center justify-center rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white px-5 py-3 text-sm font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-[#F6F8FA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="https://max-kfz.de" target="_blank" rel="nofollow noopener noreferrer">
                            <?php esc_html_e('Jetzt live ansehen', 'agentur-jg-theme'); ?>
                        </a>
                    </div>

                    <div class="grid gap-5">
                        <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                            <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Ausgangslage', 'agentur-jg-theme'); ?></h4>
                            <p class="text-base leading-7 text-[#51607C]"><?php esc_html_e('Max brauchte für seine neue KFZ-Werkstatt eine professionelle digitale Grundlage, die zum Budget und zur lokalen Zielgruppe passt.', 'agentur-jg-theme'); ?></p>
                        </div>
                        <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                            <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Umsetzung', 'agentur-jg-theme'); ?></h4>
                            <p class="text-base leading-7 text-[#51607C]"><?php esc_html_e('Analyse der Zielgruppe, Aufbau einer maßgeschneiderten Website und Bündelung wichtiger Kontakt- und Vertrauenskanäle wie WhatsApp und Terminbuchung.', 'agentur-jg-theme'); ?></p>
                        </div>
                        <div class="grid gap-3 border-t border-[rgba(26,34,56,0.10)] pt-5 sm:grid-cols-[150px_1fr]">
                            <h4 class="text-sm font-semibold uppercase tracking-[0.12em] text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]"><?php esc_html_e('Wirkung', 'agentur-jg-theme'); ?></h4>
                            <p class="text-base leading-7 text-[#51607C]"><?php esc_html_e('Die neue Werkstatt hatte von Anfang an einen professionellen digitalen Auftritt. Interessenten finden schnell, was sie brauchen, und kommen bereits gut informiert in das erste Gespräch.', 'agentur-jg-theme'); ?></p>
                        </div>
                    </div>
                </div>
            </article>
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

<section id="warum-agentur-jg" class="relative isolate overflow-hidden bg-[#1A2238] text-white">
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(255,255,255,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.055)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_25%_35%,#000,transparent_72%)]"></div>
    <div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>

    <div class="mx-auto grid max-w-[1200px] gap-12 px-5 py-20 sm:px-8 lg:grid-cols-[0.95fr_1.05fr] lg:items-start lg:px-10 lg:py-28">
        <div class="max-w-2xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#AEBAD2] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#AEBAD2]">
                <?php esc_html_e('Warum Agentur JG', 'agentur-jg-theme'); ?>
            </p>

            <h2 class="text-[clamp(2.25rem,4.8vw,3.85rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-white">
                <?php esc_html_e('Klarer planen. Verständlicher umsetzen. Besser entscheiden.', 'agentur-jg-theme'); ?>
            </h2>

            <p class="mt-7 text-lg leading-8 text-[#D7DEEA]">
                <?php esc_html_e('Online-Marketing muss nicht laut oder kompliziert sein. Ich zeige Ihnen, welche Schritte sinnvoll sind, was sie bewirken sollen und woran wir erkennen, ob sie funktionieren.', 'agentur-jg-theme'); ?>
            </p>

            <div class="mt-9">
                <a class="inline-flex items-center justify-center rounded-[10px] bg-white px-6 py-4 text-base font-semibold text-[#1A2238] shadow-sm transition hover:-translate-y-px hover:bg-[#F6F8FA] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#98C1D9]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
                </a>
            </div>
        </div>

        <div class="rounded-[22px] border border-white/12 bg-white/[0.06] p-5 shadow-[0_24px_70px_rgba(0,0,0,0.22)] backdrop-blur sm:p-7 lg:p-8">
            <div class="divide-y divide-white/10">
                <details class="group py-5 first:pt-0 last:pb-0" open>
                    <summary class="grid cursor-pointer list-none grid-cols-[42px_1fr_24px] items-center gap-4 [&::-webkit-details-marker]:hidden">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span class="text-lg font-bold tracking-[-0.01em] text-white sm:text-xl"><?php esc_html_e('Verständlich statt kompliziert', 'agentur-jg-theme'); ?></span>
                        <span class="text-2xl leading-none text-[#98C1D9] transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-4 pl-0 text-base leading-7 text-[#D7DEEA] sm:pl-[58px]"><?php esc_html_e('Sie müssen kein Marketing-Experte sein. Ich erkläre, was wir tun, warum es sinnvoll ist und welche Wirkung wir erwarten können.', 'agentur-jg-theme'); ?></p>
                </details>

                <details class="group py-5 first:pt-0 last:pb-0">
                    <summary class="grid cursor-pointer list-none grid-cols-[42px_1fr_24px] items-center gap-4 [&::-webkit-details-marker]:hidden">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span class="text-lg font-bold tracking-[-0.01em] text-white sm:text-xl"><?php esc_html_e('Strategie vor Umsetzung', 'agentur-jg-theme'); ?></span>
                        <span class="text-2xl leading-none text-[#98C1D9] transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-4 pl-0 text-base leading-7 text-[#D7DEEA] sm:pl-[58px]"><?php esc_html_e('Nicht jede Maßnahme passt zu jedem Unternehmen. Erst klären wir Ziel, Ausgangslage und Zielgruppe, dann entscheiden wir über die Lösung.', 'agentur-jg-theme'); ?></p>
                </details>

                <details class="group py-5 first:pt-0 last:pb-0">
                    <summary class="grid cursor-pointer list-none grid-cols-[42px_1fr_24px] items-center gap-4 [&::-webkit-details-marker]:hidden">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span class="text-lg font-bold tracking-[-0.01em] text-white sm:text-xl"><?php esc_html_e('Website als Werkzeug statt Designprojekt', 'agentur-jg-theme'); ?></span>
                        <span class="text-2xl leading-none text-[#98C1D9] transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-4 pl-0 text-base leading-7 text-[#D7DEEA] sm:pl-[58px]"><?php esc_html_e('Eine Website soll nicht nur gut aussehen. Sie soll sichtbar machen, Vertrauen aufbauen und Menschen zum nächsten Schritt führen.', 'agentur-jg-theme'); ?></p>
                </details>

                <details class="group py-5 first:pt-0 last:pb-0">
                    <summary class="grid cursor-pointer list-none grid-cols-[42px_1fr_24px] items-center gap-4 [&::-webkit-details-marker]:hidden">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span class="text-lg font-bold tracking-[-0.01em] text-white sm:text-xl"><?php esc_html_e('Messbarkeit statt Bauchgefühl', 'agentur-jg-theme'); ?></span>
                        <span class="text-2xl leading-none text-[#98C1D9] transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-4 pl-0 text-base leading-7 text-[#D7DEEA] sm:pl-[58px]"><?php esc_html_e('Wir schauen nicht nur, ob etwas schön wirkt, sondern ob Besucher kommen, Kontaktwege genutzt werden und Maßnahmen sich lohnen.', 'agentur-jg-theme'); ?></p>
                </details>

                <details class="group py-5 first:pt-0 last:pb-0">
                    <summary class="grid cursor-pointer list-none grid-cols-[42px_1fr_24px] items-center gap-4 [&::-webkit-details-marker]:hidden">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span class="text-lg font-bold tracking-[-0.01em] text-white sm:text-xl"><?php esc_html_e('Persönlicher Ansprechpartner', 'agentur-jg-theme'); ?></span>
                        <span class="text-2xl leading-none text-[#98C1D9] transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-4 pl-0 text-base leading-7 text-[#D7DEEA] sm:pl-[58px]"><?php esc_html_e('Sie sprechen direkt mit Jona. Ohne wechselnde Zuständigkeiten, ohne unnötige Umwege.', 'agentur-jg-theme'); ?></p>
                </details>

                <details class="group py-5 first:pt-0 last:pb-0">
                    <summary class="grid cursor-pointer list-none grid-cols-[42px_1fr_24px] items-center gap-4 [&::-webkit-details-marker]:hidden">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg>
                        </span>
                        <span class="text-lg font-bold tracking-[-0.01em] text-white sm:text-xl"><?php esc_html_e('Keine leeren Versprechen', 'agentur-jg-theme'); ?></span>
                        <span class="text-2xl leading-none text-[#98C1D9] transition group-open:rotate-45" aria-hidden="true">+</span>
                    </summary>
                    <p class="mt-4 pl-0 text-base leading-7 text-[#D7DEEA] sm:pl-[58px]"><?php esc_html_e('Ich gebe eine ehrliche Einschätzung, was realistisch ist, wo Potenzial liegt und wo Maßnahmen keinen Sinn ergeben.', 'agentur-jg-theme'); ?></p>
                </details>
            </div>
        </div>
    </div>
</section>

<section id="ueber-jona" class="bg-white">
    <div class="mx-auto grid max-w-[1200px] gap-12 px-5 py-20 sm:px-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-10 lg:py-28">
        <div>
            <div class="relative overflow-hidden rounded-[18px] border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] shadow-[0_18px_50px_rgba(20,26,43,0.10)]">
                <div
                    class="relative aspect-[4/5] select-none bg-cover bg-center"
                    style="background-image: url('<?php echo esc_url($jona_private_portrait_url); ?>');"
                    role="img"
                    aria-label="<?php esc_attr_e('Jona von Agentur JG', 'agentur-jg-theme'); ?>"
                    data-private-image
                >
                    <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(26,34,56,0)_48%,rgba(26,34,56,0.58)_100%)]"></div>
                    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.045)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.045)_1px,transparent_1px)] bg-[size:34px_34px] opacity-45 [mask-image:linear-gradient(to_bottom,transparent_0%,#000_45%,#000_100%)]"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-7">
                        <div class="inline-flex items-center gap-3 rounded-[12px] border border-white/18 bg-[#1A2238]/78 px-4 py-3 text-white shadow-[0_14px_38px_rgba(20,26,43,0.24)] backdrop-blur">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-white text-sm font-extrabold tracking-[-0.04em] text-[#1A2238]">
                                <?php esc_html_e('JG', 'agentur-jg-theme'); ?>
                            </span>
                            <span>
                                <span class="block text-sm font-bold tracking-[-0.01em]"><?php esc_html_e('Jona Gravelius', 'agentur-jg-theme'); ?></span>
                                <span class="block text-xs text-[#D7DEEA]"><?php esc_html_e('Gründer · Agentur JG', 'agentur-jg-theme'); ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-3xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                <?php esc_html_e('Über mich', 'agentur-jg-theme'); ?>
            </p>

            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-bold leading-[1.06] tracking-[-0.03em] text-[#1A2238]">
                <?php esc_html_e('Hi, mein Name ist Jona und ich helfe Unternehmen, ihre Website wirtschaftlich zu denken.', 'agentur-jg-theme'); ?>
            </h2>

            <div class="mt-7 grid gap-5 text-lg leading-8 text-[#51607C]">
                <p>
                    <?php esc_html_e('Viele Unternehmen haben eine Website, wissen aber nicht, ob sie wirklich etwas bringt. Andere stehen noch am Anfang und suchen eine klare digitale Grundlage.', 'agentur-jg-theme'); ?>
                </p>
                <p>
                    <?php esc_html_e('Ich weiß, dass viele Inhaber schlechte Erfahrungen mit Agenturen gemacht haben: Versprechen, die sich nicht erfüllt haben, Maßnahmen ohne erkennbares Ergebnis, Ansprechpartner, die wechseln. Deshalb arbeite ich anders: transparent, ohne Druck und mit einer klaren Einschätzung, was realistisch ist – und was nicht.', 'agentur-jg-theme'); ?>
                </p>
                <p>
                    <?php esc_html_e('Mein Anspruch ist, Online-Marketing so zu erklären, dass Entscheidungen nachvollziehbar werden. Ohne unnötige Komplexität und ohne Maßnahmen, die nur gut klingen.', 'agentur-jg-theme'); ?>
                </p>
            </div>

            <div class="mt-9 grid gap-4 sm:grid-cols-3">
                <div class="border-l border-[rgba(26,34,56,0.14)] pl-4">
                    <h3 class="text-base font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Klar erklärt', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-2 text-sm leading-6 text-[#51607C]"><?php esc_html_e('Sie wissen, was gemacht wird und warum.', 'agentur-jg-theme'); ?></p>
                </div>
                <div class="border-l border-[rgba(26,34,56,0.14)] pl-4">
                    <h3 class="text-base font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Persönlich betreut', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-2 text-sm leading-6 text-[#51607C]"><?php esc_html_e('Sie sprechen direkt mit mir.', 'agentur-jg-theme'); ?></p>
                </div>
                <div class="border-l border-[rgba(26,34,56,0.14)] pl-4">
                    <h3 class="text-base font-bold tracking-[-0.01em] text-[#1A2238]"><?php esc_html_e('Wirtschaftlich gedacht', 'agentur-jg-theme'); ?></h3>
                    <p class="mt-2 text-sm leading-6 text-[#51607C]"><?php esc_html_e('Der nächste Schritt muss zu Ziel, Budget und Ausgangslage passen.', 'agentur-jg-theme'); ?></p>
                </div>
            </div>

            <div class="mt-10 flex flex-wrap items-center gap-4">
                <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Gespräch mit Jona anfragen', 'agentur-jg-theme'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="kontakt" class="relative isolate overflow-hidden bg-[#1A2238] text-white">
    <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(255,255,255,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.055)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_72%_38%,#000,transparent_74%)]"></div>
    <div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>

    <div class="mx-auto grid max-w-[1200px] gap-10 px-5 py-20 sm:px-8 lg:grid-cols-[1.08fr_0.92fr] lg:items-center lg:px-10 lg:py-28">
        <div class="max-w-3xl">
            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#AEBAD2] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#AEBAD2]">
                <?php esc_html_e('Nächster Schritt', 'agentur-jg-theme'); ?>
            </p>

            <h2 class="text-[clamp(2.25rem,4.8vw,3.85rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-white">
                <?php esc_html_e('Schildern Sie kurz Ihr Anliegen. Ich melde mich persönlich.', 'agentur-jg-theme'); ?>
            </h2>

            <p class="mt-7 max-w-2xl text-lg leading-8 text-[#D7DEEA]">
                <?php esc_html_e('Egal ob Sie noch keine Website haben, Ihre bestehende Seite kaum Ergebnisse bringt oder Sie online sichtbarer werden möchten: Ein, zwei Sätze reichen für den Anfang.', 'agentur-jg-theme'); ?>
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a class="inline-flex items-center justify-center rounded-[10px] bg-white px-6 py-4 text-base font-semibold text-[#1A2238] shadow-sm transition hover:-translate-y-px hover:bg-[#F6F8FA] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#98C1D9]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
                </a>
                <a class="inline-flex items-center justify-center rounded-[10px] border border-white/18 bg-white/[0.06] px-6 py-4 text-base font-semibold text-white transition hover:-translate-y-px hover:border-white/35 hover:bg-white/[0.10] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#98C1D9]" href="mailto:kontakt@agentur-jg.de">
                    <?php esc_html_e('E-Mail schreiben', 'agentur-jg-theme'); ?>
                </a>
            </div>
        </div>

        <div class="rounded-[22px] border border-white/12 bg-white/[0.06] p-5 shadow-[0_24px_70px_rgba(0,0,0,0.22)] backdrop-blur sm:p-7 lg:p-8">
            <div class="grid gap-5">
                <div class="grid gap-4 sm:grid-cols-[42px_1fr]">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                    </span>
                    <div>
                        <h3 class="text-lg font-bold tracking-[-0.01em] text-white"><?php esc_html_e('Keine Verpflichtung', 'agentur-jg-theme'); ?></h3>
                        <p class="mt-2 text-base leading-7 text-[#D7DEEA]"><?php esc_html_e('Sie müssen noch nicht genau wissen, welche Maßnahme Sie brauchen.', 'agentur-jg-theme'); ?></p>
                    </div>
                </div>

                <div class="grid gap-4 border-t border-white/10 pt-5 sm:grid-cols-[42px_1fr]">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                    </span>
                    <div>
                        <h3 class="text-lg font-bold tracking-[-0.01em] text-white"><?php esc_html_e('Keine Verkaufsshow auf Druck', 'agentur-jg-theme'); ?></h3>
                        <p class="mt-2 text-base leading-7 text-[#D7DEEA]"><?php esc_html_e('Wir schauen zuerst auf Ziel, Ausgangslage und sinnvolle nächste Schritte.', 'agentur-jg-theme'); ?></p>
                    </div>
                </div>

                <div class="grid gap-4 border-t border-white/10 pt-5 sm:grid-cols-[42px_1fr]">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#98C1D9]/35 bg-[#98C1D9]/12 text-[#98C1D9]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 6 9 17l-5-5"></path>
                        </svg>
                    </span>
                    <div>
                        <h3 class="text-lg font-bold tracking-[-0.01em] text-white"><?php esc_html_e('Persönliche Rückmeldung von Jona', 'agentur-jg-theme'); ?></h3>
                        <p class="mt-2 text-base leading-7 text-[#D7DEEA]"><?php esc_html_e('Sie bekommen eine ehrliche Einschätzung, was realistisch ist und was keinen Sinn ergibt.', 'agentur-jg-theme'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
