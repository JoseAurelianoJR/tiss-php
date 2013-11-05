<?php

if (!class_exists("ct_pagamentoDados", false)) 
{
class ct_pagamentoDados
{

  /**
   * 
   * @var date $dataPagamento
   * @access public
   */
  public $dataPagamento = null;

  /**
   * 
   * @var dm_formaPagamento $formaPagamento
   * @access public
   */
  public $formaPagamento = null;

  /**
   * 
   * @var string $banco
   * @access public
   */
  public $banco = null;

  /**
   * 
   * @var string $agencia
   * @access public
   */
  public $agencia = null;

  /**
   * 
   * @var string $nrContaCheque
   * @access public
   */
  public $nrContaCheque = null;

  /**
   * 
   * @param date $dataPagamento
   * @param dm_formaPagamento $formaPagamento
   * @param string $banco
   * @param string $agencia
   * @param string $nrContaCheque
   * @access public
   */
  public function __construct($dataPagamento, $formaPagamento, $banco, $agencia, $nrContaCheque)
  {
    $this->dataPagamento = $dataPagamento;
    $this->formaPagamento = $formaPagamento;
    $this->banco = $banco;
    $this->agencia = $agencia;
    $this->nrContaCheque = $nrContaCheque;
  }

}

}
