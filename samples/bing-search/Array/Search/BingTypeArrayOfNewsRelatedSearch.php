<?php
/**
 * Class file for BingTypeArrayOfNewsRelatedSearch
 * @date 02/07/2012
 */
/**
 * Class BingTypeArrayOfNewsRelatedSearch
 * @date 02/07/2012
 */
class BingTypeArrayOfNewsRelatedSearch extends BingWsdlClass
{
	/**
	 * The NewsRelatedSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var BingTypeNewsRelatedSearch
	 */
	public $NewsRelatedSearch;
	/**
	 * Constructor
	 * @param BingTypeNewsRelatedSearch NewsRelatedSearch
	 * @return BingTypeArrayOfNewsRelatedSearch
	 */
	public function __construct($_NewsRelatedSearch = null)
	{
		parent::__construct(array('NewsRelatedSearch'=>$_NewsRelatedSearch));
	}
	/**
	 * Set NewsRelatedSearch
	 * @param NewsRelatedSearch NewsRelatedSearch
	 * @return NewsRelatedSearch
	 */
	public function setNewsRelatedSearch($_NewsRelatedSearch)
	{
		return ($this->NewsRelatedSearch = $_NewsRelatedSearch);
	}
	/**
	 * Get NewsRelatedSearch
	 * @return BingTypeNewsRelatedSearch
	 */
	public function getNewsRelatedSearch()
	{
		return $this->NewsRelatedSearch;
	}
	/**
	 * Returns the current element
	 * @see BingWsdlClass::current()
	 * @return BingTypeNewsRelatedSearch
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BingWsdlClass::item()
	 * @param int
	 * @return BingTypeNewsRelatedSearch
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::first()
	 * @return BingTypeNewsRelatedSearch
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::last()
	 * @return BingTypeNewsRelatedSearch
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BingWsdlClass::offsetGet()
	 * @param int
	 * @return BingTypeNewsRelatedSearch
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'NewsRelatedSearch'
	 */
	public function getAttributeName()
	{
		return 'NewsRelatedSearch';
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