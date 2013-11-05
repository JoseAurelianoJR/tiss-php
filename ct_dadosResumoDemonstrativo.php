<?php

if (!class_exists("ct_dadosResumoDemonstrativo", false)) 
{
class ct_dadosResumoDemonstrativo
{

  /**
   * 
   * @var date $dataProtocolo
   * @access public
   */
  public $dataProtocolo = null;

  /**
   * 
   * @var string $numeroProtocolo
   * @access public
   */
  public $numeroProtocolo = null;

  /**
   * 
   * @var string $numeroLote
   * @access public
   */
  public $numeroLote = null;

  /**
   * 
   * @var float $valorInformado
   * @access public
   */
  public $valorInformado = null;

  /**
   * 
   * @var float $valorProcessado
   * @access public
   */
  public $valorProcessado = null;

  /**
   * 
   * @var float $valorLiberado
   * @access public
   */
  public $valorLiberado = null;

  /**
   * 
   * @var float $valorGlosa
   * @access public
   */
  public $valorGlosa = null;

  /**
   * 
   * @param date $dataProtocolo
   * @param string $numeroProtocolo
   * @param string $numeroLote
   * @param float $valorInformado
   * @param float $valorProcessado
   * @param float $valorLiberado
   * @param float $valorGlosa
   * @access public
   */
  public function __construct($dataProtocolo, $numeroProtocolo, $numeroLote, $valorInformado, $valorProcessado, $valorLiberado, $valorGlosa)
  {
    $this->dataProtocolo = $dataProtocolo;
    $this->numeroProtocolo = $numeroProtocolo;
    $this->numeroLote = $numeroLote;
    $this->valorInformado = $valorInformado;
    $this->valorProcessado = $valorProcessado;
    $this->valorLiberado = $valorLiberado;
    $this->valorGlosa = $valorGlosa;
  }

}

}
