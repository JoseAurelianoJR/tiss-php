<?php

if (!class_exists("denteRegiao", false)) 
{
class denteRegiao
{

  /**
   * 
   * @var dm_regiao $codRegiao
   * @access public
   */
  public $codRegiao = null;

  /**
   * 
   * @var dm_dente $codDente
   * @access public
   */
  public $codDente = null;

  /**
   * 
   * @param dm_regiao $codRegiao
   * @param dm_dente $codDente
   * @access public
   */
  public function __construct($codRegiao, $codDente)
  {
    $this->codRegiao = $codRegiao;
    $this->codDente = $codDente;
  }

}

}
