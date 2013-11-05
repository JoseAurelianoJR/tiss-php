<?php

if (!class_exists("relacaoGuias", false)) 
{
class relacaoGuias
{

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @var string $numeroGuiaOperadora
   * @access public
   */
  public $numeroGuiaOperadora = null;

  /**
   * 
   * @var string $senha
   * @access public
   */
  public $senha = null;

  /**
   * 
   * @var string $nomeBeneficiario
   * @access public
   */
  public $nomeBeneficiario = null;

  /**
   * 
   * @var string $numeroCarteira
   * @access public
   */
  public $numeroCarteira = null;

  /**
   * 
   * @var date $dataInicioFat
   * @access public
   */
  public $dataInicioFat = null;

  /**
   * 
   * @var time $horaInicioFat
   * @access public
   */
  public $horaInicioFat = null;

  /**
   * 
   * @var date $dataFimFat
   * @access public
   */
  public $dataFimFat = null;

  /**
   * 
   * @var time $horaFimFat
   * @access public
   */
  public $horaFimFat = null;

  /**
   * 
   * @var ct_motivoGlosa $motivoGlosaGuia
   * @access public
   */
  public $motivoGlosaGuia = null;

  /**
   * 
   * @var detalhesGuia $detalhesGuia
   * @access public
   */
  public $detalhesGuia = null;

  /**
   * 
   * @var float $valorInformadoGuia
   * @access public
   */
  public $valorInformadoGuia = null;

  /**
   * 
   * @var float $valorProcessadoGuia
   * @access public
   */
  public $valorProcessadoGuia = null;

  /**
   * 
   * @var float $valorLiberadoGuia
   * @access public
   */
  public $valorLiberadoGuia = null;

  /**
   * 
   * @var float $valorGlosaGuia
   * @access public
   */
  public $valorGlosaGuia = null;

  /**
   * 
   * @param string $numeroGuiaPrestador
   * @param string $numeroGuiaOperadora
   * @param string $senha
   * @param string $nomeBeneficiario
   * @param string $numeroCarteira
   * @param date $dataInicioFat
   * @param time $horaInicioFat
   * @param date $dataFimFat
   * @param time $horaFimFat
   * @param ct_motivoGlosa $motivoGlosaGuia
   * @param detalhesGuia $detalhesGuia
   * @param float $valorInformadoGuia
   * @param float $valorProcessadoGuia
   * @param float $valorLiberadoGuia
   * @param float $valorGlosaGuia
   * @access public
   */
  public function __construct($numeroGuiaPrestador, $numeroGuiaOperadora, $senha, $nomeBeneficiario, $numeroCarteira, $dataInicioFat, $horaInicioFat, $dataFimFat, $horaFimFat, $motivoGlosaGuia, $detalhesGuia, $valorInformadoGuia, $valorProcessadoGuia, $valorLiberadoGuia, $valorGlosaGuia)
  {
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->senha = $senha;
    $this->nomeBeneficiario = $nomeBeneficiario;
    $this->numeroCarteira = $numeroCarteira;
    $this->dataInicioFat = $dataInicioFat;
    $this->horaInicioFat = $horaInicioFat;
    $this->dataFimFat = $dataFimFat;
    $this->horaFimFat = $horaFimFat;
    $this->motivoGlosaGuia = $motivoGlosaGuia;
    $this->detalhesGuia = $detalhesGuia;
    $this->valorInformadoGuia = $valorInformadoGuia;
    $this->valorProcessadoGuia = $valorProcessadoGuia;
    $this->valorLiberadoGuia = $valorLiberadoGuia;
    $this->valorGlosaGuia = $valorGlosaGuia;
  }

}

}
