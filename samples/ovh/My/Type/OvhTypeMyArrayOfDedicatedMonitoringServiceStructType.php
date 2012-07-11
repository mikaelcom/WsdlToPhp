<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedMonitoringServiceStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedMonitoringServiceStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedMonitoringServiceStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedMonitoringServiceStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedMonitoringServiceStruct item
	 * @return OvhTypeMyArrayOfDedicatedMonitoringServiceStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedMonitoringServiceStruct item
	 * @return dedicatedMonitoringServiceStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedMonitoringServiceStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedMonitoringServiceStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedMonitoringServiceStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedMonitoringServiceStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedMonitoringServiceStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedMonitoringServiceStruct
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