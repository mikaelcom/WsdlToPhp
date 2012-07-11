<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsRestorableBySetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsRestorableBySetType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsRestorableBySetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeDescribeSnapshotsRestorableByType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeSnapshotsRestorableByType item
	 * @return AmazonEc2TypeDescribeSnapshotsRestorableBySetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param DescribeSnapshotsRestorableByType item
	 * @return DescribeSnapshotsRestorableByType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeDescribeSnapshotsRestorableByType
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