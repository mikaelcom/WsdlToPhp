<?php
/**
 * Class file for XiFundamentalsTypeArrayOfIndustry
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfIndustry
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfIndustry extends XiFundamentalsWsdlClass
{
	/**
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundamentalsTypeIndustry
	 */
	public $Industry;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeIndustry Industry
	 * @return XiFundamentalsTypeArrayOfIndustry
	 */
	public function __construct($_Industry = null)
	{
		parent::__construct(array('Industry'=>$_Industry));
	}
	/**
	 * Set Industry
	 * @param Industry Industry
	 * @return Industry
	 */
	public function setIndustry($_Industry)
	{
		return ($this->Industry = $_Industry);
	}
	/**
	 * Get Industry
	 * @return XiFundamentalsTypeIndustry
	 */
	public function getIndustry()
	{
		return $this->Industry;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeIndustry
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeIndustry
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeIndustry
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeIndustry
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeIndustry
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Industry'
	 */
	public function getAttributeName()
	{
		return 'Industry';
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