<?php

if (!class_exists("ct_guiaDados", false)) 
{
class ct_guiaDados
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
   * @var ct_beneficiarioDados $dadosBeneficiario
   * @access public
   */
  public $dadosBeneficiario = null;

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
   * @var Ct_guiaDadosProcedimentoRealizado[] $procedimentosRealizados
   * @access public
   */
  public $procedimentosRealizados = null;

  /**
   * 
   * @param string $numeroGuiaPrestador
   * @param string $numeroGuiaOperadora
   * @param ct_beneficiarioDados $dadosBeneficiario
   * @param date $dataRealizacao
   * @param ct_valorTotal $vlInformadoGuia
   * @param Ct_motivoGlosa[] $glosaGuia
   * @param Ct_guiaDadosProcedimentoRealizado[] $procedimentosRealizados
   * @access public
   */
  public function __construct($numeroGuiaPrestador, $numeroGuiaOperadora, $dadosBeneficiario, $dataRealizacao, $vlInformadoGuia, $glosaGuia, $procedimentosRealizados)
  {
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->dadosBeneficiario = $dadosBeneficiario;
    $this->dataRealizacao = $dataRealizacao;
    $this->vlInformadoGuia = $vlInformadoGuia;
    $this->glosaGuia = $glosaGuia;
    $this->procedimentosRealizados = $procedimentosRealizados;
  }

}

}
