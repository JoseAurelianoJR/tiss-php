<?php

if (!class_exists("ct_guiaCancelamentoRecibo", false)) 
{
class ct_guiaCancelamentoRecibo
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
   * @var Ct_guiaCancelamentoReciboDadosGuia[] $guiasCanceladas
   * @access public
   */
  public $guiasCanceladas = null;

  /**
   * 
   * @param string $registroANS
   * @param ct_contratadoDados $dadosPrestador
   * @param Ct_guiaCancelamentoReciboDadosGuia[] $guiasCanceladas
   * @access public
   */
  public function __construct($registroANS, $dadosPrestador, $guiasCanceladas)
  {
    $this->registroANS = $registroANS;
    $this->dadosPrestador = $dadosPrestador;
    $this->guiasCanceladas = $guiasCanceladas;
  }

}

}
