<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeAppCookieStickinessPolicies
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeAppCookieStickinessPolicies
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeAppCookieStickinessPolicies extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeAppCookieStickinessPolicy
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeAppCookieStickinessPolicy member
	 * @return AmazonElasticLoadBalancingTypeAppCookieStickinessPolicies
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param AppCookieStickinessPolicy member
	 * @return AppCookieStickinessPolicy
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeAppCookieStickinessPolicy
	 */
	public function getMember()
	{
		return $this->member;
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