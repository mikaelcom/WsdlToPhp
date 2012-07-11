<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyPhonebookContactStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyPhonebookContactStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyPhonebookContactStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyPhonebookContactStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyPhonebookContactStruct item
	 * @return OvhTypeMyArrayOfTelephonyPhonebookContactStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyPhonebookContactStruct item
	 * @return telephonyPhonebookContactStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyPhonebookContactStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyPhonebookContactStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyPhonebookContactStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyPhonebookContactStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyPhonebookContactStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyPhonebookContactStruct
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