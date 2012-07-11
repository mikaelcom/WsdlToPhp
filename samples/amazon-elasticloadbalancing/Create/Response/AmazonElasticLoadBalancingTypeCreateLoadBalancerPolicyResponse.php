<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The CreateLoadBalancerPolicyResult
	 * @var AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResult
	 */
	public $CreateLoadBalancerPolicyResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResult CreateLoadBalancerPolicyResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResponse
	 */
	public function __construct($_CreateLoadBalancerPolicyResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CreateLoadBalancerPolicyResult'=>$_CreateLoadBalancerPolicyResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CreateLoadBalancerPolicyResult
	 * @param CreateLoadBalancerPolicyResult CreateLoadBalancerPolicyResult
	 * @return CreateLoadBalancerPolicyResult
	 */
	public function setCreateLoadBalancerPolicyResult($_CreateLoadBalancerPolicyResult)
	{
		return ($this->CreateLoadBalancerPolicyResult = $_CreateLoadBalancerPolicyResult);
	}
	/**
	 * Get CreateLoadBalancerPolicyResult
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResult
	 */
	public function getCreateLoadBalancerPolicyResult()
	{
		return $this->CreateLoadBalancerPolicyResult;
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