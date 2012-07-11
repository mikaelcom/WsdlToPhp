<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeNumericResult
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeNumericResult
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeNumericResult extends XiGlobalrealtimeoptionsTypeCommon
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * Constructor
	 * @param double Value
	 * @return XiGlobalrealtimeoptionsTypeNumericResult
	 */
	public function __construct($_Value)
	{
		XiGlobalrealtimeoptionsWsdlClass::__construct(array('Value'=>$_Value));
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
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