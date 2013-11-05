<?php

if (!class_exists("dadosGuia", false)) 
{
class dadosGuia
{

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @var dm_tipoGuia $tipoGuia
   * @access public
   */
  public $tipoGuia = null;

  /**
   * 
   * @var dm_statusCancelamento $statusCancelamento
   * @access public
   */
  public $statusCancelamento = null;

  /**
   * 
   * @param string $numeroGuiaPrestador
   * @param dm_tipoGuia $tipoGuia
   * @param dm_statusCancelamento $statusCancelamento
   * @access public
   */
  public function __construct($numeroGuiaPrestador, $tipoGuia, $statusCancelamento)
  {
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->tipoGuia = $tipoGuia;
    $this->statusCancelamento = $statusCancelamento;
  }

}

}
