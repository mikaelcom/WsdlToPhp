<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The AvailabilityZones
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> An updated list of Availability Zones for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeAvailabilityZones
	 */
	public $AvailabilityZones;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeAvailabilityZones AvailabilityZones
	 * @return AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResult
	 */
	public function __construct($_AvailabilityZones = null)
	{
		parent::__construct(array('AvailabilityZones'=>$_AvailabilityZones));
	}
	/**
	 * Set AvailabilityZones
	 * @param AvailabilityZones AvailabilityZones
	 * @return AvailabilityZones
	 */
	public function setAvailabilityZones($_AvailabilityZones)
	{
		return ($this->AvailabilityZones = $_AvailabilityZones);
	}
	/**
	 * Get AvailabilityZones
	 * @return AmazonElasticLoadBalancingTypeAvailabilityZones
	 */
	public function getAvailabilityZones()
	{
		return $this->AvailabilityZones;
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