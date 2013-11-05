<?php

if (!class_exists("glosasProcedimento", false)) 
{
class glosasProcedimento
{

  /**
   * 
   * @var ct_motivoGlosa $motivoGlosa
   * @access public
   */
  public $motivoGlosa = null;

  /**
   * 
   * @var float $valorGlosaProcedimento
   * @access public
   */
  public $valorGlosaProcedimento = null;

  /**
   * 
   * @param ct_motivoGlosa $motivoGlosa
   * @param float $valorGlosaProcedimento
   * @access public
   */
  public function __construct($motivoGlosa, $valorGlosaProcedimento)
  {
    $this->motivoGlosa = $motivoGlosa;
    $this->valorGlosaProcedimento = $valorGlosaProcedimento;
  }

}

}
