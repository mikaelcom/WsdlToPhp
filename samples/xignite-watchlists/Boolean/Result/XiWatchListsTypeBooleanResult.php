<?php
/**
 * Class file for XiWatchListsTypeBooleanResult
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeBooleanResult
 * @date 08/07/2012
 */
class XiWatchListsTypeBooleanResult extends XiWatchListsTypeCommon
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Value;
	/**
	 * Constructor
	 * @param boolean Value
	 * @return XiWatchListsTypeBooleanResult
	 */
	public function __construct($_Value)
	{
		XiWatchListsWsdlClass::__construct(array('Value'=>$_Value));
	}
	/**
	 * Set Value
	 * @param boolean Value
	 * @return boolean
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return boolean
	 */
	public function getValue()
	{
		return $this->Value;
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