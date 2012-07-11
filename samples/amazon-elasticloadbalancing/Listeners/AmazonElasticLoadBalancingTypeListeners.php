<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeListeners
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeListeners
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeListeners extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeListener
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeListener member
	 * @return AmazonElasticLoadBalancingTypeListeners
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param Listener member
	 * @return Listener
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeListener
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