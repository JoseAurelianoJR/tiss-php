<?php

class cabecalhoTransacao
{

  /**
   * 
   * @var identificacaoTransacao $identificacaoTransacao
   * @access public
   */
  public $identificacaoTransacao = null;

  /**
   * 
   * @var dm_tipoGlosa $falhaNegocio
   * @access public
   */
  public $falhaNegocio = null;

  /**
   * 
   * @var origem $origem
   * @access public
   */
  public $origem = null;

  /**
   * 
   * @var destino $destino
   * @access public
   */
  public $destino = null;

  /**
   * 
   * @var dm_versao $versaoPadrao
   * @access public
   */
  public $versaoPadrao = null;

  /**
   * 
   * @var assinaturaDigital $assinaturaDigital
   * @access public
   */
  public $assinaturaDigital = null;

  /**
   * 
   * @var ct_loginSenha $loginSenhaPrestador
   * @access public
   */
  public $loginSenhaPrestador = null;

  /**
   * 
   * @param identificacaoTransacao $identificacaoTransacao
   * @param dm_tipoGlosa $falhaNegocio
   * @param origem $origem
   * @param destino $destino
   * @param dm_versao $versaoPadrao
   * @param assinaturaDigital $assinaturaDigital
   * @param ct_loginSenha $loginSenhaPrestador
   * @access public
   */
  public function __construct($identificacaoTransacao, $falhaNegocio, $origem, $destino, $versaoPadrao, $assinaturaDigital, $loginSenhaPrestador)
  {
    $this->identificacaoTransacao = $identificacaoTransacao;
    $this->falhaNegocio = $falhaNegocio;
    $this->origem = $origem;
    $this->destino = $destino;
    $this->versaoPadrao = $versaoPadrao;
    $this->assinaturaDigital = $assinaturaDigital;
    $this->loginSenhaPrestador = $loginSenhaPrestador;
  }

}
