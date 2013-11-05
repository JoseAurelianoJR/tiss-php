<?php

if (!class_exists("ctm_spsadtGuia", false)) 
{
class ctm_spsadtGuia
{

  /**
   * 
   * @var cabecalhoGuia $cabecalhoGuia
   * @access public
   */
  public $cabecalhoGuia = null;

  /**
   * 
   * @var ct_autorizacaoSADT $dadosAutorizacao
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
   * @var dadosSolicitante $dadosSolicitante
   * @access public
   */
  public $dadosSolicitante = null;

  /**
   * 
   * @var dadosSolicitacao $dadosSolicitacao
   * @access public
   */
  public $dadosSolicitacao = null;

  /**
   * 
   * @var dadosExecutante $dadosExecutante
   * @access public
   */
  public $dadosExecutante = null;

  /**
   * 
   * @var ctm_spsadtAtendimento $dadosAtendimento
   * @access public
   */
  public $dadosAtendimento = null;

  /**
   * 
   * @var Ct_procedimentoExecutadoSadt[] $procedimentosExecutados
   * @access public
   */
  public $procedimentosExecutados = null;

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
   * @var ct_guiaValorTotal $valorTotal
   * @access public
   */
  public $valorTotal = null;

  /**
   * 
   * @var assinaturaDigital $assinaturaDigital
   * @access public
   */
  public $assinaturaDigital = null;

  /**
   * 
   * @param cabecalhoGuia $cabecalhoGuia
   * @param ct_autorizacaoSADT $dadosAutorizacao
   * @param ct_beneficiarioDados $dadosBeneficiario
   * @param dadosSolicitante $dadosSolicitante
   * @param dadosSolicitacao $dadosSolicitacao
   * @param dadosExecutante $dadosExecutante
   * @param ctm_spsadtAtendimento $dadosAtendimento
   * @param Ct_procedimentoExecutadoSadt[] $procedimentosExecutados
   * @param Ct_outrasDespesasDespesa[] $outrasDespesas
   * @param string $observacao
   * @param ct_guiaValorTotal $valorTotal
   * @param assinaturaDigital $assinaturaDigital
   * @access public
   */
  public function __construct($cabecalhoGuia, $dadosAutorizacao, $dadosBeneficiario, $dadosSolicitante, $dadosSolicitacao, $dadosExecutante, $dadosAtendimento, $procedimentosExecutados, $outrasDespesas, $observacao, $valorTotal, $assinaturaDigital)
  {
    $this->cabecalhoGuia = $cabecalhoGuia;
    $this->dadosAutorizacao = $dadosAutorizacao;
    $this->dadosBeneficiario = $dadosBeneficiario;
    $this->dadosSolicitante = $dadosSolicitante;
    $this->dadosSolicitacao = $dadosSolicitacao;
    $this->dadosExecutante = $dadosExecutante;
    $this->dadosAtendimento = $dadosAtendimento;
    $this->procedimentosExecutados = $procedimentosExecutados;
    $this->outrasDespesas = $outrasDespesas;
    $this->observacao = $observacao;
    $this->valorTotal = $valorTotal;
    $this->assinaturaDigital = $assinaturaDigital;
  }

}

}
