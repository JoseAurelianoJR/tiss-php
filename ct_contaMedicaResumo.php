<?php

if (!class_exists("ct_contaMedicaResumo", false)) 
{
class ct_contaMedicaResumo
{

  /**
   * 
   * @var string $numeroLotePrestador
   * @access public
   */
  public $numeroLotePrestador = null;

  /**
   * 
   * @var string $numeroProtocolo
   * @access public
   */
  public $numeroProtocolo = null;

  /**
   * 
   * @var date $dataProtocolo
   * @access public
   */
  public $dataProtocolo = null;

  /**
   * 
   * @var float $valorProtocolo
   * @access public
   */
  public $valorProtocolo = null;

  /**
   * 
   * @var float $valorGlosaProtocolo
   * @access public
   */
  public $valorGlosaProtocolo = null;

  /**
   * 
   * @var ct_motivoGlosa $GlosaProtocolo
   * @access public
   */
  public $GlosaProtocolo = null;

  /**
   * 
   * @var relacaoGuias $relacaoGuias
   * @access public
   */
  public $relacaoGuias = null;

  /**
   * 
   * @var float $valorInformadoProtocolo
   * @access public
   */
  public $valorInformadoProtocolo = null;

  /**
   * 
   * @var float $valorProcessadoProtocolo
   * @access public
   */
  public $valorProcessadoProtocolo = null;

  /**
   * 
   * @var float $valorLiberadoProtocolo
   * @access public
   */
  public $valorLiberadoProtocolo = null;

  /**
   * 
   * @param string $numeroLotePrestador
   * @param string $numeroProtocolo
   * @param date $dataProtocolo
   * @param float $valorProtocolo
   * @param float $valorGlosaProtocolo
   * @param ct_motivoGlosa $GlosaProtocolo
   * @param relacaoGuias $relacaoGuias
   * @param float $valorInformadoProtocolo
   * @param float $valorProcessadoProtocolo
   * @param float $valorLiberadoProtocolo
   * @access public
   */
  public function __construct($numeroLotePrestador, $numeroProtocolo, $dataProtocolo, $valorProtocolo, $valorGlosaProtocolo, $GlosaProtocolo, $relacaoGuias, $valorInformadoProtocolo, $valorProcessadoProtocolo, $valorLiberadoProtocolo)
  {
    $this->numeroLotePrestador = $numeroLotePrestador;
    $this->numeroProtocolo = $numeroProtocolo;
    $this->dataProtocolo = $dataProtocolo;
    $this->valorProtocolo = $valorProtocolo;
    $this->valorGlosaProtocolo = $valorGlosaProtocolo;
    $this->GlosaProtocolo = $GlosaProtocolo;
    $this->relacaoGuias = $relacaoGuias;
    $this->valorInformadoProtocolo = $valorInformadoProtocolo;
    $this->valorProcessadoProtocolo = $valorProcessadoProtocolo;
    $this->valorLiberadoProtocolo = $valorLiberadoProtocolo;
  }

}

}
