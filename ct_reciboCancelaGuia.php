<?php

if (!class_exists("ct_reciboCancelaGuia", false)) 
{
class ct_reciboCancelaGuia
{

  /**
   * 
   * @var ct_motivoGlosa $mensagemErro
   * @access public
   */
  public $mensagemErro = null;

  /**
   * 
   * @var ct_guiaCancelamentoRecibo $reciboCancelaGuia
   * @access public
   */
  public $reciboCancelaGuia = null;

  /**
   * 
   * @param ct_motivoGlosa $mensagemErro
   * @param ct_guiaCancelamentoRecibo $reciboCancelaGuia
   * @access public
   */
  public function __construct($mensagemErro, $reciboCancelaGuia)
  {
    $this->mensagemErro = $mensagemErro;
    $this->reciboCancelaGuia = $reciboCancelaGuia;
  }

}

}
