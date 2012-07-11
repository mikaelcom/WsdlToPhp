<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The PolicyName
	 * Meta informations :
	 * 	- documentation : <p> The name of the policy being created. The name must be unique within the set of policies for this LoadBalancer. </p>
	 * @var string
	 */
	public $PolicyName;
	/**
	 * The CookieName
	 * Meta informations :
	 * 	- documentation : <p> Name of the application cookie used for stickiness. </p>
	 * @var string
	 */
	public $CookieName;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param string PolicyName
	 * @param string CookieName
	 * @return AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy
	 */
	public function __construct($_LoadBalancerName = null,$_PolicyName = null,$_CookieName = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'PolicyName'=>$_PolicyName,'CookieName'=>$_CookieName));
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
	 * Set CookieName
	 * @param string CookieName
	 * @return string
	 */
	public function setCookieName($_CookieName)
	{
		return ($this->CookieName = $_CookieName);
	}
	/**
	 * Get CookieName
	 * @return string
	 */
	public function getCookieName()
	{
		return $this->CookieName;
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