<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
/*
 * Apaga a barra de administração quando logado
 */
//add_filter('show_admin_bar', '__return_false'); 

// Função para usar o Thickbox nativo do WP no tema Portfolio Brasa
function add_themescript(){
    if(!is_admin()){
    wp_enqueue_script('jquery');
    wp_enqueue_script('thickbox',null,array('jquery'));
    wp_enqueue_style('thickbox.css', '/'.WPINC.'/js/thickbox/thickbox.css', null, '1.0');
    }
}
add_action('init','add_themescript');


/*
 * Load new Menus
 */
function temazakua_setup() {
	register_nav_menu( 'trabalhe-conosco', __( 'Trabalhe Conosco', 'twentytwelve' ) );
	register_nav_menu( 'espaco-negra-anastacia', __( 'Espaço Negra Anastácia de Novos Autores', 'twentytwelve' ) );
	register_nav_menu( 'zungueira-da-kazua', __( 'Zungueira da Kazuá', 'twentytwelve' ) );
	register_nav_menu( 'seja-autor', __( 'Seja Autor', 'twentytwelve' ) );
	register_nav_menu( 'publicar-na-kazua', __( 'Publicar na Kazuá', 'twentytwelve' ) );
	register_nav_menu( 'modos-de-publicacao', __( 'Modos de Publicação', 'twentytwelve' ) );
	register_nav_menu( 'artistas-convidados', __( 'Artistas Convidados', 'twentytwelve' ) );
	register_nav_menu( 'kazua-das-artes', __( 'Kazuá das Artes', 'twentytwelve' ) );
	register_nav_menu( 'geral-publicacoes', __( 'Menu Geral Estudos Acadêmicos', 'twentytwelve' ) );
	register_nav_menu( 'academicos-comunicacao', __( 'Acadêmicos - Comunicação', 'twentytwelve' ) );
	register_nav_menu( 'academicos-estudos-olimpicos', __( 'Acadêmicos - Estudos Olímpicos', 'twentytwelve' ) );
	register_nav_menu( 'academicos-filosofia', __( 'Acadêmicos - Filosofia', 'twentytwelve' ) );
	register_nav_menu( 'academicos-psicologia', __( 'Acadêmicos - Psicologia', 'twentytwelve' ) );
	register_nav_menu( 'academicos-educacao', __( 'Acadêmicos - Educação ', 'twentytwelve' ) );
	register_nav_menu( 'academicos-critica-social', __( 'Acadêmicos - Critica Social ', 'twentytwelve' ) );
	// Adiciona suporte à Resumo nas Páginas
	add_post_type_support( 'page', 'excerpt');
	// Adiciona tamanho de thumbnail
	add_image_size( 'thumb-academicos',250, 180);

}
add_action( 'after_setup_theme', 'temazakua_setup' );


/**
 * Registra um nova sidebar
 */

function temakazua_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar Blog Autores', 'temakazua' ),
		'id'            => 'sidebar-autores',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );


}
add_action( 'widgets_init', 'temakazua_widgets_init' );


/**
 * Load CPT Portfolios.
 */
/**
* Adicionamos uma ação no inicio do carregamento do WordPress
* através da função add_action( 'init' )
*/

add_action( 'init', 'create_post_type_autor' );

/** * Esta é a função que é chamada pelo add_action() */
function create_post_type_autor() {
	/**     * Labels customizados para o tipo de post     */
	$labels = array(
		'name' => _x('Autores', 'post type general name'),
		'singular_name' => _x('Autor', 'post type singular name'),
		'add_new' => _x('Novo Autor', 'autor'),
	    'add_new_item' => __('Novo Autor'),
	    'edit_item' => __('Editar Autor'),
	    'new_item' => __('Novo Autor'),
	    'all_items' => __('Ver Todos'),
	    'view_item' => __('Ver Autor'),
	    'search_items' => __('Procurar Autores'),
	    'not_found' =>  __('Nenhum Autor encontrado'),
	    'not_found_in_trash' => __('Nenhum Autor encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Autores',
    );

/**     * Registamos o tipo de post Autores através desta função     
		* passando-lhe os labels e parâmetros de controle.
 */
    register_post_type( 'autor', array(
		'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'autor',
	    'query_var' => true,
		'rewrite' => array(
			'slug' => 'autor',
			'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => true,
	    'menu_position' => 5,
		'menu_icon' => 'dashicons-universal-access-alt',
	    'supports' => array('title','editor','thumbnail')
		)    );

	flush_rewrite_rules();

}


register_taxonomy(
	"status", 
		  "autor", 
		  array(            
			"label" => "Status", 
				"singular_label" => "Status", 
				"rewrite" => true,
				"hierarchical" => true
	)
);

// Adiciona a coluna Categorias ao Custom Post Type Projetos
add_filter( 'manage_autor_posts_columns', 'ilc_cpt_columns' );
add_action('manage_autor_posts_custom_column', 'ilc_cpt_custom_column', 10, 2);

function ilc_cpt_columns($defaults) {
    $defaults['status'] = 'Status';
    return $defaults;
}

function ilc_cpt_custom_column($column_name, $post_id) {
    $taxonomy = $column_name;
    $post_type = get_post_type($post_id);
    $terms = get_the_terms($post_id, $taxonomy);
 
    if ( !empty($terms) ) {
        foreach ( $terms as $term )
            $post_terms[] = "<a href='edit.php?post_type={$post_type}&{$taxonomy}={$term->slug}'> " . esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
        echo join( ', ', $post_terms );
    }
    else echo '<i>Nenhum status de autor.</i>';
}

