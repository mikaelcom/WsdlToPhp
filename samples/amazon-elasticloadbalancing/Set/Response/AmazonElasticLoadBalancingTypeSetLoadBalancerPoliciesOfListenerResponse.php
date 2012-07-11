<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The SetLoadBalancerPoliciesOfListenerResult
	 * @var AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResult
	 */
	public $SetLoadBalancerPoliciesOfListenerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResult SetLoadBalancerPoliciesOfListenerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResponse
	 */
	public function __construct($_SetLoadBalancerPoliciesOfListenerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SetLoadBalancerPoliciesOfListenerResult'=>$_SetLoadBalancerPoliciesOfListenerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SetLoadBalancerPoliciesOfListenerResult
	 * @param SetLoadBalancerPoliciesOfListenerResult SetLoadBalancerPoliciesOfListenerResult
	 * @return SetLoadBalancerPoliciesOfListenerResult
	 */
	public function setSetLoadBalancerPoliciesOfListenerResult($_SetLoadBalancerPoliciesOfListenerResult)
	{
		return ($this->SetLoadBalancerPoliciesOfListenerResult = $_SetLoadBalancerPoliciesOfListenerResult);
	}
	/**
	 * Get SetLoadBalancerPoliciesOfListenerResult
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResult
	 */
	public function getSetLoadBalancerPoliciesOfListenerResult()
	{
		return $this->SetLoadBalancerPoliciesOfListenerResult;
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