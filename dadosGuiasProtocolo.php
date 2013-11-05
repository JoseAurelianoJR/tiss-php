<?php

if (!class_exists("dadosGuiasProtocolo", false)) 
{
class dadosGuiasProtocolo
{

  /**
   * 
   * @var ct_guiaDadosOdonto $dadosGuiasOdonto
   * @access public
   */
  public $dadosGuiasOdonto = null;

  /**
   * 
   * @var ct_guiaDados $dadosGuias
   * @access public
   */
  public $dadosGuias = null;

  /**
   * 
   * @param ct_guiaDadosOdonto $dadosGuiasOdonto
   * @param ct_guiaDados $dadosGuias
   * @access public
   */
  public function __construct($dadosGuiasOdonto, $dadosGuias)
  {
    $this->dadosGuiasOdonto = $dadosGuiasOdonto;
    $this->dadosGuias = $dadosGuias;
  }

}

}
