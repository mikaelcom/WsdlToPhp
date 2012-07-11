<?php
/**
 * Class file for XiWatchListsTypeArrayOfWatchListItem
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeArrayOfWatchListItem
 * @date 08/07/2012
 */
class XiWatchListsTypeArrayOfWatchListItem extends XiWatchListsWsdlClass
{
	/**
	 * The WatchListItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiWatchListsTypeWatchListItem
	 */
	public $WatchListItem;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchListItem WatchListItem
	 * @return XiWatchListsTypeArrayOfWatchListItem
	 */
	public function __construct($_WatchListItem = null)
	{
		parent::__construct(array('WatchListItem'=>$_WatchListItem));
	}
	/**
	 * Set WatchListItem
	 * @param WatchListItem WatchListItem
	 * @return WatchListItem
	 */
	public function setWatchListItem($_WatchListItem)
	{
		return ($this->WatchListItem = $_WatchListItem);
	}
	/**
	 * Get WatchListItem
	 * @return XiWatchListsTypeWatchListItem
	 */
	public function getWatchListItem()
	{
		return $this->WatchListItem;
	}
	/**
	 * Returns the current element
	 * @see XiWatchListsWsdlClass::current()
	 * @return XiWatchListsTypeWatchListItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiWatchListsWsdlClass::item()
	 * @param int
	 * @return XiWatchListsTypeWatchListItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiWatchListsWsdlClass::first()
	 * @return XiWatchListsTypeWatchListItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiWatchListsWsdlClass::last()
	 * @return XiWatchListsTypeWatchListItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiWatchListsWsdlClass::offsetGet()
	 * @param int
	 * @return XiWatchListsTypeWatchListItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'WatchListItem'
	 */
	public function getAttributeName()
	{
		return 'WatchListItem';
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