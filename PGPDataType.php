<?php

class PGPDataType
{

  /**
   * 
   * @var base64Binary $PGPKeyPacket
   * @access public
   */
  public $PGPKeyPacket = null;

  /**
   * 
   * @var base64Binary $PGPKeyID
   * @access public
   */
  public $PGPKeyID = null;

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any = null;

  /**
   * 
   * @param base64Binary $PGPKeyPacket
   * @param base64Binary $PGPKeyID
   * @param aanyXML $any
   * @access public
   */
  public function __construct($PGPKeyPacket, $PGPKeyID, $any)
  {
    $this->PGPKeyPacket = $PGPKeyPacket;
    $this->PGPKeyID = $PGPKeyID;
    $this->any = $any;
  }

}
