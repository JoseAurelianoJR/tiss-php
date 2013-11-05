<?php

if (!class_exists("relacaoGlosa", false)) 
{
class relacaoGlosa
{

  /**
   * 
   * @var float $valorGlosa
   * @access public
   */
  public $valorGlosa = null;

  /**
   * 
   * @var dm_tipoGlosa $tipoGlosa
   * @access public
   */
  public $tipoGlosa = null;

  /**
   * 
   * @param float $valorGlosa
   * @param dm_tipoGlosa $tipoGlosa
   * @access public
   */
  public function __construct($valorGlosa, $tipoGlosa)
  {
    $this->valorGlosa = $valorGlosa;
    $this->tipoGlosa = $tipoGlosa;
  }

}

}
