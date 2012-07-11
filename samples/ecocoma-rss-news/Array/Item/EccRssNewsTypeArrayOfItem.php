<?php
/**
 * Class file for EccRssNewsTypeArrayOfItem
 * @date 03/07/2012
 */
/**
 * Class EccRssNewsTypeArrayOfItem
 * @date 03/07/2012
 */
class EccRssNewsTypeArrayOfItem extends EccRssNewsWsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccRssNewsTypeItem
	 */
	public $item;
	/**
	 * Constructor
	 * @param EccRssNewsTypeItem item
	 * @return EccRssNewsTypeArrayOfItem
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param item item
	 * @return item
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return EccRssNewsTypeitem
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see EccRssNewsWsdlClass::current()
	 * @return EccRssNewsTypeItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccRssNewsWsdlClass::item()
	 * @param int
	 * @return EccRssNewsTypeItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccRssNewsWsdlClass::first()
	 * @return EccRssNewsTypeItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccRssNewsWsdlClass::last()
	 * @return EccRssNewsTypeItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccRssNewsWsdlClass::offsetGet()
	 * @param int
	 * @return EccRssNewsTypeItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
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