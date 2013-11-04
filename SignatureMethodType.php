<?php

class SignatureMethodType
{

  /**
   * 
   * @var int $HMACOutputLength
   * @access public
   */
  public $HMACOutputLength = null;

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any = null;

  /**
   * 
   * @var anyURI $Algorithm
   * @access public
   */
  public $Algorithm = null;

  /**
   * 
   * @param int $HMACOutputLength
   * @param aanyXML $any
   * @param anyURI $Algorithm
   * @access public
   */
  public function __construct($HMACOutputLength, $any, $Algorithm)
  {
    $this->HMACOutputLength = $HMACOutputLength;
    $this->any = $any;
    $this->Algorithm = $Algorithm;
  }

}
