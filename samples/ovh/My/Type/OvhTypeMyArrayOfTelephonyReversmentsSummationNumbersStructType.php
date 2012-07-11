<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyReversmentsSummationNumbersStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyReversmentsSummationNumbersStruct item
	 * @return OvhTypeMyArrayOfTelephonyReversmentsSummationNumbersStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyReversmentsSummationNumbersStruct item
	 * @return telephonyReversmentsSummationNumbersStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyReversmentsSummationNumbersStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyReversmentsSummationNumbersStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyReversmentsSummationNumbersStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyReversmentsSummationNumbersStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyReversmentsSummationNumbersStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyReversmentsSummationNumbersStruct
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