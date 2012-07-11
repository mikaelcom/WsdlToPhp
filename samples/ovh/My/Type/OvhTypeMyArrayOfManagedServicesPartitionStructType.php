<?php
/**
 * Class file for OvhTypeMyArrayOfManagedServicesPartitionStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfManagedServicesPartitionStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfManagedServicesPartitionStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeManagedServicesPartitionStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeManagedServicesPartitionStruct item
	 * @return OvhTypeMyArrayOfManagedServicesPartitionStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param managedServicesPartitionStruct item
	 * @return managedServicesPartitionStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypemanagedServicesPartitionStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeManagedServicesPartitionStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeManagedServicesPartitionStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeManagedServicesPartitionStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeManagedServicesPartitionStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeManagedServicesPartitionStruct
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