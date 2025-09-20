
    <div class="experience-section hero  min-h-200 bg-[<?php echo get_theme_mod('mpw_body_color'); ?>] text-gray-600 p-10 border-b-2 border-dashed border-gray-400">
  <div class="container bg-[<?php echo get_theme_mod('mpw_container_color'); ?>]  h-full mx-30 border  border-gray-600 rounded-2xl ">
          <div class=" bg-[url('<?php echo get_theme_mod('mpw_bg_experience_image');?>')] bg-[50%] bg-bottom-right bg-no-repeat  h-[90%] bg-size-[300px_auto] mr-10">
<h2 class="text-3xl font-bold text-center my-5">Experience</h2>
   <div class="container mx-auto px-10 ">
    <div class="timeline justify-center max-w-200 ">
       <ul class="timeline timeline-vertical ">
        <?php
        $args = array(
            'post_type' => 'experience',
            'posts_per_page' => -1,
            "orderby" => "date",
            "order" => "ASC",
        );
        $experience_query = new WP_Query($args);
        $pnum_posts = $experience_query->post_count;
        $i=1;
        if ($experience_query->have_posts()) :
            while ($experience_query->have_posts()) : $experience_query->the_post(); ?>
<li>
   <?php if($i!=1 ) echo  '<hr class="bg-primary " />';  ?>
    <div class="timeline-start">
      <div class="badge badge-success m-2 p-4 text-lg"><?php echo date('Y', strtotime(get_the_date())); ?>
    </div>
    </div>
    <div class="timeline-middle">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
      fill="currentColor"
        class="text-primary h-5 w-5"
      >
        <path
          fill-rule="evenodd"
          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
          clip-rule="evenodd"
         fill="bg-color-[oklch(0.7 0.12 182.46)] "

        />
      </svg>
    </div>
    <div class=" bg-sky-900  timeline-box timeline-end text-gray-200">
        <h3 class="text-l font-semibold"><b><?php the_title(); ?></b></h3>
        <div ><?php the_content(); ?></div>
    </div>
    <?php if($i!=$pnum_posts) echo  '<hr class="bg-primary " />';  ?>
  </li>
            <?php
            $i++;
         endwhile;?>
    </ul>
         <?php   wp_reset_postdata();
        else : ?>
            <p class="text-center">No experience found.</p>
        <?php endif; ?>
        

    </div>
    </div>
    </div>
    </div>
</div>