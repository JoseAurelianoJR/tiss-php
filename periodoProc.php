<?php

if (!class_exists("periodoProc", false)) 
{
class periodoProc
{

  /**
   * 
   * @var date $datainicio
   * @access public
   */
  public $datainicio = null;

  /**
   * 
   * @var date $datafim
   * @access public
   */
  public $datafim = null;

  /**
   * 
   * @param date $datainicio
   * @param date $datafim
   * @access public
   */
  public function __construct($datainicio, $datafim)
  {
    $this->datainicio = $datainicio;
    $this->datafim = $datafim;
  }

}

}
