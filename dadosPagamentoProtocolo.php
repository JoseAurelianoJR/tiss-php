<?php

if (!class_exists("dadosPagamentoProtocolo", false)) 
{
class dadosPagamentoProtocolo
{

  /**
   * 
   * @var date $dataPagamento
   * @access public
   */
  public $dataPagamento = null;

  /**
   * 
   * @var string $banco
   * @access public
   */
  public $banco = null;

  /**
   * 
   * @var string $agencia
   * @access public
   */
  public $agencia = null;

  /**
   * 
   * @var string $conta
   * @access public
   */
  public $conta = null;

  /**
   * 
   * @var string $numeroLote
   * @access public
   */
  public $numeroLote = null;

  /**
   * 
   * @var string $numeroProtocolo
   * @access public
   */
  public $numeroProtocolo = null;

  /**
   * 
   * @var dadosPagamentoGuia $dadosPagamentoGuia
   * @access public
   */
  public $dadosPagamentoGuia = null;

  /**
   * 
   * @var float $valorTotalInformadoProtocolo
   * @access public
   */
  public $valorTotalInformadoProtocolo = null;

  /**
   * 
   * @var float $valorTotalProcessadoProtocolo
   * @access public
   */
  public $valorTotalProcessadoProtocolo = null;

  /**
   * 
   * @var float $valorTotalGlosaProtocolo
   * @access public
   */
  public $valorTotalGlosaProtocolo = null;

  /**
   * 
   * @var float $valorTotalFranquiaProtocolo
   * @access public
   */
  public $valorTotalFranquiaProtocolo = null;

  /**
   * 
   * @var float $valorTotalLiberadoProtocolo
   * @access public
   */
  public $valorTotalLiberadoProtocolo = null;

  /**
   * 
   * @param date $dataPagamento
   * @param string $banco
   * @param string $agencia
   * @param string $conta
   * @param string $numeroLote
   * @param string $numeroProtocolo
   * @param dadosPagamentoGuia $dadosPagamentoGuia
   * @param float $valorTotalInformadoProtocolo
   * @param float $valorTotalProcessadoProtocolo
   * @param float $valorTotalGlosaProtocolo
   * @param float $valorTotalFranquiaProtocolo
   * @param float $valorTotalLiberadoProtocolo
   * @access public
   */
  public function __construct($dataPagamento, $banco, $agencia, $conta, $numeroLote, $numeroProtocolo, $dadosPagamentoGuia, $valorTotalInformadoProtocolo, $valorTotalProcessadoProtocolo, $valorTotalGlosaProtocolo, $valorTotalFranquiaProtocolo, $valorTotalLiberadoProtocolo)
  {
    $this->dataPagamento = $dataPagamento;
    $this->banco = $banco;
    $this->agencia = $agencia;
    $this->conta = $conta;
    $this->numeroLote = $numeroLote;
    $this->numeroProtocolo = $numeroProtocolo;
    $this->dadosPagamentoGuia = $dadosPagamentoGuia;
    $this->valorTotalInformadoProtocolo = $valorTotalInformadoProtocolo;
    $this->valorTotalProcessadoProtocolo = $valorTotalProcessadoProtocolo;
    $this->valorTotalGlosaProtocolo = $valorTotalGlosaProtocolo;
    $this->valorTotalFranquiaProtocolo = $valorTotalFranquiaProtocolo;
    $this->valorTotalLiberadoProtocolo = $valorTotalLiberadoProtocolo;
  }

}

}
