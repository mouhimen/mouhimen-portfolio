<?php
// Fetch skills posts
$args = array(
    'post_type' => 'skills',
    'posts_per_page' => -1,
    'orderby' => 'rand',
);
$skills_query = new WP_Query($args);

if ($skills_query->have_posts()) : ?>
    <section id="skills" class=" p-10 bg-[<?php echo get_theme_mod('mpw_body_color'); ?>] text-neutral-content hero min-h-200 border-b-2 border-dashed border-gray-400 p-10">
        
        <div class="container bg-[<?php echo get_theme_mod('mpw_container_color'); ?>]  h-full mx-30 border  border-gray-600 rounded-2xl ">
            
            <div class="bg-[url('<?php echo get_theme_mod('mpw_bg_skills_image');?>')] bg-[46%_90%] bg-bottom-center bg-no-repeat w-full h-full bg-size-[400px_auto] mb-[-5px] ">
                  <div class="  mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3  text-center mb-6">
 <div class="max-w-2xl bg-sky-900/[85%]  mx-10 mt-5 p-4  rounded-xl shadow-md">
    <div class="avatar">
  <div class="min-h-30 max-h-40 rounded-2xl pr-2 pt-2 bg-primary">        
      <img class=" shadow-cyan-500 shadow-xl rounded-2xl"
            alt=""
            src="<?php echo site_icon_url(); ?>"  />
</div></div>
 <h2 class="text-shadow-2xs text-shadow-white text-2xl font-bold text-center mb-6">Abd Almouhimen Shamout</h2>
<p class="text-lg px-5 text-left">Full-Stack Web Developer with 16+ years of experience in designing, developing, and managing enterprise-level web systems and applications.<br/> Skilled in both frontend and backend technologies with proven expertise in system integration, database management, and cloud services.<br/> Successfully delivered solutions serving thousands of users in higher education and healthcare sectors. Recognized for strong problem-solving skills, leadership, and the ability to drive digital transformation projects.</p>
</div> </div>

        <div class="sm:col-span-3  text-center mb-6 overflow-x-auto">
            <div class="max-w-2xl justify-center text-center max-w-2xl bg-sky-900/[85%]  mx-5 mt-5 p-6  rounded-xl shadow-md">
            <h2 class="text-shadow-2xs text-shadow-white text-3xl font-bold text-center mb-4">Skills</h2>           
<div class="overflow-x-auto">
  <div class="grid grid-cols-4 md:grid-cols-4 lg:grid-cols-5  gap-4 md:gap-6 p-4 md:p-5  ">  
             <?php while ($skills_query->have_posts()) : $skills_query->the_post(); ?>
    <div class="aspect-square flex items-center justify-center shadow-lg md:p-2 sm:p-2 lg:p-4 rounded-xl bg-gray-900">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/<?php the_title(); ?>/<?php the_title(); ?>-original.svg" alt="<?php the_title(); ?>" class="w-10 h-auto">
    </div>
                <?php endwhile; ?>
</div>
<div >
            
            
            
            

 

            </div>
        </div>


        
        </div>
        </div>
    </section>
<?php
endif;
wp_reset_postdata();
?>