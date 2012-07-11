<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeConfigureHealthCheck
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeConfigureHealthCheck
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeConfigureHealthCheck extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The mnemonic name associated with the LoadBalancer. This name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The HealthCheck
	 * Meta informations :
	 * 	- documentation : <p> A structure containing the configuration information for the new healthcheck. </p>
	 * @var AmazonElasticLoadBalancingTypeHealthCheck
	 */
	public $HealthCheck;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeHealthCheck HealthCheck
	 * @return AmazonElasticLoadBalancingTypeConfigureHealthCheck
	 */
	public function __construct($_LoadBalancerName = null,$_HealthCheck = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'HealthCheck'=>$_HealthCheck));
	}
	/**
	 * Set LoadBalancerName
	 * @param string LoadBalancerName
	 * @return string
	 */
	public function setLoadBalancerName($_LoadBalancerName)
	{
		return ($this->LoadBalancerName = $_LoadBalancerName);
	}
	/**
	 * Get LoadBalancerName
	 * @return string
	 */
	public function getLoadBalancerName()
	{
		return $this->LoadBalancerName;
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