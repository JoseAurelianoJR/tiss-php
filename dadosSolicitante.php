<?php

if (!class_exists("dadosSolicitante", false)) 
{
class dadosSolicitante
{

  /**
   * 
   * @var ct_contratadoDados $contratadoSolicitante
   * @access public
   */
  public $contratadoSolicitante = null;

  /**
   * 
   * @var ct_contratadoProfissionalDados $profissionalSolicitante
   * @access public
   */
  public $profissionalSolicitante = null;

  /**
   * 
   * @param ct_contratadoDados $contratadoSolicitante
   * @param ct_contratadoProfissionalDados $profissionalSolicitante
   * @access public
   */
  public function __construct($contratadoSolicitante, $profissionalSolicitante)
  {
    $this->contratadoSolicitante = $contratadoSolicitante;
    $this->profissionalSolicitante = $profissionalSolicitante;
  }

}

}
