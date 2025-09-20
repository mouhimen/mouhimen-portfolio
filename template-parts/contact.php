<!-- filepath: mouhimen-portfolio/mouhimen-portfolio/template-parts/contact.php -->
<div id="Contact" class="coutact-section hero min-h-150 bg-[<?php echo get_theme_mod('mpw_body_color'); ?>] text-gray-500 ">
  
    <div class="bg-[url('<?php echo get_theme_mod('mpw_bg_contact_image');?>')] bg-[60%] bg-bottom-right bg-no-repeat w-full h-full bg-size-[400px_auto] mr-10">
     <h2 class="text-3xl font-bold text-center mb-6 my-4 text-gray-200" >Contact With Me</h2>
<form action="https://formspree.io/f/YOUR_FORM_ID" method="POST" class="  max-w-120 bg-white  mx-auto p-4  rounded-lg shadow-md">
    
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium ">Name</label>
        <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" />
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium ">Email</label>
        <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" />
    </div>
    <div class="mb-4">
        <label for="subject" class="block text-sm font-medium ">Subject</label>
        <input type="text" id="subject" name="subject" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" />
    </div>
    <div class="mb-4">
        <label for="message" class="block text-sm font-medium ">Message</label>
        <textarea id="message" name="message" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" rows="4"></textarea>
    </div>
    <button type="submit" class="w-full bg-success oklch(64.8% .15 160) text-white font-bold py-2 rounded hover:bg-green-600">Send</button>
</form>
</div>
</div>