<?php
/**
 * Class file for OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeRtmRaidPartitionVolumeStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeRtmRaidPartitionVolumeStruct item
	 * @return OvhTypeMyArrayOfRtmRaidPartitionVolumeStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param rtmRaidPartitionVolumeStruct item
	 * @return rtmRaidPartitionVolumeStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypertmRaidPartitionVolumeStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeRtmRaidPartitionVolumeStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeRtmRaidPartitionVolumeStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeRtmRaidPartitionVolumeStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeRtmRaidPartitionVolumeStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeRtmRaidPartitionVolumeStruct
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