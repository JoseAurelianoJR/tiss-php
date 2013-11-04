<?php

class ct_elegibilidadeRecibo
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var string $numeroCarteira
   * @access public
   */
  public $numeroCarteira = null;

  /**
   * 
   * @var date $validadeCarteira
   * @access public
   */
  public $validadeCarteira = null;

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
   * @var dm_simNao $respostaSolicitacao
   * @access public
   */
  public $respostaSolicitacao = null;

  /**
   * 
   * @var Ct_motivoGlosa[] $motivosNegativa
   * @access public
   */
  public $motivosNegativa = null;

  /**
   * 
   * @param string $registroANS
   * @param string $numeroCarteira
   * @param date $validadeCarteira
   * @param string $nomeBeneficiario
   * @param string $numeroCNS
   * @param base64Binary $identificadorBeneficiario
   * @param dm_simNao $respostaSolicitacao
   * @param Ct_motivoGlosa[] $motivosNegativa
   * @access public
   */
  public function __construct($registroANS, $numeroCarteira, $validadeCarteira, $nomeBeneficiario, $numeroCNS, $identificadorBeneficiario, $respostaSolicitacao, $motivosNegativa)
  {
    $this->registroANS = $registroANS;
    $this->numeroCarteira = $numeroCarteira;
    $this->validadeCarteira = $validadeCarteira;
    $this->nomeBeneficiario = $nomeBeneficiario;
    $this->numeroCNS = $numeroCNS;
    $this->identificadorBeneficiario = $identificadorBeneficiario;
    $this->respostaSolicitacao = $respostaSolicitacao;
    $this->motivosNegativa = $motivosNegativa;
  }

}
