<?php
/**
 * Class file for XiScreenerTypeArrayOfSearchValue
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeArrayOfSearchValue
 * @date 08/07/2012
 */
class XiScreenerTypeArrayOfSearchValue extends XiScreenerWsdlClass
{
	/**
	 * The SearchValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiScreenerTypeSearchValue
	 */
	public $SearchValue;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchValue SearchValue
	 * @return XiScreenerTypeArrayOfSearchValue
	 */
	public function __construct($_SearchValue = null)
	{
		parent::__construct(array('SearchValue'=>$_SearchValue));
	}
	/**
	 * Set SearchValue
	 * @param SearchValue SearchValue
	 * @return SearchValue
	 */
	public function setSearchValue($_SearchValue)
	{
		return ($this->SearchValue = $_SearchValue);
	}
	/**
	 * Get SearchValue
	 * @return XiScreenerTypeSearchValue
	 */
	public function getSearchValue()
	{
		return $this->SearchValue;
	}
	/**
	 * Returns the current element
	 * @see XiScreenerWsdlClass::current()
	 * @return XiScreenerTypeSearchValue
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiScreenerWsdlClass::item()
	 * @param int
	 * @return XiScreenerTypeSearchValue
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::first()
	 * @return XiScreenerTypeSearchValue
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::last()
	 * @return XiScreenerTypeSearchValue
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::offsetGet()
	 * @param int
	 * @return XiScreenerTypeSearchValue
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SearchValue'
	 */
	public function getAttributeName()
	{
		return 'SearchValue';
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