<?php
/**
 * Class file for XiGlobalFundamentalsTypeArrayOfGlobalFundamentalTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeArrayOfGlobalFundamentalTypes
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeArrayOfGlobalFundamentalTypes extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The GlobalFundamentalTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public $GlobalFundamentalTypes;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeGlobalFundamentalTypes GlobalFundamentalTypes
	 * @return XiGlobalFundamentalsTypeArrayOfGlobalFundamentalTypes
	 */
	public function __construct($_GlobalFundamentalTypes = null)
	{
		parent::__construct(array('GlobalFundamentalTypes'=>$_GlobalFundamentalTypes));
	}
	/**
	 * Set GlobalFundamentalTypes
	 * @param GlobalFundamentalTypes GlobalFundamentalTypes
	 * @return GlobalFundamentalTypes
	 */
	public function setGlobalFundamentalTypes($_GlobalFundamentalTypes)
	{
		return ($this->GlobalFundamentalTypes = $_GlobalFundamentalTypes);
	}
	/**
	 * Get GlobalFundamentalTypes
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function getGlobalFundamentalTypes()
	{
		return $this->GlobalFundamentalTypes;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalFundamentalsWsdlClass::current()
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::first()
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::last()
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see XiGlobalFundamentalsWsdlClass::add()
	 * @param XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return XiGlobalFundamentalsTypeGlobalFundamentalTypes::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'GlobalFundamentalTypes'
	 */
	public function getAttributeName()
	{
		return 'GlobalFundamentalTypes';
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