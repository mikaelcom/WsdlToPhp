<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedAllowedDistributionMoreStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedAllowedDistributionMoreStruct item
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedAllowedDistributionMoreStruct item
	 * @return dedicatedAllowedDistributionMoreStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedAllowedDistributionMoreStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedAllowedDistributionMoreStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionMoreStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedAllowedDistributionMoreStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedAllowedDistributionMoreStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionMoreStruct
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