<?php

if (!class_exists("dadosProfissionaisResponsaveis", false)) 
{
class dadosProfissionaisResponsaveis
{

  /**
   * 
   * @var string $nomeProfSolic
   * @access public
   */
  public $nomeProfSolic = null;

  /**
   * 
   * @var string $croSolic
   * @access public
   */
  public $croSolic = null;

  /**
   * 
   * @var dm_UF $ufSolic
   * @access public
   */
  public $ufSolic = null;

  /**
   * 
   * @var string $cbosSolic
   * @access public
   */
  public $cbosSolic = null;

  /**
   * 
   * @var string $codigoProfExec
   * @access public
   */
  public $codigoProfExec = null;

  /**
   * 
   * @var string $nomeProfExec
   * @access public
   */
  public $nomeProfExec = null;

  /**
   * 
   * @var string $croExec
   * @access public
   */
  public $croExec = null;

  /**
   * 
   * @var dm_UF $ufExec
   * @access public
   */
  public $ufExec = null;

  /**
   * 
   * @var string $cnesExec
   * @access public
   */
  public $cnesExec = null;

  /**
   * 
   * @var string $nomeProfExec2
   * @access public
   */
  public $nomeProfExec2 = null;

  /**
   * 
   * @var string $croExec2
   * @access public
   */
  public $croExec2 = null;

  /**
   * 
   * @var dm_UF $ufExec2
   * @access public
   */
  public $ufExec2 = null;

  /**
   * 
   * @var string $cbosExec2
   * @access public
   */
  public $cbosExec2 = null;

  /**
   * 
   * @param string $nomeProfSolic
   * @param string $croSolic
   * @param dm_UF $ufSolic
   * @param string $cbosSolic
   * @param string $codigoProfExec
   * @param string $nomeProfExec
   * @param string $croExec
   * @param dm_UF $ufExec
   * @param string $cnesExec
   * @param string $nomeProfExec2
   * @param string $croExec2
   * @param dm_UF $ufExec2
   * @param string $cbosExec2
   * @access public
   */
  public function __construct($nomeProfSolic, $croSolic, $ufSolic, $cbosSolic, $codigoProfExec, $nomeProfExec, $croExec, $ufExec, $cnesExec, $nomeProfExec2, $croExec2, $ufExec2, $cbosExec2)
  {
    $this->nomeProfSolic = $nomeProfSolic;
    $this->croSolic = $croSolic;
    $this->ufSolic = $ufSolic;
    $this->cbosSolic = $cbosSolic;
    $this->codigoProfExec = $codigoProfExec;
    $this->nomeProfExec = $nomeProfExec;
    $this->croExec = $croExec;
    $this->ufExec = $ufExec;
    $this->cnesExec = $cnesExec;
    $this->nomeProfExec2 = $nomeProfExec2;
    $this->croExec2 = $croExec2;
    $this->ufExec2 = $ufExec2;
    $this->cbosExec2 = $cbosExec2;
  }

}

}
