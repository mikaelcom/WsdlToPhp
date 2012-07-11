<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy extends AmazonElasticLoadBalancingWsdlClass
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
	 * The CookieExpirationPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The time period in seconds after which the cookie should be considered stale. Not specifying this parameter indicates that the sticky session will last for the duration of the browser session. </p>
	 * @var long
	 */
	public $CookieExpirationPeriod;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param string PolicyName
	 * @param long CookieExpirationPeriod
	 * @return AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy
	 */
	public function __construct($_LoadBalancerName = null,$_PolicyName = null,$_CookieExpirationPeriod = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'PolicyName'=>$_PolicyName,'CookieExpirationPeriod'=>$_CookieExpirationPeriod));
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
	 * Set CookieExpirationPeriod
	 * @param long CookieExpirationPeriod
	 * @return long
	 */
	public function setCookieExpirationPeriod($_CookieExpirationPeriod)
	{
		return ($this->CookieExpirationPeriod = $_CookieExpirationPeriod);
	}
	/**
	 * Get CookieExpirationPeriod
	 * @return long
	 */
	public function getCookieExpirationPeriod()
	{
		return $this->CookieExpirationPeriod;
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