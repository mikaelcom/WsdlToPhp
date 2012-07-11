<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The AvailabilityZones
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of updated Availability Zones for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeAvailabilityZones
	 */
	public $AvailabilityZones;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeAvailabilityZones AvailabilityZones
	 * @return AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResult
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