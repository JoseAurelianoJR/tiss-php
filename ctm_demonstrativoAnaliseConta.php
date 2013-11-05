<?php

if (!class_exists("ctm_demonstrativoAnaliseConta", false)) 
{
class ctm_demonstrativoAnaliseConta
{

  /**
   * 
   * @var ct_demonstrativoCabecalho $cabecalhoDemonstrativo
   * @access public
   */
  public $cabecalhoDemonstrativo = null;

  /**
   * 
   * @var dadosPrestador $dadosPrestador
   * @access public
   */
  public $dadosPrestador = null;

  /**
   * 
   * @var Ctm_demonstrativoAnaliseContaDadosProtocolo[] $dadosConta
   * @access public
   */
  public $dadosConta = null;

  /**
   * 
   * @var float $valorInformadoGeral
   * @access public
   */
  public $valorInformadoGeral = null;

  /**
   * 
   * @var float $valorProcessadoGeral
   * @access public
   */
  public $valorProcessadoGeral = null;

  /**
   * 
   * @var float $valorLiberadoGeral
   * @access public
   */
  public $valorLiberadoGeral = null;

  /**
   * 
   * @var float $valorGlosaGeral
   * @access public
   */
  public $valorGlosaGeral = null;

  /**
   * 
   * @param ct_demonstrativoCabecalho $cabecalhoDemonstrativo
   * @param dadosPrestador $dadosPrestador
   * @param Ctm_demonstrativoAnaliseContaDadosProtocolo[] $dadosConta
   * @param float $valorInformadoGeral
   * @param float $valorProcessadoGeral
   * @param float $valorLiberadoGeral
   * @param float $valorGlosaGeral
   * @access public
   */
  public function __construct($cabecalhoDemonstrativo, $dadosPrestador, $dadosConta, $valorInformadoGeral, $valorProcessadoGeral, $valorLiberadoGeral, $valorGlosaGeral)
  {
    $this->cabecalhoDemonstrativo = $cabecalhoDemonstrativo;
    $this->dadosPrestador = $dadosPrestador;
    $this->dadosConta = $dadosConta;
    $this->valorInformadoGeral = $valorInformadoGeral;
    $this->valorProcessadoGeral = $valorProcessadoGeral;
    $this->valorLiberadoGeral = $valorLiberadoGeral;
    $this->valorGlosaGeral = $valorGlosaGeral;
  }

}

}
