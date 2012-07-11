<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeLoadBalancerDescriptions
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeLoadBalancerDescriptions
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeLoadBalancerDescriptions extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeLoadBalancerDescription
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeLoadBalancerDescription member
	 * @return AmazonElasticLoadBalancingTypeLoadBalancerDescriptions
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param LoadBalancerDescription member
	 * @return LoadBalancerDescription
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeLoadBalancerDescription
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