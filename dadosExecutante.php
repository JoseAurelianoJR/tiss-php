<?php

if (!class_exists("dadosExecutante", false)) 
{
class dadosExecutante
{

  /**
   * 
   * @var ct_contratadoDados $contratadoExecutante
   * @access public
   */
  public $contratadoExecutante = null;

  /**
   * 
   * @var string $CNES
   * @access public
   */
  public $CNES = null;

  /**
   * 
   * @param ct_contratadoDados $contratadoExecutante
   * @param string $CNES
   * @access public
   */
  public function __construct($contratadoExecutante, $CNES)
  {
    $this->contratadoExecutante = $contratadoExecutante;
    $this->CNES = $CNES;
  }

}

}
