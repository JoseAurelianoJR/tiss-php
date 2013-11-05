<?php

if (!class_exists("opcaoRecursoGuia", false)) 
{
class opcaoRecursoGuia
{

  /**
   * 
   * @var itensGuia $itensGuia
   * @access public
   */
  public $itensGuia = null;

  /**
   * 
   * @var recursoGuia $recursoGuia
   * @access public
   */
  public $recursoGuia = null;

  /**
   * 
   * @param itensGuia $itensGuia
   * @param recursoGuia $recursoGuia
   * @access public
   */
  public function __construct($itensGuia, $recursoGuia)
  {
    $this->itensGuia = $itensGuia;
    $this->recursoGuia = $recursoGuia;
  }

}

}
