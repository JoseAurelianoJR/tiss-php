<?php

if (!class_exists("ct_procedimentoDados", false)) 
{
class ct_procedimentoDados
{

  /**
   * 
   * @var dm_tabela $codigoTabela
   * @access public
   */
  public $codigoTabela = null;

  /**
   * 
   * @var string $codigoProcedimento
   * @access public
   */
  public $codigoProcedimento = null;

  /**
   * 
   * @var string $descricaoProcedimento
   * @access public
   */
  public $descricaoProcedimento = null;

  /**
   * 
   * @param dm_tabela $codigoTabela
   * @param string $codigoProcedimento
   * @param string $descricaoProcedimento
   * @access public
   */
  public function __construct($codigoTabela, $codigoProcedimento, $descricaoProcedimento)
  {
    $this->codigoTabela = $codigoTabela;
    $this->codigoProcedimento = $codigoProcedimento;
    $this->descricaoProcedimento = $descricaoProcedimento;
  }

}

}
