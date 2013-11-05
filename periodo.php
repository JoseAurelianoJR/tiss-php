<?php

if (!class_exists("periodo", false)) 
{
class periodo
{

  /**
   * 
   * @var date $dataInicial
   * @access public
   */
  public $dataInicial = null;

  /**
   * 
   * @var date $dataFinal
   * @access public
   */
  public $dataFinal = null;

  /**
   * 
   * @param date $dataInicial
   * @param date $dataFinal
   * @access public
   */
  public function __construct($dataInicial, $dataFinal)
  {
    $this->dataInicial = $dataInicial;
    $this->dataFinal = $dataFinal;
  }

}

}
