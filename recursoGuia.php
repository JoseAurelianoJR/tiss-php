<?php

if (!class_exists("recursoGuia", false)) 
{
class recursoGuia
{

  /**
   * 
   * @var dm_tipoGlosa $codGlosaGuia
   * @access public
   */
  public $codGlosaGuia = null;

  /**
   * 
   * @var string $justificativaGuia
   * @access public
   */
  public $justificativaGuia = null;

  /**
   * 
   * @param dm_tipoGlosa $codGlosaGuia
   * @param string $justificativaGuia
   * @access public
   */
  public function __construct($codGlosaGuia, $justificativaGuia)
  {
    $this->codGlosaGuia = $codGlosaGuia;
    $this->justificativaGuia = $justificativaGuia;
  }

}

}
