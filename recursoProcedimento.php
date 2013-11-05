<?php

if (!class_exists("recursoProcedimento", false)) 
{
class recursoProcedimento
{

  /**
   * 
   * @var date $dataRealizacao
   * @access public
   */
  public $dataRealizacao = null;

  /**
   * 
   * @var dm_dente $denteRegiao
   * @access public
   */
  public $denteRegiao = null;

  /**
   * 
   * @var string $denteFace
   * @access public
   */
  public $denteFace = null;

  /**
   * 
   * @var int $quantidade
   * @access public
   */
  public $quantidade = null;

  /**
   * 
   * @var ct_procedimentoDados $procRecurso
   * @access public
   */
  public $procRecurso = null;

  /**
   * 
   * @var dm_tipoGlosa $codGlosaProc
   * @access public
   */
  public $codGlosaProc = null;

  /**
   * 
   * @var string $justificativaProc
   * @access public
   */
  public $justificativaProc = null;

  /**
   * 
   * @var float $valorRecursado
   * @access public
   */
  public $valorRecursado = null;

  /**
   * 
   * @param date $dataRealizacao
   * @param dm_dente $denteRegiao
   * @param string $denteFace
   * @param int $quantidade
   * @param ct_procedimentoDados $procRecurso
   * @param dm_tipoGlosa $codGlosaProc
   * @param string $justificativaProc
   * @param float $valorRecursado
   * @access public
   */
  public function __construct($dataRealizacao, $denteRegiao, $denteFace, $quantidade, $procRecurso, $codGlosaProc, $justificativaProc, $valorRecursado)
  {
    $this->dataRealizacao = $dataRealizacao;
    $this->denteRegiao = $denteRegiao;
    $this->denteFace = $denteFace;
    $this->quantidade = $quantidade;
    $this->procRecurso = $procRecurso;
    $this->codGlosaProc = $codGlosaProc;
    $this->justificativaProc = $justificativaProc;
    $this->valorRecursado = $valorRecursado;
  }

}

}
