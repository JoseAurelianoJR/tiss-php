<?php

if (!class_exists("loteRecursoGlosaWS", false)) 
{
class loteRecursoGlosaWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_guiaRecursoLote $loteRecurso
   * @access public
   */
  public $loteRecurso = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_guiaRecursoLote $loteRecurso
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $loteRecurso, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->loteRecurso = $loteRecurso;
    $this->hash = $hash;
  }

}

}
