<?php
/**
 * Class file for OvhTypeMyArrayOfAllSecondaryDNSStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfAllSecondaryDNSStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfAllSecondaryDNSStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeAllSecondaryDNSStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeAllSecondaryDNSStruct item
	 * @return OvhTypeMyArrayOfAllSecondaryDNSStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param allSecondaryDNSStruct item
	 * @return allSecondaryDNSStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypeallSecondaryDNSStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeAllSecondaryDNSStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeAllSecondaryDNSStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeAllSecondaryDNSStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeAllSecondaryDNSStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeAllSecondaryDNSStruct
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