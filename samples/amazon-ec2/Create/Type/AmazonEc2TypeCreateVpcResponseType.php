<?php
/**
 * Class file for AmazonEc2TypeCreateVpcResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVpcResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVpcResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The vpc
	 * @var AmazonEc2TypeVpcType
	 */
	public $vpc;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeVpcType vpc
	 * @return AmazonEc2TypeCreateVpcResponseType
	 */
	public function __construct($_requestId = null,$_vpc = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'vpc'=>$_vpc));
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
	 * Set vpc
	 * @param VpcType vpc
	 * @return VpcType
	 */
	public function setVpc($_vpc)
	{
		return ($this->vpc = $_vpc);
	}
	/**
	 * Get vpc
	 * @return AmazonEc2TypeVpcType
	 */
	public function getVpc()
	{
		return $this->vpc;
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