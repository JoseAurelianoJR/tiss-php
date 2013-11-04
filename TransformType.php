<?php

class TransformType
{

  /**
   * 
   * @var string $XPath
   * @access public
   */
  public $XPath = null;

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
   * @param string $XPath
   * @param aanyXML $any
   * @param anyURI $Algorithm
   * @access public
   */
  public function __construct($XPath, $any, $Algorithm)
  {
    $this->XPath = $XPath;
    $this->any = $any;
    $this->Algorithm = $Algorithm;
  }

}
