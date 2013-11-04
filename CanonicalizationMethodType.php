<?php

class CanonicalizationMethodType
{

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
   * @param aanyXML $any
   * @param anyURI $Algorithm
   * @access public
   */
  public function __construct($any, $Algorithm)
  {
    $this->any = $any;
    $this->Algorithm = $Algorithm;
  }

}
