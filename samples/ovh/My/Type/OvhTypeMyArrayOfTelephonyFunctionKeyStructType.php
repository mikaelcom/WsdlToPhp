<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyFunctionKeyStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyFunctionKeyStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyFunctionKeyStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyFunctionKeyStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFunctionKeyStruct item
	 * @return OvhTypeMyArrayOfTelephonyFunctionKeyStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyFunctionKeyStruct item
	 * @return telephonyFunctionKeyStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyFunctionKeyStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyFunctionKeyStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyFunctionKeyStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyFunctionKeyStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyFunctionKeyStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyFunctionKeyStruct
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