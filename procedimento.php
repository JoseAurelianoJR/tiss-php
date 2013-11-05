<?php

if (!class_exists("procedimento", false)) 
{
class procedimento
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
   * @var float $valorProcedimento
   * @access public
   */
  public $valorProcedimento = null;

  /**
   * 
   * @param dm_tabela $codigoTabela
   * @param string $codigoProcedimento
   * @param float $valorProcedimento
   * @access public
   */
  public function __construct($codigoTabela, $codigoProcedimento, $valorProcedimento)
  {
    $this->codigoTabela = $codigoTabela;
    $this->codigoProcedimento = $codigoProcedimento;
    $this->valorProcedimento = $valorProcedimento;
  }

}

}
