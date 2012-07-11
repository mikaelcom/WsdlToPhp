<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedServerPartioningDetailStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedServerPartioningDetailStruct item
	 * @return OvhTypeMyArrayOfDedicatedServerPartioningDetailStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedServerPartioningDetailStruct item
	 * @return dedicatedServerPartioningDetailStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedServerPartioningDetailStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedServerPartioningDetailStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedServerPartioningDetailStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedServerPartioningDetailStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedServerPartioningDetailStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedServerPartioningDetailStruct
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