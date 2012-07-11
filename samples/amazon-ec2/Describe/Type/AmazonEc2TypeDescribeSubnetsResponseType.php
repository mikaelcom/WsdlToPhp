<?php
/**
 * Class file for AmazonEc2TypeDescribeSubnetsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSubnetsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSubnetsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The subnetSet
	 * @var AmazonEc2TypeSubnetSetType
	 */
	public $subnetSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeSubnetSetType subnetSet
	 * @return AmazonEc2TypeDescribeSubnetsResponseType
	 */
	public function __construct($_requestId = null,$_subnetSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'subnetSet'=>$_subnetSet));
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
	 * Set subnetSet
	 * @param SubnetSetType subnetSet
	 * @return SubnetSetType
	 */
	public function setSubnetSet($_subnetSet)
	{
		return ($this->subnetSet = $_subnetSet);
	}
	/**
	 * Get subnetSet
	 * @return AmazonEc2TypeSubnetSetType
	 */
	public function getSubnetSet()
	{
		return $this->subnetSet;
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