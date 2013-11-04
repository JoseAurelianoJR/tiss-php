<?php

class identificacaoTransacao
{

  /**
   * 
   * @var dm_tipoTransacao $tipoTransacao
   * @access public
   */
  public $tipoTransacao = null;

  /**
   * 
   * @var string $sequencialTransacao
   * @access public
   */
  public $sequencialTransacao = null;

  /**
   * 
   * @var date $dataRegistroTransacao
   * @access public
   */
  public $dataRegistroTransacao = null;

  /**
   * 
   * @var time $horaRegistroTransacao
   * @access public
   */
  public $horaRegistroTransacao = null;

  /**
   * 
   * @param dm_tipoTransacao $tipoTransacao
   * @param string $sequencialTransacao
   * @param date $dataRegistroTransacao
   * @param time $horaRegistroTransacao
   * @access public
   */
  public function __construct($tipoTransacao, $sequencialTransacao, $dataRegistroTransacao, $horaRegistroTransacao)
  {
    $this->tipoTransacao = $tipoTransacao;
    $this->sequencialTransacao = $sequencialTransacao;
    $this->dataRegistroTransacao = $dataRegistroTransacao;
    $this->horaRegistroTransacao = $horaRegistroTransacao;
  }

}
