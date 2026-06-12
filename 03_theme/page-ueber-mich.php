<?php
/**
 * Template Name: Über Mich
 */

$jona_private_portrait_url = home_url('/agentur-jg-private/jona-portrait/');

get_header();

$icon_check  = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>';
$icon_trend  = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 17 9 11l4 4 8-8"/><path d="M16 4h5v5"/></svg>';
$icon_target = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.4"/></svg>';
$icon_alert  = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 9v4"/><path d="M12 17h.01"/><path d="M10.3 4.3 2.6 18a2 2 0 0 0 1.7 3h15.4a2 2 0 0 0 1.7-3L13.7 4.3a2 2 0 0 0-3.4 0Z"/></svg>';
$icon_user   = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 21a7 7 0 0 0-14 0"/><circle cx="12" cy="8" r="4"/></svg>';
$icon_leaf   = '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 20A7 7 0 0 1 4 13c0-5 4-9 12-9h4v4c0 8-4 12-9 12Z"/><path d="M7 17c3-1 6-4 9-9"/></svg>';
$mono = "[font-family:'IBM_Plex_Mono',ui-monospace,monospace]";

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

$values = [
    [
        'icon'  => $icon_target,
        'title' => __('Klarheit', 'agentur-jg-theme'),
        'text'  => __('Ich erkläre komplizierte Dinge so, dass sie entscheidbar werden. Kein Fachjargon ohne Übersetzung, keine Präsentationen, nach denen mehr Fragen offen sind als vorher.', 'agentur-jg-theme'),
    ],
    [
        'icon'  => $icon_check,
        'title' => __('Ehrlichkeit', 'agentur-jg-theme'),
        'text'  => __('Ich verspreche nicht, was niemand seriös versprechen kann. Keine künstliche Dringlichkeit, keine Show, sondern eine klare Einschätzung der Chancen und Grenzen.', 'agentur-jg-theme'),
    ],
    [
        'icon'  => $icon_trend,
        'title' => __('Wirtschaftlichkeit', 'agentur-jg-theme'),
        'text'  => __('Eine Maßnahme muss zu Ziel, Budget und Ausgangslage passen. Wenn ein kleinerer Schritt sinnvoller ist als ein großer Relaunch, sage ich genau das.', 'agentur-jg-theme'),
    ],
    [
        'icon'  => $icon_leaf,
        'title' => __('Nachhaltigkeit', 'agentur-jg-theme'),
        'text'  => __('Ich baue lieber ein solides Fundament als schnelle Effekte, die nach wenigen Wochen verpuffen. Struktur, Technik und Inhalte sollen langfristig tragfähig bleiben.', 'agentur-jg-theme'),
    ],
    [
        'icon'  => $icon_alert,
        'title' => __('Vertrauen', 'agentur-jg-theme'),
        'text'  => __('Viele Unternehmen haben schlechte Erfahrungen mit Agenturen gemacht. Deshalb arbeite ich ruhig, transparent und nachvollziehbar, damit Sie jederzeit wissen, woran Sie sind.', 'agentur-jg-theme'),
    ],
    [
        'icon'  => $icon_user,
        'title' => __('Persönlicher Kontakt', 'agentur-jg-theme'),
        'text'  => __('Sie sprechen direkt mit mir. Kein anonymes Agenturgefüge, keine wechselnden Ansprechpartner, kein Gefühl, erst durch drei Ebenen zu müssen.', 'agentur-jg-theme'),
    ],
];

$principles = [
    [
        'title' => __('Zuerst verstehen, dann handeln', 'agentur-jg-theme'),
        'text'  => __('Ich mache kein Angebot ohne Blick auf Ausgangslage, Zielgruppe und Ziel. Jede Maßnahme soll einem klar definierten Zweck dienen.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Die Website als Werkzeug', 'agentur-jg-theme'),
        'text'  => __('Eine Website ist kein Designprojekt um des Designs willen. Sie soll Anfragen, Bewerbungen oder Umsatz wahrscheinlicher machen und diesen Beitrag messbar unterstützen.', 'agentur-jg-theme'),
    ],
    [
        'title' => __('Ehrliche Einschätzung statt Ja-Sager', 'agentur-jg-theme'),
        'text'  => __('Wenn etwas keinen Sinn ergibt, sage ich das. Lieber eine unbequeme Wahrheit als eine teure Fehlinvestition, die sich später schönreden muss.', 'agentur-jg-theme'),
    ],
];
?>

