<?php
/**
 * Class file for EccVideoAolTypeArrayOfItem
 * @date 03/07/2012
 */
/**
 * Class EccVideoAolTypeArrayOfItem
 * @date 03/07/2012
 */
class EccVideoAolTypeArrayOfItem extends EccVideoAolWsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var EccVideoAolTypeItem
	 */
	public $item;
	/**
	 * Constructor
	 * @param EccVideoAolTypeItem item
	 * @return EccVideoAolTypeArrayOfItem
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
	 * @return EccVideoAolTypeitem
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see EccVideoAolWsdlClass::current()
	 * @return EccVideoAolTypeItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see EccVideoAolWsdlClass::item()
	 * @param int
	 * @return EccVideoAolTypeItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see EccVideoAolWsdlClass::first()
	 * @return EccVideoAolTypeItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see EccVideoAolWsdlClass::last()
	 * @return EccVideoAolTypeItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see EccVideoAolWsdlClass::offsetGet()
	 * @param int
	 * @return EccVideoAolTypeItem
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