<?php

if (!class_exists("ctm_spsadtAtendimento", false)) 
{
class ctm_spsadtAtendimento
{

  /**
   * 
   * @var dm_tipoAtendimento $tipoAtendimento
   * @access public
   */
  public $tipoAtendimento = null;

  /**
   * 
   * @var dm_indicadorAcidente $indicacaoAcidente
   * @access public
   */
  public $indicacaoAcidente = null;

  /**
   * 
   * @var dm_tipoConsulta $tipoConsulta
   * @access public
   */
  public $tipoConsulta = null;

  /**
   * 
   * @var dm_motivoSaidaObito $motivoSaida
   * @access public
   */
  public $motivoSaida = null;

  /**
   * 
   * @param dm_tipoAtendimento $tipoAtendimento
   * @param dm_indicadorAcidente $indicacaoAcidente
   * @param dm_tipoConsulta $tipoConsulta
   * @param dm_motivoSaidaObito $motivoSaida
   * @access public
   */
  public function __construct($tipoAtendimento, $indicacaoAcidente, $tipoConsulta, $motivoSaida)
  {
    $this->tipoAtendimento = $tipoAtendimento;
    $this->indicacaoAcidente = $indicacaoAcidente;
    $this->tipoConsulta = $tipoConsulta;
    $this->motivoSaida = $motivoSaida;
  }

}

}
