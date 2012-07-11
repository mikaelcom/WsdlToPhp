<?php
/**
 * Class file for AmazonEc2TypeDescribeVpcsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVpcsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVpcsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The vpcSet
	 * @var AmazonEc2TypeVpcSetType
	 */
	public $vpcSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeVpcSetType vpcSet
	 * @return AmazonEc2TypeDescribeVpcsResponseType
	 */
	public function __construct($_requestId = null,$_vpcSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'vpcSet'=>$_vpcSet));
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
	 * Set vpcSet
	 * @param VpcSetType vpcSet
	 * @return VpcSetType
	 */
	public function setVpcSet($_vpcSet)
	{
		return ($this->vpcSet = $_vpcSet);
	}
	/**
	 * Get vpcSet
	 * @return AmazonEc2TypeVpcSetType
	 */
	public function getVpcSet()
	{
		return $this->vpcSet;
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