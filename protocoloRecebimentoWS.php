<?php

if (!class_exists("protocoloRecebimentoWS", false)) 
{
class protocoloRecebimentoWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_recebimentoLote $recebimentoLote
   * @access public
   */
  public $recebimentoLote = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_recebimentoLote $recebimentoLote
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $recebimentoLote, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->recebimentoLote = $recebimentoLote;
    $this->hash = $hash;
  }

}

}
