<?php

if (!class_exists("localContratado", false)) 
{
class localContratado
{

  /**
   * 
   * @var codigoContratado $codigoContratado
   * @access public
   */
  public $codigoContratado = null;

  /**
   * 
   * @var string $nomeContratado
   * @access public
   */
  public $nomeContratado = null;

  /**
   * 
   * @var string $cnes
   * @access public
   */
  public $cnes = null;

  /**
   * 
   * @param codigoContratado $codigoContratado
   * @param string $nomeContratado
   * @param string $cnes
   * @access public
   */
  public function __construct($codigoContratado, $nomeContratado, $cnes)
  {
    $this->codigoContratado = $codigoContratado;
    $this->nomeContratado = $nomeContratado;
    $this->cnes = $cnes;
  }

}

}
