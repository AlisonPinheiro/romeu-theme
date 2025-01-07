<?php
get_template_part('templates/parts/header')
    ?>


<main class="container mx-auto pb-12">
    <header class="mb-12 text-center mx-auto" style="max-width: 900px;">
        <h1 class="text-4xl font-bold"><?php single_term_title(); ?></h1>
        <h3 class="text-1xl mt-4">
            <?php echo term_description(); ?>
        </h3>
    </header>

    <?php if (have_posts()): ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php while (have_posts()):
                the_post(); ?>
                <article class="relative group overflow-hidden">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="relative w-full h-64 overflow-hidden">
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            </div>
                        <?php endif; ?>
                        <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-90 p-4">
                            <h2 class="text-lg font-bold text-gray-800 mb-1"><?php the_title(); ?></h2>
                            <p class="text-sm text-gray-600">
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                            </p>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="mt-8">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-600">Nenhum post encontrado nessa categoria.</p>
    <?php endif; ?>

</main>

<?php
get_template_part('templates/parts/footer')
    ?>

