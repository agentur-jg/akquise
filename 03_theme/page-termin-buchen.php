<?php
/*
Template Name: Termin buchen
*/

$form_sent  = isset( $_GET['angefragt'] ) && $_GET['angefragt'] === '1';
$form_error = isset( $_GET['angefragt'] ) && $_GET['angefragt'] === 'fehler';
$form_values = [
    'name'        => '',
    'unternehmen' => '',
    'kontakt'     => '',
    'anliegen'    => '',
    'datenschutz' => false,
];

if ( $form_error && ! empty( $_GET['formular'] ) ) {
    $form_token = sanitize_key( wp_unslash( $_GET['formular'] ) );
    $stored_form_values = get_transient( 'agentur_jg_contact_form_' . $form_token );

    if ( is_array( $stored_form_values ) ) {
        $form_values = wp_parse_args( $stored_form_values, $form_values );
    }
}

// WhatsApp-Nummer hier anpassen (nur Ziffern mit Ländervorwahl, ohne +)
define( 'AGENTUR_JG_WHATSAPP_NUMBER', '+491777091573' );

get_header();
?>

<div class="pt-[76px]">

    <section class="bg-white">
        <div class="mx-auto grid max-w-[1200px] gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[1fr_1.05fr] lg:items-start lg:px-10 lg:py-24">

            <div class="max-w-xl">
                <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                    <?php esc_html_e( 'Unverbindlich anfragen', 'agentur-jg-theme' ); ?>
                </p>

                <h1 class="text-[clamp(2rem,4vw,3.2rem)] font-extrabold leading-[1.04] tracking-[-0.035em] text-[#1A2238]">
                    <?php esc_html_e( 'Schildern Sie kurz, was Sie beschäftigt.', 'agentur-jg-theme' ); ?>
                </h1>

                <p class="mt-6 text-lg leading-8 text-[#51607C]">
                    <?php esc_html_e( 'Kein Anruf nötig. Ein, zwei Sätze reichen – egal ob Sie noch keine Website haben, Ihre Seite kaum Ergebnisse bringt oder Sie einfach wissen möchten, was bei Ihnen sinnvoll wäre. Ich melde mich persönlich zurück.', 'agentur-jg-theme' ); ?>
                </p>

                <div class="mt-7 rounded-[14px] border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-5 py-4">
                    <p class="text-sm leading-6 text-[#51607C]">
                        <span class="font-semibold text-[#1A2238]"><?php esc_html_e( 'Hinweis:', 'agentur-jg-theme' ); ?></span>
                        <?php esc_html_e( ' Ich führe die Agentur JG nebenberuflich und bin daher nicht rund um die Uhr erreichbar. Anfragen beantworte ich persönlich – in der Regel innerhalb von 1–2 Werktagen.', 'agentur-jg-theme' ); ?>
                    </p>
                </div>

                <div class="mt-10">
                    <p class="mb-3 text-xs font-medium uppercase tracking-[0.16em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                        <?php esc_html_e( 'Oder direkt schreiben', 'agentur-jg-theme' ); ?>
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a
                            href="https://wa.me/<?php echo esc_attr( AGENTUR_JG_WHATSAPP_NUMBER ); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2.5 rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white px-5 py-3 text-sm font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-[#F6F8FA]"
                        >
                            <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="#25D366" aria-hidden="true">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <?php esc_html_e( 'WhatsApp', 'agentur-jg-theme' ); ?>
                        </a>
                        <a
                            href="mailto:kontakt@agentur-jg.de"
                            class="inline-flex items-center gap-2.5 rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white px-5 py-3 text-sm font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-[#F6F8FA]"
                        >
                            <svg class="h-4 w-4 shrink-0 text-[#3D5A80]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                <path d="m2 7 10 7 10-7"></path>
                            </svg>
                            <?php esc_html_e( 'E-Mail', 'agentur-jg-theme' ); ?>
                        </a>
                    </div>
                </div>

                <div class="mt-10 grid gap-4 border-t border-[rgba(26,34,56,0.10)] pt-8">
                    <div class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#F6F8FA] ring-1 ring-[rgba(26,34,56,0.10)] text-[#3D5A80]" aria-hidden="true">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>
                        </span>
                        <p class="text-sm leading-6 text-[#51607C]">
                            <span class="font-semibold text-[#1A2238]"><?php esc_html_e( 'Keine Verpflichtung.', 'agentur-jg-theme' ); ?></span>
                            <?php esc_html_e( ' Sie müssen noch nichts entschieden haben.', 'agentur-jg-theme' ); ?>
                        </p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#F6F8FA] ring-1 ring-[rgba(26,34,56,0.10)] text-[#3D5A80]" aria-hidden="true">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>
                        </span>
                        <p class="text-sm leading-6 text-[#51607C]">
                            <span class="font-semibold text-[#1A2238]"><?php esc_html_e( 'Persönliche Antwort.', 'agentur-jg-theme' ); ?></span>
                            <?php esc_html_e( ' Direkt von Jona, nicht von einem Team.', 'agentur-jg-theme' ); ?>
                        </p>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#F6F8FA] ring-1 ring-[rgba(26,34,56,0.10)] text-[#3D5A80]" aria-hidden="true">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>
                        </span>
                        <p class="text-sm leading-6 text-[#51607C]">
                            <span class="font-semibold text-[#1A2238]"><?php esc_html_e( 'Kein Verkaufsgespräch.', 'agentur-jg-theme' ); ?></span>
                            <?php esc_html_e( ' Wir klären zuerst, ob und wie ich helfen kann.', 'agentur-jg-theme' ); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <?php if ( $form_sent ) : ?>

                    <div class="rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] p-8 text-center sm:p-10">
                        <span class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-white ring-1 ring-[rgba(26,34,56,0.10)] text-[#3D5A80]" aria-hidden="true">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg>
                        </span>
                        <h2 class="mt-6 text-2xl font-bold tracking-[-0.02em] text-[#1A2238]">
                            <?php esc_html_e( 'Anfrage eingegangen.', 'agentur-jg-theme' ); ?>
                        </h2>
                        <p class="mx-auto mt-4 max-w-sm text-base leading-7 text-[#51607C]">
                            <?php esc_html_e( 'Vielen Dank. Ich habe Ihre Anfrage erhalten und melde mich persönlich – in der Regel innerhalb von 24 Stunden.', 'agentur-jg-theme' ); ?>
                        </p>
                        <a
                            href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            class="mt-8 inline-flex items-center justify-center rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white px-5 py-3 text-sm font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-[#F6F8FA]"
                        >
                            <?php esc_html_e( 'Zurück zur Startseite', 'agentur-jg-theme' ); ?>
                        </a>
                    </div>

                <?php else : ?>

                    <div class="overflow-hidden rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white shadow-[0_18px_50px_rgba(20,26,43,0.08)]">

                        <div class="border-b border-[rgba(26,34,56,0.10)] bg-[#F6F8FA] px-6 py-4 sm:px-8">
                            <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                <?php esc_html_e( 'Anfrage senden', 'agentur-jg-theme' ); ?>
                            </p>
                            <?php if ( $form_error ) : ?>
                                <p class="mt-2 text-sm font-medium text-red-600" role="alert">
                                    <?php esc_html_e( 'Bitte füllen Sie alle Pflichtfelder aus und bestätigen Sie die Datenschutzerklärung.', 'agentur-jg-theme' ); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                        <form
                            method="post"
                            action="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"
                            class="grid gap-5 p-6 sm:p-8"
                            novalidate
                        >
                            <?php wp_nonce_field( 'agentur_jg_contact', 'agentur_jg_contact_nonce' ); ?>

                            <div>
                                <label for="cf-name" class="mb-2 block text-sm font-semibold text-[#1A2238]">
                                    <?php esc_html_e( 'Ihr Name', 'agentur-jg-theme' ); ?>
                                    <span class="text-[#98A8BE]" aria-hidden="true"> *</span>
                                </label>
                                <input
                                    type="text"
                                    id="cf-name"
                                    name="name"
                                    required
                                    autocomplete="name"
                                    placeholder="<?php esc_attr_e( 'Max Mustermann', 'agentur-jg-theme' ); ?>"
                                    value="<?php echo esc_attr( $form_values['name'] ); ?>"
                                    class="w-full rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-[#F6F8FA] px-4 py-3 text-base text-[#1A2238] placeholder-[#98A8BE] outline-none transition focus:border-[#3D5A80] focus:bg-white focus:ring-2 focus:ring-[#3D5A80]/20"
                                >
                            </div>

                            <div>
                                <label for="cf-unternehmen" class="mb-2 block text-sm font-semibold text-[#1A2238]">
                                    <?php esc_html_e( 'Unternehmen', 'agentur-jg-theme' ); ?>
                                    <span class="ml-1 text-xs font-normal text-[#98A8BE]"><?php esc_html_e( '(optional)', 'agentur-jg-theme' ); ?></span>
                                </label>
                                <input
                                    type="text"
                                    id="cf-unternehmen"
                                    name="unternehmen"
                                    autocomplete="organization"
                                    placeholder="<?php esc_attr_e( 'Mustermann GmbH', 'agentur-jg-theme' ); ?>"
                                    value="<?php echo esc_attr( $form_values['unternehmen'] ); ?>"
                                    class="w-full rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-[#F6F8FA] px-4 py-3 text-base text-[#1A2238] placeholder-[#98A8BE] outline-none transition focus:border-[#3D5A80] focus:bg-white focus:ring-2 focus:ring-[#3D5A80]/20"
                                >
                            </div>

                            <div>
                                <label for="cf-kontakt" class="mb-2 block text-sm font-semibold text-[#1A2238]">
                                    <?php esc_html_e( 'Telefon oder E-Mail', 'agentur-jg-theme' ); ?>
                                    <span class="text-[#98A8BE]" aria-hidden="true"> *</span>
                                </label>
                                <input
                                    type="text"
                                    id="cf-kontakt"
                                    name="kontakt"
                                    required
                                    autocomplete="email"
                                    value="<?php echo esc_attr( $form_values['kontakt'] ); ?>"
                                    placeholder="<?php esc_attr_e( 'max@beispiel.de oder 0151 …', 'agentur-jg-theme' ); ?>"
                                    class="w-full rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-[#F6F8FA] px-4 py-3 text-base text-[#1A2238] placeholder-[#98A8BE] outline-none transition focus:border-[#3D5A80] focus:bg-white focus:ring-2 focus:ring-[#3D5A80]/20"
                                >
                                <p class="mt-1.5 text-xs text-[#636E89]">
                                    <?php esc_html_e( 'Darüber melde ich mich zurück.', 'agentur-jg-theme' ); ?>
                                </p>
                            </div>

                            <div>
                                <label for="cf-anliegen" class="mb-2 block text-sm font-semibold text-[#1A2238]">
                                    <?php esc_html_e( 'Was beschäftigt Sie?', 'agentur-jg-theme' ); ?>
                                    <span class="text-[#98A8BE]" aria-hidden="true"> *</span>
                                </label>
                                <textarea
                                    id="cf-anliegen"
                                    name="anliegen"
                                    required
                                    rows="5"
                                    placeholder="<?php esc_attr_e( 'Beschreiben Sie kurz Ihre Situation – ein, zwei Sätze reichen völlig aus …', 'agentur-jg-theme' ); ?>"
                                    class="w-full resize-none rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-[#F6F8FA] px-4 py-3 text-base text-[#1A2238] placeholder-[#98A8BE] outline-none transition focus:border-[#3D5A80] focus:bg-white focus:ring-2 focus:ring-[#3D5A80]/20"
                                ><?php echo esc_textarea( $form_values['anliegen'] ); ?></textarea>
                            </div>

                            <div class="flex items-start gap-3">
                                <input
                                    type="checkbox"
                                    id="cf-datenschutz"
                                    name="datenschutz"
                                    required
                                    <?php checked( ! empty( $form_values['datenschutz'] ) ); ?>
                                    class="mt-0.5 h-4 w-4 shrink-0 cursor-pointer rounded border-[rgba(26,34,56,0.24)] accent-[#3D5A80]"
                                >
                                <label for="cf-datenschutz" class="cursor-pointer text-sm leading-6 text-[#51607C]">
                                    <?php
                                    printf(
                                        /* translators: %s: Link zur Datenschutzerklärung */
                                        esc_html__( 'Ich habe die %s gelesen und bin einverstanden.', 'agentur-jg-theme' ),
                                        '<a href="' . esc_url( home_url( '/datenschutz/' ) ) . '" target="_blank" class="font-medium text-[#3D5A80] underline underline-offset-2 hover:text-[#1A2238]">' . esc_html__( 'Datenschutzerklärung', 'agentur-jg-theme' ) . '</a>'
                                    );
                                    ?>
                                </label>
                            </div>

                            <button
                                type="submit"
                                class="inline-flex w-full items-center justify-center rounded-[10px] bg-[#1A2238] px-6 py-4 text-base font-semibold text-white shadow-sm transition hover:-translate-y-px hover:bg-[#232D49] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]"
                            >
                                <?php esc_html_e( 'Anfrage absenden', 'agentur-jg-theme' ); ?>
                            </button>

                            <p class="text-center text-xs text-[#98A8BE]">
                                <?php esc_html_e( 'Antwort in der Regel innerhalb von 24 Stunden.', 'agentur-jg-theme' ); ?>
                            </p>

                        </form>
                    </div>

                <?php endif; ?>
            </div>

        </div>
    </section>

    <section class="border-t border-[rgba(26,34,56,0.10)] bg-[#F6F8FA]">
        <div class="mx-auto max-w-[1200px] px-5 py-14 sm:px-8 lg:px-10 lg:py-20">
            <p class="mb-10 text-center text-xs font-medium uppercase tracking-[0.16em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                <?php esc_html_e( 'So läuft es ab', 'agentur-jg-theme' ); ?>
            </p>
            <div class="grid gap-5 sm:grid-cols-3">
                <div class="rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">01</span>
                    <h3 class="mt-5 text-lg font-bold tracking-[-0.01em] text-[#1A2238]">
                        <?php esc_html_e( 'Kurz schreiben', 'agentur-jg-theme' ); ?>
                    </h3>
                    <p class="mt-2 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e( 'Schildern Sie in wenigen Sätzen Ihre Situation – per Formular, E-Mail oder WhatsApp. Kein perfekter Brief, keine vollständige Projektbeschreibung nötig.', 'agentur-jg-theme' ); ?>
                    </p>
                </div>
                <div class="rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">02</span>
                    <h3 class="mt-5 text-lg font-bold tracking-[-0.01em] text-[#1A2238]">
                        <?php esc_html_e( 'Persönliche Rückmeldung', 'agentur-jg-theme' ); ?>
                    </h3>
                    <p class="mt-2 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e( 'Ich melde mich innerhalb von 24 Stunden per Telefon oder E-Mail zurück – persönlich, nicht automatisiert.', 'agentur-jg-theme' ); ?>
                    </p>
                </div>
                <div class="rounded-[16px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-[#3D5A80]/20 bg-[#F6F8FA] text-xs font-semibold text-[#34507A] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">03</span>
                    <h3 class="mt-5 text-lg font-bold tracking-[-0.01em] text-[#1A2238]">
                        <?php esc_html_e( 'Persönliches Gespräch', 'agentur-jg-theme' ); ?>
                    </h3>
                    <p class="mt-2 text-base leading-7 text-[#51607C]">
                        <?php esc_html_e( 'Gemeinsam klären wir Ausgangslage, Ziel und sinnvolle nächste Schritte – ohne Druck, ohne Standardpaket.', 'agentur-jg-theme' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
