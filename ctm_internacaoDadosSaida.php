<?php

if (!class_exists("ctm_internacaoDadosSaida", false)) 
{
class ctm_internacaoDadosSaida
{

  /**
   * 
   * @var string $diagnostico
   * @access public
   */
  public $diagnostico = null;

  /**
   * 
   * @var dm_indicadorAcidente $indicadorAcidente
   * @access public
   */
  public $indicadorAcidente = null;

  /**
   * 
   * @var dm_motivoSaida $motivoSaidaInternacao
   * @access public
   */
  public $motivoSaidaInternacao = null;

  /**
   * 
   * @param string $diagnostico
   * @param dm_indicadorAcidente $indicadorAcidente
   * @param dm_motivoSaida $motivoSaidaInternacao
   * @access public
   */
  public function __construct($diagnostico, $indicadorAcidente, $motivoSaidaInternacao)
  {
    $this->diagnostico = $diagnostico;
    $this->indicadorAcidente = $indicadorAcidente;
    $this->motivoSaidaInternacao = $motivoSaidaInternacao;
  }

}

}
