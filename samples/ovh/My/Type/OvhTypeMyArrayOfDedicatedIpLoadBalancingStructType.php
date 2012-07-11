<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedIpLoadBalancingStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedIpLoadBalancingStruct item
	 * @return OvhTypeMyArrayOfDedicatedIpLoadBalancingStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedIpLoadBalancingStruct item
	 * @return dedicatedIpLoadBalancingStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedIpLoadBalancingStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedIpLoadBalancingStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedIpLoadBalancingStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedIpLoadBalancingStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedIpLoadBalancingStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedIpLoadBalancingStruct
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