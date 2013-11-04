<?php

class ct_elegibilidadeVerifica
{

  /**
   * 
   * @var ct_contratadoDados $dadosPrestador
   * @access public
   */
  public $dadosPrestador = null;

  /**
   * 
   * @var string $numeroCarteira
   * @access public
   */
  public $numeroCarteira = null;

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
   * @var date $validadeCarteira
   * @access public
   */
  public $validadeCarteira = null;

  /**
   * 
   * @param ct_contratadoDados $dadosPrestador
   * @param string $numeroCarteira
   * @param string $nomeBeneficiario
   * @param string $numeroCNS
   * @param base64Binary $identificadorBeneficiario
   * @param date $validadeCarteira
   * @access public
   */
  public function __construct($dadosPrestador, $numeroCarteira, $nomeBeneficiario, $numeroCNS, $identificadorBeneficiario, $validadeCarteira)
  {
    $this->dadosPrestador = $dadosPrestador;
    $this->numeroCarteira = $numeroCarteira;
    $this->nomeBeneficiario = $nomeBeneficiario;
    $this->numeroCNS = $numeroCNS;
    $this->identificadorBeneficiario = $identificadorBeneficiario;
    $this->validadeCarteira = $validadeCarteira;
  }

}
