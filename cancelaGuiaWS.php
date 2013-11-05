<?php

if (!class_exists("cancelaGuiaWS", false)) 
{
class cancelaGuiaWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_guiaCancelamento $cancelaGuia
   * @access public
   */
  public $cancelaGuia = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_guiaCancelamento $cancelaGuia
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $cancelaGuia, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->cancelaGuia = $cancelaGuia;
    $this->hash = $hash;
  }

}

}
