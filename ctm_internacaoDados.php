<?php

if (!class_exists("ctm_internacaoDados", false)) 
{
class ctm_internacaoDados
{

  /**
   * 
   * @var dm_caraterAtendimento $caraterAtendimento
   * @access public
   */
  public $caraterAtendimento = null;

  /**
   * 
   * @var dm_tipoFaturamento $tipoFaturamento
   * @access public
   */
  public $tipoFaturamento = null;

  /**
   * 
   * @var date $dataInicioFaturamento
   * @access public
   */
  public $dataInicioFaturamento = null;

  /**
   * 
   * @var time $horaInicioFaturamento
   * @access public
   */
  public $horaInicioFaturamento = null;

  /**
   * 
   * @var date $dataFinalFaturamento
   * @access public
   */
  public $dataFinalFaturamento = null;

  /**
   * 
   * @var time $horaFinalFaturamento
   * @access public
   */
  public $horaFinalFaturamento = null;

  /**
   * 
   * @var dm_tipoInternacao $tipoInternacao
   * @access public
   */
  public $tipoInternacao = null;

  /**
   * 
   * @var dm_regimeInternacao $regimeInternacao
   * @access public
   */
  public $regimeInternacao = null;

  /**
   * 
   * @var declaracoes $declaracoes
   * @access public
   */
  public $declaracoes = null;

  /**
   * 
   * @param dm_caraterAtendimento $caraterAtendimento
   * @param dm_tipoFaturamento $tipoFaturamento
   * @param date $dataInicioFaturamento
   * @param time $horaInicioFaturamento
   * @param date $dataFinalFaturamento
   * @param time $horaFinalFaturamento
   * @param dm_tipoInternacao $tipoInternacao
   * @param dm_regimeInternacao $regimeInternacao
   * @param declaracoes $declaracoes
   * @access public
   */
  public function __construct($caraterAtendimento, $tipoFaturamento, $dataInicioFaturamento, $horaInicioFaturamento, $dataFinalFaturamento, $horaFinalFaturamento, $tipoInternacao, $regimeInternacao, $declaracoes)
  {
    $this->caraterAtendimento = $caraterAtendimento;
    $this->tipoFaturamento = $tipoFaturamento;
    $this->dataInicioFaturamento = $dataInicioFaturamento;
    $this->horaInicioFaturamento = $horaInicioFaturamento;
    $this->dataFinalFaturamento = $dataFinalFaturamento;
    $this->horaFinalFaturamento = $horaFinalFaturamento;
    $this->tipoInternacao = $tipoInternacao;
    $this->regimeInternacao = $regimeInternacao;
    $this->declaracoes = $declaracoes;
  }

}

}
