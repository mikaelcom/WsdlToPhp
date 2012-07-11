<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeSnapshotsSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSnapshotsSetItemType item
	 * @return AmazonEc2TypeDescribeSnapshotsSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeSnapshotsSetItemType item
	 * @return DescribeSnapshotsSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeSnapshotsSetItemType
	 */
	public function getItem()
	{
		return $this->item;
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