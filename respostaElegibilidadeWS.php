<?php

class respostaElegibilidadeWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_respostaElegibilidade $respostaElegibilidade
   * @access public
   */
  public $respostaElegibilidade = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_respostaElegibilidade $respostaElegibilidade
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $respostaElegibilidade, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->respostaElegibilidade = $respostaElegibilidade;
    $this->hash = $hash;
  }

}
