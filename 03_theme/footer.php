</main>

<footer class="bg-[#1A2238] text-[#AEBAD2]" aria-labelledby="site-footer-heading">
    <h2 id="site-footer-heading" class="sr-only"><?php esc_html_e('Footer', 'agentur-jg-theme'); ?></h2>

    <div class="mx-auto max-w-[1200px] px-5 py-14 sm:px-8 lg:px-10 lg:py-16">
        <div class="grid gap-10 border-b border-white/10 pb-10 lg:grid-cols-[1.25fr_0.75fr_1fr]">
            <div class="max-w-md">
                <a class="site-brand text-white hover:text-white" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Agentur JG Startseite', 'agentur-jg-theme'); ?>">
                    <img
                        class="site-brand__logo site-brand__logo--footer"
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/agenturjg_logo_footer_transparent.png'); ?>"
                        alt="<?php esc_attr_e('Agentur JG', 'agentur-jg-theme'); ?>"
                        width="750"
                        height="168"
                    >
                </a>

                <p class="mt-6 max-w-[32ch] text-xl font-semibold leading-snug text-white">
                    <?php esc_html_e('Online sichtbar. Klar positioniert. Zehnfach wirksam.', 'agentur-jg-theme'); ?>
                </p>
                <p class="mt-4 max-w-[42ch] text-sm leading-6 text-[#AEBAD2]">
                    <?php esc_html_e('Persönliche Beratung für KMU, die ihre Website, Sichtbarkeit und Anfragen verständlich und wirtschaftlich angehen möchten.', 'agentur-jg-theme'); ?>
                </p>
            </div>

            <nav aria-label="<?php esc_attr_e('Footer Navigation', 'agentur-jg-theme'); ?>">
                <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-[#D8DEE9]">
                    <?php esc_html_e('Navigation', 'agentur-jg-theme'); ?>
                </h3>
                <div class="mt-5 grid gap-3 text-sm">
                    <a class="transition hover:text-white" href="<?php echo esc_url(home_url('/#leistungen')); ?>"><?php esc_html_e('Leistungen', 'agentur-jg-theme'); ?></a>
                    <a class="transition hover:text-white" href="<?php echo esc_url(home_url('/#methode')); ?>"><?php esc_html_e('Ablauf', 'agentur-jg-theme'); ?></a>
                    <a class="transition hover:text-white" href="<?php echo esc_url(home_url('/#referenzen')); ?>"><?php esc_html_e('Referenzen', 'agentur-jg-theme'); ?></a>
                    <a class="transition hover:text-white" href="<?php echo esc_url(home_url('/#ueber-jona')); ?>"><?php esc_html_e('Über mich', 'agentur-jg-theme'); ?></a>
                    <a class="transition hover:text-white" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Kontakt', 'agentur-jg-theme'); ?></a>
                </div>
            </nav>

            <div>
                <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-[#D8DEE9]">
                    <?php esc_html_e('Kontakt', 'agentur-jg-theme'); ?>
                </h3>
                <address class="mt-5 grid gap-3 text-sm not-italic">
                    <a class="transition hover:text-white" href="mailto:kontakt@agentur-jg.de">
                        <?php esc_html_e('kontakt@agentur-jg.de', 'agentur-jg-theme'); ?>
                    </a>
                    <a class="transition hover:text-white" href="https://wa.me/+491777091573" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('WhatsApp', 'agentur-jg-theme'); ?>
                    </a>
                    <span><?php esc_html_e('Regional im Rhein-Lahn-Kreis und Umgebung', 'agentur-jg-theme'); ?></span>
                </address>

                <div class="mt-6 rounded-md border border-white/10 bg-white/[0.04] p-4 text-sm leading-6 text-[#D8DEE9]">
                    <?php esc_html_e('Keine Verkaufsshow auf Druck. Schreiben Sie kurz, wo Sie stehen - Ich melde mich persönlich mit einer ehrlichen Einschätzung.', 'agentur-jg-theme'); ?>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-5 pt-7 text-sm sm:flex-row sm:items-center sm:justify-between">
            <p>
                &copy; <?php echo esc_html(date_i18n('Y')); ?>
                <?php esc_html_e('Agentur JG · Websites & Online-Marketing für KMU', 'agentur-jg-theme'); ?>
            </p>

            <div class="flex flex-wrap gap-x-6 gap-y-3">
                <a class="transition hover:text-white" href="https://instagram.com/agenturjg" target="_blank" rel="noopener noreferrer">
                    <?php esc_html_e('Instagram', 'agentur-jg-theme'); ?>
                </a>
                <a class="transition hover:text-white" href="<?php echo esc_url(home_url('/impressum/')); ?>">
                    <?php esc_html_e('Impressum', 'agentur-jg-theme'); ?>
                </a>
                <a class="transition hover:text-white" href="<?php echo esc_url(home_url('/datenschutz/')); ?>">
                    <?php esc_html_e('Datenschutz', 'agentur-jg-theme'); ?>
                </a>
                <a class="transition hover:text-white" href="#" data-cc="c-settings">
                    <?php esc_html_e('Cookie-Einstellungen', 'agentur-jg-theme'); ?>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
