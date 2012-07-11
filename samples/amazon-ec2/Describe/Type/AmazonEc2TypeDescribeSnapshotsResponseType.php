<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The snapshotSet
	 * @var AmazonEc2TypeDescribeSnapshotsSetResponseType
	 */
	public $snapshotSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDescribeSnapshotsSetResponseType snapshotSet
	 * @return AmazonEc2TypeDescribeSnapshotsResponseType
	 */
	public function __construct($_requestId = null,$_snapshotSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'snapshotSet'=>$_snapshotSet));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set snapshotSet
	 * @param DescribeSnapshotsSetResponseType snapshotSet
	 * @return DescribeSnapshotsSetResponseType
	 */
	public function setSnapshotSet($_snapshotSet)
	{
		return ($this->snapshotSet = $_snapshotSet);
	}
	/**
	 * Get snapshotSet
	 * @return AmazonEc2TypeDescribeSnapshotsSetResponseType
	 */
	public function getSnapshotSet()
	{
		return $this->snapshotSet;
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