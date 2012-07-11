<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeBackendServerDescriptions
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeBackendServerDescriptions
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeBackendServerDescriptions extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The member
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonElasticLoadBalancingTypeBackendServerDescription
	 */
	public $member;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeBackendServerDescription member
	 * @return AmazonElasticLoadBalancingTypeBackendServerDescriptions
	 */
	public function __construct($_member = null)
	{
		parent::__construct(array('member'=>$_member));
	}
	/**
	 * Set member
	 * @param BackendServerDescription member
	 * @return BackendServerDescription
	 */
	public function setMember($_member)
	{
		return ($this->member = $_member);
	}
	/**
	 * Get member
	 * @return AmazonElasticLoadBalancingTypeBackendServerDescription
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