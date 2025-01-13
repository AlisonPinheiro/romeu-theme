<?php
get_template_part('templates/parts/header')
  ?>


<main class="container mx-auto py-12">
    <header class="mb-8 text-center">
        <h1 class="text-4xl font-bold"><?php single_term_title(); ?></h1>
        <p class="text-gray-600">
            <?php echo term_description(); ?>
        </p>
    </header>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <article class="border rounded-lg p-4 shadow hover:shadow-lg transition duration-300">
                    <a href="<?php the_permalink(); ?>">    
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="rounded-md mb-4">
                        <?php endif; ?>
                        <h2 class="text-2xl font-semibold"><?php the_title(); ?></h2>
                    </a>
                    <p class="text-gray-700 mt-2">
                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                    </p>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="mt-8">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p class="text-center text-gray-600">Nenhum post encontrado nessa categoria.</p>
    <?php endif; ?>
</main>

<?php
get_template_part('templates/parts/footer')
  ?>