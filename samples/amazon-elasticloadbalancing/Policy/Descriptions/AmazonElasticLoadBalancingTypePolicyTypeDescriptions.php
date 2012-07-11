<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyTypeDescriptions
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyTypeDescriptions
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyTypeDescriptions extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypePolicyTypeDescription
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyTypeDescription member
	 * @return AmazonElasticLoadBalancingTypePolicyTypeDescriptions
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param PolicyTypeDescription member
	 * @return PolicyTypeDescription
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypePolicyTypeDescription
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