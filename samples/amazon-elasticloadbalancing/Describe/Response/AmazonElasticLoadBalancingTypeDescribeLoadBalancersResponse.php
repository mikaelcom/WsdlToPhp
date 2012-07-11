<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancersResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancersResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancersResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DescribeLoadBalancersResult
	 * @var AmazonElasticLoadBalancingTypeDescribeLoadBalancersResult
	 */
	public $DescribeLoadBalancersResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDescribeLoadBalancersResult DescribeLoadBalancersResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancersResponse
	 */
	public function __construct($_DescribeLoadBalancersResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DescribeLoadBalancersResult'=>$_DescribeLoadBalancersResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DescribeLoadBalancersResult
	 * @param DescribeLoadBalancersResult DescribeLoadBalancersResult
	 * @return DescribeLoadBalancersResult
	 */
	public function setDescribeLoadBalancersResult($_DescribeLoadBalancersResult)
	{
		return ($this->DescribeLoadBalancersResult = $_DescribeLoadBalancersResult);
	}
	/**
	 * Get DescribeLoadBalancersResult
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancersResult
	 */
	public function getDescribeLoadBalancersResult()
	{
		return $this->DescribeLoadBalancersResult;
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