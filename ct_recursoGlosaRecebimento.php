<?php

if (!class_exists("ct_recursoGlosaRecebimento", false)) 
{
class ct_recursoGlosaRecebimento
{

  /**
   * 
   * @var string $nrProtocoloRecursoGlosa
   * @access public
   */
  public $nrProtocoloRecursoGlosa = null;

  /**
   * 
   * @var date $dataEnvioRecurso
   * @access public
   */
  public $dataEnvioRecurso = null;

  /**
   * 
   * @var date $dataRecebimentoRecurso
   * @access public
   */
  public $dataRecebimentoRecurso = null;

  /**
   * 
   * @var string $numeroLote
   * @access public
   */
  public $numeroLote = null;

  /**
   * 
   * @var string $registroANS
   * @access public
   */
  public $registroANS = null;

  /**
   * 
   * @var ct_contratadoDados $dadosPrestador
   * @access public
   */
  public $dadosPrestador = null;

  /**
   * 
   * @var string $nrProtocoloRecursado
   * @access public
   */
  public $nrProtocoloRecursado = null;

  /**
   * 
   * @var recursoProtocolo $recursoProtocolo
   * @access public
   */
  public $recursoProtocolo = null;

  /**
   * 
   * @var int $qtGuiasRecurso
   * @access public
   */
  public $qtGuiasRecurso = null;

  /**
   * 
   * @var guiasRecurso $guiasRecurso
   * @access public
   */
  public $guiasRecurso = null;

  /**
   * 
   * @var string $observacao
   * @access public
   */
  public $observacao = null;

  /**
   * 
   * @var float $valorTotalRecursado
   * @access public
   */
  public $valorTotalRecursado = null;

  /**
   * 
   * @param string $nrProtocoloRecursoGlosa
   * @param date $dataEnvioRecurso
   * @param date $dataRecebimentoRecurso
   * @param string $numeroLote
   * @param string $registroANS
   * @param ct_contratadoDados $dadosPrestador
   * @param string $nrProtocoloRecursado
   * @param recursoProtocolo $recursoProtocolo
   * @param int $qtGuiasRecurso
   * @param guiasRecurso $guiasRecurso
   * @param string $observacao
   * @param float $valorTotalRecursado
   * @access public
   */
  public function __construct($nrProtocoloRecursoGlosa, $dataEnvioRecurso, $dataRecebimentoRecurso, $numeroLote, $registroANS, $dadosPrestador, $nrProtocoloRecursado, $recursoProtocolo, $qtGuiasRecurso, $guiasRecurso, $observacao, $valorTotalRecursado)
  {
    $this->nrProtocoloRecursoGlosa = $nrProtocoloRecursoGlosa;
    $this->dataEnvioRecurso = $dataEnvioRecurso;
    $this->dataRecebimentoRecurso = $dataRecebimentoRecurso;
    $this->numeroLote = $numeroLote;
    $this->registroANS = $registroANS;
    $this->dadosPrestador = $dadosPrestador;
    $this->nrProtocoloRecursado = $nrProtocoloRecursado;
    $this->recursoProtocolo = $recursoProtocolo;
    $this->qtGuiasRecurso = $qtGuiasRecurso;
    $this->guiasRecurso = $guiasRecurso;
    $this->observacao = $observacao;
    $this->valorTotalRecursado = $valorTotalRecursado;
  }

}

}
