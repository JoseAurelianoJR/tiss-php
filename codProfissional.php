<?php

if (!class_exists("codProfissional", false)) 
{
class codProfissional
{

  /**
   * 
   * @var string $cpfContratado
   * @access public
   */
  public $cpfContratado = null;

  /**
   * 
   * @var string $codigoPrestadorNaOperadora
   * @access public
   */
  public $codigoPrestadorNaOperadora = null;

  /**
   * 
   * @param string $cpfContratado
   * @param string $codigoPrestadorNaOperadora
   * @access public
   */
  public function __construct($cpfContratado, $codigoPrestadorNaOperadora)
  {
    $this->cpfContratado = $cpfContratado;
    $this->codigoPrestadorNaOperadora = $codigoPrestadorNaOperadora;
  }

}

}
