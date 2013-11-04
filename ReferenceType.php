<?php

class ReferenceType
{

  /**
   * 
   * @var TransformType[] $Transforms
   * @access public
   */
  public $Transforms = null;

  /**
   * 
   * @var DigestMethodType $DigestMethod
   * @access public
   */
  public $DigestMethod = null;

  /**
   * 
   * @var base64Binary $DigestValue
   * @access public
   */
  public $DigestValue = null;

  /**
   * 
   * @var ID $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @var anyURI $URI
   * @access public
   */
  public $URI = null;

  /**
   * 
   * @var anyURI $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @param TransformType[] $Transforms
   * @param DigestMethodType $DigestMethod
   * @param base64Binary $DigestValue
   * @param ID $Id
   * @param anyURI $URI
   * @param anyURI $Type
   * @access public
   */
  public function __construct($Transforms, $DigestMethod, $DigestValue, $Id, $URI, $Type)
  {
    $this->Transforms = $Transforms;
    $this->DigestMethod = $DigestMethod;
    $this->DigestValue = $DigestValue;
    $this->Id = $Id;
    $this->URI = $URI;
    $this->Type = $Type;
  }

}
