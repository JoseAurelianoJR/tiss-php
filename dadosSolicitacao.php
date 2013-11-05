<?php

if (!class_exists("dadosSolicitacao", false)) 
{
class dadosSolicitacao
{

  /**
   * 
   * @var date $dataSolicitacao
   * @access public
   */
  public $dataSolicitacao = null;

  /**
   * 
   * @var dm_caraterAtendimento $caraterAtendimento
   * @access public
   */
  public $caraterAtendimento = null;

  /**
   * 
   * @var string $indicacaoClinica
   * @access public
   */
  public $indicacaoClinica = null;

  /**
   * 
   * @param date $dataSolicitacao
   * @param dm_caraterAtendimento $caraterAtendimento
   * @param string $indicacaoClinica
   * @access public
   */
  public function __construct($dataSolicitacao, $caraterAtendimento, $indicacaoClinica)
  {
    $this->dataSolicitacao = $dataSolicitacao;
    $this->caraterAtendimento = $caraterAtendimento;
    $this->indicacaoClinica = $indicacaoClinica;
  }

}

}
