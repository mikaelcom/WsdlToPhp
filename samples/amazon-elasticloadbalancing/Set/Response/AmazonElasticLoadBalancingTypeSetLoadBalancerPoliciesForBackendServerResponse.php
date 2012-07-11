<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The SetLoadBalancerPoliciesForBackendServerResult
	 * @var AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResult
	 */
	public $SetLoadBalancerPoliciesForBackendServerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResult SetLoadBalancerPoliciesForBackendServerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResponse
	 */
	public function __construct($_SetLoadBalancerPoliciesForBackendServerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SetLoadBalancerPoliciesForBackendServerResult'=>$_SetLoadBalancerPoliciesForBackendServerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SetLoadBalancerPoliciesForBackendServerResult
	 * @param SetLoadBalancerPoliciesForBackendServerResult SetLoadBalancerPoliciesForBackendServerResult
	 * @return SetLoadBalancerPoliciesForBackendServerResult
	 */
	public function setSetLoadBalancerPoliciesForBackendServerResult($_SetLoadBalancerPoliciesForBackendServerResult)
	{
		return ($this->SetLoadBalancerPoliciesForBackendServerResult = $_SetLoadBalancerPoliciesForBackendServerResult);
	}
	/**
	 * Get SetLoadBalancerPoliciesForBackendServerResult
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResult
	 */
	public function getSetLoadBalancerPoliciesForBackendServerResult()
	{
		return $this->SetLoadBalancerPoliciesForBackendServerResult;
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