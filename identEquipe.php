<?php

if (!class_exists("identEquipe", false)) 
{
class identEquipe
{

  /**
   * 
   * @var ct_identEquipe $identificacaoEquipe
   * @access public
   */
  public $identificacaoEquipe = null;

  /**
   * 
   * @param ct_identEquipe $identificacaoEquipe
   * @access public
   */
  public function __construct($identificacaoEquipe)
  {
    $this->identificacaoEquipe = $identificacaoEquipe;
  }

}

}
