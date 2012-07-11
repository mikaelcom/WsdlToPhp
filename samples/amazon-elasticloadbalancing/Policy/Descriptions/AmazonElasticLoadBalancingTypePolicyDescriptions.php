<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePolicyDescriptions
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePolicyDescriptions
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePolicyDescriptions extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypePolicyDescription
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypePolicyDescription member
	 * @return AmazonElasticLoadBalancingTypePolicyDescriptions
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param PolicyDescription member
	 * @return PolicyDescription
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypePolicyDescription
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