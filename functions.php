<?php
//Include
require get_template_directory().'/include/setup.php';

//HOOKS
//1-registrando css e js
add_action('wp_enqueue_scripts', 'gs_theme_styles');

/*
depois que for carregado adicionar propriedades
(ex: menu, suporta titulo, logo, etc).
*/
add_action('after_setup_theme', 'gs_after_setup');