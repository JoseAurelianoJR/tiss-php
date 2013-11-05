<?php

if (!class_exists("ct_protocoloDetalhe", false)) 
{
class ct_protocoloDetalhe
{

  /**
   * 
   * @var string $numeroProtocolo
   * @access public
   */
  public $numeroProtocolo = null;

  /**
   * 
   * @var float $valorTotalProtocolo
   * @access public
   */
  public $valorTotalProtocolo = null;

  /**
   * 
   * @var glosaProtocolo $glosaProtocolo
   * @access public
   */
  public $glosaProtocolo = null;

  /**
   * 
   * @var dadosGuiasProtocolo $dadosGuiasProtocolo
   * @access public
   */
  public $dadosGuiasProtocolo = null;

  /**
   * 
   * @param string $numeroProtocolo
   * @param float $valorTotalProtocolo
   * @param glosaProtocolo $glosaProtocolo
   * @param dadosGuiasProtocolo $dadosGuiasProtocolo
   * @access public
   */
  public function __construct($numeroProtocolo, $valorTotalProtocolo, $glosaProtocolo, $dadosGuiasProtocolo)
  {
    $this->numeroProtocolo = $numeroProtocolo;
    $this->valorTotalProtocolo = $valorTotalProtocolo;
    $this->glosaProtocolo = $glosaProtocolo;
    $this->dadosGuiasProtocolo = $dadosGuiasProtocolo;
  }

}

}
