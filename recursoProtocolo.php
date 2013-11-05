<?php

if (!class_exists("recursoProtocolo", false)) 
{
class recursoProtocolo
{

  /**
   * 
   * @var dm_tipoGlosa $codigoGlosaProtocolo
   * @access public
   */
  public $codigoGlosaProtocolo = null;

  /**
   * 
   * @var string $justificativaProtocolo
   * @access public
   */
  public $justificativaProtocolo = null;

  /**
   * 
   * @param dm_tipoGlosa $codigoGlosaProtocolo
   * @param string $justificativaProtocolo
   * @access public
   */
  public function __construct($codigoGlosaProtocolo, $justificativaProtocolo)
  {
    $this->codigoGlosaProtocolo = $codigoGlosaProtocolo;
    $this->justificativaProtocolo = $justificativaProtocolo;
  }

}

}
