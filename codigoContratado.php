<?php

if (!class_exists("codigoContratado", false)) 
{
class codigoContratado
{

  /**
   * 
   * @var string $cnpjLocalExecutante
   * @access public
   */
  public $cnpjLocalExecutante = null;

  /**
   * 
   * @var string $codigoNaOperadora
   * @access public
   */
  public $codigoNaOperadora = null;

  /**
   * 
   * @param string $cnpjLocalExecutante
   * @param string $codigoNaOperadora
   * @access public
   */
  public function __construct($cnpjLocalExecutante, $codigoNaOperadora)
  {
    $this->cnpjLocalExecutante = $cnpjLocalExecutante;
    $this->codigoNaOperadora = $codigoNaOperadora;
  }

}

}
