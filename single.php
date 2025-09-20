<?php get_header('custom'); ?>
<main class="container mx-auto py-8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('mb-8'); ?>>
            <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
            <div class="text-gray-500 mb-2">
                <span>By <?php the_author(); ?></span> |
                <span><?php the_time(get_option('date_format')); ?></span>
            </div>
            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="my-4">
                    <?php the_post_thumbnail('large', ['class' => 'rounded-lg shadow']); ?>
                </div>
            <?php endif; ?>
            <div class="mt-6">
                <?php the_tags('<span class="tag">', ', ', '</span>'); ?>
            </div>
        </article>
        <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>