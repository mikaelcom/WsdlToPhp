<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFreefaxToVoicefaxCheckStruct item
	 * @return OvhTypeMyArrayOfTelephonyFreefaxToVoicefaxCheckStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyFreefaxToVoicefaxCheckStruct item
	 * @return telephonyFreefaxToVoicefaxCheckStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyFreefaxToVoicefaxCheckStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
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