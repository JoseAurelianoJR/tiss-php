<?php

if (!class_exists("ct_procedimentoExecutado", false)) 
{
class ct_procedimentoExecutado
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
   * @var ct_procedimentoDados $procedimento
   * @access public
   */
  public $procedimento = null;

  /**
   * 
   * @var dm_unidadeMedida $unidadeMedida
   * @access public
   */
  public $unidadeMedida = null;

  /**
   * 
   * @var float $quantidadeExecutada
   * @access public
   */
  public $quantidadeExecutada = null;

  /**
   * 
   * @var dm_viaDeAcesso $viaAcesso
   * @access public
   */
  public $viaAcesso = null;

  /**
   * 
   * @var dm_tecnicaUtilizada $tecnicaUtilizada
   * @access public
   */
  public $tecnicaUtilizada = null;

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
   * @var dm_outrasDespesas $codigoDespesa
   * @access public
   */
  public $codigoDespesa = null;

  /**
   * 
   * @var float $fatorReducaoAcrescimo
   * @access public
   */
  public $fatorReducaoAcrescimo = null;

  /**
   * 
   * @param date $dataExecucao
   * @param time $horaInicial
   * @param time $horaFinal
   * @param ct_procedimentoDados $procedimento
   * @param dm_unidadeMedida $unidadeMedida
   * @param float $quantidadeExecutada
   * @param dm_viaDeAcesso $viaAcesso
   * @param dm_tecnicaUtilizada $tecnicaUtilizada
   * @param float $valorUnitario
   * @param float $valorTotal
   * @param dm_outrasDespesas $codigoDespesa
   * @param float $fatorReducaoAcrescimo
   * @access public
   */
  public function __construct($dataExecucao, $horaInicial, $horaFinal, $procedimento, $unidadeMedida, $quantidadeExecutada, $viaAcesso, $tecnicaUtilizada, $valorUnitario, $valorTotal, $codigoDespesa, $fatorReducaoAcrescimo)
  {
    $this->dataExecucao = $dataExecucao;
    $this->horaInicial = $horaInicial;
    $this->horaFinal = $horaFinal;
    $this->procedimento = $procedimento;
    $this->unidadeMedida = $unidadeMedida;
    $this->quantidadeExecutada = $quantidadeExecutada;
    $this->viaAcesso = $viaAcesso;
    $this->tecnicaUtilizada = $tecnicaUtilizada;
    $this->valorUnitario = $valorUnitario;
    $this->valorTotal = $valorTotal;
    $this->codigoDespesa = $codigoDespesa;
    $this->fatorReducaoAcrescimo = $fatorReducaoAcrescimo;
  }

}

}
