<?php
/**
 * Class file for OvhTypeMyArrayOfIPForUDPServerListStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfIPForUDPServerListStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfIPForUDPServerListStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeIPForUDPServerListStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeIPForUDPServerListStruct item
	 * @return OvhTypeMyArrayOfIPForUDPServerListStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param IPForUDPServerListStruct item
	 * @return IPForUDPServerListStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypeIPForUDPServerListStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeIPForUDPServerListStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeIPForUDPServerListStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeIPForUDPServerListStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeIPForUDPServerListStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeIPForUDPServerListStruct
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