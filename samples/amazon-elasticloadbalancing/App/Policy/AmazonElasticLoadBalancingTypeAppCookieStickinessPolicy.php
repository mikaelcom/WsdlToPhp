<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeAppCookieStickinessPolicy
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeAppCookieStickinessPolicy
 * Documentation : <p>The AppCookieStickinessPolicy data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeAppCookieStickinessPolicy extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The PolicyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p>The mnemonic name for the policy being created. The name must be unique within a set of policies for this LoadBalancer. </p>
	 * @var string
	 */
	public $PolicyName;
	/**
	 * The CookieName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p>The name of the application cookie used for stickiness. </p>
	 * @var string
	 */
	public $CookieName;
	/**
	 * Constructor
	 * @param string PolicyName
	 * @param string CookieName
	 * @return AmazonElasticLoadBalancingTypeAppCookieStickinessPolicy
	 */
	public function __construct($_PolicyName = null,$_CookieName = null)
	{
		parent::__construct(array('PolicyName'=>$_PolicyName,'CookieName'=>$_CookieName));
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