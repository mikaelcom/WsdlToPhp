<?php
/**
 * Class file for AmazonEc2TypeCreateSubnetResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSubnetResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSubnetResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The subnet
	 * @var AmazonEc2TypeSubnetType
	 */
	public $subnet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeSubnetType subnet
	 * @return AmazonEc2TypeCreateSubnetResponseType
	 */
	public function __construct($_requestId = null,$_subnet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'subnet'=>$_subnet));
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
	 * Set subnet
	 * @param SubnetType subnet
	 * @return SubnetType
	 */
	public function setSubnet($_subnet)
	{
		return ($this->subnet = $_subnet);
	}
	/**
	 * Get subnet
	 * @return AmazonEc2TypeSubnetType
	 */
	public function getSubnet()
	{
		return $this->subnet;
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