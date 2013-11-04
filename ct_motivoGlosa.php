<?php

class ct_motivoGlosa
{

  /**
   * 
   * @var dm_tipoGlosa $codigoGlosa
   * @access public
   */
  public $codigoGlosa = null;

  /**
   * 
   * @var string $descricaoGlosa
   * @access public
   */
  public $descricaoGlosa = null;

  /**
   * 
   * @param dm_tipoGlosa $codigoGlosa
   * @param string $descricaoGlosa
   * @access public
   */
  public function __construct($codigoGlosa, $descricaoGlosa)
  {
    $this->codigoGlosa = $codigoGlosa;
    $this->descricaoGlosa = $descricaoGlosa;
  }

}
