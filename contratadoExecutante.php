<?php

if (!class_exists("contratadoExecutante", false)) 
{
class contratadoExecutante
{

  /**
   * 
   * @var string $CNES
   * @access public
   */
  public $CNES = null;

  /**
   * 
   * @param string $CNES
   * @access public
   */
  public function __construct($CNES)
  {
    $this->CNES = $CNES;
  }

}

}
