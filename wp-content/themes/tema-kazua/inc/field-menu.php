<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/08/14
 * Time: 09:53
 */

class Menu_Ajax_Field {

    /*--------------------------------------------*
     * Constructor
     *--------------------------------------------*/

    /**
     * Initializes the plugin by setting localization, filters, and administration functions.
     */
    function __construct() {

        add_filter( 'template_redirect', array( $this, 'ajax_loader' ) );

    } // end constructor


    /**
     * Add custom fields to $item nav object
     * in order to be used in custom Walker
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function rc_scm_add_custom_nav_fields( $menu_item ) {

        $menu_item->is_menu_ajax = get_post_meta( $menu_item->ID, 'is_menu_ajax', true );
        return $menu_item;

    }

    /**
     * Save menu custom fields
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function save_nav( $menu_id, $menu_item_db_id, $args ) {

        // Check if element is properly sent
        if ( is_array( $_REQUEST['menu-item-ajax']) ) {
            $_value = $_REQUEST['menu-item-ajax'][$menu_item_db_id];
            global $wpdb;
            $_table = 'wp_postmeta';
            if (is_multisite()) {
                $_table = 'wp_' . get_current_blog_id() . '_postmeta';
            }
            $_meta = get_post_meta($menu_item_db_id, 'is_menu_ajax', true);
            if( empty($_meta) ){
                $wpdb->insert( $_table, array('post_id' => $menu_item_db_id, 'meta_key' => 'is_menu_ajax', 'meta_value' => $_value) );
            }
            else{
                $wpdb->update($_table, array('meta_value' => $_value), array('post_id' => $menu_item_db_id, 'meta_key' => 'is_menu_ajax'));
            }
        }

    }

    /**
     * Define new Walker edit
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function rc_scm_edit_walker($walker,$menu_id) {

        return 'Walker_Nav_Menu_Edit_Custom';

    }

    function add_data_attr($atts, $item, $args){
        if(!empty($item->is_menu_ajax) && $item->is_menu_ajax == 'true'){
            $atts['data-menu-ajax'] = 'true';
        }
        else{
            $atts['data-menu-ajax'] = 'false';
        }
        return $atts;
    }

    function ajax_loader(){
        if(isset($_GET['AjaxMenuLoader']) && $_GET['AjaxMenuLoader'] == 'true'){
            include get_stylesheet_directory() . '/template-menu-ajax.php';
            die();
        }
    }
}

//include_once get_stylesheet_directory() . '/inc/field-edit_custom_walker.php';
new Menu_Ajax_Field();

//include_once( 'custom_walker.php' );