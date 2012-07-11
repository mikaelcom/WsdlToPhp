<?php
/**
 * Class file for YMailTypeSaveRawMessageResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSaveRawMessageResponse
 * @date 02/07/2012
 */
class YMailTypeSaveRawMessageResponse extends YMailWsdlClass
{
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $mid;
	/**
	 * Constructor
	 * @param string mid
	 * @return YMailTypeSaveRawMessageResponse
	 */
	public function __construct($_mid)
	{
		parent::__construct(array('mid'=>$_mid));
	}
	/**
	 * Set mid
	 * @param string mid
	 * @return string
	 */
	public function setMid($_mid)
	{
		return ($this->mid = $_mid);
	}
	/**
	 * Get mid
	 * @return string
	 */
	public function getMid()
	{
		return $this->mid;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>