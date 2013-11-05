<?php

if (!class_exists("solicitacaoDemonstrativoRetornoWS", false)) 
{
class solicitacaoDemonstrativoRetornoWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_demonstrativoSolicitacao $solicitacaoDemonstrativoRetorno
   * @access public
   */
  public $solicitacaoDemonstrativoRetorno = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_demonstrativoSolicitacao $solicitacaoDemonstrativoRetorno
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $solicitacaoDemonstrativoRetorno, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->solicitacaoDemonstrativoRetorno = $solicitacaoDemonstrativoRetorno;
    $this->hash = $hash;
  }

}

}
