<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeConfigureHealthCheckResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeConfigureHealthCheckResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeConfigureHealthCheckResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The ConfigureHealthCheckResult
	 * @var AmazonElasticLoadBalancingTypeConfigureHealthCheckResult
	 */
	public $ConfigureHealthCheckResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeConfigureHealthCheckResult ConfigureHealthCheckResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeConfigureHealthCheckResponse
	 */
	public function __construct($_ConfigureHealthCheckResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ConfigureHealthCheckResult'=>$_ConfigureHealthCheckResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ConfigureHealthCheckResult
	 * @param ConfigureHealthCheckResult ConfigureHealthCheckResult
	 * @return ConfigureHealthCheckResult
	 */
	public function setConfigureHealthCheckResult($_ConfigureHealthCheckResult)
	{
		return ($this->ConfigureHealthCheckResult = $_ConfigureHealthCheckResult);
	}
	/**
	 * Get ConfigureHealthCheckResult
	 * @return AmazonElasticLoadBalancingTypeConfigureHealthCheckResult
	 */
	public function getConfigureHealthCheckResult()
	{
		return $this->ConfigureHealthCheckResult;
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