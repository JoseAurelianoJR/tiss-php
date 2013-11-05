<?php

if (!class_exists("ct_protocoloRecebimento", false)) 
{
class ct_protocoloRecebimento
{

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
   * @var string $numeroLote
   * @access public
   */
  public $numeroLote = null;

  /**
   * 
   * @var date $dataEnvioLote
   * @access public
   */
  public $dataEnvioLote = null;

  /**
   * 
   * @var ct_protocoloDetalhe $detalheProtocolo
   * @access public
   */
  public $detalheProtocolo = null;

  /**
   * 
   * @param string $registroANS
   * @param ct_contratadoDados $dadosPrestador
   * @param string $numeroLote
   * @param date $dataEnvioLote
   * @param ct_protocoloDetalhe $detalheProtocolo
   * @access public
   */
  public function __construct($registroANS, $dadosPrestador, $numeroLote, $dataEnvioLote, $detalheProtocolo)
  {
    $this->registroANS = $registroANS;
    $this->dadosPrestador = $dadosPrestador;
    $this->numeroLote = $numeroLote;
    $this->dataEnvioLote = $dataEnvioLote;
    $this->detalheProtocolo = $detalheProtocolo;
  }

}

}
