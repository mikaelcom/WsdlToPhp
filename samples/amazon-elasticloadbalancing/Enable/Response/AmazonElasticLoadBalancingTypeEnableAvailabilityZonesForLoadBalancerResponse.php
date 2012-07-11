<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The EnableAvailabilityZonesForLoadBalancerResult
	 * @var AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResult
	 */
	public $EnableAvailabilityZonesForLoadBalancerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResult EnableAvailabilityZonesForLoadBalancerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResponse
	 */
	public function __construct($_EnableAvailabilityZonesForLoadBalancerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('EnableAvailabilityZonesForLoadBalancerResult'=>$_EnableAvailabilityZonesForLoadBalancerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set EnableAvailabilityZonesForLoadBalancerResult
	 * @param EnableAvailabilityZonesForLoadBalancerResult EnableAvailabilityZonesForLoadBalancerResult
	 * @return EnableAvailabilityZonesForLoadBalancerResult
	 */
	public function setEnableAvailabilityZonesForLoadBalancerResult($_EnableAvailabilityZonesForLoadBalancerResult)
	{
		return ($this->EnableAvailabilityZonesForLoadBalancerResult = $_EnableAvailabilityZonesForLoadBalancerResult);
	}
	/**
	 * Get EnableAvailabilityZonesForLoadBalancerResult
	 * @return AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResult
	 */
	public function getEnableAvailabilityZonesForLoadBalancerResult()
	{
		return $this->EnableAvailabilityZonesForLoadBalancerResult;
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