<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The mnemonic name associated with the LoadBalancer. The name must be unique within your AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The PolicyName
	 * Meta informations :
	 * 	- documentation : <p> The mnemonic name for the policy being deleted. </p>
	 * @var string
	 */
	public $PolicyName;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param string PolicyName
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy
	 */
	public function __construct($_LoadBalancerName = null,$_PolicyName = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'PolicyName'=>$_PolicyName));
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
	 * Set PolicyName
	 * @param string PolicyName
	 * @return string
	 */
	public function setPolicyName($_PolicyName)
	{
		return ($this->PolicyName = $_PolicyName);
	}
	/**
	 * Get PolicyName
	 * @return string
	 */
	public function getPolicyName()
	{
		return $this->PolicyName;
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