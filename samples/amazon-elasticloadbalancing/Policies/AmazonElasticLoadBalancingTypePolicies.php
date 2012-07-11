<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicies
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicies
 * Documentation : <p> The policies data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicies extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The AppCookieStickinessPolicies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of the <a>AppCookieStickinessPolicy</a> objects created with <a>CreateAppCookieStickinessPolicy</a>. </p>
	 * @var AmazonElasticLoadBalancingTypeAppCookieStickinessPolicies
	 */
	public $AppCookieStickinessPolicies;
	/**
	 * The LBCookieStickinessPolicies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of <a>LBCookieStickinessPolicy</a> objects created with <a>CreateAppCookieStickinessPolicy</a>. </p>
	 * @var AmazonElasticLoadBalancingTypeLBCookieStickinessPolicies
	 */
	public $LBCookieStickinessPolicies;
	/**
	 * The OtherPolicies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of policy names other than the stickiness policies. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyNames
	 */
	public $OtherPolicies;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeAppCookieStickinessPolicies AppCookieStickinessPolicies
	 * @param AmazonElasticLoadBalancingTypeLBCookieStickinessPolicies LBCookieStickinessPolicies
	 * @param AmazonElasticLoadBalancingTypePolicyNames OtherPolicies
	 * @return AmazonElasticLoadBalancingTypePolicies
	 */
	public function __construct($_AppCookieStickinessPolicies = null,$_LBCookieStickinessPolicies = null,$_OtherPolicies = null)
	{
		parent::__construct(array('AppCookieStickinessPolicies'=>$_AppCookieStickinessPolicies,'LBCookieStickinessPolicies'=>$_LBCookieStickinessPolicies,'OtherPolicies'=>$_OtherPolicies));
	}
	/**
	 * Set AppCookieStickinessPolicies
	 * @param AppCookieStickinessPolicies AppCookieStickinessPolicies
	 * @return AppCookieStickinessPolicies
	 */
	public function setAppCookieStickinessPolicies($_AppCookieStickinessPolicies)
	{
		return ($this->AppCookieStickinessPolicies = $_AppCookieStickinessPolicies);
	}
	/**
	 * Get AppCookieStickinessPolicies
	 * @return AmazonElasticLoadBalancingTypeAppCookieStickinessPolicies
	 */
	public function getAppCookieStickinessPolicies()
	{
		return $this->AppCookieStickinessPolicies;
	}
	/**
	 * Set LBCookieStickinessPolicies
	 * @param LBCookieStickinessPolicies LBCookieStickinessPolicies
	 * @return LBCookieStickinessPolicies
	 */
	public function setLBCookieStickinessPolicies($_LBCookieStickinessPolicies)
	{
		return ($this->LBCookieStickinessPolicies = $_LBCookieStickinessPolicies);
	}
	/**
	 * Get LBCookieStickinessPolicies
	 * @return AmazonElasticLoadBalancingTypeLBCookieStickinessPolicies
	 */
	public function getLBCookieStickinessPolicies()
	{
		return $this->LBCookieStickinessPolicies;
	}
	/**
	 * Set OtherPolicies
	 * @param PolicyNames OtherPolicies
	 * @return PolicyNames
	 */
	public function setOtherPolicies($_OtherPolicies)
	{
		return ($this->OtherPolicies = $_OtherPolicies);
	}
	/**
	 * Get OtherPolicies
	 * @return AmazonElasticLoadBalancingTypePolicyNames
	 */
	public function getOtherPolicies()
	{
		return $this->OtherPolicies;
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