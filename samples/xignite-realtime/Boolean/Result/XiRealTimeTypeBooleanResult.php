<?php
/**
 * Class file for XiRealTimeTypeBooleanResult
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeBooleanResult
 * @date 08/07/2012
 */
class XiRealTimeTypeBooleanResult extends XiRealTimeTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
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
	 * @param string Symbol
	 * @param boolean Value
	 * @return XiRealTimeTypeBooleanResult
	 */
	public function __construct($_Symbol = null,$_Value)
	{
		XiRealTimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'Value'=>$_Value));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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