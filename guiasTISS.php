<?php

if (!class_exists("guiasTISS", false)) 
{
class guiasTISS
{

  /**
   * 
   * @var ctm_consultaGuia $guiaConsulta
   * @access public
   */
  public $guiaConsulta = null;

  /**
   * 
   * @var ctm_honorarioIndividualGuia $guiaHonorarioIndividual
   * @access public
   */
  public $guiaHonorarioIndividual = null;

  /**
   * 
   * @var cto_guiaOdontologia $guiaOdonto
   * @access public
   */
  public $guiaOdonto = null;

  /**
   * 
   * @var ctm_spsadtGuia $guiaSPSADT
   * @access public
   */
  public $guiaSPSADT = null;

  /**
   * 
   * @var ctm_internacaoResumoGuia $guiaResumoInternacao
   * @access public
   */
  public $guiaResumoInternacao = null;

  /**
   * 
   * @param ctm_consultaGuia $guiaConsulta
   * @param ctm_honorarioIndividualGuia $guiaHonorarioIndividual
   * @param cto_guiaOdontologia $guiaOdonto
   * @param ctm_spsadtGuia $guiaSPSADT
   * @param ctm_internacaoResumoGuia $guiaResumoInternacao
   * @access public
   */
  public function __construct($guiaConsulta, $guiaHonorarioIndividual, $guiaOdonto, $guiaSPSADT, $guiaResumoInternacao)
  {
    $this->guiaConsulta = $guiaConsulta;
    $this->guiaHonorarioIndividual = $guiaHonorarioIndividual;
    $this->guiaOdonto = $guiaOdonto;
    $this->guiaSPSADT = $guiaSPSADT;
    $this->guiaResumoInternacao = $guiaResumoInternacao;
  }

}

}
