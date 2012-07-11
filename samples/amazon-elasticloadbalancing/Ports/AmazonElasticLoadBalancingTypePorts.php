<?php
/**
 * Class file for AmazonElasticLoadBalancingTypePorts
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypePorts
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypePorts extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var integer
	 */
	public $member;
	/**
	 * Constructor
	 * @param integer member
	 * @return AmazonElasticLoadBalancingTypePorts
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param integer member
	 * @return integer
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return integer
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