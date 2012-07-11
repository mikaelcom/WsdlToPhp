<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedRipeGetIpStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedRipeGetIpStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedRipeGetIpStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedRipeGetIpStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedRipeGetIpStruct item
	 * @return OvhTypeMyArrayOfDedicatedRipeGetIpStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedRipeGetIpStruct item
	 * @return dedicatedRipeGetIpStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedRipeGetIpStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedRipeGetIpStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedRipeGetIpStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedRipeGetIpStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedRipeGetIpStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedRipeGetIpStruct
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