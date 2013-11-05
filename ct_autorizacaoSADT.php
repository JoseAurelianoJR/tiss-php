<?php

if (!class_exists("ct_autorizacaoSADT", false)) 
{
class ct_autorizacaoSADT
{

  /**
   * 
   * @var string $numeroGuiaOperadora
   * @access public
   */
  public $numeroGuiaOperadora = null;

  /**
   * 
   * @var date $dataAutorizacao
   * @access public
   */
  public $dataAutorizacao = null;

  /**
   * 
   * @var string $senha
   * @access public
   */
  public $senha = null;

  /**
   * 
   * @var date $dataValidadeSenha
   * @access public
   */
  public $dataValidadeSenha = null;

  /**
   * 
   * @param string $numeroGuiaOperadora
   * @param date $dataAutorizacao
   * @param string $senha
   * @param date $dataValidadeSenha
   * @access public
   */
  public function __construct($numeroGuiaOperadora, $dataAutorizacao, $senha, $dataValidadeSenha)
  {
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->dataAutorizacao = $dataAutorizacao;
    $this->senha = $senha;
    $this->dataValidadeSenha = $dataValidadeSenha;
  }

}

}
