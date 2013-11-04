<?php

class pedidoElegibilidadeWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_elegibilidadeVerifica $pedidoElegibilidade
   * @access public
   */
  public $pedidoElegibilidade = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_elegibilidadeVerifica $pedidoElegibilidade
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $pedidoElegibilidade, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->pedidoElegibilidade = $pedidoElegibilidade;
    $this->hash = $hash;
  }

}
