<?php

class GP_Generateblocks_Menu
{
  public static function main_menu()
  {
    return array(
      'parent'=> 'gp-shortcuts-main',
      'id'    => 'gp-generateblocks-menu',
      'title' => __( 'GenerateBlocks', 'gp-shortcuts' ),
      'href'  => admin_url( "admin.php?page=generateblocks" ),
    );
  }

  public static function settings_menu()
  {
    return array(
      'parent'=> 'gp-generateblocks-menu',
      'id'    => 'gp-generateblocks-settings',
      'title' => __( 'Settings', 'gp-shortcuts' ),
      'href'  => admin_url( "admin.php?page=generateblocks-settings" ),
    );
  }

  public static function local_patterns_menu()
  {
    return array(
      'parent'=> 'gp-generateblocks-menu',
      'id'    => 'gp-generateblocks-local-patterns',
      'title' => __( 'Local Patterns', 'gp-shortcuts' ),
      'href'  => admin_url( "edit.php?post_type=gblocks_templates" ),
    );
  }

  public static function global_styles_menu()
  {
    return array(
      'parent'=> 'gp-generateblocks-menu',
      'id'    => 'gp-generateblocks-global-styles',
      'title' => __( 'Global Styles', 'gp-shortcuts' ),
      'href'  => admin_url( "edit.php?post_type=gblocks_global_style" ),
    );
  }

  public static function assets_library_menu()
  {
    return array(
      'parent'=> 'gp-generateblocks-menu',
      'id'    => 'gp-generateblocks-assets-library',
      'title' => __( 'Assets Library', 'gp-shortcuts' ),
      'href'  => admin_url( "admin.php?page=generateblocks-asset-library" ),
    );
  }

  public static function docs_menu()
  {
    return array(
      'parent'=> 'gp-generateblocks-menu',
      'id'    => 'gp-generateblocks-docs_menu',
      'title' => __( 'Documentations', 'gp-shortcuts' ),
      'href'  => admin_url( "admin.php?page=generateblocks-settings" ),
    );
  }

  public static function container_docs()
  {
    return array(
      'parent'=> 'gp-generateblocks-docs_menu',
      'id'    => 'gp-generateblocks-container-docs',
      'title' => __( 'Container', 'gp-shortcuts' ),
      'href'  => "https://docs.generateblocks.com/collection/container/",
      'meta'  => array( 'target' => '_blank')
    );
  }

  public static function grid_docs()
  {
    return array(
      'parent'=> 'gp-generateblocks-docs_menu',
      'id'    => 'gp-generateblocks-grid-docs',
      'title' => __( 'Grid', 'gp-shortcuts' ),
      'href'  => "https://docs.generateblocks.com/collection/grid/",
      'meta'  => array( 'target' => '_blank')
    );
  }

  public static function headline_docs()
  {
    return array(
      'parent'=> 'gp-generateblocks-docs_menu',
      'id'    => 'gp-generateblocks-headline-docs',
      'title' => __( 'Headline', 'gp-shortcuts' ),
      'href'  => "https://docs.generateblocks.com/collection/headline/",
      'meta'  => array( 'target' => '_blank')
    );
  }

  public static function buttons_docs()
  {
    return array(
      'parent'=> 'gp-generateblocks-docs_menu',
      'id'    => 'gp-generateblocks-buttons-docs',
      'title' => __( 'Buttons', 'gp-shortcuts' ),
      'href'  => "https://docs.generateblocks.com/collection/buttons/",
      'meta'  => array( 'target' => '_blank')
    );
  }

  public static function queryloop_docs()
  {
    return array(
      'parent'=> 'gp-generateblocks-docs_menu',
      'id'    => 'gp-generateblocks-queryloop-docs',
      'title' => __( 'Query Loop', 'gp-shortcuts' ),
      'href'  => "https://docs.generateblocks.com/collection/query-loop/",
      'meta'  => array( 'target' => '_blank')
    );
  }

  public static function image_docs()
  {
    return array(
      'parent'=> 'gp-generateblocks-docs_menu',
      'id'    => 'gp-generateblocks-image-docs',
      'title' => __( 'Image', 'gp-shortcuts' ),
      'href'  => "https://docs.generateblocks.com/collection/image/",
      'meta'  => array( 'target' => '_blank')
    );
  }
}