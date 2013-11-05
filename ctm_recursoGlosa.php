<?php

if (!class_exists("ctm_recursoGlosa", false)) 
{
class ctm_recursoGlosa
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var string $nomeOperadora
   * @access public
   */
  public $nomeOperadora = null;

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @var string $numeroGuiaOperadora
   * @access public
   */
  public $numeroGuiaOperadora = null;

  /**
   * 
   * @var dm_objetoRecurso $objetoRecurso
   * @access public
   */
  public $objetoRecurso = null;

  /**
   * 
   * @var dadosContratado $dadosContratado
   * @access public
   */
  public $dadosContratado = null;

  /**
   * 
   * @var string $numeroLote
   * @access public
   */
  public $numeroLote = null;

  /**
   * 
   * @var int $numeroProtocolo
   * @access public
   */
  public $numeroProtocolo = null;

  /**
   * 
   * @var opcaoRecurso $opcaoRecurso
   * @access public
   */
  public $opcaoRecurso = null;

  /**
   * 
   * @var float $valorTotalRecursado
   * @access public
   */
  public $valorTotalRecursado = null;

  /**
   * 
   * @var date $dataRecurso
   * @access public
   */
  public $dataRecurso = null;

  /**
   * 
   * @param string $registroANS
   * @param string $nomeOperadora
   * @param string $numeroGuiaPrestador
   * @param string $numeroGuiaOperadora
   * @param dm_objetoRecurso $objetoRecurso
   * @param dadosContratado $dadosContratado
   * @param string $numeroLote
   * @param int $numeroProtocolo
   * @param opcaoRecurso $opcaoRecurso
   * @param float $valorTotalRecursado
   * @param date $dataRecurso
   * @access public
   */
  public function __construct($registroANS, $nomeOperadora, $numeroGuiaPrestador, $numeroGuiaOperadora, $objetoRecurso, $dadosContratado, $numeroLote, $numeroProtocolo, $opcaoRecurso, $valorTotalRecursado, $dataRecurso)
  {
    $this->registroANS = $registroANS;
    $this->nomeOperadora = $nomeOperadora;
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->objetoRecurso = $objetoRecurso;
    $this->dadosContratado = $dadosContratado;
    $this->numeroLote = $numeroLote;
    $this->numeroProtocolo = $numeroProtocolo;
    $this->opcaoRecurso = $opcaoRecurso;
    $this->valorTotalRecursado = $valorTotalRecursado;
    $this->dataRecurso = $dataRecurso;
  }

}

}
