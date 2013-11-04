<?php

class X509IssuerSerialType
{

  /**
   * 
   * @var string $X509IssuerName
   * @access public
   */
  public $X509IssuerName = null;

  /**
   * 
   * @var int $X509SerialNumber
   * @access public
   */
  public $X509SerialNumber = null;

  /**
   * 
   * @param string $X509IssuerName
   * @param int $X509SerialNumber
   * @access public
   */
  public function __construct($X509IssuerName, $X509SerialNumber)
  {
    $this->X509IssuerName = $X509IssuerName;
    $this->X509SerialNumber = $X509SerialNumber;
  }

}
