<?php

class ct_contratadoDados
{

  /**
   * 
   * @var string $codigoPrestadorNaOperadora
   * @access public
   */
  public $codigoPrestadorNaOperadora = null;

  /**
   * 
   * @var string $cpfContratado
   * @access public
   */
  public $cpfContratado = null;

  /**
   * 
   * @var string $cnpjContratado
   * @access public
   */
  public $cnpjContratado = null;

  /**
   * 
   * @var string $nomeContratado
   * @access public
   */
  public $nomeContratado = null;

  /**
   * 
   * @param string $codigoPrestadorNaOperadora
   * @param string $cpfContratado
   * @param string $cnpjContratado
   * @param string $nomeContratado
   * @access public
   */
  public function __construct($codigoPrestadorNaOperadora, $cpfContratado, $cnpjContratado, $nomeContratado)
  {
    $this->codigoPrestadorNaOperadora = $codigoPrestadorNaOperadora;
    $this->cpfContratado = $cpfContratado;
    $this->cnpjContratado = $cnpjContratado;
    $this->nomeContratado = $nomeContratado;
  }

}
