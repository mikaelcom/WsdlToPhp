<?php
/**
 * Class file for XiHousingTypeRecord
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeRecord
 * @date 08/07/2012
 */
class XiHousingTypeRecord extends XiHousingWsdlClass
{
	/**
	 * The ValueType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeValueTypes
	 */
	public $ValueType;
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
	 * @param XiHousingTypeValueTypes ValueType
	 * @param double Value
	 * @return XiHousingTypeRecord
	 */
	public function __construct($_ValueType,$_Value)
	{
		parent::__construct(array('ValueType'=>$_ValueType,'Value'=>$_Value));
	}
	/**
	 * Set ValueType
	 * @param ValueTypes ValueType
	 * @return ValueTypes
	 */
	public function setValueType($_ValueType)
	{
		return ($this->ValueType = XiHousingTypeValueTypes::valueIsValid($_ValueType)?$_ValueType:null);
	}
	/**
	 * Get ValueType
	 * @return XiHousingTypeValueTypes
	 */
	public function getValueType()
	{
		return $this->ValueType;
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