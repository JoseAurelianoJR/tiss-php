<?php

if (!class_exists("ct_guiaValorTotal", false)) 
{
class ct_guiaValorTotal
{

  /**
   * 
   * @var float $valorProcedimentos
   * @access public
   */
  public $valorProcedimentos = null;

  /**
   * 
   * @var float $valorDiarias
   * @access public
   */
  public $valorDiarias = null;

  /**
   * 
   * @var float $valorTaxasAlugueis
   * @access public
   */
  public $valorTaxasAlugueis = null;

  /**
   * 
   * @var float $valorMateriais
   * @access public
   */
  public $valorMateriais = null;

  /**
   * 
   * @var float $valorMedicamentos
   * @access public
   */
  public $valorMedicamentos = null;

  /**
   * 
   * @var float $valorOPME
   * @access public
   */
  public $valorOPME = null;

  /**
   * 
   * @var float $valorGasesMedicinais
   * @access public
   */
  public $valorGasesMedicinais = null;

  /**
   * 
   * @var float $valorTotalGeral
   * @access public
   */
  public $valorTotalGeral = null;

  /**
   * 
   * @param float $valorProcedimentos
   * @param float $valorDiarias
   * @param float $valorTaxasAlugueis
   * @param float $valorMateriais
   * @param float $valorMedicamentos
   * @param float $valorOPME
   * @param float $valorGasesMedicinais
   * @param float $valorTotalGeral
   * @access public
   */
  public function __construct($valorProcedimentos, $valorDiarias, $valorTaxasAlugueis, $valorMateriais, $valorMedicamentos, $valorOPME, $valorGasesMedicinais, $valorTotalGeral)
  {
    $this->valorProcedimentos = $valorProcedimentos;
    $this->valorDiarias = $valorDiarias;
    $this->valorTaxasAlugueis = $valorTaxasAlugueis;
    $this->valorMateriais = $valorMateriais;
    $this->valorMedicamentos = $valorMedicamentos;
    $this->valorOPME = $valorOPME;
    $this->valorGasesMedicinais = $valorGasesMedicinais;
    $this->valorTotalGeral = $valorTotalGeral;
  }

}

}
