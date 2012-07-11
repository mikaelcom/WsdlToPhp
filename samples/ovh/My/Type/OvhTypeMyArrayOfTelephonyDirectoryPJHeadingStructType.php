<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyDirectoryPJHeadingStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyDirectoryPJHeadingStruct item
	 * @return OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyDirectoryPJHeadingStruct item
	 * @return telephonyDirectoryPJHeadingStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyDirectoryPJHeadingStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyDirectoryPJHeadingStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyDirectoryPJHeadingStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyDirectoryPJHeadingStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyDirectoryPJHeadingStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyDirectoryPJHeadingStruct
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