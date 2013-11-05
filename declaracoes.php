<?php

if (!class_exists("declaracoes", false)) 
{
class declaracoes
{

  /**
   * 
   * @var string $declaracaoNascido
   * @access public
   */
  public $declaracaoNascido = null;

  /**
   * 
   * @var string $diagnosticoObito
   * @access public
   */
  public $diagnosticoObito = null;

  /**
   * 
   * @var string $declaracaoObito
   * @access public
   */
  public $declaracaoObito = null;

  /**
   * 
   * @var dm_simNao $indicadorDORN
   * @access public
   */
  public $indicadorDORN = null;

  /**
   * 
   * @param string $declaracaoNascido
   * @param string $diagnosticoObito
   * @param string $declaracaoObito
   * @param dm_simNao $indicadorDORN
   * @access public
   */
  public function __construct($declaracaoNascido, $diagnosticoObito, $declaracaoObito, $indicadorDORN)
  {
    $this->declaracaoNascido = $declaracaoNascido;
    $this->diagnosticoObito = $diagnosticoObito;
    $this->declaracaoObito = $declaracaoObito;
    $this->indicadorDORN = $indicadorDORN;
  }

}

}
