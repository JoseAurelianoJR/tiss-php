<?php

if (!class_exists("ct_procedimentoExecutadoSadt", false)) 
{
class ct_procedimentoExecutadoSadt
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
   * @var int $quantidadeExecutada
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
   * @var ct_identEquipeSADT $equipeSadt
   * @access public
   */
  public $equipeSadt = null;

  /**
   * 
   * @param date $dataExecucao
   * @param time $horaInicial
   * @param time $horaFinal
   * @param ct_procedimentoDados $procedimento
   * @param int $quantidadeExecutada
   * @param dm_viaDeAcesso $viaAcesso
   * @param dm_tecnicaUtilizada $tecnicaUtilizada
   * @param float $reducaoAcrescimo
   * @param float $valorUnitario
   * @param float $valorTotal
   * @param ct_identEquipeSADT $equipeSadt
   * @access public
   */
  public function __construct($dataExecucao, $horaInicial, $horaFinal, $procedimento, $quantidadeExecutada, $viaAcesso, $tecnicaUtilizada, $reducaoAcrescimo, $valorUnitario, $valorTotal, $equipeSadt)
  {
    $this->dataExecucao = $dataExecucao;
    $this->horaInicial = $horaInicial;
    $this->horaFinal = $horaFinal;
    $this->procedimento = $procedimento;
    $this->quantidadeExecutada = $quantidadeExecutada;
    $this->viaAcesso = $viaAcesso;
    $this->tecnicaUtilizada = $tecnicaUtilizada;
    $this->reducaoAcrescimo = $reducaoAcrescimo;
    $this->valorUnitario = $valorUnitario;
    $this->valorTotal = $valorTotal;
    $this->equipeSadt = $equipeSadt;
  }

}

}
