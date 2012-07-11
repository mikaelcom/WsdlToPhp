<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyHuntingGenericScreenStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyHuntingGenericScreenStruct item
	 * @return OvhTypeMyArrayOfTelephonyHuntingGenericScreenStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyHuntingGenericScreenStruct item
	 * @return telephonyHuntingGenericScreenStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyHuntingGenericScreenStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyHuntingGenericScreenStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyHuntingGenericScreenStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyHuntingGenericScreenStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyHuntingGenericScreenStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyHuntingGenericScreenStruct
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