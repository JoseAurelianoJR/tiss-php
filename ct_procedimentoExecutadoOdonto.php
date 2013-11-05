<?php

if (!class_exists("ct_procedimentoExecutadoOdonto", false)) 
{
class ct_procedimentoExecutadoOdonto
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
   * @var int $qtdProc
   * @access public
   */
  public $qtdProc = null;

  /**
   * 
   * @var float $qtdUS
   * @access public
   */
  public $qtdUS = null;

  /**
   * 
   * @var float $valorProc
   * @access public
   */
  public $valorProc = null;

  /**
   * 
   * @var float $valorFranquia
   * @access public
   */
  public $valorFranquia = null;

  /**
   * 
   * @var dm_simNao $autorizado
   * @access public
   */
  public $autorizado = null;

  /**
   * 
   * @var date $dataRealizacao
   * @access public
   */
  public $dataRealizacao = null;

  /**
   * 
   * @param ct_procedimentoDados $procedimento
   * @param denteRegiao $denteRegiao
   * @param string $denteFace
   * @param int $qtdProc
   * @param float $qtdUS
   * @param float $valorProc
   * @param float $valorFranquia
   * @param dm_simNao $autorizado
   * @param date $dataRealizacao
   * @access public
   */
  public function __construct($procedimento, $denteRegiao, $denteFace, $qtdProc, $qtdUS, $valorProc, $valorFranquia, $autorizado, $dataRealizacao)
  {
    $this->procedimento = $procedimento;
    $this->denteRegiao = $denteRegiao;
    $this->denteFace = $denteFace;
    $this->qtdProc = $qtdProc;
    $this->qtdUS = $qtdUS;
    $this->valorProc = $valorProc;
    $this->valorFranquia = $valorFranquia;
    $this->autorizado = $autorizado;
    $this->dataRealizacao = $dataRealizacao;
  }

}

}
