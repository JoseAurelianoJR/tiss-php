<?php

if (!class_exists("protocoloRecebimentoRecursoWS", false)) 
{
class protocoloRecebimentoRecursoWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_recebimentoRecurso $recebimentoRecurso
   * @access public
   */
  public $recebimentoRecurso = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_recebimentoRecurso $recebimentoRecurso
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $recebimentoRecurso, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->recebimentoRecurso = $recebimentoRecurso;
    $this->hash = $hash;
  }

}

}
