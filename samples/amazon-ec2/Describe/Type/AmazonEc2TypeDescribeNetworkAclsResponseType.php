<?php
/**
 * Class file for AmazonEc2TypeDescribeNetworkAclsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeNetworkAclsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeNetworkAclsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The networkAclSet
	 * @var AmazonEc2TypeNetworkAclSetType
	 */
	public $networkAclSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeNetworkAclSetType networkAclSet
	 * @return AmazonEc2TypeDescribeNetworkAclsResponseType
	 */
	public function __construct($_requestId = null,$_networkAclSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'networkAclSet'=>$_networkAclSet));
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
	 * Set networkAclSet
	 * @param NetworkAclSetType networkAclSet
	 * @return NetworkAclSetType
	 */
	public function setNetworkAclSet($_networkAclSet)
	{
		return ($this->networkAclSet = $_networkAclSet);
	}
	/**
	 * Get networkAclSet
	 * @return AmazonEc2TypeNetworkAclSetType
	 */
	public function getNetworkAclSet()
	{
		return $this->networkAclSet;
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