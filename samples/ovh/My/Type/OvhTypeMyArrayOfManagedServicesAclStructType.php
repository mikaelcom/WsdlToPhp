<?php
/**
 * Class file for OvhTypeMyArrayOfManagedServicesAclStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfManagedServicesAclStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfManagedServicesAclStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeManagedServicesAclStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeManagedServicesAclStruct item
	 * @return OvhTypeMyArrayOfManagedServicesAclStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param managedServicesAclStruct item
	 * @return managedServicesAclStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypemanagedServicesAclStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeManagedServicesAclStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeManagedServicesAclStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeManagedServicesAclStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeManagedServicesAclStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeManagedServicesAclStruct
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