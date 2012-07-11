<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DescribeLoadBalancerPolicyTypesResult
	 * @var AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResult
	 */
	public $DescribeLoadBalancerPolicyTypesResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResult DescribeLoadBalancerPolicyTypesResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResponse
	 */
	public function __construct($_DescribeLoadBalancerPolicyTypesResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DescribeLoadBalancerPolicyTypesResult'=>$_DescribeLoadBalancerPolicyTypesResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DescribeLoadBalancerPolicyTypesResult
	 * @param DescribeLoadBalancerPolicyTypesResult DescribeLoadBalancerPolicyTypesResult
	 * @return DescribeLoadBalancerPolicyTypesResult
	 */
	public function setDescribeLoadBalancerPolicyTypesResult($_DescribeLoadBalancerPolicyTypesResult)
	{
		return ($this->DescribeLoadBalancerPolicyTypesResult = $_DescribeLoadBalancerPolicyTypesResult);
	}
	/**
	 * Get DescribeLoadBalancerPolicyTypesResult
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResult
	 */
	public function getDescribeLoadBalancerPolicyTypesResult()
	{
		return $this->DescribeLoadBalancerPolicyTypesResult;
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