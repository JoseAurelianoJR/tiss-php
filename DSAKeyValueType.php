<?php

class DSAKeyValueType
{

  /**
   * 
   * @var base64Binary $P
   * @access public
   */
  public $P = null;

  /**
   * 
   * @var base64Binary $Q
   * @access public
   */
  public $Q = null;

  /**
   * 
   * @var base64Binary $G
   * @access public
   */
  public $G = null;

  /**
   * 
   * @var base64Binary $Y
   * @access public
   */
  public $Y = null;

  /**
   * 
   * @var base64Binary $J
   * @access public
   */
  public $J = null;

  /**
   * 
   * @var base64Binary $Seed
   * @access public
   */
  public $Seed = null;

  /**
   * 
   * @var base64Binary $PgenCounter
   * @access public
   */
  public $PgenCounter = null;

  /**
   * 
   * @param base64Binary $P
   * @param base64Binary $Q
   * @param base64Binary $G
   * @param base64Binary $Y
   * @param base64Binary $J
   * @param base64Binary $Seed
   * @param base64Binary $PgenCounter
   * @access public
   */
  public function __construct($P, $Q, $G, $Y, $J, $Seed, $PgenCounter)
  {
    $this->P = $P;
    $this->Q = $Q;
    $this->G = $G;
    $this->Y = $Y;
    $this->J = $J;
    $this->Seed = $Seed;
    $this->PgenCounter = $PgenCounter;
  }

}
