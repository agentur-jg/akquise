<?php
/**
 * Template Name: Ablauf
 */

get_header();

$mono = "[font-family:'IBM_Plex_Mono',ui-monospace,monospace]";

$icon_arrow_right = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>';
$icon_check = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>';

$kicker = function (string $text, bool $light = false) use ($mono): string {
    $color = $light ? 'text-[#98C1D9]' : 'text-[#3D5A80]';
    $line  = $light ? 'before:bg-[#98C1D9]' : 'before:bg-[#4E6E97]';

    return '<p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase ' . $color
        . ' ' . $mono . ' tracking-[0.16em] before:h-px before:w-6 ' . $line . '">'
        . esc_html($text) . '</p>';
};

$grid_overlay = function (bool $light = false): string {
    if ($light) {
        return '<div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(255,255,255,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.055)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_72%_28%,#000,transparent_72%)]"></div>';
    }

    return '<div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(26,34,56,0.055)_1px,transparent_1px),linear-gradient(90deg,rgba(26,34,56,0.055)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_72%_28%,#000,transparent_72%)]"></div>';
};

$steps = [
    [
        'title' => __('Erstkontakt', 'agentur-jg-theme'),
        'text' => __('Eine kurze Nachricht reicht vollkommen aus: über das Formular, per WhatsApp oder per E-Mail. Sie müssen kein fertiges Konzept mitbringen und auch keine perfekte Aufgabenbeschreibung formulieren. Wichtig ist nur, dass ich grob verstehe, worum es geht und wo Sie gerade stehen. Alles Weitere klären wir gemeinsam.', 'agentur-jg-theme'),
        'meaning' => __('Sie können niedrigschwellig starten, ohne vorher intern alles fertig sortieren zu müssen.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Persönliches Kennenlerngespräch', 'agentur-jg-theme'),
        'text' => __('Im ersten Gespräch geht es um Ihre Ausgangslage, Ihr Ziel und Ihre Erwartungen. Ich höre zuerst zu, stelle Rückfragen und versuche zu verstehen, was wirklich gebraucht wird. Es geht nicht darum, Ihnen sofort eine Lösung zu verkaufen. Es geht darum, die Situation sauber einzuordnen.', 'agentur-jg-theme'),
        'meaning' => __('Sie sprechen direkt mit Jona und bekommen kein standardisiertes Verkaufsgespräch.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Analyse & ehrliche Einschätzung', 'agentur-jg-theme'),
        'text' => __('Nach dem Gespräch schaue ich mir Ihre Website, Ihre Sichtbarkeit, Ihre Zielgruppe oder die relevante Ausgangslage genauer an. Danach bekommen Sie eine klare Rückmeldung dazu, was sinnvoll erscheint und was nicht. Dazu gehört auch, Dinge auszusprechen, die vielleicht unbequem sind. Eine ehrliche Einschätzung ist oft wertvoller als ein vorschnelles Ja.', 'agentur-jg-theme'),
        'meaning' => __('Sie bekommen Orientierung, bevor Budget in Umsetzung fließt.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Angebot & Entscheidung', 'agentur-jg-theme'),
        'text' => __('Wenn eine Zusammenarbeit sinnvoll wirkt, erhalten Sie ein klares schriftliches Angebot. Darin steht, was gemacht wird, was es kostet und welche Rahmenbedingungen gelten. Es gibt keinen künstlichen Druck, keine versteckten Kosten und keine Frist, die nur Verkaufsdruck erzeugen soll. Sie entscheiden in Ruhe.', 'agentur-jg-theme'),
        'meaning' => __('Sie wissen vor Ihrer Entscheidung genau, worauf Sie sich einlassen.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Umsetzung', 'agentur-jg-theme'),
        'text' => __('In der Umsetzung hängt der genaue Ablauf vom Projekt ab: Website, Optimierung, SEO, Google Ads oder Analyse brauchen unterschiedliche Schritte. Wichtig bleibt immer, dass der Fortschritt nachvollziehbar ist. Sie wissen, wo wir stehen, welche Entscheidungen anstehen und was als Nächstes passiert. Kommunikation läuft direkt, ohne Zwischenglied.', 'agentur-jg-theme'),
        'meaning' => __('Sie bleiben eingebunden, ohne das Projekt selbst steuern zu müssen.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Ergebnis & weiteres Vorgehen', 'agentur-jg-theme'),
        'text' => __('Zum Abschluss schauen wir gemeinsam auf das Ergebnis. Was wurde umgesetzt? Was funktioniert bereits? Was sollte beobachtet, gemessen oder später weiterentwickelt werden? So endet ein Projekt nicht mit einer Dateiübergabe, sondern mit einem klaren Blick auf den nächsten sinnvollen Schritt.', 'agentur-jg-theme'),
        'meaning' => __('Sie bekommen nicht nur ein Ergebnis, sondern auch eine Einschätzung für danach.', 'agentur-jg-theme'),
    ],
];

