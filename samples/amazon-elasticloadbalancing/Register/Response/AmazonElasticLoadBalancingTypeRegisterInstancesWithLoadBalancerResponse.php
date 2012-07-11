<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The RegisterInstancesWithLoadBalancerResult
	 * @var AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResult
	 */
	public $RegisterInstancesWithLoadBalancerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResult RegisterInstancesWithLoadBalancerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResponse
	 */
	public function __construct($_RegisterInstancesWithLoadBalancerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('RegisterInstancesWithLoadBalancerResult'=>$_RegisterInstancesWithLoadBalancerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set RegisterInstancesWithLoadBalancerResult
	 * @param RegisterInstancesWithLoadBalancerResult RegisterInstancesWithLoadBalancerResult
	 * @return RegisterInstancesWithLoadBalancerResult
	 */
	public function setRegisterInstancesWithLoadBalancerResult($_RegisterInstancesWithLoadBalancerResult)
	{
		return ($this->RegisterInstancesWithLoadBalancerResult = $_RegisterInstancesWithLoadBalancerResult);
	}
	/**
	 * Get RegisterInstancesWithLoadBalancerResult
	 * @return AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResult
	 */
	public function getRegisterInstancesWithLoadBalancerResult()
	{
		return $this->RegisterInstancesWithLoadBalancerResult;
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