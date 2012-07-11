<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyNumberCityForZoneStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyNumberCityForZoneStruct item
	 * @return OvhTypeMyArrayOfTelephonyNumberCityForZoneStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyNumberCityForZoneStruct item
	 * @return telephonyNumberCityForZoneStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyNumberCityForZoneStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyNumberCityForZoneStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyNumberCityForZoneStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyNumberCityForZoneStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyNumberCityForZoneStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyNumberCityForZoneStruct
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