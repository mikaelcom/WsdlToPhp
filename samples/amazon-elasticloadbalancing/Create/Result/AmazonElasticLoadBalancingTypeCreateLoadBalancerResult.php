<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLoadBalancerResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLoadBalancerResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLoadBalancerResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DNSName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The DNS name for the LoadBalancer. </p>
	 * @var string
	 */
	public $DNSName;
	/**
	 * Constructor
	 * @param string DNSName
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerResult
	 */
	public function __construct($_DNSName = null)
	{
		parent::__construct(array('DNSName'=>$_DNSName));
	}
	/**
	 * Set DNSName
	 * @param string DNSName
	 * @return string
	 */
	public function setDNSName($_DNSName)
	{
		return ($this->DNSName = $_DNSName);
	}
	/**
	 * Get DNSName
	 * @return string
	 */
	public function getDNSName()
	{
		return $this->DNSName;
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