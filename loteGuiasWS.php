<?php

if (!class_exists("loteGuiasWS", false)) 
{
class loteGuiasWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ctm_guiaLote $loteGuias
   * @access public
   */
  public $loteGuias = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ctm_guiaLote $loteGuias
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $loteGuias, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->loteGuias = $loteGuias;
    $this->hash = $hash;
  }

}

}
