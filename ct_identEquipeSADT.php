<?php

if (!class_exists("ct_identEquipeSADT", false)) 
{
class ct_identEquipeSADT
{

  /**
   * 
   * @var dm_grauPart $grauPart
   * @access public
   */
  public $grauPart = null;

  /**
   * 
   * @var codProfissional $codProfissional
   * @access public
   */
  public $codProfissional = null;

  /**
   * 
   * @var string $nomeProf
   * @access public
   */
  public $nomeProf = null;

  /**
   * 
   * @var dm_conselhoProfissional $conselho
   * @access public
   */
  public $conselho = null;

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
   * @param dm_grauPart $grauPart
   * @param codProfissional $codProfissional
   * @param string $nomeProf
   * @param dm_conselhoProfissional $conselho
   * @param string $numeroConselhoProfissional
   * @param dm_UF $UF
   * @param dm_CBOS $CBOS
   * @access public
   */
  public function __construct($grauPart, $codProfissional, $nomeProf, $conselho, $numeroConselhoProfissional, $UF, $CBOS)
  {
    $this->grauPart = $grauPart;
    $this->codProfissional = $codProfissional;
    $this->nomeProf = $nomeProf;
    $this->conselho = $conselho;
    $this->numeroConselhoProfissional = $numeroConselhoProfissional;
    $this->UF = $UF;
    $this->CBOS = $CBOS;
  }

}

}
