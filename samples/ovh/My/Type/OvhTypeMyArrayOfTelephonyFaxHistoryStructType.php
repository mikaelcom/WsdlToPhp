<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyFaxHistoryStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyFaxHistoryStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyFaxHistoryStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyFaxHistoryStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFaxHistoryStruct item
	 * @return OvhTypeMyArrayOfTelephonyFaxHistoryStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyFaxHistoryStruct item
	 * @return telephonyFaxHistoryStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyFaxHistoryStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyFaxHistoryStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyFaxHistoryStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyFaxHistoryStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyFaxHistoryStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyFaxHistoryStruct
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