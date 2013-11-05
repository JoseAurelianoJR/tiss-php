<?php

if (!class_exists("ct_descontos", false)) 
{
class ct_descontos
{

  /**
   * 
   * @var dm_debitoCreditoIndicador $indicador
   * @access public
   */
  public $indicador = null;

  /**
   * 
   * @var dm_debitoCreditoTipo $tipoDebitoCredito
   * @access public
   */
  public $tipoDebitoCredito = null;

  /**
   * 
   * @var string $descricaoDbCr
   * @access public
   */
  public $descricaoDbCr = null;

  /**
   * 
   * @var float $valorDbCr
   * @access public
   */
  public $valorDbCr = null;

  /**
   * 
   * @param dm_debitoCreditoIndicador $indicador
   * @param dm_debitoCreditoTipo $tipoDebitoCredito
   * @param string $descricaoDbCr
   * @param float $valorDbCr
   * @access public
   */
  public function __construct($indicador, $tipoDebitoCredito, $descricaoDbCr, $valorDbCr)
  {
    $this->indicador = $indicador;
    $this->tipoDebitoCredito = $tipoDebitoCredito;
    $this->descricaoDbCr = $descricaoDbCr;
    $this->valorDbCr = $valorDbCr;
  }

}

}
