<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyAliasToLinePossibilityPriceStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyAliasToLinePossibilityPriceStruct item
	 * @return OvhTypeMyArrayOfTelephonyAliasToLinePossibilityPriceStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyAliasToLinePossibilityPriceStruct item
	 * @return telephonyAliasToLinePossibilityPriceStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyAliasToLinePossibilityPriceStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyAliasToLinePossibilityPriceStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyAliasToLinePossibilityPriceStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyAliasToLinePossibilityPriceStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyAliasToLinePossibilityPriceStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyAliasToLinePossibilityPriceStruct
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