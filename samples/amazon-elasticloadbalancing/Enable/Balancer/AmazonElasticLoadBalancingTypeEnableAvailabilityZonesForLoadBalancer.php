<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The AvailabilityZones
	 * Meta informations :
	 * 	- documentation : <p> A list of new Availability Zones for the LoadBalancer. Each Availability Zone must be in the same Region as the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeAvailabilityZones
	 */
	public $AvailabilityZones;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeAvailabilityZones AvailabilityZones
	 * @return AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer
	 */
	public function __construct($_LoadBalancerName = null,$_AvailabilityZones = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'AvailabilityZones'=>$_AvailabilityZones));
	}
	/**
	 * Set LoadBalancerName
	 * @param string LoadBalancerName
	 * @return string
	 */
	public function setLoadBalancerName($_LoadBalancerName)
	{
		return ($this->LoadBalancerName = $_LoadBalancerName);
	}
	/**
	 * Get LoadBalancerName
	 * @return string
	 */
	public function getLoadBalancerName()
	{
		return $this->LoadBalancerName;
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