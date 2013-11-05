<?php

if (!class_exists("dadosPrestador", false)) 
{
class dadosPrestador
{

  /**
   * 
   * @var string $codigoPrestador
   * @access public
   */
  public $codigoPrestador = null;

  /**
   * 
   * @var string $nomePrestador
   * @access public
   */
  public $nomePrestador = null;

  /**
   * 
   * @var string $cnpjCPFPrestador
   * @access public
   */
  public $cnpjCPFPrestador = null;

  /**
   * 
   * @param string $codigoPrestador
   * @param string $nomePrestador
   * @param string $cnpjCPFPrestador
   * @access public
   */
  public function __construct($codigoPrestador, $nomePrestador, $cnpjCPFPrestador)
  {
    $this->codigoPrestador = $codigoPrestador;
    $this->nomePrestador = $nomePrestador;
    $this->cnpjCPFPrestador = $cnpjCPFPrestador;
  }

}

}
