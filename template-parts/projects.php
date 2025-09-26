<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<div id="projects" class="projects-section  hero min-h-200 bg-[<?php echo get_theme_mod('mpw_body_color'); ?>] text-gray-600 p-10 border-b-2 border-dashed border-gray-400">
      <div class="container pl-5 bg-[<?php echo get_theme_mod('mpw_container_color'); ?>]  h-full mx-30 border  border-gray-600 rounded-2xl ">
    <div class=" bg-[url('<?php echo get_theme_mod('mpw_bg_project_image');?>')] bg-[40%] bg-bottom-left bg-no-repeat h-[95%] bg-size-[400px_auto] ">

        <h2 class="text-shadow-2xs text-shadow-white text-3xl font-bold text-center mb-6 my-6">Projects</h2>
        <div class="container mx-auto px-10 mt-0" >
<div class="relative px-4 py-8">
  <!-- Carousel Container -->
  <div class="swiper project-swiper">
    <div class="swiper-wrapper">
      <?php
      $args = array(
        'post_type' => 'projects',
        'posts_per_page' => 10,
      );
      $projects = new WP_Query($args);
      if ($projects->have_posts()) :
        while ($projects->have_posts()) : $projects->the_post();
       $permalink = get_permalink();
                        ?>
      <div class="swiper-slide">
        <a href="<?php echo esc_url($permalink); ?>" class="block group relative rounded-xl overflow-hidden shadow-lg">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', ['class' => 'w-full h-64 object-cover']); ?>
          <?php endif; ?>
          <!-- Overlay -->
          <div class="px-4 py-auto absolute inset-0 bg-black/70 flex items-end justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <h3 class="text-white text-center text-xl font-bold mb-25 translate-y-12 group-hover:translate-y-0 transition-transform duration-500">
              <?php the_title(); ?>
            </h3>
          </div>
        </a>
      </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
    <!-- Navigation Arrows -->
    <div class="swiper-button-prev !text-white !left-0"></div>
    <div class="swiper-button-next !text-white !right-0"></div>
  </div>
</div>
        </div>
</div>
</div>
</div>

<!-- Swiper Init Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  new Swiper('.project-swiper', {
    slidesPerView: 4,
    spaceBetween: 24,
    loop: true,
    fraction: true,
autoplay: {
  delay: 2000,
  disableOnInteraction: false,
},
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 4 }
    }
  });
});
</script>
