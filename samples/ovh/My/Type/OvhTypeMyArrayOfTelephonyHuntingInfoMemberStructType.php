<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyHuntingInfoMemberStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyHuntingInfoMemberStruct item
	 * @return OvhTypeMyArrayOfTelephonyHuntingInfoMemberStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyHuntingInfoMemberStruct item
	 * @return telephonyHuntingInfoMemberStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyHuntingInfoMemberStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyHuntingInfoMemberStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyHuntingInfoMemberStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyHuntingInfoMemberStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyHuntingInfoMemberStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyHuntingInfoMemberStruct
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