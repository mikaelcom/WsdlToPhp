<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedAllowedDistributionLanguageStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedAllowedDistributionLanguageStruct item
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedAllowedDistributionLanguageStruct item
	 * @return dedicatedAllowedDistributionLanguageStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedAllowedDistributionLanguageStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedAllowedDistributionLanguageStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionLanguageStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedAllowedDistributionLanguageStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedAllowedDistributionLanguageStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedAllowedDistributionLanguageStruct
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