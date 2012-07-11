<?php
/**
 * Class file for XiFundamentalsTypeListExtendedValues
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeListExtendedValues
 * @date 08/07/2012
 */
class XiFundamentalsTypeListExtendedValues extends XiFundamentalsWsdlClass
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
	 * Constructor
	 * @param XiFundamentalsTypeExtendedValueTypes ExtendedValueType
	 * @return XiFundamentalsTypeListExtendedValues
	 */
	public function __construct($_ExtendedValueType)
	{
		parent::__construct(array('ExtendedValueType'=>$_ExtendedValueType));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>