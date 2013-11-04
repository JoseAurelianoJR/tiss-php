<?php

class ct_respostaElegibilidade
{

  /**
   * 
   * @var ct_motivoGlosa $mensagemErro
   * @access public
   */
  public $mensagemErro = null;

  /**
   * 
   * @var ct_elegibilidadeRecibo $reciboElegibilidade
   * @access public
   */
  public $reciboElegibilidade = null;

  /**
   * 
   * @param ct_motivoGlosa $mensagemErro
   * @param ct_elegibilidadeRecibo $reciboElegibilidade
   * @access public
   */
  public function __construct($mensagemErro, $reciboElegibilidade)
  {
    $this->mensagemErro = $mensagemErro;
    $this->reciboElegibilidade = $reciboElegibilidade;
  }

}
