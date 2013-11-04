<?php

class ct_loginSenha
{

  /**
   * 
   * @var string $loginPrestador
   * @access public
   */
  public $loginPrestador = null;

  /**
   * 
   * @var string $senhaPrestador
   * @access public
   */
  public $senhaPrestador = null;

  /**
   * 
   * @param string $loginPrestador
   * @param string $senhaPrestador
   * @access public
   */
  public function __construct($loginPrestador, $senhaPrestador)
  {
    $this->loginPrestador = $loginPrestador;
    $this->senhaPrestador = $senhaPrestador;
  }

}
