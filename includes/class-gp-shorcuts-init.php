<?php

class GP_Shortcuts_Init
{
  public function __construct()
  {
    $this->includes();

    return array(
      GP_Shortcuts::init()
    );
  }

  public function includes()
  {
    foreach ( glob( GP_SHORTCUTS_PATH . "includes/classes/*.php" ) as $class)
    {
        include $class;
    }
  }
}