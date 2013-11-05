<?php

if (!class_exists("demonstrativoRetornoWS", false)) 
{
class demonstrativoRetornoWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_demonstrativoRetorno $demonstrativoRetorno
   * @access public
   */
  public $demonstrativoRetorno = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_demonstrativoRetorno $demonstrativoRetorno
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $demonstrativoRetorno, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->demonstrativoRetorno = $demonstrativoRetorno;
    $this->hash = $hash;
  }

}

}
