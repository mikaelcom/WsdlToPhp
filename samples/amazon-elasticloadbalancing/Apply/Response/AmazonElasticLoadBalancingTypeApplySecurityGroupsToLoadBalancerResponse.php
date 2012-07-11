<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The ApplySecurityGroupsToLoadBalancerResult
	 * @var AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResult
	 */
	public $ApplySecurityGroupsToLoadBalancerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResult ApplySecurityGroupsToLoadBalancerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResponse
	 */
	public function __construct($_ApplySecurityGroupsToLoadBalancerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ApplySecurityGroupsToLoadBalancerResult'=>$_ApplySecurityGroupsToLoadBalancerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ApplySecurityGroupsToLoadBalancerResult
	 * @param ApplySecurityGroupsToLoadBalancerResult ApplySecurityGroupsToLoadBalancerResult
	 * @return ApplySecurityGroupsToLoadBalancerResult
	 */
	public function setApplySecurityGroupsToLoadBalancerResult($_ApplySecurityGroupsToLoadBalancerResult)
	{
		return ($this->ApplySecurityGroupsToLoadBalancerResult = $_ApplySecurityGroupsToLoadBalancerResult);
	}
	/**
	 * Get ApplySecurityGroupsToLoadBalancerResult
	 * @return AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResult
	 */
	public function getApplySecurityGroupsToLoadBalancerResult()
	{
		return $this->ApplySecurityGroupsToLoadBalancerResult;
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