<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyNumberZoneAndPrefixStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyNumberZoneAndPrefixStruct item
	 * @return OvhTypeMyArrayOfTelephonyNumberZoneAndPrefixStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyNumberZoneAndPrefixStruct item
	 * @return telephonyNumberZoneAndPrefixStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyNumberZoneAndPrefixStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyNumberZoneAndPrefixStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyNumberZoneAndPrefixStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyNumberZoneAndPrefixStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyNumberZoneAndPrefixStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyNumberZoneAndPrefixStruct
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