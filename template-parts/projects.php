<div id="projects" class="projects-section  hero min-h-200 bg-[<?php echo get_theme_mod('mpw_body_color'); ?>] text-gray-600 p-10 border-b-2 border-dashed border-gray-400">
      <div class="container pl-5 bg-[<?php echo get_theme_mod('mpw_container_color'); ?>]  h-full mx-30 border  border-gray-600 rounded-2xl ">
    <div class=" bg-[url('<?php echo get_theme_mod('mpw_bg_project_image');?>')] bg-[40%] bg-bottom-left bg-no-repeat h-[95%] bg-size-[400px_auto] ">

        <h2 class="text-shadow-2xs text-shadow-white text-3xl font-bold text-center mb-6 my-6">Projects</h2>
        <div class="container mx-auto px-10 mt-0" >
        <div class="relative overflow-hidden p-4 rounded-lg">
            <div id="project-carousel" class="flex transition-transform duration-500 ease-linear space-x-4">
                <?php
                $args = array(
                    'post_type' => 'projects',
                    'posts_per_page' => 10,
                );
                $projects = new WP_Query($args);
                if ($projects->have_posts()) :
                    while ($projects->have_posts()) : $projects->the_post();
                        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $permalink = get_permalink();
                        ?>
                        <a href="<?php echo esc_url($permalink); ?>" class="relative min-w-[40%] max-w-xs rounded-lg overflow-hidden shadow-lg group block">
                            <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title(); ?>" class="w-xl h-70 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 group-hover:opacity-70 transition-opacity duration-300">
                                <h3 class="text-white text-lg font-semibold text-center px-2"><?php the_title(); ?></h3>
                            </div>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-center">No projects found.</p>
                <?php endif; ?>
            </div>
            </div>
        </div>
</div>
</div>
</div>
<script>
// Continuous carousel motion (left to right)
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('project-carousel');
    let scrollAmount = 0;
    let cardWidth = carousel.children[0]?.offsetWidth || 300;
    let totalCards = carousel.children.length;
    let visibleCards = 4;

    function moveCarousel() {
        scrollAmount += 1;
        if (scrollAmount >= cardWidth) {
            carousel.appendChild(carousel.children[0]);
            scrollAmount = 0;
        }
        carousel.style.transform = `translateX(-${scrollAmount}px)`;
        requestAnimationFrame(moveCarousel);
    }
    if(totalCards > visibleCards) moveCarousel();
});
</script>