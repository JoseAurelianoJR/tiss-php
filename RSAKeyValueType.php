<?php

class RSAKeyValueType
{

  /**
   * 
   * @var base64Binary $Modulus
   * @access public
   */
  public $Modulus = null;

  /**
   * 
   * @var base64Binary $Exponent
   * @access public
   */
  public $Exponent = null;

  /**
   * 
   * @param base64Binary $Modulus
   * @param base64Binary $Exponent
   * @access public
   */
  public function __construct($Modulus, $Exponent)
  {
    $this->Modulus = $Modulus;
    $this->Exponent = $Exponent;
  }

}
