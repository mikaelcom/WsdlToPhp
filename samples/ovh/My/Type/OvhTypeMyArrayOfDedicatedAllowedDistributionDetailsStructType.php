<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedAllowedDistributionDetailsStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedAllowedDistributionDetailsStruct item
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedAllowedDistributionDetailsStruct item
	 * @return dedicatedAllowedDistributionDetailsStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedAllowedDistributionDetailsStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedAllowedDistributionDetailsStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionDetailsStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedAllowedDistributionDetailsStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedAllowedDistributionDetailsStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionDetailsStruct
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