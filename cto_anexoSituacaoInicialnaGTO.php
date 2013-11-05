<?php

if (!class_exists("cto_anexoSituacaoInicialnaGTO", false)) 
{
class cto_anexoSituacaoInicialnaGTO
{

  /**
   * 
   * @var string $numeroGuiaAnexo
   * @access public
   */
  public $numeroGuiaAnexo = null;

  /**
   * 
   * @var string $numeroGuiaReferenciada
   * @access public
   */
  public $numeroGuiaReferenciada = null;

  /**
   * 
   * @var string $numeroGuiaOperadora
   * @access public
   */
  public $numeroGuiaOperadora = null;

  /**
   * 
   * @var ct_situacaoInicial $ct_situacaoInicial
   * @access public
   */
  public $ct_situacaoInicial = null;

  /**
   * 
   * @param string $numeroGuiaAnexo
   * @param string $numeroGuiaReferenciada
   * @param string $numeroGuiaOperadora
   * @param ct_situacaoInicial $ct_situacaoInicial
   * @access public
   */
  public function __construct($numeroGuiaAnexo, $numeroGuiaReferenciada, $numeroGuiaOperadora, $ct_situacaoInicial)
  {
    $this->numeroGuiaAnexo = $numeroGuiaAnexo;
    $this->numeroGuiaReferenciada = $numeroGuiaReferenciada;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->ct_situacaoInicial = $ct_situacaoInicial;
  }

}

}
