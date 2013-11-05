<?php

if (!class_exists("ct_situacaoInicial", false)) 
{
class ct_situacaoInicial
{

  /**
   * 
   * @var Ct_situacaoClinicaDentes[] $situacaoClinica
   * @access public
   */
  public $situacaoClinica = null;

  /**
   * 
   * @var boolean $doencaPeriodontal
   * @access public
   */
  public $doencaPeriodontal = null;

  /**
   * 
   * @var boolean $alteracaoTecidoMole
   * @access public
   */
  public $alteracaoTecidoMole = null;

  /**
   * 
   * @var string $observacao
   * @access public
   */
  public $observacao = null;

  /**
   * 
   * @param Ct_situacaoClinicaDentes[] $situacaoClinica
   * @param boolean $doencaPeriodontal
   * @param boolean $alteracaoTecidoMole
   * @param string $observacao
   * @access public
   */
  public function __construct($situacaoClinica, $doencaPeriodontal, $alteracaoTecidoMole, $observacao)
  {
    $this->situacaoClinica = $situacaoClinica;
    $this->doencaPeriodontal = $doencaPeriodontal;
    $this->alteracaoTecidoMole = $alteracaoTecidoMole;
    $this->observacao = $observacao;
  }

}

}
