<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLoadBalancer
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLoadBalancer
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLoadBalancer extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within your set of LoadBalancers. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The Listeners
	 * Meta informations :
	 * 	- documentation : <p> A list of the following tuples: LoadBalancerPort, InstancePort, and Protocol. </p>
	 * @var AmazonElasticLoadBalancingTypeListeners
	 */
	public $Listeners;
	/**
	 * The AvailabilityZones
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of Availability Zones. </p> <p> At least one Availability Zone must be specified. Specified Availability Zones must be in the same EC2 Region as the LoadBalancer. Traffic will be equally distributed across all zones. </p> <p> This list can be modified after the creation of the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeAvailabilityZones
	 */
	public $AvailabilityZones;
	/**
	 * The Subnets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of subnet IDs in your VPC to attach to your LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeSubnets
	 */
	public $Subnets;
	/**
	 * The SecurityGroups
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The security groups assigned to your LoadBalancer within your VPC. </p>
	 * @var AmazonElasticLoadBalancingTypeSecurityGroups
	 */
	public $SecurityGroups;
	/**
	 * The Scheme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p>The type of a LoadBalancer. </p> <p>By default, Elastic Load Balancing creates an Internet-facing LoadBalancer with a publicly resolvable DNS name, which resolves to public IP addresses. </p> <p>Specify the value <code>internal</code> for this option to create an internal LoadBalancer with a DNS name that resolves to private IP addresses.</p> <p>This option is only available for LoadBalancers attached to an Amazon VPC.</p>
	 * @var string
	 */
	public $Scheme;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeListeners Listeners
	 * @param AmazonElasticLoadBalancingTypeAvailabilityZones AvailabilityZones
	 * @param AmazonElasticLoadBalancingTypeSubnets Subnets
	 * @param AmazonElasticLoadBalancingTypeSecurityGroups SecurityGroups
	 * @param string Scheme
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancer
	 */
	public function __construct($_LoadBalancerName = null,$_Listeners = null,$_AvailabilityZones = null,$_Subnets = null,$_SecurityGroups = null,$_Scheme = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'Listeners'=>$_Listeners,'AvailabilityZones'=>$_AvailabilityZones,'Subnets'=>$_Subnets,'SecurityGroups'=>$_SecurityGroups,'Scheme'=>$_Scheme));
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
	 * Set Listeners
	 * @param Listeners Listeners
	 * @return Listeners
	 */
	public function setListeners($_Listeners)
	{
		return ($this->Listeners = $_Listeners);
	}
	/**
	 * Get Listeners
	 * @return AmazonElasticLoadBalancingTypeListeners
	 */
	public function getListeners()
	{
		return $this->Listeners;
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
	 * Set Subnets
	 * @param Subnets Subnets
	 * @return Subnets
	 */
	public function setSubnets($_Subnets)
	{
		return ($this->Subnets = $_Subnets);
	}
	/**
	 * Get Subnets
	 * @return AmazonElasticLoadBalancingTypeSubnets
	 */
	public function getSubnets()
	{
		return $this->Subnets;
	}
	/**
	 * Set SecurityGroups
	 * @param SecurityGroups SecurityGroups
	 * @return SecurityGroups
	 */
	public function setSecurityGroups($_SecurityGroups)
	{
		return ($this->SecurityGroups = $_SecurityGroups);
	}
	/**
	 * Get SecurityGroups
	 * @return AmazonElasticLoadBalancingTypeSecurityGroups
	 */
	public function getSecurityGroups()
	{
		return $this->SecurityGroups;
	}
	/**
	 * Set Scheme
	 * @param string Scheme
	 * @return string
	 */
	public function setScheme($_Scheme)
	{
		return ($this->Scheme = $_Scheme);
	}
	/**
	 * Get Scheme
	 * @return string
	 */
	public function getScheme()
	{
		return $this->Scheme;
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