<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsOwnersType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsOwnersType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsOwnersType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeSnapshotsOwnerType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSnapshotsOwnerType item
	 * @return AmazonEc2TypeDescribeSnapshotsOwnersType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeSnapshotsOwnerType item
	 * @return DescribeSnapshotsOwnerType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeSnapshotsOwnerType
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