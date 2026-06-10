<?php get_header(); ?>

<div class="pt-[76px]">
    <section class="relative isolate overflow-hidden border-b border-[rgba(26,34,56,0.10)] bg-white">
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(26,34,56,0.045)_1px,transparent_1px),linear-gradient(90deg,rgba(26,34,56,0.045)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_70%_25%,#000,transparent_72%)]"></div>

        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-20">
            <div class="max-w-3xl">
                <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                    <?php esc_html_e('Aktuelles von Agentur JG', 'agentur-jg-theme'); ?>
                </p>

                <h1 class="text-[clamp(2.25rem,4.8vw,3.85rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-[#1A2238]">
                    <?php
                    if (is_home() && ! is_front_page()) {
                        single_post_title();
                    } elseif (is_archive()) {
                        the_archive_title();
                    } elseif (is_search()) {
                        printf(
                            /* translators: %s: search query */
                            esc_html__('Suchergebnisse für %s', 'agentur-jg-theme'),
                            '<span class="text-[#3D5A80]">' . esc_html(get_search_query()) . '</span>'
                        );
                    } else {
                        esc_html_e('Beiträge und Einblicke', 'agentur-jg-theme');
                    }
                    ?>
                </h1>

                <?php if (is_archive() && get_the_archive_description()) : ?>
                    <div class="mt-6 max-w-2xl text-lg leading-8 text-[#51607C]">
                        <?php the_archive_description(); ?>
                    </div>
                <?php else : ?>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-[#51607C]">
                        <?php esc_html_e('Gedanken, Erfahrungen und praktische Hinweise rund um Websites, Sichtbarkeit und Online-Marketing für kleine und mittelständische Unternehmen.', 'agentur-jg-theme'); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="bg-[#F6F8FA]">
        <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <?php if (have_posts()) : ?>
                <div class="grid gap-6 lg:grid-cols-2">
                    <?php while (have_posts()) : the_post(); ?>
                        <article <?php post_class('rounded-[18px] border border-[rgba(26,34,56,0.10)] bg-white p-6 shadow-sm sm:p-7'); ?>>
                            <p class="text-xs font-medium uppercase tracking-[0.16em] text-[#636E89] [font-family:'IBM_Plex_Mono',ui-monospace,monospace]">
                                <?php echo esc_html(get_the_date()); ?>
                            </p>

                            <h2 class="mt-4 text-2xl font-bold leading-[1.08] tracking-[-0.02em] text-[#1A2238] sm:text-3xl">
                                <a class="transition hover:text-[#3D5A80]" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="mt-4 text-base leading-7 text-[#51607C]">
                                <?php the_excerpt(); ?>
                            </div>

                            <a class="mt-6 inline-flex items-center justify-center rounded-[10px] border border-[rgba(26,34,56,0.16)] bg-white px-5 py-3 text-sm font-semibold text-[#1A2238] transition hover:border-[#1A2238] hover:bg-[#F6F8FA] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3D5A80]" href="<?php the_permalink(); ?>">
                                <?php esc_html_e('Beitrag lesen', 'agentur-jg-theme'); ?>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="mt-12">
                    <?php
                    the_posts_pagination(
                        array(
                            'mid_size'           => 1,
                            'prev_text'          => esc_html__('Zurück', 'agentur-jg-theme'),
                            'next_text'          => esc_html__('Weiter', 'agentur-jg-theme'),
                            'screen_reader_text' => esc_html__('Beitragsnavigation', 'agentur-jg-theme'),
                        )
                    );
                    ?>
                </div>
            <?php else : ?>
                <div class="rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white p-8 text-center shadow-sm sm:p-10">
                    <h2 class="text-2xl font-bold tracking-[-0.02em] text-[#1A2238]">
                        <?php esc_html_e('Keine Inhalte gefunden', 'agentur-jg-theme'); ?>
                    </h2>
                    <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-[#51607C]">
                        <?php esc_html_e('Aktuell gibt es hier keine passenden Beiträge.', 'agentur-jg-theme'); ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
