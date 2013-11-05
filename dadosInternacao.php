<?php

if (!class_exists("dadosInternacao", false)) 
{
class dadosInternacao
{

  /**
   * 
   * @var date $dataInicioFaturamento
   * @access public
   */
  public $dataInicioFaturamento = null;

  /**
   * 
   * @var date $dataFimFaturamento
   * @access public
   */
  public $dataFimFaturamento = null;

  /**
   * 
   * @param date $dataInicioFaturamento
   * @param date $dataFimFaturamento
   * @access public
   */
  public function __construct($dataInicioFaturamento, $dataFimFaturamento)
  {
    $this->dataInicioFaturamento = $dataInicioFaturamento;
    $this->dataFimFaturamento = $dataFimFaturamento;
  }

}

}
