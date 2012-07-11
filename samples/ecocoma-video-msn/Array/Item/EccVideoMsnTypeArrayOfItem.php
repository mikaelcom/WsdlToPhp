<?php
/**
 * Class file for EccVideoMsnTypeArrayOfItem
 * @date 03/07/2012
 */
/**
 * Class EccVideoMsnTypeArrayOfItem
 * @date 03/07/2012
 */
class EccVideoMsnTypeArrayOfItem extends EccVideoMsnWsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccVideoMsnTypeItem
	 */
	public $item;
	/**
	 * Constructor
	 * @param EccVideoMsnTypeItem item
	 * @return EccVideoMsnTypeArrayOfItem
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
	 * @return EccVideoMsnTypeitem
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see EccVideoMsnWsdlClass::current()
	 * @return EccVideoMsnTypeItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccVideoMsnWsdlClass::item()
	 * @param int
	 * @return EccVideoMsnTypeItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccVideoMsnWsdlClass::first()
	 * @return EccVideoMsnTypeItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccVideoMsnWsdlClass::last()
	 * @return EccVideoMsnTypeItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccVideoMsnWsdlClass::offsetGet()
	 * @param int
	 * @return EccVideoMsnTypeItem
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