<?php

if (!class_exists("ct_demonstrativoCabecalho", false)) 
{
class ct_demonstrativoCabecalho
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var string $numeroDemonstrativo
   * @access public
   */
  public $numeroDemonstrativo = null;

  /**
   * 
   * @var string $nomeOperadora
   * @access public
   */
  public $nomeOperadora = null;

  /**
   * 
   * @var string $numeroCNPJ
   * @access public
   */
  public $numeroCNPJ = null;

  /**
   * 
   * @var date $dataEmissao
   * @access public
   */
  public $dataEmissao = null;

  /**
   * 
   * @param string $registroANS
   * @param string $numeroDemonstrativo
   * @param string $nomeOperadora
   * @param string $numeroCNPJ
   * @param date $dataEmissao
   * @access public
   */
  public function __construct($registroANS, $numeroDemonstrativo, $nomeOperadora, $numeroCNPJ, $dataEmissao)
  {
    $this->registroANS = $registroANS;
    $this->numeroDemonstrativo = $numeroDemonstrativo;
    $this->nomeOperadora = $nomeOperadora;
    $this->numeroCNPJ = $numeroCNPJ;
    $this->dataEmissao = $dataEmissao;
  }

}

}
