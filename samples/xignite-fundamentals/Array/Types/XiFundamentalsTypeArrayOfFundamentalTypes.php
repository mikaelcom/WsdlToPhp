<?php
/**
 * Class file for XiFundamentalsTypeArrayOfFundamentalTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfFundamentalTypes
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfFundamentalTypes extends XiFundamentalsWsdlClass
{
	/**
	 * The FundamentalTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XiFundamentalsTypeFundamentalTypes
	 */
	public $FundamentalTypes;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamentalTypes FundamentalTypes
	 * @return XiFundamentalsTypeArrayOfFundamentalTypes
	 */
	public function __construct($_FundamentalTypes = null)
	{
		parent::__construct(array('FundamentalTypes'=>$_FundamentalTypes));
	}
	/**
	 * Set FundamentalTypes
	 * @param FundamentalTypes FundamentalTypes
	 * @return FundamentalTypes
	 */
	public function setFundamentalTypes($_FundamentalTypes)
	{
		return ($this->FundamentalTypes = $_FundamentalTypes);
	}
	/**
	 * Get FundamentalTypes
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function getFundamentalTypes()
	{
		return $this->FundamentalTypes;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see XiFundamentalsWsdlClass::add()
	 * @param XiFundamentalsTypeFundamentalTypes
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return XiFundamentalsTypeFundamentalTypes::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'FundamentalTypes'
	 */
	public function getAttributeName()
	{
		return 'FundamentalTypes';
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