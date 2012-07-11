<?php
/**
 * Class file for BingTypeArrayOfSearchOption
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfSearchOption
 * @date 02/07/2012
 */
class BingTypeArrayOfSearchOption extends BingWsdlClass
{
	/**
	 * The SearchOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeSearchOption
	 */
	public $SearchOption;
	/**
	 * Constructor
	 * @param BingTypeSearchOption SearchOption
	 * @return BingTypeArrayOfSearchOption
	 */
	public function __construct($_SearchOption = null)
	{
		parent::__construct(array('SearchOption'=>$_SearchOption));
	}
	/**
	 * Set SearchOption
	 * @param SearchOption SearchOption
	 * @return SearchOption
	 */
	public function setSearchOption($_SearchOption)
	{
		return ($this->SearchOption = $_SearchOption);
	}
	/**
	 * Get SearchOption
	 * @return BingTypeSearchOption
	 */
	public function getSearchOption()
	{
		return $this->SearchOption;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeSearchOption
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeSearchOption
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeSearchOption
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeSearchOption
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeSearchOption
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Add element to array
	 * @see BingWsdlClass::add()
	 * @param BingTypeSearchOption
	 * @return bool true|false
	 */
	public function add($_item)
	{
		return BingTypeSearchOption::valueIsValid($_item)?parent::add($_item):false;
	}
	/**
	 * Returns the attribute name
	 * @return string 'SearchOption'
	 */
	public function getAttributeName()
	{
		return 'SearchOption';
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