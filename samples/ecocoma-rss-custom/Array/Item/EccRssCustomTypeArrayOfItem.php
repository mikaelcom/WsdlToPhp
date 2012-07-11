<?php
/**
 * Class file for EccRssCustomTypeArrayOfItem
 * @date 03/07/2012
 */
/**
 * Class EccRssCustomTypeArrayOfItem
 * @date 03/07/2012
 */
class EccRssCustomTypeArrayOfItem extends EccRssCustomWsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccRssCustomTypeItem
	 */
	public $item;
	/**
	 * Constructor
	 * @param EccRssCustomTypeItem item
	 * @return EccRssCustomTypeArrayOfItem
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
	 * @return EccRssCustomTypeitem
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see EccRssCustomWsdlClass::current()
	 * @return EccRssCustomTypeItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccRssCustomWsdlClass::item()
	 * @param int
	 * @return EccRssCustomTypeItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccRssCustomWsdlClass::first()
	 * @return EccRssCustomTypeItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccRssCustomWsdlClass::last()
	 * @return EccRssCustomTypeItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccRssCustomWsdlClass::offsetGet()
	 * @param int
	 * @return EccRssCustomTypeItem
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