<section class="relative isolate overflow-hidden bg-white pt-[76px]">
    <?php echo $grid_overlay(false); ?>

    <div class="mx-auto grid max-w-[1200px] items-center gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[1.05fr_0.95fr] lg:px-10 lg:py-24">
        <div class="max-w-3xl">
            <?php echo $kicker(__('Über Jona', 'agentur-jg-theme')); ?>

            <h1 class="text-[clamp(2.35rem,5vw,4.1rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-[#1A2238]">
                <?php esc_html_e('Ich bin Jona und ich helfe KMU, online sichtbar und überzeugend zu werden.', 'agentur-jg-theme'); ?>
            </h1>

            <div class="mt-7 grid gap-5 text-lg leading-8 text-[#51607C]">
                <p><?php esc_html_e('Viele Inhaber wissen, dass ihre Website wichtig ist, haben aber keine Lust auf Agenturfloskeln, Druck oder Maßnahmen, die am Ende niemand erklären kann. Genau da setze ich an.', 'agentur-jg-theme'); ?></p>
                <p><?php esc_html_e('Ich unterstütze kleine und mittelständische Unternehmen dabei, ihren digitalen Auftritt verständlich, wirtschaftlich und vertrauenswürdig aufzubauen. Ohne großes Theater, aber mit einem klaren Blick darauf, was Ihnen wirklich weiterhilft.', 'agentur-jg-theme'); ?></p>
            </div>
        </div>

        <div class="w-full max-w-[460px] lg:justify-self-end">
            <div class="relative overflow-hidden rounded-[18px] border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] shadow-[0_18px_50px_rgba(20,26,43,0.10)]">
                <div
                    class="relative aspect-[4/5] select-none bg-cover bg-center"
                    style="background-image: url('<?php echo esc_url($jona_private_portrait_url); ?>');"
                    role="img"
                    aria-label="<?php esc_attr_e('Jona von Agentur JG', 'agentur-jg-theme'); ?>"
                    data-private-image
                ></div>
            </div>
        </div>
    </div>
</section>

<section class="border-y border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
    <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
        <div class="max-w-3xl">
            <?php echo $kicker(__('Werte & Haltung', 'agentur-jg-theme')); ?>
            <h2 class="text-[clamp(2rem,3.8vw,3.1rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]">
                <?php esc_html_e('Was mich antreibt und was ich nie tun werde.', 'agentur-jg-theme'); ?>
            </h2>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($values as $value) : ?>
                <article class="border border-[rgba(26,34,56,0.10)] rounded-[16px] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[rgba(61,90,128,0.28)] hover:shadow-[0_18px_45px_rgba(20,26,43,0.10)]">
                    <span class="flex h-11 w-11 items-center justify-center rounded-[12px] bg-[#F6F8FA] text-[#3D5A80] ring-1 ring-[rgba(26,34,56,0.08)]">
                        <?php echo $value['icon']; ?>
                    </span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-[#1A2238]"><?php echo esc_html($value['title']); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#51607C]"><?php echo esc_html($value['text']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="relative isolate overflow-hidden bg-[#1A2238] text-white">
    <?php echo $grid_overlay(true); ?>
    <div class="absolute inset-x-0 top-0 h-px bg-white/10"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>

    <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
        <div class="max-w-3xl">
            <?php echo $kicker(__('Wie ich arbeite', 'agentur-jg-theme'), true); ?>
            <h2 class="text-[clamp(2rem,4vw,3.2rem)] font-extrabold leading-[1.04] tracking-[-0.035em] text-[#D7DEEA]">
                <?php esc_html_e('Strategie vor Umsetzung. Wirtschaftlichkeit vor Ästhetik.', 'agentur-jg-theme'); ?>
            </h2>
        </div>

        <ol class="mt-12 grid gap-5 lg:grid-cols-3">
            <?php foreach ($principles as $index => $principle) : ?>
                <li class="rounded-[18px] border border-[rgba(215,222,234,0.12)] bg-white/[0.06] p-7 shadow-[0_24px_70px_rgba(0,0,0,0.18)] backdrop-blur">
                    <span class="inline-flex h-12 w-12 items-center justify-center rounded-full border border-[rgba(215,222,234,0.12)] bg-white/10 text-base font-semibold text-[#D7DEEA] <?php echo esc_attr($mono); ?>">
                        <?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?>
                    </span>
                    <h3 class="mt-6 text-xl font-bold tracking-[-0.01em] text-white"><?php echo esc_html($principle['title']); ?></h3>
                    <p class="mt-3 text-base leading-7 text-[#D7DEEA]"><?php echo esc_html($principle['text']); ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="bg-white">
    <div class="mx-auto max-w-xl px-5 py-16 text-center sm:px-8 lg:py-24">
        <h2 class="text-[clamp(2rem,3.8vw,3rem)] font-extrabold leading-[1.06] tracking-[-0.035em] text-[#1A2238]">
            <?php esc_html_e('Lernen Sie mich kennen, unverbindlich.', 'agentur-jg-theme'); ?>
        </h2>
        <p class="mt-6 text-lg leading-8 text-[#51607C]">
            <?php esc_html_e('Schildern Sie kurz Ihr Anliegen. Es braucht keinen fertigen Plan und keinen perfekten Pitch, nur ein paar Sätze dazu, wo Sie gerade stehen.', 'agentur-jg-theme'); ?>
        </p>
        <div class="mt-9">
            <a class="inline-flex items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php echo esc_url(home_url('/kontakt/')); ?>">
                <?php esc_html_e('Unverbindlich anfragen', 'agentur-jg-theme'); ?>
            </a>
        </div>
        <p class="mt-6 text-sm font-medium text-[#636E89]">
            <?php esc_html_e('Keine Verpflichtung · Persönliche Antwort · Kein Verkaufsgespräch', 'agentur-jg-theme'); ?>
        </p>
    </div>
</section>

<?php
get_footer();
