<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeConfigureHealthCheckResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeConfigureHealthCheckResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeConfigureHealthCheckResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The HealthCheck
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The updated healthcheck for the instances. </p>
	 * @var AmazonElasticLoadBalancingTypeHealthCheck
	 */
	public $HealthCheck;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeHealthCheck HealthCheck
	 * @return AmazonElasticLoadBalancingTypeConfigureHealthCheckResult
	 */
	public function __construct($_HealthCheck = null)
	{
		parent::__construct(array('HealthCheck'=>$_HealthCheck));
	}
	/**
	 * Set HealthCheck
	 * @param HealthCheck HealthCheck
	 * @return HealthCheck
	 */
	public function setHealthCheck($_HealthCheck)
	{
		return ($this->HealthCheck = $_HealthCheck);
	}
	/**
	 * Get HealthCheck
	 * @return AmazonElasticLoadBalancingTypeHealthCheck
	 */
	public function getHealthCheck()
	{
		return $this->HealthCheck;
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