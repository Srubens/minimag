<?php

require get_template_directory() . "/include/setup.php";


add_action('wp_enqueue_scripts','rm_theme_styles');
add_action('after_setup_theme','rm_after_setup');
add_action('widgets_init','rm_widgets');