$commitments = [
    [
        'title' => __('Keine Überraschungen', 'agentur-jg-theme'),
        'text'  => __('Absprachen, Umfang und Kosten werden schriftlich festgehalten.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Direkte Kommunikation', 'agentur-jg-theme'),
        'text'  => __('Sie sprechen direkt mit mir, nicht mit wechselnden Ansprechpartnern.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Ehrliche Einschätzung', 'agentur-jg-theme'),
        'text'  => __('Wenn etwas nicht sinnvoll ist, sage ich das klar und begründe es.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Kein Verkaufsdruck', 'agentur-jg-theme'),
        'text'  => __('Sie entscheiden im eigenen Tempo und ohne künstliche Dringlichkeit.', 'agentur-jg-theme'),
    ],
];

$faqs = [
    [
        'q' => __('Muss ich mich vorbereiten?', 'agentur-jg-theme'),
        'a' => __('Nein. Ein paar Sätze zur Ausgangslage reichen. Wenn Unterlagen, Links oder Kennzahlen hilfreich sind, klären wir das im Gespräch.', 'agentur-jg-theme'),
    ],
    [
        'q' => __('Was wenn mir das Angebot nicht passt?', 'agentur-jg-theme'),
        'a' => __('Dann passt es nicht. Es gibt keine Verpflichtung und kein Drama. Sie entscheiden, ob der vorgeschlagene Weg für Sie sinnvoll ist.', 'agentur-jg-theme'),
    ],
    [
        'q' => __('Wie lange dauert ein typisches Projekt?', 'agentur-jg-theme'),
        'a' => __('Das hängt vom Umfang ab. Viele KMU-Projekte bewegen sich in einem Rahmen von 4 bis 8 Wochen, wenn Entscheidungen und Inhalte zügig vorliegen.', 'agentur-jg-theme'),
    ],
    [
        'q' => __('Gibt es Projekte, die Sie ablehnen?', 'agentur-jg-theme'),
        'a' => __('Ja. Wenn Erwartung, Budget, Zeitrahmen oder Realität weit auseinanderliegen, sage ich das ehrlich. Das schützt beide Seiten vor einer Zusammenarbeit, die nicht tragen würde.', 'agentur-jg-theme'),
    ],
];
?>

