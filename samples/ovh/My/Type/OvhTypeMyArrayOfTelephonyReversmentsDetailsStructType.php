<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyReversmentsDetailsStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyReversmentsDetailsStruct item
	 * @return OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyReversmentsDetailsStruct item
	 * @return telephonyReversmentsDetailsStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyReversmentsDetailsStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyReversmentsDetailsStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyReversmentsDetailsStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyReversmentsDetailsStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyReversmentsDetailsStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyReversmentsDetailsStruct
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