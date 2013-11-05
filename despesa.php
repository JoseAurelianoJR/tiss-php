<?php

if (!class_exists("despesa", false)) 
{
class despesa
{

  /**
   * 
   * @var dm_outrasDespesas $codigoDespesa
   * @access public
   */
  public $codigoDespesa = null;

  /**
   * 
   * @var ct_procedimentoExecutadoOutras $servicosExecutados
   * @access public
   */
  public $servicosExecutados = null;

  /**
   * 
   * @param dm_outrasDespesas $codigoDespesa
   * @param ct_procedimentoExecutadoOutras $servicosExecutados
   * @access public
   */
  public function __construct($codigoDespesa, $servicosExecutados)
  {
    $this->codigoDespesa = $codigoDespesa;
    $this->servicosExecutados = $servicosExecutados;
  }

}

}
