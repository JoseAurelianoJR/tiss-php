<?php

class SignatureType
{

  /**
   * 
   * @var SignedInfoType $SignedInfo
   * @access public
   */
  public $SignedInfo = null;

  /**
   * 
   * @var SignatureValueType $SignatureValue
   * @access public
   */
  public $SignatureValue = null;

  /**
   * 
   * @var KeyInfoType $KeyInfo
   * @access public
   */
  public $KeyInfo = null;

  /**
   * 
   * @var ObjectType $Object
   * @access public
   */
  public $Object = null;

  /**
   * 
   * @var ID $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @param SignedInfoType $SignedInfo
   * @param SignatureValueType $SignatureValue
   * @param KeyInfoType $KeyInfo
   * @param ObjectType $Object
   * @param ID $Id
   * @access public
   */
  public function __construct($SignedInfo, $SignatureValue, $KeyInfo, $Object, $Id)
  {
    $this->SignedInfo = $SignedInfo;
    $this->SignatureValue = $SignatureValue;
    $this->KeyInfo = $KeyInfo;
    $this->Object = $Object;
    $this->Id = $Id;
  }

}
