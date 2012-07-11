<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyAttributes
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyAttributes extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypePolicyAttribute
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyAttribute member
	 * @return AmazonElasticLoadBalancingTypePolicyAttributes
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param PolicyAttribute member
	 * @return PolicyAttribute
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypePolicyAttribute
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