<?php

if (!class_exists("procedimentosExecutados", false)) 
{
class procedimentosExecutados
{

  /**
   * 
   * @var ct_procedimentoDados $procSolic
   * @access public
   */
  public $procSolic = null;

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
   * @var boolean $autorizado
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
   * @param ct_procedimentoDados $procSolic
   * @param denteRegiao $denteRegiao
   * @param string $denteFace
   * @param int $qtdProc
   * @param float $qtdUS
   * @param float $valorProc
   * @param float $valorFranquia
   * @param boolean $autorizado
   * @param date $dataRealizacao
   * @access public
   */
  public function __construct($procSolic, $denteRegiao, $denteFace, $qtdProc, $qtdUS, $valorProc, $valorFranquia, $autorizado, $dataRealizacao)
  {
    $this->procSolic = $procSolic;
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
