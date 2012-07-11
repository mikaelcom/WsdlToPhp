<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeListenerDescriptions
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeListenerDescriptions
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeListenerDescriptions extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeListenerDescription
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeListenerDescription member
	 * @return AmazonElasticLoadBalancingTypeListenerDescriptions
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param ListenerDescription member
	 * @return ListenerDescription
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeListenerDescription
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