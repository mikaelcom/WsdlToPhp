<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonySipDomainStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonySipDomainStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonySipDomainStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonySipDomainStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySipDomainStruct item
	 * @return OvhTypeMyArrayOfTelephonySipDomainStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonySipDomainStruct item
	 * @return telephonySipDomainStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonySipDomainStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonySipDomainStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonySipDomainStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonySipDomainStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonySipDomainStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonySipDomainStruct
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