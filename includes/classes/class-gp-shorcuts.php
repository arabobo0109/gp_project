<?php

class GP_Shortcuts
{
  public static function init()
  {
    add_action( "admin_bar_menu", array( __CLASS__, "register_bar_menu" ), 999 );
  }

  public static function register_bar_menu( WP_Admin_Bar $admin_bar )
  {
    $args = array(
      GP_Free_Menu::main(),
      GP_Free_Menu::gp_menu(),
      GP_Free_Menu::customize(),
      GP_Free_Menu::site_identity(),
      GP_Free_Menu::color_option(),
      GP_Free_Menu::typography(),
      GP_Free_Menu::layout(),
      GP_Pro_Menu::add_elements_menu(),
      GP_Pro_Menu::block(),
      GP_Pro_Menu::hook(),
      GP_Pro_Menu::layout(),
      GP_Pro_Menu::header(),
      GP_Pro_Menu::site_library(),
      GP_Free_Menu::support(),
      GP_Free_Menu::documentation(),
      GP_Generateblocks_Menu::main_menu(),
      GP_Generateblocks_Menu::settings_menu(),
      GP_Generateblocks_Menu::local_patterns_menu(),
      GP_Generateblocks_Menu::global_styles_menu(),
      GP_Generateblocks_Menu::assets_library_menu(),
      GP_Generateblocks_Menu::docs_menu(),
      GP_Generateblocks_Menu::container_docs(),
      GP_Generateblocks_Menu::grid_docs(),
      GP_Generateblocks_Menu::headline_docs(),
      GP_Generateblocks_Menu::buttons_docs(),
      GP_Generateblocks_Menu::queryloop_docs(),
      GP_Generateblocks_Menu::image_docs(),
    );

    if ( ! class_exists( "GenerateBlocks_Settings" ) ) {
      unset( $args[15] ); // GP_Generateblocks_Menu::main_menu()
    }

    if ( ! class_exists( "GenerateBlocks_Pro_Singleton" ) ) {
      unset( $args[18] ); // GP_Generateblocks_Menu::global_styles_menu()
      unset( $args[19] ); // GP_Generateblocks_Menu::assets_library_menu()
    }

    if ( ! post_type_exists( "gp_elements" ) ) {
      unset( $args[7] ); // GP_Pro_Menu::add_elements_menu()
    } 
    
    if ( admin_url( "themes.php?page=generatepress-library" ) != menu_page_url( "generatepress-library", false ) ) {
      unset( $args[12] ); // GP_Pro_Shortcuts::site_library()
    }

    if ( ! post_type_exists( "gblocks_templates" ) ) {
      unset( $args[17] ); // GP_Generateblocks_Menu::local_patterns_menu()
    }

    foreach ( $args as $arg ) {
      $admin_bar->add_node( $arg );
    }
  }
}