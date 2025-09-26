<?php get_header('custom'); ?>
<?php wp_head(); ?>
<main class="container mx-auto py-8">
<div class="  mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4   mb-6">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('mb-8'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="my-4">
                    <?php the_post_thumbnail('large', ['class' => 'rounded-lg shadow']); ?>
                </div>
            <?php endif; ?>
            <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
            <div class="text-gray-500 mb-2">
                <span>By <?php the_author(); ?></span> |
                <span><?php the_time(get_option('date_format')); ?></span>
            </div>
            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>
            <div class="mt-6">
                <?php the_tags('<span class="tag">', ', ', '</span>'); ?>
            </div>
        </article>
        <?php //comments_template(); ?>
<?php
// Inside the Loop, after your post content
if ( is_singular() ) { // Check if this is a single post page
    echo '<div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">';
    previous_post_link( '<div class="col-span-3 text-left  mb-6">< previous ( %link ) </div>' );
    next_post_link( '<div class="col-span-3 text-right mb-6 overflow-x-auto">next ( %link ) > </div>' );
    echo '</div>';
}
?>
    <?php endwhile; endif; ?>    
        </div>
        <div class="sm:col-span-2 text-neutral-content text-center mb-6 overflow-x-auto">
    <?php get_template_part('template-parts/right_bar'); ?>
        </div>

    </div>
    </div> 

</main>
<?php get_footer(); ?>