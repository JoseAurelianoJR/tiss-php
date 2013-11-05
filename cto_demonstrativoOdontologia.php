<?php

if (!class_exists("cto_demonstrativoOdontologia", false)) 
{
class cto_demonstrativoOdontologia
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var string $numeroDemonstrativo
   * @access public
   */
  public $numeroDemonstrativo = null;

  /**
   * 
   * @var string $nomeOperadora
   * @access public
   */
  public $nomeOperadora = null;

  /**
   * 
   * @var string $cnpjOper
   * @access public
   */
  public $cnpjOper = null;

  /**
   * 
   * @var periodoProc $periodoProc
   * @access public
   */
  public $periodoProc = null;

  /**
   * 
   * @var dadosPrestador $dadosPrestador
   * @access public
   */
  public $dadosPrestador = null;

  /**
   * 
   * @var dadosPagamentoProtocolo $dadosPagamentoProtocolo
   * @access public
   */
  public $dadosPagamentoProtocolo = null;

  /**
   * 
   * @var Ct_descontos[] $debitosCreditosTributaveis
   * @access public
   */
  public $debitosCreditosTributaveis = null;

  /**
   * 
   * @var Ct_descontos[] $debitosCreditosNaoTributaveis
   * @access public
   */
  public $debitosCreditosNaoTributaveis = null;

  /**
   * 
   * @var Ct_descontos[] $demaisImpostos
   * @access public
   */
  public $demaisImpostos = null;

  /**
   * 
   * @var float $valorTotalTributavel
   * @access public
   */
  public $valorTotalTributavel = null;

  /**
   * 
   * @var float $valorTotalImpostos
   * @access public
   */
  public $valorTotalImpostos = null;

  /**
   * 
   * @var float $valorTotalNaoTributavel
   * @access public
   */
  public $valorTotalNaoTributavel = null;

  /**
   * 
   * @var float $valorFinalReceber
   * @access public
   */
  public $valorFinalReceber = null;

  /**
   * 
   * @var string $observacao
   * @access public
   */
  public $observacao = null;

  /**
   * 
   * @param string $registroANS
   * @param string $numeroDemonstrativo
   * @param string $nomeOperadora
   * @param string $cnpjOper
   * @param periodoProc $periodoProc
   * @param dadosPrestador $dadosPrestador
   * @param dadosPagamentoProtocolo $dadosPagamentoProtocolo
   * @param Ct_descontos[] $debitosCreditosTributaveis
   * @param Ct_descontos[] $debitosCreditosNaoTributaveis
   * @param Ct_descontos[] $demaisImpostos
   * @param float $valorTotalTributavel
   * @param float $valorTotalImpostos
   * @param float $valorTotalNaoTributavel
   * @param float $valorFinalReceber
   * @param string $observacao
   * @access public
   */
  public function __construct($registroANS, $numeroDemonstrativo, $nomeOperadora, $cnpjOper, $periodoProc, $dadosPrestador, $dadosPagamentoProtocolo, $debitosCreditosTributaveis, $debitosCreditosNaoTributaveis, $demaisImpostos, $valorTotalTributavel, $valorTotalImpostos, $valorTotalNaoTributavel, $valorFinalReceber, $observacao)
  {
    $this->registroANS = $registroANS;
    $this->numeroDemonstrativo = $numeroDemonstrativo;
    $this->nomeOperadora = $nomeOperadora;
    $this->cnpjOper = $cnpjOper;
    $this->periodoProc = $periodoProc;
    $this->dadosPrestador = $dadosPrestador;
    $this->dadosPagamentoProtocolo = $dadosPagamentoProtocolo;
    $this->debitosCreditosTributaveis = $debitosCreditosTributaveis;
    $this->debitosCreditosNaoTributaveis = $debitosCreditosNaoTributaveis;
    $this->demaisImpostos = $demaisImpostos;
    $this->valorTotalTributavel = $valorTotalTributavel;
    $this->valorTotalImpostos = $valorTotalImpostos;
    $this->valorTotalNaoTributavel = $valorTotalNaoTributavel;
    $this->valorFinalReceber = $valorFinalReceber;
    $this->observacao = $observacao;
  }

}

}
