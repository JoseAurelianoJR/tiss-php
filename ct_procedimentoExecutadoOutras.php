<?php

if (!class_exists("ct_procedimentoExecutadoOutras", false)) 
{
class ct_procedimentoExecutadoOutras
{

  /**
   * 
   * @var date $dataExecucao
   * @access public
   */
  public $dataExecucao = null;

  /**
   * 
   * @var time $horaInicial
   * @access public
   */
  public $horaInicial = null;

  /**
   * 
   * @var time $horaFinal
   * @access public
   */
  public $horaFinal = null;

  /**
   * 
   * @var dm_tabela $codigoTabela
   * @access public
   */
  public $codigoTabela = null;

  /**
   * 
   * @var string $codigoProcedimento
   * @access public
   */
  public $codigoProcedimento = null;

  /**
   * 
   * @var float $quantidadeExecutada
   * @access public
   */
  public $quantidadeExecutada = null;

  /**
   * 
   * @var dm_unidadeMedida $unidadeMedida
   * @access public
   */
  public $unidadeMedida = null;

  /**
   * 
   * @var float $reducaoAcrescimo
   * @access public
   */
  public $reducaoAcrescimo = null;

  /**
   * 
   * @var float $valorUnitario
   * @access public
   */
  public $valorUnitario = null;

  /**
   * 
   * @var float $valorTotal
   * @access public
   */
  public $valorTotal = null;

  /**
   * 
   * @var string $descricaoProcedimento
   * @access public
   */
  public $descricaoProcedimento = null;

  /**
   * 
   * @var string $registroANVISA
   * @access public
   */
  public $registroANVISA = null;

  /**
   * 
   * @var string $codigoRefFabricante
   * @access public
   */
  public $codigoRefFabricante = null;

  /**
   * 
   * @var string $autorizacaoFuncionamento
   * @access public
   */
  public $autorizacaoFuncionamento = null;

  /**
   * 
   * @param date $dataExecucao
   * @param time $horaInicial
   * @param time $horaFinal
   * @param dm_tabela $codigoTabela
   * @param string $codigoProcedimento
   * @param float $quantidadeExecutada
   * @param dm_unidadeMedida $unidadeMedida
   * @param float $reducaoAcrescimo
   * @param float $valorUnitario
   * @param float $valorTotal
   * @param string $descricaoProcedimento
   * @param string $registroANVISA
   * @param string $codigoRefFabricante
   * @param string $autorizacaoFuncionamento
   * @access public
   */
  public function __construct($dataExecucao, $horaInicial, $horaFinal, $codigoTabela, $codigoProcedimento, $quantidadeExecutada, $unidadeMedida, $reducaoAcrescimo, $valorUnitario, $valorTotal, $descricaoProcedimento, $registroANVISA, $codigoRefFabricante, $autorizacaoFuncionamento)
  {
    $this->dataExecucao = $dataExecucao;
    $this->horaInicial = $horaInicial;
    $this->horaFinal = $horaFinal;
    $this->codigoTabela = $codigoTabela;
    $this->codigoProcedimento = $codigoProcedimento;
    $this->quantidadeExecutada = $quantidadeExecutada;
    $this->unidadeMedida = $unidadeMedida;
    $this->reducaoAcrescimo = $reducaoAcrescimo;
    $this->valorUnitario = $valorUnitario;
    $this->valorTotal = $valorTotal;
    $this->descricaoProcedimento = $descricaoProcedimento;
    $this->registroANVISA = $registroANVISA;
    $this->codigoRefFabricante = $codigoRefFabricante;
    $this->autorizacaoFuncionamento = $autorizacaoFuncionamento;
  }

}

}
