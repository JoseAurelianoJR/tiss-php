<?php

class KeyValueType
{

  /**
   * 
   * @var DSAKeyValueType $DSAKeyValue
   * @access public
   */
  public $DSAKeyValue = null;

  /**
   * 
   * @var RSAKeyValueType $RSAKeyValue
   * @access public
   */
  public $RSAKeyValue = null;

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any = null;

  /**
   * 
   * @param DSAKeyValueType $DSAKeyValue
   * @param RSAKeyValueType $RSAKeyValue
   * @param aanyXML $any
   * @access public
   */
  public function __construct($DSAKeyValue, $RSAKeyValue, $any)
  {
    $this->DSAKeyValue = $DSAKeyValue;
    $this->RSAKeyValue = $RSAKeyValue;
    $this->any = $any;
  }

}
