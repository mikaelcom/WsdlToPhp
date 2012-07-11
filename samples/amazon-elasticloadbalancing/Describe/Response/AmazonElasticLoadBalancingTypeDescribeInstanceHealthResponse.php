<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeInstanceHealthResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeInstanceHealthResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeInstanceHealthResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DescribeInstanceHealthResult
	 * @var AmazonElasticLoadBalancingTypeDescribeInstanceHealthResult
	 */
	public $DescribeInstanceHealthResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDescribeInstanceHealthResult DescribeInstanceHealthResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDescribeInstanceHealthResponse
	 */
	public function __construct($_DescribeInstanceHealthResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DescribeInstanceHealthResult'=>$_DescribeInstanceHealthResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DescribeInstanceHealthResult
	 * @param DescribeInstanceHealthResult DescribeInstanceHealthResult
	 * @return DescribeInstanceHealthResult
	 */
	public function setDescribeInstanceHealthResult($_DescribeInstanceHealthResult)
	{
		return ($this->DescribeInstanceHealthResult = $_DescribeInstanceHealthResult);
	}
	/**
	 * Get DescribeInstanceHealthResult
	 * @return AmazonElasticLoadBalancingTypeDescribeInstanceHealthResult
	 */
	public function getDescribeInstanceHealthResult()
	{
		return $this->DescribeInstanceHealthResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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