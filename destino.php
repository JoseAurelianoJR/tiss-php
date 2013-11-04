<?php

class destino
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var ct_prestadorIdentificacao $identificacaoPrestador
   * @access public
   */
  public $identificacaoPrestador = null;

  /**
   * 
   * @param string $registroANS
   * @param ct_prestadorIdentificacao $identificacaoPrestador
   * @access public
   */
  public function __construct($registroANS, $identificacaoPrestador)
  {
    $this->registroANS = $registroANS;
    $this->identificacaoPrestador = $identificacaoPrestador;
  }

}
