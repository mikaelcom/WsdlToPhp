<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedAllowedDistributionBitFormatStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedAllowedDistributionBitFormatStruct item
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedAllowedDistributionBitFormatStruct item
	 * @return dedicatedAllowedDistributionBitFormatStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedAllowedDistributionBitFormatStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedAllowedDistributionBitFormatStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionBitFormatStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedAllowedDistributionBitFormatStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedAllowedDistributionBitFormatStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionBitFormatStruct
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