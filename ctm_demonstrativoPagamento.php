<?php

if (!class_exists("ctm_demonstrativoPagamento", false)) 
{
class ctm_demonstrativoPagamento
{

  /**
   * 
   * @var ct_demonstrativoCabecalho $cabecalhoDemonstrativo
   * @access public
   */
  public $cabecalhoDemonstrativo = null;

  /**
   * 
   * @var dadosContratado $dadosContratado
   * @access public
   */
  public $dadosContratado = null;

  /**
   * 
   * @var ct_pagamentoDados $dadosPagamento
   * @access public
   */
  public $dadosPagamento = null;

  /**
   * 
   * @var dadosResumo $dadosResumo
   * @access public
   */
  public $dadosResumo = null;

  /**
   * 
   * @var float $valorInformadoBruto
   * @access public
   */
  public $valorInformadoBruto = null;

  /**
   * 
   * @var float $valorProcessadoBruto
   * @access public
   */
  public $valorProcessadoBruto = null;

  /**
   * 
   * @var float $valorLiberadoBruto
   * @access public
   */
  public $valorLiberadoBruto = null;

  /**
   * 
   * @var float $valorGlosaBruto
   * @access public
   */
  public $valorGlosaBruto = null;

  /**
   * 
   * @var Ct_descontos[] $demaisDebitosCreditos
   * @access public
   */
  public $demaisDebitosCreditos = null;

  /**
   * 
   * @var float $totalDemaisDebitos
   * @access public
   */
  public $totalDemaisDebitos = null;

  /**
   * 
   * @var float $totalDemaisCreditos
   * @access public
   */
  public $totalDemaisCreditos = null;

  /**
   * 
   * @var float $valorFinalReceber
   * @access public
   */
  public $valorFinalReceber = null;

  /**
   * 
   * @var string $observacao
   * @access public
   */
  public $observacao = null;

  /**
   * 
   * @param ct_demonstrativoCabecalho $cabecalhoDemonstrativo
   * @param dadosContratado $dadosContratado
   * @param ct_pagamentoDados $dadosPagamento
   * @param dadosResumo $dadosResumo
   * @param float $valorInformadoBruto
   * @param float $valorProcessadoBruto
   * @param float $valorLiberadoBruto
   * @param float $valorGlosaBruto
   * @param Ct_descontos[] $demaisDebitosCreditos
   * @param float $totalDemaisDebitos
   * @param float $totalDemaisCreditos
   * @param float $valorFinalReceber
   * @param string $observacao
   * @access public
   */
  public function __construct($cabecalhoDemonstrativo, $dadosContratado, $dadosPagamento, $dadosResumo, $valorInformadoBruto, $valorProcessadoBruto, $valorLiberadoBruto, $valorGlosaBruto, $demaisDebitosCreditos, $totalDemaisDebitos, $totalDemaisCreditos, $valorFinalReceber, $observacao)
  {
    $this->cabecalhoDemonstrativo = $cabecalhoDemonstrativo;
    $this->dadosContratado = $dadosContratado;
    $this->dadosPagamento = $dadosPagamento;
    $this->dadosResumo = $dadosResumo;
    $this->valorInformadoBruto = $valorInformadoBruto;
    $this->valorProcessadoBruto = $valorProcessadoBruto;
    $this->valorLiberadoBruto = $valorLiberadoBruto;
    $this->valorGlosaBruto = $valorGlosaBruto;
    $this->demaisDebitosCreditos = $demaisDebitosCreditos;
    $this->totalDemaisDebitos = $totalDemaisDebitos;
    $this->totalDemaisCreditos = $totalDemaisCreditos;
    $this->valorFinalReceber = $valorFinalReceber;
    $this->observacao = $observacao;
  }

}

}
