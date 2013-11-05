<?php

if (!class_exists("ctm_guiaLote", false)) 
{
class ctm_guiaLote
{

  /**
   * 
   * @var string $numeroLote
   * @access public
   */
  public $numeroLote = null;

  /**
   * 
   * @var guiasTISS $guiasTISS
   * @access public
   */
  public $guiasTISS = null;

  /**
   * 
   * @param string $numeroLote
   * @param guiasTISS $guiasTISS
   * @access public
   */
  public function __construct($numeroLote, $guiasTISS)
  {
    $this->numeroLote = $numeroLote;
    $this->guiasTISS = $guiasTISS;
  }

}

}
