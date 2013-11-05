<?php

if (!class_exists("ct_valorTotal", false)) 
{
class ct_valorTotal
{

  /**
   * 
   * @var float $valorProcessado
   * @access public
   */
  public $valorProcessado = null;

  /**
   * 
   * @var float $valorGlosa
   * @access public
   */
  public $valorGlosa = null;

  /**
   * 
   * @var float $valorLiberado
   * @access public
   */
  public $valorLiberado = null;

  /**
   * 
   * @param float $valorProcessado
   * @param float $valorGlosa
   * @param float $valorLiberado
   * @access public
   */
  public function __construct($valorProcessado, $valorGlosa, $valorLiberado)
  {
    $this->valorProcessado = $valorProcessado;
    $this->valorGlosa = $valorGlosa;
    $this->valorLiberado = $valorLiberado;
  }

}

}
