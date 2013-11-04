<?php

class KeyInfoType
{

  /**
   * 
   * @var KeyValueType $KeyValue
   * @access public
   */
  public $KeyValue = null;

  /**
   * 
   * @var RetrievalMethodType $RetrievalMethod
   * @access public
   */
  public $RetrievalMethod = null;

  /**
   * 
   * @var X509DataType $X509Data
   * @access public
   */
  public $X509Data = null;

  /**
   * 
   * @var string $KeyName
   * @access public
   */
  public $KeyName = null;

  /**
   * 
   * @var string $MgmtData
   * @access public
   */
  public $MgmtData = null;

  /**
   * 
   * @var PGPDataType $PGPData
   * @access public
   */
  public $PGPData = null;

  /**
   * 
   * @var SPKIDataType $SPKIData
   * @access public
   */
  public $SPKIData = null;

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
   * @param KeyValueType $KeyValue
   * @param RetrievalMethodType $RetrievalMethod
   * @param X509DataType $X509Data
   * @param string $KeyName
   * @param string $MgmtData
   * @param PGPDataType $PGPData
   * @param SPKIDataType $SPKIData
   * @param aanyXML $any
   * @param ID $Id
   * @access public
   */
  public function __construct($KeyValue, $RetrievalMethod, $X509Data, $KeyName, $MgmtData, $PGPData, $SPKIData, $any, $Id)
  {
    $this->KeyValue = $KeyValue;
    $this->RetrievalMethod = $RetrievalMethod;
    $this->X509Data = $X509Data;
    $this->KeyName = $KeyName;
    $this->MgmtData = $MgmtData;
    $this->PGPData = $PGPData;
    $this->SPKIData = $SPKIData;
    $this->any = $any;
    $this->Id = $Id;
  }

}
