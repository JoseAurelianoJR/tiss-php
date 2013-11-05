<?php

if (!class_exists("cto_recursoGlosaOdonto", false)) 
{
class cto_recursoGlosaOdonto
{

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var string $numeroGuiaPrestador
   * @access public
   */
  public $numeroGuiaPrestador = null;

  /**
   * 
   * @var string $nomeOperadora
   * @access public
   */
  public $nomeOperadora = null;

  /**
   * 
   * @var dm_objetoRecurso $objetoRecurso
   * @access public
   */
  public $objetoRecurso = null;

  /**
   * 
   * @var string $numeroGuiaOperadora
   * @access public
   */
  public $numeroGuiaOperadora = null;

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
   * @var date $dataRecurso
   * @access public
   */
  public $dataRecurso = null;

  /**
   * 
   * @param string $registroANS
   * @param string $numeroGuiaPrestador
   * @param string $nomeOperadora
   * @param dm_objetoRecurso $objetoRecurso
   * @param string $numeroGuiaOperadora
   * @param dadosContratado $dadosContratado
   * @param string $numeroLote
   * @param int $numeroProtocolo
   * @param opcaoRecurso $opcaoRecurso
   * @param date $dataRecurso
   * @access public
   */
  public function __construct($registroANS, $numeroGuiaPrestador, $nomeOperadora, $objetoRecurso, $numeroGuiaOperadora, $dadosContratado, $numeroLote, $numeroProtocolo, $opcaoRecurso, $dataRecurso)
  {
    $this->registroANS = $registroANS;
    $this->numeroGuiaPrestador = $numeroGuiaPrestador;
    $this->nomeOperadora = $nomeOperadora;
    $this->objetoRecurso = $objetoRecurso;
    $this->numeroGuiaOperadora = $numeroGuiaOperadora;
    $this->dadosContratado = $dadosContratado;
    $this->numeroLote = $numeroLote;
    $this->numeroProtocolo = $numeroProtocolo;
    $this->opcaoRecurso = $opcaoRecurso;
    $this->dataRecurso = $dataRecurso;
  }

}

}
