<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyAbbreviatedNumberStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyAbbreviatedNumberStruct item
	 * @return OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyAbbreviatedNumberStruct item
	 * @return telephonyAbbreviatedNumberStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyAbbreviatedNumberStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyAbbreviatedNumberStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyAbbreviatedNumberStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyAbbreviatedNumberStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyAbbreviatedNumberStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyAbbreviatedNumberStruct
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