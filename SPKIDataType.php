<?php

class SPKIDataType
{

  /**
   * 
   * @var base64Binary $SPKISexp
   * @access public
   */
  public $SPKISexp = null;

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any = null;

  /**
   * 
   * @param base64Binary $SPKISexp
   * @param aanyXML $any
   * @access public
   */
  public function __construct($SPKISexp, $any)
  {
    $this->SPKISexp = $SPKISexp;
    $this->any = $any;
  }

}
