<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeLBCookieStickinessPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeLBCookieStickinessPolicy
 * Documentation : <p>The LBCookieStickinessPolicy data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeLBCookieStickinessPolicy extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The PolicyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p>The name for the policy being created. The name must be unique within the set of policies for this LoadBalancer. </p>
	 * @var string
	 */
	public $PolicyName;
	/**
	 * The CookieExpirationPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p>The time period in seconds after which the cookie should be considered stale. Not specifying this parameter indicates that the stickiness session will last for the duration of the browser session. </p>
	 * @var long
	 */
	public $CookieExpirationPeriod;
	/**
	 * Constructor
	 * @param string PolicyName
	 * @param long CookieExpirationPeriod
	 * @return AmazonElasticLoadBalancingTypeLBCookieStickinessPolicy
	 */
	public function __construct($_PolicyName = null,$_CookieExpirationPeriod = null)
	{
		parent::__construct(array('PolicyName'=>$_PolicyName,'CookieExpirationPeriod'=>$_CookieExpirationPeriod));
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