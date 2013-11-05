<?php

if (!class_exists("dadosPagamentoGuia", false)) 
{
class dadosPagamentoGuia
{

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @var string $carteiraBeneficiario
   * @access public
   */
  public $carteiraBeneficiario = null;

  /**
   * 
   * @var string $nomeBeneficiario
   * @access public
   */
  public $nomeBeneficiario = null;

  /**
   * 
   * @var dadosPagamento $dadosPagamento
   * @access public
   */
  public $dadosPagamento = null;

  /**
   * 
   * @var string $observacaoGuia
   * @access public
   */
  public $observacaoGuia = null;

  /**
   * 
   * @var float $valorTotalInformadoGuia
   * @access public
   */
  public $valorTotalInformadoGuia = null;

  /**
   * 
   * @var float $valorTotalProcessadoGuia
   * @access public
   */
  public $valorTotalProcessadoGuia = null;

  /**
   * 
   * @var float $valorTotalGlosaGuia
   * @access public
   */
  public $valorTotalGlosaGuia = null;

  /**
   * 
   * @var float $valorTotalFranquiaGuia
   * @access public
   */
  public $valorTotalFranquiaGuia = null;

  /**
   * 
   * @var float $valorTotalLiberadoGuia
   * @access public
   */
  public $valorTotalLiberadoGuia = null;

  /**
   * 
   * @param string $numeroGuiaPrestador
   * @param string $carteiraBeneficiario
   * @param string $nomeBeneficiario
   * @param dadosPagamento $dadosPagamento
   * @param string $observacaoGuia
   * @param float $valorTotalInformadoGuia
   * @param float $valorTotalProcessadoGuia
   * @param float $valorTotalGlosaGuia
   * @param float $valorTotalFranquiaGuia
   * @param float $valorTotalLiberadoGuia
   * @access public
   */
  public function __construct($numeroGuiaPrestador, $carteiraBeneficiario, $nomeBeneficiario, $dadosPagamento, $observacaoGuia, $valorTotalInformadoGuia, $valorTotalProcessadoGuia, $valorTotalGlosaGuia, $valorTotalFranquiaGuia, $valorTotalLiberadoGuia)
  {
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->carteiraBeneficiario = $carteiraBeneficiario;
    $this->nomeBeneficiario = $nomeBeneficiario;
    $this->dadosPagamento = $dadosPagamento;
    $this->observacaoGuia = $observacaoGuia;
    $this->valorTotalInformadoGuia = $valorTotalInformadoGuia;
    $this->valorTotalProcessadoGuia = $valorTotalProcessadoGuia;
    $this->valorTotalGlosaGuia = $valorTotalGlosaGuia;
    $this->valorTotalFranquiaGuia = $valorTotalFranquiaGuia;
    $this->valorTotalLiberadoGuia = $valorTotalLiberadoGuia;
  }

}

}
