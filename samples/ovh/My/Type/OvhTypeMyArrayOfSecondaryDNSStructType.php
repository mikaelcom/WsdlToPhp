<?php
/**
 * Class file for OvhTypeMyArrayOfSecondaryDNSStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfSecondaryDNSStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfSecondaryDNSStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeSecondaryDNSStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeSecondaryDNSStruct item
	 * @return OvhTypeMyArrayOfSecondaryDNSStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param secondaryDNSStruct item
	 * @return secondaryDNSStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypesecondaryDNSStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeSecondaryDNSStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeSecondaryDNSStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeSecondaryDNSStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeSecondaryDNSStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeSecondaryDNSStruct
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