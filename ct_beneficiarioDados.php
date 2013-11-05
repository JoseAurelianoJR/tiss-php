<?php

if (!class_exists("ct_beneficiarioDados", false)) 
{
class ct_beneficiarioDados
{

  /**
   * 
   * @var string $numeroCarteira
   * @access public
   */
  public $numeroCarteira = null;

  /**
   * 
   * @var dm_simNao $atendimentoRN
   * @access public
   */
  public $atendimentoRN = null;

  /**
   * 
   * @var string $nomeBeneficiario
   * @access public
   */
  public $nomeBeneficiario = null;

  /**
   * 
   * @var string $numeroCNS
   * @access public
   */
  public $numeroCNS = null;

  /**
   * 
   * @var base64Binary $identificadorBeneficiario
   * @access public
   */
  public $identificadorBeneficiario = null;

  /**
   * 
   * @param string $numeroCarteira
   * @param dm_simNao $atendimentoRN
   * @param string $nomeBeneficiario
   * @param string $numeroCNS
   * @param base64Binary $identificadorBeneficiario
   * @access public
   */
  public function __construct($numeroCarteira, $atendimentoRN, $nomeBeneficiario, $numeroCNS, $identificadorBeneficiario)
  {
    $this->numeroCarteira = $numeroCarteira;
    $this->atendimentoRN = $atendimentoRN;
    $this->nomeBeneficiario = $nomeBeneficiario;
    $this->numeroCNS = $numeroCNS;
    $this->identificadorBeneficiario = $identificadorBeneficiario;
  }

}

}
