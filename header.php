<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
    
    <title>Mouhimen Portfolio</title>
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
</div></div><span class="p-4"><?php echo get_bloginfo( 'name' ); ?></span>
  </div>
  <div class="flex-none p-4">      <?php  wp_nav_menu(array(
    //'menu'				=> "7", // Specify the menu name if needed
    'container' => false, // Removes the container, leaving just the ul element
    'menu_class'		=> "menu menu-horizontal px-1",
   )) ; ?>
   
</div>



</div>
        </div>
        </div>
    </header>
</body>
</html>