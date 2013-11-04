<?php

class ObjectType
{

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any = null;

  /**
   * 
   * @var ID $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @var string $MimeType
   * @access public
   */
  public $MimeType = null;

  /**
   * 
   * @var anyURI $Encoding
   * @access public
   */
  public $Encoding = null;

  /**
   * 
   * @param aanyXML $any
   * @param ID $Id
   * @param string $MimeType
   * @param anyURI $Encoding
   * @access public
   */
  public function __construct($any, $Id, $MimeType, $Encoding)
  {
    $this->any = $any;
    $this->Id = $Id;
    $this->MimeType = $MimeType;
    $this->Encoding = $Encoding;
  }

}
