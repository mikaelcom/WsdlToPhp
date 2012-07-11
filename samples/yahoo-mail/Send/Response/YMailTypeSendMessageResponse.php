<?php
/**
 * Class file for YMailTypeSendMessageResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSendMessageResponse
 * @date 02/07/2012
 */
class YMailTypeSendMessageResponse extends YMailWsdlClass
{
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $mid;
	/**
	 * Constructor
	 * @param string mid
	 * @return YMailTypeSendMessageResponse
	 */
	public function __construct($_mid = null)
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