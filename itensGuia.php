<?php

if (!class_exists("itensGuia", false)) 
{
class itensGuia
{

  /**
   * 
   * @var date $dataInicio
   * @access public
   */
  public $dataInicio = null;

  /**
   * 
   * @var date $dataFim
   * @access public
   */
  public $dataFim = null;

  /**
   * 
   * @var ct_procedimentoDados $procRecurso
   * @access public
   */
  public $procRecurso = null;

  /**
   * 
   * @var dm_tipoGlosa $codGlosaItem
   * @access public
   */
  public $codGlosaItem = null;

  /**
   * 
   * @var float $valorRecursado
   * @access public
   */
  public $valorRecursado = null;

  /**
   * 
   * @var string $justificativaItem
   * @access public
   */
  public $justificativaItem = null;

  /**
   * 
   * @param date $dataInicio
   * @param date $dataFim
   * @param ct_procedimentoDados $procRecurso
   * @param dm_tipoGlosa $codGlosaItem
   * @param float $valorRecursado
   * @param string $justificativaItem
   * @access public
   */
  public function __construct($dataInicio, $dataFim, $procRecurso, $codGlosaItem, $valorRecursado, $justificativaItem)
  {
    $this->dataInicio = $dataInicio;
    $this->dataFim = $dataFim;
    $this->procRecurso = $procRecurso;
    $this->codGlosaItem = $codGlosaItem;
    $this->valorRecursado = $valorRecursado;
    $this->justificativaItem = $justificativaItem;
  }

}

}
