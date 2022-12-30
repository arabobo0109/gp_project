<?php

class GP_Free_Menu
{
  public static function main()
  {
    $iconurl = GP_SHORTCUTS_URL . "assets/images/gp-logo.png";

    $iconspan = '<span class="gp-ab-icon" style="
      float:left; width:22px !important; height:22px !important;
      margin-left: 5px !important; margin-top: 5px !important;
      background-image:url(\'' . $iconurl . '\')!important;background-size: contain;background-repeat: no-repeat;"></span>';

    return array(
      'id'    => 'gp-shortcuts-main',
      'title' => $iconspan . __( 'GP Shortcuts', 'gp-shortcuts' ),
      'href'  => '#',
    );
  }

  public static function gp_menu()
  {
    return array(
      'parent'=> 'gp-shortcuts-main',
      'id'    => 'gp-shortcuts-generatepress',
      'title' => __( 'GeneratePress', 'gp-shortcuts' ),
      'href'  => admin_url( "themes.php?page=generate-options" ),
    );
  }

  public static function customize()
  {
    return array(
      'parent'=> 'gp-shortcuts-generatepress',
      'id'    => 'gp-shortcuts-customize',
      'title' => __( 'Start Customizing', 'gp-shortcuts' ),
      'href'  => admin_url( "themes.php?page=generate-options" ),
    );
  }

  public static function site_identity()
  {
    return array(
      'parent'=> 'gp-shortcuts-customize',
      'id'    => 'gp-shortcuts-site-identity',
      'title' => __( 'Site Identity', 'gp-shortcuts' ),
      'href'  => admin_url( "customize.php?autofocus%5Bsection%5D=title_tagline" ),
    );
  }

  public static function color_option()
  {
    return array(
      'parent'=> 'gp-shortcuts-customize',
      'id'    => 'gp-shortcuts-site-color-options',
      'title' => __( 'Color Options', 'gp-shortcuts' ),
      'href'  => admin_url( "customize.php?autofocus%5Bsection%5D=generate_colors_section" ),
    );
  }

  public static function typography()
  {
    return array(
      'parent'=> 'gp-shortcuts-customize',
      'id'    => 'gp-shortcuts-typography',
      'title' => __( 'Typography System', 'gp-shortcuts' ),
      'href'  => admin_url( "customize.php?autofocus%5Bsection%5D=generate_typography_section" ),
    );
  }

  public static function layout()
  {
    return array(
      'parent'=> 'gp-shortcuts-customize',
      'id'    => 'gp-shortcuts-layout-options',
      'title' => __( 'Layout Options', 'gp-shortcuts' ),
      'href'  => admin_url( "customize.php?autofocus%5Bpanel%5D=generate_layout_panel" ),
    );
  }

  public static function support()
  {
    return array(
      'parent'=> 'gp-shortcuts-generatepress',
      'id'    => 'gp-shortcuts-support',
      'title' => __( 'Support', 'gp-shortcuts' ),
      'href'  => 'https://generatepress.com/support',
      'meta'  => array( 'target' => '_blank')
    );
  }

  public static function documentation()
  {
    return array(
      'parent'=> 'gp-shortcuts-generatepress',
      'id'    => 'gp-shortcuts-documentation',
      'title' => __( 'Documentation', 'gp-shortcuts' ),
      'href'  => 'https://docs.generatepress.com/',
      'meta'  => array( 'target' => '_blank')
    );
  }
}