<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyAttributeTypeDescriptions
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyAttributeTypeDescriptions
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyAttributeTypeDescriptions extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypePolicyAttributeTypeDescription
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyAttributeTypeDescription member
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeTypeDescriptions
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param PolicyAttributeTypeDescription member
	 * @return PolicyAttributeTypeDescription
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypePolicyAttributeTypeDescription
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