<?php

class SignedInfoType
{

  /**
   * 
   * @var CanonicalizationMethodType $CanonicalizationMethod
   * @access public
   */
  public $CanonicalizationMethod = null;

  /**
   * 
   * @var SignatureMethodType $SignatureMethod
   * @access public
   */
  public $SignatureMethod = null;

  /**
   * 
   * @var ReferenceType $Reference
   * @access public
   */
  public $Reference = null;

  /**
   * 
   * @var ID $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @param CanonicalizationMethodType $CanonicalizationMethod
   * @param SignatureMethodType $SignatureMethod
   * @param ReferenceType $Reference
   * @param ID $Id
   * @access public
   */
  public function __construct($CanonicalizationMethod, $SignatureMethod, $Reference, $Id)
  {
    $this->CanonicalizationMethod = $CanonicalizationMethod;
    $this->SignatureMethod = $SignatureMethod;
    $this->Reference = $Reference;
    $this->Id = $Id;
  }

}
