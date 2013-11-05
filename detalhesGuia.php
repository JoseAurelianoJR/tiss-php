<?php

if (!class_exists("detalhesGuia", false)) 
{
class detalhesGuia
{

  /**
   * 
   * @var date $dataRealizacao
   * @access public
   */
  public $dataRealizacao = null;

  /**
   * 
   * @var ct_procedimentoDados $procedimento
   * @access public
   */
  public $procedimento = null;

  /**
   * 
   * @var dm_grauPart $grauParticipacao
   * @access public
   */
  public $grauParticipacao = null;

  /**
   * 
   * @var float $valorInformado
   * @access public
   */
  public $valorInformado = null;

  /**
   * 
   * @var float $qtdExecutada
   * @access public
   */
  public $qtdExecutada = null;

  /**
   * 
   * @var float $valorProcessado
   * @access public
   */
  public $valorProcessado = null;

  /**
   * 
   * @var float $valorLiberado
   * @access public
   */
  public $valorLiberado = null;

  /**
   * 
   * @var relacaoGlosa $relacaoGlosa
   * @access public
   */
  public $relacaoGlosa = null;

  /**
   * 
   * @param date $dataRealizacao
   * @param ct_procedimentoDados $procedimento
   * @param dm_grauPart $grauParticipacao
   * @param float $valorInformado
   * @param float $qtdExecutada
   * @param float $valorProcessado
   * @param float $valorLiberado
   * @param relacaoGlosa $relacaoGlosa
   * @access public
   */
  public function __construct($dataRealizacao, $procedimento, $grauParticipacao, $valorInformado, $qtdExecutada, $valorProcessado, $valorLiberado, $relacaoGlosa)
  {
    $this->dataRealizacao = $dataRealizacao;
    $this->procedimento = $procedimento;
    $this->grauParticipacao = $grauParticipacao;
    $this->valorInformado = $valorInformado;
    $this->qtdExecutada = $qtdExecutada;
    $this->valorProcessado = $valorProcessado;
    $this->valorLiberado = $valorLiberado;
    $this->relacaoGlosa = $relacaoGlosa;
  }

}

}
