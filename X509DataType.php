<?php

class X509DataType
{

  /**
   * 
   * @var base64Binary $X509CRL
   * @access public
   */
  public $X509CRL = null;

  /**
   * 
   * @var base64Binary $X509Certificate
   * @access public
   */
  public $X509Certificate = null;

  /**
   * 
   * @var base64Binary $X509SKI
   * @access public
   */
  public $X509SKI = null;

  /**
   * 
   * @var string $X509SubjectName
   * @access public
   */
  public $X509SubjectName = null;

  /**
   * 
   * @var X509IssuerSerialType $X509IssuerSerial
   * @access public
   */
  public $X509IssuerSerial = null;

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any = null;

  /**
   * 
   * @param base64Binary $X509CRL
   * @param base64Binary $X509Certificate
   * @param base64Binary $X509SKI
   * @param string $X509SubjectName
   * @param X509IssuerSerialType $X509IssuerSerial
   * @param aanyXML $any
   * @access public
   */
  public function __construct($X509CRL, $X509Certificate, $X509SKI, $X509SubjectName, $X509IssuerSerial, $any)
  {
    $this->X509CRL = $X509CRL;
    $this->X509Certificate = $X509Certificate;
    $this->X509SKI = $X509SKI;
    $this->X509SubjectName = $X509SubjectName;
    $this->X509IssuerSerial = $X509IssuerSerial;
    $this->any = $any;
  }

}
