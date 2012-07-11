<?php
/**
 * Class file for OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeRtmRaidPartitionVolumeMemberStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeRtmRaidPartitionVolumeMemberStruct item
	 * @return OvhTypeMyArrayOfRtmRaidPartitionVolumeMemberStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param rtmRaidPartitionVolumeMemberStruct item
	 * @return rtmRaidPartitionVolumeMemberStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypertmRaidPartitionVolumeMemberStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeRtmRaidPartitionVolumeMemberStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeRtmRaidPartitionVolumeMemberStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeRtmRaidPartitionVolumeMemberStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeRtmRaidPartitionVolumeMemberStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeRtmRaidPartitionVolumeMemberStruct
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