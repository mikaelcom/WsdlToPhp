<?php
/**
 * Class file for XiWatchListsTypeArrayOfWatchList
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeArrayOfWatchList
 * @date 08/07/2012
 */
class XiWatchListsTypeArrayOfWatchList extends XiWatchListsWsdlClass
{
	/**
	 * The WatchList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiWatchListsTypeWatchList
	 */
	public $WatchList;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList WatchList
	 * @return XiWatchListsTypeArrayOfWatchList
	 */
	public function __construct($_WatchList = null)
	{
		parent::__construct(array('WatchList'=>$_WatchList));
	}
	/**
	 * Set WatchList
	 * @param WatchList WatchList
	 * @return WatchList
	 */
	public function setWatchList($_WatchList)
	{
		return ($this->WatchList = $_WatchList);
	}
	/**
	 * Get WatchList
	 * @return XiWatchListsTypeWatchList
	 */
	public function getWatchList()
	{
		return $this->WatchList;
	}
	/**
	 * Returns the current element
	 * @see XiWatchListsWsdlClass::current()
	 * @return XiWatchListsTypeWatchList
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiWatchListsWsdlClass::item()
	 * @param int
	 * @return XiWatchListsTypeWatchList
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiWatchListsWsdlClass::first()
	 * @return XiWatchListsTypeWatchList
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiWatchListsWsdlClass::last()
	 * @return XiWatchListsTypeWatchList
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiWatchListsWsdlClass::offsetGet()
	 * @param int
	 * @return XiWatchListsTypeWatchList
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'WatchList'
	 */
	public function getAttributeName()
	{
		return 'WatchList';
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