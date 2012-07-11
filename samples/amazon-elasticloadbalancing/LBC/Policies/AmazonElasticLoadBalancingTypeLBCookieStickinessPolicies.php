<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeLBCookieStickinessPolicies
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeLBCookieStickinessPolicies
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeLBCookieStickinessPolicies extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeLBCookieStickinessPolicy
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeLBCookieStickinessPolicy member
	 * @return AmazonElasticLoadBalancingTypeLBCookieStickinessPolicies
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param LBCookieStickinessPolicy member
	 * @return LBCookieStickinessPolicy
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeLBCookieStickinessPolicy
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