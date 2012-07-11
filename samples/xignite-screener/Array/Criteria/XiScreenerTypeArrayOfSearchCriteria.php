<?php
/**
 * Class file for XiScreenerTypeArrayOfSearchCriteria
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeArrayOfSearchCriteria
 * @date 08/07/2012
 */
class XiScreenerTypeArrayOfSearchCriteria extends XiScreenerWsdlClass
{
	/**
	 * The SearchCriteria
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiScreenerTypeSearchCriteria
	 */
	public $SearchCriteria;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchCriteria SearchCriteria
	 * @return XiScreenerTypeArrayOfSearchCriteria
	 */
	public function __construct($_SearchCriteria = null)
	{
		parent::__construct(array('SearchCriteria'=>$_SearchCriteria));
	}
	/**
	 * Set SearchCriteria
	 * @param SearchCriteria SearchCriteria
	 * @return SearchCriteria
	 */
	public function setSearchCriteria($_SearchCriteria)
	{
		return ($this->SearchCriteria = $_SearchCriteria);
	}
	/**
	 * Get SearchCriteria
	 * @return XiScreenerTypeSearchCriteria
	 */
	public function getSearchCriteria()
	{
		return $this->SearchCriteria;
	}
	/**
	 * Returns the current element
	 * @see XiScreenerWsdlClass::current()
	 * @return XiScreenerTypeSearchCriteria
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiScreenerWsdlClass::item()
	 * @param int
	 * @return XiScreenerTypeSearchCriteria
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::first()
	 * @return XiScreenerTypeSearchCriteria
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::last()
	 * @return XiScreenerTypeSearchCriteria
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiScreenerWsdlClass::offsetGet()
	 * @param int
	 * @return XiScreenerTypeSearchCriteria
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SearchCriteria'
	 */
	public function getAttributeName()
	{
		return 'SearchCriteria';
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