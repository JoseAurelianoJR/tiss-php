<?php

if (!class_exists("dentes", false)) 
{
class dentes
{

  /**
   * 
   * @var dm_dente $elementoDentario
   * @access public
   */
  public $elementoDentario = null;

  /**
   * 
   * @var dm_condicaoClinica $condicaoClinica
   * @access public
   */
  public $condicaoClinica = null;

  /**
   * 
   * @param dm_dente $elementoDentario
   * @param dm_condicaoClinica $condicaoClinica
   * @access public
   */
  public function __construct($elementoDentario, $condicaoClinica)
  {
    $this->elementoDentario = $elementoDentario;
    $this->condicaoClinica = $condicaoClinica;
  }

}

}
