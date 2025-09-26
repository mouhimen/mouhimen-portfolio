<div id="blog" class="blog-section  hero min-h-150 bg-[<?php echo get_theme_mod('mpw_body_color'); ?>] text-gray-600 p-10 border-b-2 border-dashed border-gray-400">
<div class="container container pl-5 bg-[<?php echo get_theme_mod('mpw_container_color'); ?>]  h-full mx-30 border  border-gray-600 rounded-2xl px-10"> 
  <h2 class="text-shadow-2xs text-shadow-white text-3xl font-bold text-center mb-6 my-6">Mouhimen Blog</h2>

    <!-- Category Filter -->
    <!--div class="mb-6">
        <form id="category-filter" method="GET" action="">
            <select name="cat" onchange="this.form.submit()" class="select select-bordered">
                <option value=""><?php// _e('All Categories', 'mouhimen-portfolio'); ?></option>
                <?php
                /*$categories = get_categories();
                foreach ($categories as $category) {
                    $selected = (get_query_var('cat') == $category->term_id) ? 'selected' : '';
                    echo '<option value="' . esc_attr($category->term_id) . '" ' . $selected . '>' . esc_html($category->name) . '</option>';
                }*/
                ?>
            </select>
        </form>
    </div-->

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $cat = get_query_var('cat') ? get_query_var('cat') : '';
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged' => $paged,
        );
        if ($cat) {
            $args['cat'] = $cat;
        }
        $blog_query = new WP_Query($args);
        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <div class="card bg-sky-900 text-gray-100 shadow-md">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover rounded-t-xl']); ?>
                        </a>
                    <?php endif; ?>
                    <div class="card-body">
                        <h2 class="text-shadow-2xs text-shadow-white card-title text-lg font-semibold">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <p class="text-gray-100"><?php the_excerpt(); ?></p>
                    </div>
                </div>
            <?php endwhile;
        else : ?>
            <p><?php _e('No posts found.', 'mouhimen-portfolio'); ?></p>
        <?php endif; wp_reset_postdata(); ?>
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        <?php
        echo paginate_links(array(
            'total' => $blog_query->max_num_pages,
        ));
        ?>
    </div>
</div>
</div>
