<?php

class origem
{

  /**
   * 
   * @var identificacaoPrestador $identificacaoPrestador
   * @access public
   */
  public $identificacaoPrestador = null;

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @param identificacaoPrestador $identificacaoPrestador
   * @param string $registroANS
   * @access public
   */
  public function __construct($identificacaoPrestador, $registroANS)
  {
    $this->identificacaoPrestador = $identificacaoPrestador;
    $this->registroANS = $registroANS;
  }

}
