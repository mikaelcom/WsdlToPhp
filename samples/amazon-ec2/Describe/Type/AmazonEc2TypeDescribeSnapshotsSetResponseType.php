<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsSetResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsSetResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsSetResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeSnapshotsSetItemResponseType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSnapshotsSetItemResponseType item
	 * @return AmazonEc2TypeDescribeSnapshotsSetResponseType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeSnapshotsSetItemResponseType item
	 * @return DescribeSnapshotsSetItemResponseType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeSnapshotsSetItemResponseType
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