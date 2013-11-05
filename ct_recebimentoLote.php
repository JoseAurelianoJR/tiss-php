<?php

if (!class_exists("ct_recebimentoLote", false)) 
{
class ct_recebimentoLote
{

  /**
   * 
   * @var ct_protocoloRecebimento $protocoloRecebimento
   * @access public
   */
  public $protocoloRecebimento = null;

  /**
   * 
   * @var ct_motivoGlosa $mensagemErro
   * @access public
   */
  public $mensagemErro = null;

  /**
   * 
   * @param ct_protocoloRecebimento $protocoloRecebimento
   * @param ct_motivoGlosa $mensagemErro
   * @access public
   */
  public function __construct($protocoloRecebimento, $mensagemErro)
  {
    $this->protocoloRecebimento = $protocoloRecebimento;
    $this->mensagemErro = $mensagemErro;
  }

}

}
