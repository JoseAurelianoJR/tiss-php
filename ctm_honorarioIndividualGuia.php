<?php

if (!class_exists("ctm_honorarioIndividualGuia", false)) 
{
class ctm_honorarioIndividualGuia
{

  /**
   * 
   * @var ct_guiaCabecalho $cabecalhoGuia
   * @access public
   */
  public $cabecalhoGuia = null;

  /**
   * 
   * @var string $guiaSolicInternacao
   * @access public
   */
  public $guiaSolicInternacao = null;

  /**
   * 
   * @var string $senha
   * @access public
   */
  public $senha = null;

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
   * @var dm_simNao $atendimentoRN
   * @access public
   */
  public $atendimentoRN = null;

  /**
   * 
   * @var localContratado $localContratado
   * @access public
   */
  public $localContratado = null;

  /**
   * 
   * @var dadosContratadoExecutante $dadosContratadoExecutante
   * @access public
   */
  public $dadosContratadoExecutante = null;

  /**
   * 
   * @var dadosInternacao $dadosInternacao
   * @access public
   */
  public $dadosInternacao = null;

  /**
   * 
   * @var Ct_procedimentoExecutadoHonorIndiv[] $procedimentosRealizados
   * @access public
   */
  public $procedimentosRealizados = null;

  /**
   * 
   * @var string $observacao
   * @access public
   */
  public $observacao = null;

  /**
   * 
   * @var float $valorTotalHonorarios
   * @access public
   */
  public $valorTotalHonorarios = null;

  /**
   * 
   * @var date $dataEmissaoGuia
   * @access public
   */
  public $dataEmissaoGuia = null;

  /**
   * 
   * @var assinaturaDigital $assinaturaDigital
   * @access public
   */
  public $assinaturaDigital = null;

  /**
   * 
   * @param ct_guiaCabecalho $cabecalhoGuia
   * @param string $guiaSolicInternacao
   * @param string $senha
   * @param string $numeroGuiaOperadora
   * @param string $numeroCarteira
   * @param string $nomeBeneficiario
   * @param dm_simNao $atendimentoRN
   * @param localContratado $localContratado
   * @param dadosContratadoExecutante $dadosContratadoExecutante
   * @param dadosInternacao $dadosInternacao
   * @param Ct_procedimentoExecutadoHonorIndiv[] $procedimentosRealizados
   * @param string $observacao
   * @param float $valorTotalHonorarios
   * @param date $dataEmissaoGuia
   * @param assinaturaDigital $assinaturaDigital
   * @access public
   */
  public function __construct($cabecalhoGuia, $guiaSolicInternacao, $senha, $numeroGuiaOperadora, $numeroCarteira, $nomeBeneficiario, $atendimentoRN, $localContratado, $dadosContratadoExecutante, $dadosInternacao, $procedimentosRealizados, $observacao, $valorTotalHonorarios, $dataEmissaoGuia, $assinaturaDigital)
  {
    $this->cabecalhoGuia = $cabecalhoGuia;
    $this->guiaSolicInternacao = $guiaSolicInternacao;
    $this->senha = $senha;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->numeroCarteira = $numeroCarteira;
    $this->nomeBeneficiario = $nomeBeneficiario;
    $this->atendimentoRN = $atendimentoRN;
    $this->localContratado = $localContratado;
    $this->dadosContratadoExecutante = $dadosContratadoExecutante;
    $this->dadosInternacao = $dadosInternacao;
    $this->procedimentosRealizados = $procedimentosRealizados;
    $this->observacao = $observacao;
    $this->valorTotalHonorarios = $valorTotalHonorarios;
    $this->dataEmissaoGuia = $dataEmissaoGuia;
    $this->assinaturaDigital = $assinaturaDigital;
  }

}

}
