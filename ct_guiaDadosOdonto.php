<?php

if (!class_exists("ct_guiaDadosOdonto", false)) 
{
class ct_guiaDadosOdonto
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
   * @var string $numeroCarteira
   * @access public
   */
  public $numeroCarteira = null;

  /**
   * 
   * @var string $nomeBeneficiario
   * @access public
   */
  public $nomeBeneficiario = null;

  /**
   * 
   * @var string $numeroCNS
   * @access public
   */
  public $numeroCNS = null;

  /**
   * 
   * @var base64Binary $identificadorBeneficiario
   * @access public
   */
  public $identificadorBeneficiario = null;

  /**
   * 
   * @var date $dataRealizacao
   * @access public
   */
  public $dataRealizacao = null;

  /**
   * 
   * @var ct_valorTotal $vlInformadoGuia
   * @access public
   */
  public $vlInformadoGuia = null;

  /**
   * 
   * @var Ct_motivoGlosa[] $glosaGuia
   * @access public
   */
  public $glosaGuia = null;

  /**
   * 
   * @var Ct_guiaDadosOdontoProcedimentoRealizado[] $procedimentosRealizados
   * @access public
   */
  public $procedimentosRealizados = null;

  /**
   * 
   * @param string $numeroGuiaPrestador
   * @param string $numeroGuiaOperadora
   * @param string $numeroCarteira
   * @param string $nomeBeneficiario
   * @param string $numeroCNS
   * @param base64Binary $identificadorBeneficiario
   * @param date $dataRealizacao
   * @param ct_valorTotal $vlInformadoGuia
   * @param Ct_motivoGlosa[] $glosaGuia
   * @param Ct_guiaDadosOdontoProcedimentoRealizado[] $procedimentosRealizados
   * @access public
   */
  public function __construct($numeroGuiaPrestador, $numeroGuiaOperadora, $numeroCarteira, $nomeBeneficiario, $numeroCNS, $identificadorBeneficiario, $dataRealizacao, $vlInformadoGuia, $glosaGuia, $procedimentosRealizados)
  {
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->numeroCarteira = $numeroCarteira;
    $this->nomeBeneficiario = $nomeBeneficiario;
    $this->numeroCNS = $numeroCNS;
    $this->identificadorBeneficiario = $identificadorBeneficiario;
    $this->dataRealizacao = $dataRealizacao;
    $this->vlInformadoGuia = $vlInformadoGuia;
    $this->glosaGuia = $glosaGuia;
    $this->procedimentosRealizados = $procedimentosRealizados;
  }

}

}
