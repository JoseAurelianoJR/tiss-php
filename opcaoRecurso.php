<?php

if (!class_exists("opcaoRecurso", false)) 
{
class opcaoRecurso
{

  /**
   * 
   * @var recursoGuia $recursoGuia
   * @access public
   */
  public $recursoGuia = null;

  /**
   * 
   * @var recursoProtocolo $recursoProtocolo
   * @access public
   */
  public $recursoProtocolo = null;

  /**
   * 
   * @param recursoGuia $recursoGuia
   * @param recursoProtocolo $recursoProtocolo
   * @access public
   */
  public function __construct($recursoGuia, $recursoProtocolo)
  {
    $this->recursoGuia = $recursoGuia;
    $this->recursoProtocolo = $recursoProtocolo;
  }

}

}
