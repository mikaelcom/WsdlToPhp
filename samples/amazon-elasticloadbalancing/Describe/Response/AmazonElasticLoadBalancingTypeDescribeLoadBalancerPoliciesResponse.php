<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DescribeLoadBalancerPoliciesResult
	 * @var AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResult
	 */
	public $DescribeLoadBalancerPoliciesResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResult DescribeLoadBalancerPoliciesResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResponse
	 */
	public function __construct($_DescribeLoadBalancerPoliciesResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DescribeLoadBalancerPoliciesResult'=>$_DescribeLoadBalancerPoliciesResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DescribeLoadBalancerPoliciesResult
	 * @param DescribeLoadBalancerPoliciesResult DescribeLoadBalancerPoliciesResult
	 * @return DescribeLoadBalancerPoliciesResult
	 */
	public function setDescribeLoadBalancerPoliciesResult($_DescribeLoadBalancerPoliciesResult)
	{
		return ($this->DescribeLoadBalancerPoliciesResult = $_DescribeLoadBalancerPoliciesResult);
	}
	/**
	 * Get DescribeLoadBalancerPoliciesResult
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResult
	 */
	public function getDescribeLoadBalancerPoliciesResult()
	{
		return $this->DescribeLoadBalancerPoliciesResult;
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