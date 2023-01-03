<?php

class GP_Pro_Menu
{
  public static function add_elements_menu()
  {
    return array(
      'parent'=> 'gp-shortcuts-generatepress',
      'id'    => 'gp-shortcuts-add-elements-menu',
      'title' => __( 'Add New Elements', 'gp-shortcuts' ),
      'href'  => admin_url( "edit.php?post_type=gp_elements" ),
    );
  }

  public static function site_library()
  {
    return array(
      'parent'=> 'gp-shortcuts-generatepress',
      'id'    => 'gp-shortcuts-site-library',
      'title' => __( 'Site Library', 'gp-shortcuts' ),
      'href'  => admin_url( "themes.php?page=generatepress-library" ),
    );
  }

  public static function block()
  {
    return array(
      'parent'=> 'gp-shortcuts-add-elements-menu',
      'id'    => 'gp-shortcuts-elements-block',
      'title' => __( 'Block', 'gp-shortcuts' ),
      'href'  => admin_url( "post-new.php?post_type=gp_elements&element_type=block" ),
    );
  }

  public static function hook()
  {
    return array(
      'parent'=> 'gp-shortcuts-add-elements-menu',
      'id'    => 'gp-shortcuts-elements-hook',
      'title' => __( 'Hook', 'gp-shortcuts' ),
      'href'  => admin_url( "post-new.php?post_type=gp_elements&element_type=hook" ),
    );
  }

  public static function layout()
  {
    return array(
      'parent'=> 'gp-shortcuts-add-elements-menu',
      'id'    => 'gp-shortcuts-elements-layout',
      'title' => __( 'Layout', 'gp-shortcuts' ),
      'href'  => admin_url( "post-new.php?post_type=gp_elements&element_type=layout" ),
    );
  }

  public static function header()
  {
    return array(
      'parent'=> 'gp-shortcuts-add-elements-menu',
      'id'    => 'gp-shortcuts-elements-header',
      'title' => __( 'Header', 'gp-shortcuts' ),
      'href'  => admin_url( "post-new.php?post_type=gp_elements&element_type=header" ),
    );
  }
}
