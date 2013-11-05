<?php

if (!class_exists("dadosContratadoExecutante", false)) 
{
class dadosContratadoExecutante
{

  /**
   * 
   * @var string $codigonaOperadora
   * @access public
   */
  public $codigonaOperadora = null;

  /**
   * 
   * @var string $nomeContratadoExecutante
   * @access public
   */
  public $nomeContratadoExecutante = null;

  /**
   * 
   * @var string $cnesContratadoExecutante
   * @access public
   */
  public $cnesContratadoExecutante = null;

  /**
   * 
   * @var string $nomeProfissional
   * @access public
   */
  public $nomeProfissional = null;

  /**
   * 
   * @var dm_conselhoProfissional $conselhoProfissional
   * @access public
   */
  public $conselhoProfissional = null;

  /**
   * 
   * @var string $numeroConselhoProfissional
   * @access public
   */
  public $numeroConselhoProfissional = null;

  /**
   * 
   * @var dm_UF $UF
   * @access public
   */
  public $UF = null;

  /**
   * 
   * @var dm_CBOS $CBO
   * @access public
   */
  public $CBO = null;

  /**
   * 
   * @param string $codigonaOperadora
   * @param string $nomeContratadoExecutante
   * @param string $cnesContratadoExecutante
   * @param string $nomeProfissional
   * @param dm_conselhoProfissional $conselhoProfissional
   * @param string $numeroConselhoProfissional
   * @param dm_UF $UF
   * @param dm_CBOS $CBO
   * @access public
   */
  public function __construct($codigonaOperadora, $nomeContratadoExecutante, $cnesContratadoExecutante, $nomeProfissional, $conselhoProfissional, $numeroConselhoProfissional, $UF, $CBO)
  {
    $this->codigonaOperadora = $codigonaOperadora;
    $this->nomeContratadoExecutante = $nomeContratadoExecutante;
    $this->cnesContratadoExecutante = $cnesContratadoExecutante;
    $this->nomeProfissional = $nomeProfissional;
    $this->conselhoProfissional = $conselhoProfissional;
    $this->numeroConselhoProfissional = $numeroConselhoProfissional;
    $this->UF = $UF;
    $this->CBO = $CBO;
  }

}

}
