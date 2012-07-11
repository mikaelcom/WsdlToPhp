<?php
/**
 * Class file for AmazonEc2TypeDescribeSecurityGroupsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSecurityGroupsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSecurityGroupsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The securityGroupInfo
	 * @var AmazonEc2TypeSecurityGroupSetType
	 */
	public $securityGroupInfo;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeSecurityGroupSetType securityGroupInfo
	 * @return AmazonEc2TypeDescribeSecurityGroupsResponseType
	 */
	public function __construct($_requestId = null,$_securityGroupInfo = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'securityGroupInfo'=>$_securityGroupInfo));
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
	 * Set securityGroupInfo
	 * @param SecurityGroupSetType securityGroupInfo
	 * @return SecurityGroupSetType
	 */
	public function setSecurityGroupInfo($_securityGroupInfo)
	{
		return ($this->securityGroupInfo = $_securityGroupInfo);
	}
	/**
	 * Get securityGroupInfo
	 * @return AmazonEc2TypeSecurityGroupSetType
	 */
	public function getSecurityGroupInfo()
	{
		return $this->securityGroupInfo;
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