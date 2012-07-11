<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyReversmentsSummationStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyReversmentsSummationStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyReversmentsSummationStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyReversmentsSummationStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyReversmentsSummationStruct item
	 * @return OvhTypeMyArrayOfTelephonyReversmentsSummationStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyReversmentsSummationStruct item
	 * @return telephonyReversmentsSummationStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyReversmentsSummationStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyReversmentsSummationStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyReversmentsSummationStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyReversmentsSummationStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyReversmentsSummationStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyReversmentsSummationStruct
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