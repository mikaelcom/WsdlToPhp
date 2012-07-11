<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * Constructor
	 * @param string snapshotId
	 * @return AmazonEc2TypeDescribeSnapshotsSetItemType
	 */
	public function __construct($_snapshotId = null)
	{
		parent::__construct(array('snapshotId'=>$_snapshotId));
	}
	/**
	 * Set snapshotId
	 * @param string snapshotId
	 * @return string
	 */
	public function setSnapshotId($_snapshotId)
	{
		return ($this->snapshotId = $_snapshotId);
	}
	/**
	 * Get snapshotId
	 * @return string
	 */
	public function getSnapshotId()
	{
		return $this->snapshotId;
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