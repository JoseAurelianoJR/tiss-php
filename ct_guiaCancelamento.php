<?php

if (!class_exists("ct_guiaCancelamento", false)) 
{
class ct_guiaCancelamento
{

  /**
   * 
   * @var dm_tipoGuia $tipoGuia
   * @access public
   */
  public $tipoGuia = null;

  /**
   * 
   * @var ct_contratadoDados $dadosPrestador
   * @access public
   */
  public $dadosPrestador = null;

  /**
   * 
   * @var string $numeroProtocolo
   * @access public
   */
  public $numeroProtocolo = null;

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @param dm_tipoGuia $tipoGuia
   * @param ct_contratadoDados $dadosPrestador
   * @param string $numeroProtocolo
   * @param string $numeroGuiaPrestador
   * @access public
   */
  public function __construct($tipoGuia, $dadosPrestador, $numeroProtocolo, $numeroGuiaPrestador)
  {
    $this->tipoGuia = $tipoGuia;
    $this->dadosPrestador = $dadosPrestador;
    $this->numeroProtocolo = $numeroProtocolo;
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
  }

}

}
