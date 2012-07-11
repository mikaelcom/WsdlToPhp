<?php
/**
 * Class file for OvhTypeMyArrayOfRtmHddPartitionStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfRtmHddPartitionStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfRtmHddPartitionStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeRtmHddPartitionStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeRtmHddPartitionStruct item
	 * @return OvhTypeMyArrayOfRtmHddPartitionStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param rtmHddPartitionStruct item
	 * @return rtmHddPartitionStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypertmHddPartitionStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeRtmHddPartitionStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeRtmHddPartitionStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeRtmHddPartitionStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeRtmHddPartitionStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeRtmHddPartitionStruct
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