<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeInstanceStates
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeInstanceStates
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeInstanceStates extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeInstanceState
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeInstanceState member
	 * @return AmazonElasticLoadBalancingTypeInstanceStates
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param InstanceState member
	 * @return InstanceState
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeInstanceState
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