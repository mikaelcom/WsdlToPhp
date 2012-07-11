<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedRtmListBackdoorStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedRtmListBackdoorStruct item
	 * @return OvhTypeMyArrayOfDedicatedRtmListBackdoorStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedRtmListBackdoorStruct item
	 * @return dedicatedRtmListBackdoorStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedRtmListBackdoorStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedRtmListBackdoorStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedRtmListBackdoorStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedRtmListBackdoorStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedRtmListBackdoorStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedRtmListBackdoorStruct
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