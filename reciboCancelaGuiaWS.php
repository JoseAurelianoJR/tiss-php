<?php

if (!class_exists("reciboCancelaGuiaWS", false)) 
{
class reciboCancelaGuiaWS
{

  /**
   * 
   * @var cabecalhoTransacao $cabecalho
   * @access public
   */
  public $cabecalho = null;

  /**
   * 
   * @var ct_reciboCancelaGuia $reciboCancelaGuia
   * @access public
   */
  public $reciboCancelaGuia = null;

  /**
   * 
   * @var string $hash
   * @access public
   */
  public $hash = null;

  /**
   * 
   * @param cabecalhoTransacao $cabecalho
   * @param ct_reciboCancelaGuia $reciboCancelaGuia
   * @param string $hash
   * @access public
   */
  public function __construct($cabecalho, $reciboCancelaGuia, $hash)
  {
    $this->cabecalho = $cabecalho;
    $this->reciboCancelaGuia = $reciboCancelaGuia;
    $this->hash = $hash;
  }

}

}
