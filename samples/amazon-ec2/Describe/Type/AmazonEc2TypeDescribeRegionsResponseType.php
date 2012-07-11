<?php
/**
 * Class file for AmazonEc2TypeDescribeRegionsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeRegionsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeRegionsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The regionInfo
	 * @var AmazonEc2TypeRegionSetType
	 */
	public $regionInfo;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeRegionSetType regionInfo
	 * @return AmazonEc2TypeDescribeRegionsResponseType
	 */
	public function __construct($_requestId = null,$_regionInfo = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'regionInfo'=>$_regionInfo));
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
	 * Set regionInfo
	 * @param RegionSetType regionInfo
	 * @return RegionSetType
	 */
	public function setRegionInfo($_regionInfo)
	{
		return ($this->regionInfo = $_regionInfo);
	}
	/**
	 * Get regionInfo
	 * @return AmazonEc2TypeRegionSetType
	 */
	public function getRegionInfo()
	{
		return $this->regionInfo;
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