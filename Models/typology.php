<?php
class Typology
{
  public $type;
  public $icon;

  public function __construct($type, $icon)
  {
    $this->type = $type;
    $this->icon = $icon;
  }
}
