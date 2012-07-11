<?php
/**
 * Class file for XiFundamentalsTypeExtendedValue
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeExtendedValue
 * @date 08/07/2012
 */
class XiFundamentalsTypeExtendedValue extends XiFundamentalsTypeCommon
{
	/**
	 * The ExtendedValueType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeExtendedValueTypes
	 */
	public $ExtendedValueType;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeExtendedValueTypes ExtendedValueType
	 * @param string Value
	 * @param string Description
	 * @return XiFundamentalsTypeExtendedValue
	 */
	public function __construct($_ExtendedValueType,$_Value = null,$_Description = null)
	{
		XiFundamentalsWsdlClass::__construct(array('ExtendedValueType'=>$_ExtendedValueType,'Value'=>$_Value,'Description'=>$_Description));
	}
	/**
	 * Set ExtendedValueType
	 * @param ExtendedValueTypes ExtendedValueType
	 * @return ExtendedValueTypes
	 */
	public function setExtendedValueType($_ExtendedValueType)
	{
		return ($this->ExtendedValueType = XiFundamentalsTypeExtendedValueTypes::valueIsValid($_ExtendedValueType)?$_ExtendedValueType:null);
	}
	/**
	 * Get ExtendedValueType
	 * @return XiFundamentalsTypeExtendedValueTypes
	 */
	public function getExtendedValueType()
	{
		return $this->ExtendedValueType;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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