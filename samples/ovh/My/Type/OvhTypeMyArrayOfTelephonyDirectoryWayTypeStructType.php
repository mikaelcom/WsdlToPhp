<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyDirectoryWayTypeStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyDirectoryWayTypeStruct item
	 * @return OvhTypeMyArrayOfTelephonyDirectoryWayTypeStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyDirectoryWayTypeStruct item
	 * @return telephonyDirectoryWayTypeStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyDirectoryWayTypeStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyDirectoryWayTypeStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyDirectoryWayTypeStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyDirectoryWayTypeStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyDirectoryWayTypeStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyDirectoryWayTypeStruct
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