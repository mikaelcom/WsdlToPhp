<?php
/**
 * Class file for AmazonEc2TypeDescribeAvailabilityZonesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAvailabilityZonesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAvailabilityZonesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The availabilityZoneInfo
	 * @var AmazonEc2TypeAvailabilityZoneSetType
	 */
	public $availabilityZoneInfo;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeAvailabilityZoneSetType availabilityZoneInfo
	 * @return AmazonEc2TypeDescribeAvailabilityZonesResponseType
	 */
	public function __construct($_requestId = null,$_availabilityZoneInfo = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'availabilityZoneInfo'=>$_availabilityZoneInfo));
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
	 * Set availabilityZoneInfo
	 * @param AvailabilityZoneSetType availabilityZoneInfo
	 * @return AvailabilityZoneSetType
	 */
	public function setAvailabilityZoneInfo($_availabilityZoneInfo)
	{
		return ($this->availabilityZoneInfo = $_availabilityZoneInfo);
	}
	/**
	 * Get availabilityZoneInfo
	 * @return AmazonEc2TypeAvailabilityZoneSetType
	 */
	public function getAvailabilityZoneInfo()
	{
		return $this->availabilityZoneInfo;
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