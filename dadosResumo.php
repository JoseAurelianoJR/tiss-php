<?php

if (!class_exists("dadosResumo", false)) 
{
class dadosResumo
{

  /**
   * 
   * @var ct_dadosResumoDemonstrativo $relacaoProtocolos
   * @access public
   */
  public $relacaoProtocolos = null;

  /**
   * 
   * @param ct_dadosResumoDemonstrativo $relacaoProtocolos
   * @access public
   */
  public function __construct($relacaoProtocolos)
  {
    $this->relacaoProtocolos = $relacaoProtocolos;
  }

}

}
