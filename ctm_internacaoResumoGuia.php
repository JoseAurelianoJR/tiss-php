<?php

if (!class_exists("ctm_internacaoResumoGuia", false)) 
{
class ctm_internacaoResumoGuia
{

  /**
   * 
   * @var ct_guiaCabecalho $cabecalhoGuia
   * @access public
   */
  public $cabecalhoGuia = null;

  /**
   * 
   * @var string $numeroGuiaSolicitacaoInternacao
   * @access public
   */
  public $numeroGuiaSolicitacaoInternacao = null;

  /**
   * 
   * @var ct_autorizacaoInternacao $dadosAutorizacao
   * @access public
   */
  public $dadosAutorizacao = null;

  /**
   * 
   * @var ct_beneficiarioDados $dadosBeneficiario
   * @access public
   */
  public $dadosBeneficiario = null;

  /**
   * 
   * @var dadosExecutante $dadosExecutante
   * @access public
   */
  public $dadosExecutante = null;

  /**
   * 
   * @var ctm_internacaoDados $dadosInternacao
   * @access public
   */
  public $dadosInternacao = null;

  /**
   * 
   * @var ctm_internacaoDadosSaida $dadosSaidaInternacao
   * @access public
   */
  public $dadosSaidaInternacao = null;

  /**
   * 
   * @var Ct_procedimentoExecutadoInt[] $procedimentosExecutados
   * @access public
   */
  public $procedimentosExecutados = null;

  /**
   * 
   * @var ct_guiaValorTotal $valorTotal
   * @access public
   */
  public $valorTotal = null;

  /**
   * 
   * @var Ct_outrasDespesasDespesa[] $outrasDespesas
   * @access public
   */
  public $outrasDespesas = null;

  /**
   * 
   * @var string $observacao
   * @access public
   */
  public $observacao = null;

  /**
   * 
   * @var assinaturaDigital $assinaturaDigital
   * @access public
   */
  public $assinaturaDigital = null;

  /**
   * 
   * @param ct_guiaCabecalho $cabecalhoGuia
   * @param string $numeroGuiaSolicitacaoInternacao
   * @param ct_autorizacaoInternacao $dadosAutorizacao
   * @param ct_beneficiarioDados $dadosBeneficiario
   * @param dadosExecutante $dadosExecutante
   * @param ctm_internacaoDados $dadosInternacao
   * @param ctm_internacaoDadosSaida $dadosSaidaInternacao
   * @param Ct_procedimentoExecutadoInt[] $procedimentosExecutados
   * @param ct_guiaValorTotal $valorTotal
   * @param Ct_outrasDespesasDespesa[] $outrasDespesas
   * @param string $observacao
   * @param assinaturaDigital $assinaturaDigital
   * @access public
   */
  public function __construct($cabecalhoGuia, $numeroGuiaSolicitacaoInternacao, $dadosAutorizacao, $dadosBeneficiario, $dadosExecutante, $dadosInternacao, $dadosSaidaInternacao, $procedimentosExecutados, $valorTotal, $outrasDespesas, $observacao, $assinaturaDigital)
  {
    $this->cabecalhoGuia = $cabecalhoGuia;
    $this->numeroGuiaSolicitacaoInternacao = $numeroGuiaSolicitacaoInternacao;
    $this->dadosAutorizacao = $dadosAutorizacao;
    $this->dadosBeneficiario = $dadosBeneficiario;
    $this->dadosExecutante = $dadosExecutante;
    $this->dadosInternacao = $dadosInternacao;
    $this->dadosSaidaInternacao = $dadosSaidaInternacao;
    $this->procedimentosExecutados = $procedimentosExecutados;
    $this->valorTotal = $valorTotal;
    $this->outrasDespesas = $outrasDespesas;
    $this->observacao = $observacao;
    $this->assinaturaDigital = $assinaturaDigital;
  }

}

}
