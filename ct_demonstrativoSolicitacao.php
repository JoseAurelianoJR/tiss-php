<?php

if (!class_exists("ct_demonstrativoSolicitacao", false)) 
{
class ct_demonstrativoSolicitacao
{

  /**
   * 
   * @var ct_contratadoDados $dadosPrestador
   * @access public
   */
  public $dadosPrestador = null;

  /**
   * 
   * @var date $dataSolicitacao
   * @access public
   */
  public $dataSolicitacao = null;

  /**
   * 
   * @var dm_tipoDemonstrativo $tipoDemonstrativo
   * @access public
   */
  public $tipoDemonstrativo = null;

  /**
   * 
   * @var periodo $periodo
   * @access public
   */
  public $periodo = null;

  /**
   * 
   * @var string $numeroProtocolo
   * @access public
   */
  public $numeroProtocolo = null;

  /**
   * 
   * @param ct_contratadoDados $dadosPrestador
   * @param date $dataSolicitacao
   * @param dm_tipoDemonstrativo $tipoDemonstrativo
   * @param periodo $periodo
   * @param string $numeroProtocolo
   * @access public
   */
  public function __construct($dadosPrestador, $dataSolicitacao, $tipoDemonstrativo, $periodo, $numeroProtocolo)
  {
    $this->dadosPrestador = $dadosPrestador;
    $this->dataSolicitacao = $dataSolicitacao;
    $this->tipoDemonstrativo = $tipoDemonstrativo;
    $this->periodo = $periodo;
    $this->numeroProtocolo = $numeroProtocolo;
  }

}

}
