<?php

if (!class_exists("ct_contratadoProfissionalDados", false)) 
{
class ct_contratadoProfissionalDados
{

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
   * @var dm_CBOS $CBOS
   * @access public
   */
  public $CBOS = null;

  /**
   * 
   * @param string $nomeProfissional
   * @param dm_conselhoProfissional $conselhoProfissional
   * @param string $numeroConselhoProfissional
   * @param dm_UF $UF
   * @param dm_CBOS $CBOS
   * @access public
   */
  public function __construct($nomeProfissional, $conselhoProfissional, $numeroConselhoProfissional, $UF, $CBOS)
  {
    $this->nomeProfissional = $nomeProfissional;
    $this->conselhoProfissional = $conselhoProfissional;
    $this->numeroConselhoProfissional = $numeroConselhoProfissional;
    $this->UF = $UF;
    $this->CBOS = $CBOS;
  }

}

}
