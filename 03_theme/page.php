<?php get_header(); ?>

<div class="pt-[76px]">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('bg-white'); ?>>
                <header class="relative isolate overflow-hidden border-b border-[rgba(26,34,56,0.10)] bg-white">
                    <div class="absolute inset-0 -z-10 bg-[linear-gradient(rgba(26,34,56,0.045)_1px,transparent_1px),linear-gradient(90deg,rgba(26,34,56,0.045)_1px,transparent_1px)] bg-[size:34px_34px] [mask-image:radial-gradient(circle_at_70%_25%,#000,transparent_72%)]"></div>

                    <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-20">
                        <div class="max-w-3xl">
                            <p class="mb-6 inline-flex items-center gap-3 text-xs font-medium uppercase text-[#3D5A80] [font-family:'IBM_Plex_Mono',ui-monospace,monospace] tracking-[0.16em] before:h-px before:w-6 before:bg-[#4E6E97]">
                                <?php esc_html_e('Agentur JG', 'agentur-jg-theme'); ?>
                            </p>

                            <h1 class="text-[clamp(2.25rem,4.8vw,3.85rem)] font-extrabold leading-[1.03] tracking-[-0.035em] text-[#1A2238]">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                    </div>
                </header>

                <div class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
                    <div class="max-w-3xl text-lg leading-8 text-[#51607C] [&_a]:font-medium [&_a]:text-[#3D5A80] [&_a]:underline [&_a]:underline-offset-2 [&_h2]:mt-10 [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:leading-tight [&_h2]:tracking-[-0.02em] [&_h2]:text-[#1A2238] [&_h3]:mt-8 [&_h3]:text-xl [&_h3]:font-bold [&_h3]:tracking-[-0.01em] [&_h3]:text-[#1A2238] [&_p]:mt-5 [&_ul]:mt-5 [&_ul]:list-disc [&_ul]:pl-6">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <section class="mx-auto max-w-[1200px] px-5 py-16 sm:px-8 lg:px-10 lg:py-24">
            <div class="rounded-[22px] border border-[rgba(26,34,56,0.10)] bg-white p-8 text-center shadow-sm sm:p-10">
                <h1 class="text-2xl font-bold tracking-[-0.02em] text-[#1A2238]">
                    <?php esc_html_e('Keine Inhalte gefunden', 'agentur-jg-theme'); ?>
                </h1>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
