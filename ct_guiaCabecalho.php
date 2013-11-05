<?php

if (!class_exists("ct_guiaCabecalho", false)) 
{
class ct_guiaCabecalho
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @param string $registroANS
   * @param string $numeroGuiaPrestador
   * @access public
   */
  public function __construct($registroANS, $numeroGuiaPrestador)
  {
    $this->registroANS = $registroANS;
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
  }

}

}
