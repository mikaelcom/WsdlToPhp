<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DeregisterInstancesFromLoadBalancerResult
	 * @var AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResult
	 */
	public $DeregisterInstancesFromLoadBalancerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResult DeregisterInstancesFromLoadBalancerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResponse
	 */
	public function __construct($_DeregisterInstancesFromLoadBalancerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DeregisterInstancesFromLoadBalancerResult'=>$_DeregisterInstancesFromLoadBalancerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DeregisterInstancesFromLoadBalancerResult
	 * @param DeregisterInstancesFromLoadBalancerResult DeregisterInstancesFromLoadBalancerResult
	 * @return DeregisterInstancesFromLoadBalancerResult
	 */
	public function setDeregisterInstancesFromLoadBalancerResult($_DeregisterInstancesFromLoadBalancerResult)
	{
		return ($this->DeregisterInstancesFromLoadBalancerResult = $_DeregisterInstancesFromLoadBalancerResult);
	}
	/**
	 * Get DeregisterInstancesFromLoadBalancerResult
	 * @return AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResult
	 */
	public function getDeregisterInstancesFromLoadBalancerResult()
	{
		return $this->DeregisterInstancesFromLoadBalancerResult;
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