<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitcount+Ink:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=SUSE+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
</head>
<body data-theme="garden">
    <header class="bg-[url('<?php echo get_template_directory_uri(); ?>/images/bc.png')] bg-[80%]  bg-repeat  h-[90%] bg-size-[300px_auto] 
">
    <div class="flex justify-between items-center y-full bg-[<?php echo get_theme_mod('mpw_header_bg_color'); ?>]/[70%]">
           <div class="container mx-auto  ">
<div class="navbar  p-4 text-gray-200 ">

  <div class="flex-1 p-4 ">
<div class="avatar ">
  <div class="w-24 rounded-full"> 
    <a href="<?php echo home_url(); ?>">       
      <img
            alt=""
            src="<?php echo site_icon_url(); ?>" class="w-22" />
    </a>
</div></div><span class="text-shadow-2xs text-shadow-white site_name p-4"><?php echo get_bloginfo( 'name' ); ?></span>
  </div>
     <div class="flex-none p-4">
  <!-- Mobile menu button -->
  <div class="block lg:hidden">
    <div class="dropdown">
      <label tabindex="0" class="btn  bg-[<?php echo get_theme_mod('mpw_body_color'); ?>]/[85%] btn-ghost">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-[<?php echo get_theme_mod('mpw_body_color'); ?>]/[85%] rounded-box w-52  right-full mr-1">
        <?php
          wp_nav_menu(array(
            'container' => false,
            'menu_class' => 'menu',
            'items_wrap' => '%3$s', // Only output <li> elements
            'fallback_cb' => false
          ));
        ?>
      </ul>
    </div>
  </div>
  <!-- Desktop menu -->
  <div class="hidden lg:block">
    <?php
      wp_nav_menu(array(
        'container' => false,
        'menu_class' => 'menu menu-horizontal px-1',
        'fallback_cb' => false
      ));
    ?>
  </div>
</div>



</div>
        </div>
        </div>
    </header>



</body>
</html>