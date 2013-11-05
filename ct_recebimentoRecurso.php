<?php

if (!class_exists("ct_recebimentoRecurso", false)) 
{
class ct_recebimentoRecurso
{

  /**
   * 
   * @var ct_motivoGlosa $mensagemErro
   * @access public
   */
  public $mensagemErro = null;

  /**
   * 
   * @var ct_recursoGlosaRecebimento $protocoloRecebimento
   * @access public
   */
  public $protocoloRecebimento = null;

  /**
   * 
   * @param ct_motivoGlosa $mensagemErro
   * @param ct_recursoGlosaRecebimento $protocoloRecebimento
   * @access public
   */
  public function __construct($mensagemErro, $protocoloRecebimento)
  {
    $this->mensagemErro = $mensagemErro;
    $this->protocoloRecebimento = $protocoloRecebimento;
  }

}

}
