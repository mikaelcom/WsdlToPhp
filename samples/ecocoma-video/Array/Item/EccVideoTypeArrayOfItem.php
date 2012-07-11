<?php
/**
 * Class file for EccVideoTypeArrayOfItem
 * @date 03/07/2012
 */
/**
 * Class EccVideoTypeArrayOfItem
 * @date 03/07/2012
 */
class EccVideoTypeArrayOfItem extends EccVideoWsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccVideoTypeItem
	 */
	public $item;
	/**
	 * Constructor
	 * @param EccVideoTypeItem item
	 * @return EccVideoTypeArrayOfItem
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
	 * @return EccVideoTypeitem
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see EccVideoWsdlClass::current()
	 * @return EccVideoTypeItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccVideoWsdlClass::item()
	 * @param int
	 * @return EccVideoTypeItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccVideoWsdlClass::first()
	 * @return EccVideoTypeItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccVideoWsdlClass::last()
	 * @return EccVideoTypeItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccVideoWsdlClass::offsetGet()
	 * @param int
	 * @return EccVideoTypeItem
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