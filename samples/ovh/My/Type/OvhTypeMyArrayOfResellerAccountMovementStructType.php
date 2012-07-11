<?php
/**
 * Class file for OvhTypeMyArrayOfResellerAccountMovementStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfResellerAccountMovementStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfResellerAccountMovementStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeResellerAccountMovementStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeResellerAccountMovementStruct item
	 * @return OvhTypeMyArrayOfResellerAccountMovementStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param resellerAccountMovementStruct item
	 * @return resellerAccountMovementStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTyperesellerAccountMovementStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeResellerAccountMovementStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeResellerAccountMovementStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeResellerAccountMovementStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeResellerAccountMovementStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeResellerAccountMovementStruct
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