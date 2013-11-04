<?php

class RetrievalMethodType
{

  /**
   * 
   * @var TransformType[] $Transforms
   * @access public
   */
  public $Transforms = null;

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
   * @param anyURI $URI
   * @param anyURI $Type
   * @access public
   */
  public function __construct($Transforms, $URI, $Type)
  {
    $this->Transforms = $Transforms;
    $this->URI = $URI;
    $this->Type = $Type;
  }

}
