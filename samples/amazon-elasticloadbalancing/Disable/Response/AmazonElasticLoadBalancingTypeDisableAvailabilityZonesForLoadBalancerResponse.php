<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DisableAvailabilityZonesForLoadBalancerResult
	 * @var AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResult
	 */
	public $DisableAvailabilityZonesForLoadBalancerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResult DisableAvailabilityZonesForLoadBalancerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResponse
	 */
	public function __construct($_DisableAvailabilityZonesForLoadBalancerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DisableAvailabilityZonesForLoadBalancerResult'=>$_DisableAvailabilityZonesForLoadBalancerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DisableAvailabilityZonesForLoadBalancerResult
	 * @param DisableAvailabilityZonesForLoadBalancerResult DisableAvailabilityZonesForLoadBalancerResult
	 * @return DisableAvailabilityZonesForLoadBalancerResult
	 */
	public function setDisableAvailabilityZonesForLoadBalancerResult($_DisableAvailabilityZonesForLoadBalancerResult)
	{
		return ($this->DisableAvailabilityZonesForLoadBalancerResult = $_DisableAvailabilityZonesForLoadBalancerResult);
	}
	/**
	 * Get DisableAvailabilityZonesForLoadBalancerResult
	 * @return AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResult
	 */
	public function getDisableAvailabilityZonesForLoadBalancerResult()
	{
		return $this->DisableAvailabilityZonesForLoadBalancerResult;
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