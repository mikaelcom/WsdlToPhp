<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyAttributeDescriptions
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyAttributeDescriptions
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyAttributeDescriptions extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypePolicyAttributeDescription
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyAttributeDescription member
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeDescriptions
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param PolicyAttributeDescription member
	 * @return PolicyAttributeDescription
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeDescription
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