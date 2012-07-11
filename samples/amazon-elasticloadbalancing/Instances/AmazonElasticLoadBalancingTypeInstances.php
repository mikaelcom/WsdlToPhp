<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeInstances
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeInstances
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeInstances extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeInstance
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeInstance member
	 * @return AmazonElasticLoadBalancingTypeInstances
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param Instance member
	 * @return Instance
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeInstance
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