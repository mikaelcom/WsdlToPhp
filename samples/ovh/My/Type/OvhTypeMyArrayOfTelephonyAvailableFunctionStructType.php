<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyAvailableFunctionStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyAvailableFunctionStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyAvailableFunctionStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyAvailableFunctionStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyAvailableFunctionStruct item
	 * @return OvhTypeMyArrayOfTelephonyAvailableFunctionStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyAvailableFunctionStruct item
	 * @return telephonyAvailableFunctionStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyAvailableFunctionStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyAvailableFunctionStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyAvailableFunctionStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyAvailableFunctionStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyAvailableFunctionStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyAvailableFunctionStruct
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