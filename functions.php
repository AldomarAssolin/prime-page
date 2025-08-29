<?php

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',[],null);
  wp_enqueue_style('prime-fonts','https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@400;600&display=swap',[],null);
  wp_enqueue_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',[],null,true);
});

