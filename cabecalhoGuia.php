<?php

if (!class_exists("cabecalhoGuia", false)) 
{
class cabecalhoGuia
{

  /**
   * 
   * @var string $guiaPrincipal
   * @access public
   */
  public $guiaPrincipal = null;

  /**
   * 
   * @param string $guiaPrincipal
   * @access public
   */
  public function __construct($guiaPrincipal)
  {
    $this->guiaPrincipal = $guiaPrincipal;
  }

}

}
