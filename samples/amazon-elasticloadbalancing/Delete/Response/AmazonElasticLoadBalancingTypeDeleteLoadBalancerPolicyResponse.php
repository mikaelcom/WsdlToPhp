<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DeleteLoadBalancerPolicyResult
	 * @var AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResult
	 */
	public $DeleteLoadBalancerPolicyResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResult DeleteLoadBalancerPolicyResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResponse
	 */
	public function __construct($_DeleteLoadBalancerPolicyResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DeleteLoadBalancerPolicyResult'=>$_DeleteLoadBalancerPolicyResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DeleteLoadBalancerPolicyResult
	 * @param DeleteLoadBalancerPolicyResult DeleteLoadBalancerPolicyResult
	 * @return DeleteLoadBalancerPolicyResult
	 */
	public function setDeleteLoadBalancerPolicyResult($_DeleteLoadBalancerPolicyResult)
	{
		return ($this->DeleteLoadBalancerPolicyResult = $_DeleteLoadBalancerPolicyResult);
	}
	/**
	 * Get DeleteLoadBalancerPolicyResult
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResult
	 */
	public function getDeleteLoadBalancerPolicyResult()
	{
		return $this->DeleteLoadBalancerPolicyResult;
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