<?php

class SignatureValueType
{

  /**
   * 
   * @var base64Binary $_
   * @access public
   */
  public $_ = null;

  /**
   * 
   * @var ID $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @param base64Binary $_
   * @param ID $Id
   * @access public
   */
  public function __construct($_, $Id)
  {
    $this->_ = $_;
    $this->Id = $Id;
  }

}
