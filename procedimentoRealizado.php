<?php

if (!class_exists("procedimentoRealizado", false)) 
{
class procedimentoRealizado
{

  /**
   * 
   * @var glosasProcedimento $glosasProcedimento
   * @access public
   */
  public $glosasProcedimento = null;

  /**
   * 
   * @param glosasProcedimento $glosasProcedimento
   * @access public
   */
  public function __construct($glosasProcedimento)
  {
    $this->glosasProcedimento = $glosasProcedimento;
  }

}

}
