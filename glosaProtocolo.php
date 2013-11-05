<?php

if (!class_exists("glosaProtocolo", false)) 
{
class glosaProtocolo
{

  /**
   * 
   * @var Ct_motivoGlosa[] $motivosGlosa
   * @access public
   */
  public $motivosGlosa = null;

  /**
   * 
   * @var float $vlGlosaProtocolo
   * @access public
   */
  public $vlGlosaProtocolo = null;

  /**
   * 
   * @param Ct_motivoGlosa[] $motivosGlosa
   * @param float $vlGlosaProtocolo
   * @access public
   */
  public function __construct($motivosGlosa, $vlGlosaProtocolo)
  {
    $this->motivosGlosa = $motivosGlosa;
    $this->vlGlosaProtocolo = $vlGlosaProtocolo;
  }

}

}
