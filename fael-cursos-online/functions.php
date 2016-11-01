<?php

// Habilitar thumbnails
add_theme_support('post-thumbnails');

// Função para thumbs do destaque
add_image_size('thumbdestaque', 404, 204);
add_image_size('thumbpost', 615, 334);

// Habilitando Menus
if (function_exists(register_nav_menu)) {
    register_nav_menu('menu_topo', 'Este é o menu do topo');
    register_nav_menu('menu_sidebar', 'Este é o menu da sidebar');
    register_nav_menu('menu_rodape', 'Este é o menu do rodapé');
}

// Habilitando sidebar
if (function_exists(register_sidebar)) {
    register_sidebar(
        array(
            'name' => 'sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<div class="t_box">
                <svg viewBox="0 0 29000 5000">
                <defs>
                <mask id="id0">
                    <linearGradient id="id1" gradientUnits="userSpaceOnUse" x1="107.83" y1="2690.11" x2="28868" y2="2257.91">
                    <stop offset="0" style="stop-opacity:1; stop-color:white" />
                    <stop offset="1" style="stop-opacity:0; stop-color:white" />
                    </linearGradient>
                    <rect style="fill:url(#id1)" x="134" y="252" width="28708" height="4444"/>
                </mask>
                </defs>
                <g id="Camada_x0020_1">
                <path style="mask:url(#id0)" d="M3507 3161l-499 0c-1585,0 -2870,-163 -2870,-363l13 -2179c0,-201 1272,-363 2856,-363l22961 0c1584,0 2870,162 2870,363l0 2178c0,201 -1286,363 -2870,363l-19418 1c-2048,2042 -1219,2042 -3043,0z"/>
                </g>
                <svg viewBox="0 0 150.00 30.00">
                <text x="0" y="15">',
            'after_title' => '</text>
        </svg>
    </div>'
        )
    );
}
?>