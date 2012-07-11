<?php
/**
 * Class file for XiFundamentalsTypeArrayOfIndustryGroup
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfIndustryGroup
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfIndustryGroup extends XiFundamentalsWsdlClass
{
	/**
	 * The IndustryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundamentalsTypeIndustryGroup
	 */
	public $IndustryGroup;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeIndustryGroup IndustryGroup
	 * @return XiFundamentalsTypeArrayOfIndustryGroup
	 */
	public function __construct($_IndustryGroup = null)
	{
		parent::__construct(array('IndustryGroup'=>$_IndustryGroup));
	}
	/**
	 * Set IndustryGroup
	 * @param IndustryGroup IndustryGroup
	 * @return IndustryGroup
	 */
	public function setIndustryGroup($_IndustryGroup)
	{
		return ($this->IndustryGroup = $_IndustryGroup);
	}
	/**
	 * Get IndustryGroup
	 * @return XiFundamentalsTypeIndustryGroup
	 */
	public function getIndustryGroup()
	{
		return $this->IndustryGroup;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeIndustryGroup
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeIndustryGroup
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeIndustryGroup
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeIndustryGroup
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeIndustryGroup
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IndustryGroup'
	 */
	public function getAttributeName()
	{
		return 'IndustryGroup';
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