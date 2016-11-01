<?php

// Habilitar thumbnails
add_theme_support('post-thumbnails');

// Função para thumbs do destaque
add_image_size('thumbdestaque', 1366, 760);

// Habilitando Menus
if (function_exists(register_nav_menu)) {
    register_nav_menu('menu_topo', 'Este é o menu do topo');
    register_nav_menu('menu_sidebar', 'Este é o menu da sidebar');
}
?>