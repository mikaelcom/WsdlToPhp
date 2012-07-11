<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyPhonebookSharePeerStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyPhonebookSharePeerStruct item
	 * @return OvhTypeMyArrayOfTelephonyPhonebookSharePeerStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyPhonebookSharePeerStruct item
	 * @return telephonyPhonebookSharePeerStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyPhonebookSharePeerStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyPhonebookSharePeerStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyPhonebookSharePeerStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyPhonebookSharePeerStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyPhonebookSharePeerStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyPhonebookSharePeerStruct
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