<?php

if (!class_exists("ctm_consultaAtendimento", false)) 
{
class ctm_consultaAtendimento
{

  /**
   * 
   * @var date $dataAtendimento
   * @access public
   */
  public $dataAtendimento = null;

  /**
   * 
   * @var dm_tipoConsulta $tipoConsulta
   * @access public
   */
  public $tipoConsulta = null;

  /**
   * 
   * @var procedimento $procedimento
   * @access public
   */
  public $procedimento = null;

  /**
   * 
   * @param date $dataAtendimento
   * @param dm_tipoConsulta $tipoConsulta
   * @param procedimento $procedimento
   * @access public
   */
  public function __construct($dataAtendimento, $tipoConsulta, $procedimento)
  {
    $this->dataAtendimento = $dataAtendimento;
    $this->tipoConsulta = $tipoConsulta;
    $this->procedimento = $procedimento;
  }

}

}
