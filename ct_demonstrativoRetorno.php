<?php

if (!class_exists("ct_demonstrativoRetorno", false)) 
{
class ct_demonstrativoRetorno
{

  /**
   * 
   * @var ctm_demonstrativoAnaliseConta $demonstrativoAnaliseConta
   * @access public
   */
  public $demonstrativoAnaliseConta = null;

  /**
   * 
   * @var ctm_demonstrativoPagamento $demonstrativoPagamento
   * @access public
   */
  public $demonstrativoPagamento = null;

  /**
   * 
   * @var ct_motivoGlosa $mensagemErro
   * @access public
   */
  public $mensagemErro = null;

  /**
   * 
   * @var cto_demonstrativoOdontologia $demonstrativoPagamentoOdonto
   * @access public
   */
  public $demonstrativoPagamentoOdonto = null;

  /**
   * 
   * @param ctm_demonstrativoAnaliseConta $demonstrativoAnaliseConta
   * @param ctm_demonstrativoPagamento $demonstrativoPagamento
   * @param ct_motivoGlosa $mensagemErro
   * @param cto_demonstrativoOdontologia $demonstrativoPagamentoOdonto
   * @access public
   */
  public function __construct($demonstrativoAnaliseConta, $demonstrativoPagamento, $mensagemErro, $demonstrativoPagamentoOdonto)
  {
    $this->demonstrativoAnaliseConta = $demonstrativoAnaliseConta;
    $this->demonstrativoPagamento = $demonstrativoPagamento;
    $this->mensagemErro = $mensagemErro;
    $this->demonstrativoPagamentoOdonto = $demonstrativoPagamentoOdonto;
  }

}

}
