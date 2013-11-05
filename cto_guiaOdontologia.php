<?php

if (!class_exists("cto_guiaOdontologia", false)) 
{
class cto_guiaOdontologia
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @var string $numeroGuiaPrincipal
   * @access public
   */
  public $numeroGuiaPrincipal = null;

  /**
   * 
   * @var date $dataAutorizacao
   * @access public
   */
  public $dataAutorizacao = null;

  /**
   * 
   * @var string $senhaAutorizacao
   * @access public
   */
  public $senhaAutorizacao = null;

  /**
   * 
   * @var date $validadeSenha
   * @access public
   */
  public $validadeSenha = null;

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
   * @var string $planoBeneficiario
   * @access public
   */
  public $planoBeneficiario = null;

  /**
   * 
   * @var string $nomeEmpresa
   * @access public
   */
  public $nomeEmpresa = null;

  /**
   * 
   * @var string $numeroTelefone
   * @access public
   */
  public $numeroTelefone = null;

  /**
   * 
   * @var string $nomeTitular
   * @access public
   */
  public $nomeTitular = null;

  /**
   * 
   * @var dadosProfissionaisResponsaveis $dadosProfissionaisResponsaveis
   * @access public
   */
  public $dadosProfissionaisResponsaveis = null;

  /**
   * 
   * @var procedimentosExecutados $procedimentosExecutados
   * @access public
   */
  public $procedimentosExecutados = null;

  /**
   * 
   * @var date $dataTerminoTrat
   * @access public
   */
  public $dataTerminoTrat = null;

  /**
   * 
   * @var dm_tipoAtendimentoOdonto $tipoAtendimento
   * @access public
   */
  public $tipoAtendimento = null;

  /**
   * 
   * @var dm_tipoFaturamentoOdonto $tipoFaturamento
   * @access public
   */
  public $tipoFaturamento = null;

  /**
   * 
   * @var float $qtdTotalUS
   * @access public
   */
  public $qtdTotalUS = null;

  /**
   * 
   * @var float $valorTotalProc
   * @access public
   */
  public $valorTotalProc = null;

  /**
   * 
   * @var float $valorTotalFranquia
   * @access public
   */
  public $valorTotalFranquia = null;

  /**
   * 
   * @var string $observacao
   * @access public
   */
  public $observacao = null;

  /**
   * 
   * @var cto_anexoSituacaoInicialnaGTO $odontoInicial
   * @access public
   */
  public $odontoInicial = null;

  /**
   * 
   * @var assinaturaDigital $assinaturaDigital
   * @access public
   */
  public $assinaturaDigital = null;

  /**
   * 
   * @param string $registroANS
   * @param string $numeroGuiaPrestador
   * @param string $numeroGuiaPrincipal
   * @param date $dataAutorizacao
   * @param string $senhaAutorizacao
   * @param date $validadeSenha
   * @param string $numeroGuiaOperadora
   * @param ct_beneficiarioDados $dadosBeneficiario
   * @param string $planoBeneficiario
   * @param string $nomeEmpresa
   * @param string $numeroTelefone
   * @param string $nomeTitular
   * @param dadosProfissionaisResponsaveis $dadosProfissionaisResponsaveis
   * @param procedimentosExecutados $procedimentosExecutados
   * @param date $dataTerminoTrat
   * @param dm_tipoAtendimentoOdonto $tipoAtendimento
   * @param dm_tipoFaturamentoOdonto $tipoFaturamento
   * @param float $qtdTotalUS
   * @param float $valorTotalProc
   * @param float $valorTotalFranquia
   * @param string $observacao
   * @param cto_anexoSituacaoInicialnaGTO $odontoInicial
   * @param assinaturaDigital $assinaturaDigital
   * @access public
   */
  public function __construct($registroANS, $numeroGuiaPrestador, $numeroGuiaPrincipal, $dataAutorizacao, $senhaAutorizacao, $validadeSenha, $numeroGuiaOperadora, $dadosBeneficiario, $planoBeneficiario, $nomeEmpresa, $numeroTelefone, $nomeTitular, $dadosProfissionaisResponsaveis, $procedimentosExecutados, $dataTerminoTrat, $tipoAtendimento, $tipoFaturamento, $qtdTotalUS, $valorTotalProc, $valorTotalFranquia, $observacao, $odontoInicial, $assinaturaDigital)
  {
    $this->registroANS = $registroANS;
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->numeroGuiaPrincipal = $numeroGuiaPrincipal;
    $this->dataAutorizacao = $dataAutorizacao;
    $this->senhaAutorizacao = $senhaAutorizacao;
    $this->validadeSenha = $validadeSenha;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->dadosBeneficiario = $dadosBeneficiario;
    $this->planoBeneficiario = $planoBeneficiario;
    $this->nomeEmpresa = $nomeEmpresa;
    $this->numeroTelefone = $numeroTelefone;
    $this->nomeTitular = $nomeTitular;
    $this->dadosProfissionaisResponsaveis = $dadosProfissionaisResponsaveis;
    $this->procedimentosExecutados = $procedimentosExecutados;
    $this->dataTerminoTrat = $dataTerminoTrat;
    $this->tipoAtendimento = $tipoAtendimento;
    $this->tipoFaturamento = $tipoFaturamento;
    $this->qtdTotalUS = $qtdTotalUS;
    $this->valorTotalProc = $valorTotalProc;
    $this->valorTotalFranquia = $valorTotalFranquia;
    $this->observacao = $observacao;
    $this->odontoInicial = $odontoInicial;
    $this->assinaturaDigital = $assinaturaDigital;
  }

}

}
