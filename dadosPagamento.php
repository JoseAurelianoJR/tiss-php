<?php

if (!class_exists("dadosPagamento", false)) 
{
class dadosPagamento
{

  /**
   * 
   * @var ct_procedimentoDados $procedimento
   * @access public
   */
  public $procedimento = null;

  /**
   * 
   * @var denteRegiao $denteRegiao
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
   * @var date $dataRealizacao
   * @access public
   */
  public $dataRealizacao = null;

  /**
   * 
   * @var int $qtdProc
   * @access public
   */
  public $qtdProc = null;

  /**
   * 
   * @var float $valorInformado
   * @access public
   */
  public $valorInformado = null;

  /**
   * 
   * @var float $valorProcessado
   * @access public
   */
  public $valorProcessado = null;

  /**
   * 
   * @var float $valorGlosaEstorno
   * @access public
   */
  public $valorGlosaEstorno = null;

  /**
   * 
   * @var float $valorFranquia
   * @access public
   */
  public $valorFranquia = null;

  /**
   * 
   * @var float $valorLiberado
   * @access public
   */
  public $valorLiberado = null;

  /**
   * 
   * @var dm_tipoGlosa $codigosGlosa
   * @access public
   */
  public $codigosGlosa = null;

  /**
   * 
   * @param ct_procedimentoDados $procedimento
   * @param denteRegiao $denteRegiao
   * @param string $denteFace
   * @param date $dataRealizacao
   * @param int $qtdProc
   * @param float $valorInformado
   * @param float $valorProcessado
   * @param float $valorGlosaEstorno
   * @param float $valorFranquia
   * @param float $valorLiberado
   * @param dm_tipoGlosa $codigosGlosa
   * @access public
   */
  public function __construct($procedimento, $denteRegiao, $denteFace, $dataRealizacao, $qtdProc, $valorInformado, $valorProcessado, $valorGlosaEstorno, $valorFranquia, $valorLiberado, $codigosGlosa)
  {
    $this->procedimento = $procedimento;
    $this->denteRegiao = $denteRegiao;
    $this->denteFace = $denteFace;
    $this->dataRealizacao = $dataRealizacao;
    $this->qtdProc = $qtdProc;
    $this->valorInformado = $valorInformado;
    $this->valorProcessado = $valorProcessado;
    $this->valorGlosaEstorno = $valorGlosaEstorno;
    $this->valorFranquia = $valorFranquia;
    $this->valorLiberado = $valorLiberado;
    $this->codigosGlosa = $codigosGlosa;
  }

}

}
