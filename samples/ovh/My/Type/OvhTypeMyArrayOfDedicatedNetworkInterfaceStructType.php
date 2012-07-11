<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedNetworkInterfaceStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedNetworkInterfaceStruct item
	 * @return OvhTypeMyArrayOfDedicatedNetworkInterfaceStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedNetworkInterfaceStruct item
	 * @return dedicatedNetworkInterfaceStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedNetworkInterfaceStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedNetworkInterfaceStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedNetworkInterfaceStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedNetworkInterfaceStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedNetworkInterfaceStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedNetworkInterfaceStruct
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