<main class="pt-[88px]">
    <section class="relative isolate overflow-hidden border-b border-[rgba(26,34,56,0.10)] bg-white">
        <?php echo $grid_overlay(false); ?>

        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="max-w-3xl">
                <?php echo $kicker(__('Zusammenarbeit', 'agentur-jg-theme')); ?>

                <h1 class="text-[clamp(2.35rem,5vw,4.1rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-[#1A2238]">
                    <?php esc_html_e('So läuft eine Zusammenarbeit mit Agentur JG ab.', 'agentur-jg-theme'); ?>
                </h1>

                <p class="mt-7 max-w-2xl text-lg leading-8 text-[#51607C]">
                    <?php esc_html_e('Klar, nachvollziehbar, ohne Überraschungen — von der ersten Nachricht bis zum Ergebnis.', 'agentur-jg-theme'); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
        <div class="mx-auto max-w-[1200px] px-5 py-12 sm:px-8 lg:px-10 lg:py-16">
            <p class="max-w-3xl text-xl font-semibold leading-8 tracking-[-0.01em] text-[#1A2238]">
                <?php esc_html_e('Viele Inhaber scheuen den ersten Schritt, weil sie nicht wissen, was sie erwartet. Diese Seite erklärt, was tatsächlich passiert — Schritt für Schritt, ruhig und ohne künstliches Agenturtheater.', 'agentur-jg-theme'); ?>
            </p>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="max-w-3xl">
                <?php echo $kicker(__('Ablauf', 'agentur-jg-theme')); ?>
                <h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]">
                    <?php esc_html_e('Von der ersten Nachricht bis zum nächsten sinnvollen Schritt.', 'agentur-jg-theme'); ?>
                </h2>
            </div>

            <ol class="relative mt-14 grid gap-9">
                <?php foreach ($steps as $index => $step) : ?>
                    <li class="grid grid-cols-[42px_1fr] gap-5">
                        <div class="relative">
                            <span class="relative z-10 flex h-12 w-12 items-center justify-center rounded-full bg-[#1A2238] text-sm font-semibold text-white <?php echo esc_attr($mono); ?> shadow-[0_8px_24px_rgba(20,26,43,0.18)] ring-4 ring-white">
                                <?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?>
                            </span>
                            <?php if ($index < count($steps) - 1) : ?>
                                <span class="absolute left-7 top-7 h-full w-px bg-[#EDEFF3]" aria-hidden="true"></span>
                            <?php endif; ?>
                        </div>

                        <article class="rounded-[18px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm sm:p-7">
                            <h3 class="text-2xl font-bold leading-tight tracking-[-0.02em] text-[#1A2238]">
                                <?php echo esc_html($step['title']); ?>
                            </h3>
                            <p class="mt-4 text-base leading-7 text-[#51607C] sm:text-lg sm:leading-8">
                                <?php echo esc_html($step['text']); ?>
                            </p>

                            <div class="mt-6 rounded-[14px] border border-[#3D5A80]/20 bg-[#F6F8FA] p-5">
                                <p class="text-xs font-medium uppercase tracking-[0.14em] text-[#3D5A80] <?php echo esc_attr($mono); ?>">
                                    <?php esc_html_e('Was das bedeutet', 'agentur-jg-theme'); ?>
                                </p>
                                <p class="mt-2 text-base font-semibold leading-7 text-[#1A2238]">
                                    <?php echo esc_html($step['meaning']); ?>
                                </p>
                            </div>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <section class="relative isolate overflow-hidden bg-[#1A2238] text-white">
        <?php echo $grid_overlay(true); ?>
        <div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>
        <div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>

        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="max-w-3xl">
                <?php echo $kicker(__('Was Sie von mir erwarten können', 'agentur-jg-theme'), true); ?>
                <h2 class="text-[clamp(2rem,4vw,3.2rem)] font-extrabold leading-[1.04] tracking-[-0.035em] text-white">
                    <?php esc_html_e('Transparenz, Klarheit und eine ehrliche Einschätzung — nicht mehr, nicht weniger.', 'agentur-jg-theme'); ?>
                </h2>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($commitments as $commitment) : ?>
                    <article class="rounded-[18px] border border-[rgba(215,222,234,0.12)] bg-white/[0.06] p-6 shadow-[0_24px_70px_rgba(0,0,0,0.18)] backdrop-blur">
                        <span class="flex h-11 w-11 items-center justify-center rounded-[12px] bg-white/10 text-[#98C1D9] ring-1 ring-white">
                            <?php echo $icon_check; ?>
                        </span>
                        <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-white"><?php echo esc_html($commitment['title']); ?></h3>
                        <p class="mt-3 text-base leading-7 text-[#D7DEEA]"><?php echo esc_html($commitment['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="max-w-3xl">
                <?php echo $kicker(__('Häufige Fragen', 'agentur-jg-theme')); ?>
                <h2 class="text-[clamp(1.9rem,3.6vw,2.85rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]">
                    <?php esc_html_e('Was viele vor dem ersten Schritt beschäftigt.', 'agentur-jg-theme'); ?>
                </h2>
            </div>

            <div class="mt-10 grid max-w-3xl gap-3.5">
                <?php foreach ($faqs as $index => $faq) : ?>
                    <div class="faq-item rounded-[14px] border border-[rgba(26,34,56,0.12)] bg-white px-6 transition hover:border-[rgba(61,90,128,0.30)]">
                        <h3 class="text-lg font-semibold leading-7 text-[#1A2238]">
                            <button type="button" class="faq-trigger flex w-full cursor-pointer items-center justify-between gap-6 py-5 text-left" aria-expanded="false" aria-controls="ablauf-faq-panel-<?php echo esc_attr((string) $index); ?>">
                                <span><?php echo esc_html($faq['q']); ?></span>
                                <span class="faq-icon text-2xl font-light leading-none text-[#3D5A80]" aria-hidden="true">+</span>
                            </button>
                        </h3>
                        <div class="faq-body" id="ablauf-faq-panel-<?php echo esc_attr((string) $index); ?>" role="region">
                            <div>
                                <p class="-mt-1 max-w-3xl pb-6 text-base leading-7 text-[#51607C]">
                                    <?php echo esc_html($faq['a']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="border-t border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
        <div class="mx-auto max-w-xl px-5 py-16 text-center sm:px-8 lg:py-24">
            <h2 class="text-[clamp(2rem,3.8vw,3rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]">
                <?php esc_html_e('Der erste Schritt ist eine kurze Nachricht.', 'agentur-jg-theme'); ?>
            </h2>
            <div class="mt-9">
                <a class="inline-flex items-center justify-center gap-2 rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                    <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
                    <?php echo $icon_arrow_right; ?>
                </a>
            </div>
            <p class="mt-6 text-sm font-medium text-[#636E89]">
                <?php esc_html_e('Keine Verpflichtung · Persönliche Antwort · Kein Verkaufsgespräch', 'agentur-jg-theme'); ?>
            </p>
        </div>
    </section>
</main>

<script>
    (function () {
        document.querySelectorAll('.faq-trigger').forEach(function (button) {
            button.addEventListener('click', function () {
                var item = button.closest('.faq-item');
                var isOpen = item.classList.contains('open');

                item.parentElement.querySelectorAll('.faq-item.open').forEach(function (openItem) {
                    if (openItem !== item) {
                        openItem.classList.remove('open');
                        openItem.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
                    }
                });

                item.classList.toggle('open', !isOpen);
                button.setAttribute('aria-expanded', String(!isOpen));
            });
        });
    })();
</script>

<?php
get_footer();
