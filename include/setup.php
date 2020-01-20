<?php 

/**
* INCLUINDO STYLE E SCRIPTS NO TEMA
*/
function rm_theme_styles(){
	wp_enqueue_style('boot-css', get_template_directory_uri() . '/assets/css/boot.css');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css');
	wp_enqueue_style('font-awesome',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('font-Montserrat',  'https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap');

	// SCRIPTS
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);
	wp_enqueue_script('facebook', 'https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v5.0');
}


/**
* ADD MENU AO TEMA
*/
function rm_after_setup(){
	// SUPORTE PARA IMAGENS 
	add_theme_support('post-thumbnails');

	//SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

	//LOGO CUSTOMIZADA
	add_theme_support('custom-logo');

	//SUPORTE PARA MENUS
	add_theme_support('menus');

	register_nav_menu('primary', __('Primary Menu','Minimag'));
	register_nav_menu('top', "Menu Superior");
	register_nav_menu('footer', 'Menu Rodapé');

	// REMOVENDO A BARRA DO ADMIN
	show_admin_bar(false);
}

/***
CRIANDO WIDGETS
*/
function rm_widgets(){
	//CRIA A FUNÇÃO SIDEBAR
	/* SE QUISERMOS COLOCAR TAGS E CSS DIFERENTES COLOCAMOS AQUI NO BEFORE OU AFTER TITLE
	   AO MESMO SE QUISERMO COLOCAR ANTES OU DEPOIS DO WIDGETS 
	   - %1$s ISSO IRA FAZER COM QUE AUTOMATICAMENTE ELE COLOCOQUE QUANDO FOR EXIBIR OS WIDGETS 
	   O ID PADRÃO DO WIDGET ESPECIFICO O MESMO FUNCIONA COM CLASSE TB
	   EX: class="widget %2$s"
	 */
	register_sidebar(array(
		'name' => __('Meu Primeiro Sidebar', 'Minimag'),
		'id' => 'rt_sidebar',
		'description' => __('Sidebar para o tema', 'Minimag'),
		'before_title' => '',
		'after_title' => '',
		'before_widget' => '',
		'after_widget' => '',
	));
}