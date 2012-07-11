<?php
/**
 * Class file for XiRealTimeTypeArrayOfSearchResult
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfSearchResult
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfSearchResult extends XiRealTimeWsdlClass
{
	/**
	 * The SearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeSearchResult
	 */
	public $SearchResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeSearchResult SearchResult
	 * @return XiRealTimeTypeArrayOfSearchResult
	 */
	public function __construct($_SearchResult = null)
	{
		parent::__construct(array('SearchResult'=>$_SearchResult));
	}
	/**
	 * Set SearchResult
	 * @param SearchResult SearchResult
	 * @return SearchResult
	 */
	public function setSearchResult($_SearchResult)
	{
		return ($this->SearchResult = $_SearchResult);
	}
	/**
	 * Get SearchResult
	 * @return XiRealTimeTypeSearchResult
	 */
	public function getSearchResult()
	{
		return $this->SearchResult;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeSearchResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeSearchResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeSearchResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeSearchResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeSearchResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SearchResult'
	 */
	public function getAttributeName()
	{
		return 'SearchResult';
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