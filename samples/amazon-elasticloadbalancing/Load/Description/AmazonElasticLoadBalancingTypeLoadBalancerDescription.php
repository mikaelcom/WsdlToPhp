<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeLoadBalancerDescription
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeLoadBalancerDescription
 * Documentation : <p> Contains the result of a successful invocation of <a>DescribeLoadBalancers</a>. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeLoadBalancerDescription extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Specifies the name associated with the LoadBalancer. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The DNSName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Specifies the external DNS name associated with the LoadBalancer. </p>
	 * @var string
	 */
	public $DNSName;
	/**
	 * The CanonicalHostedZoneName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides the name of the Amazon Route 53 hosted zone that is associated with the LoadBalancer. For information on how to associate your load balancer with a hosted zone, go to <a href="http://docs.amazonwebservices.com/ElasticLoadBalancing/latest/DeveloperGuide/using-domain-names-with-elb.html">Using Domain Names With Elastic Load Balancing</a> in the <i>Elastic Load Balancing Developer Guide</i>. </p>
	 * @var string
	 */
	public $CanonicalHostedZoneName;
	/**
	 * The CanonicalHostedZoneNameID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides the ID of the Amazon Route 53 hosted zone name that is associated with the LoadBalancer. For information on how to associate or disassociate your load balancer with a hosted zone, go to <a href="http://docs.amazonwebservices.com/ElasticLoadBalancing/latest/DeveloperGuide/using-domain-names-with-elb.html">Using Domain Names With Elastic Load Balancing</a> in the <i>Elastic Load Balancing Developer Guide</i>. </p>
	 * @var string
	 */
	public $CanonicalHostedZoneNameID;
	/**
	 * The ListenerDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> LoadBalancerPort, InstancePort, Protocol, InstanceProtocol, and PolicyNames are returned in a list of tuples in the ListenerDescriptions element. </p>
	 * @var AmazonElasticLoadBalancingTypeListenerDescriptions
	 */
	public $ListenerDescriptions;
	/**
	 * The Policies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides a list of policies defined for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypePolicies
	 */
	public $Policies;
	/**
	 * The BackendServerDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Contains a list of back-end server descriptions. </p>
	 * @var AmazonElasticLoadBalancingTypeBackendServerDescriptions
	 */
	public $BackendServerDescriptions;
	/**
	 * The AvailabilityZones
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Specifies a list of Availability Zones. </p>
	 * @var AmazonElasticLoadBalancingTypeAvailabilityZones
	 */
	public $AvailabilityZones;
	/**
	 * The Subnets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides a list of VPC subnet IDs for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeSubnets
	 */
	public $Subnets;
	/**
	 * The VPCId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides the ID of the VPC attached to the LoadBalancer. </p>
	 * @var string
	 */
	public $VPCId;
	/**
	 * The Instances
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides a list of EC2 instance IDs for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeInstances
	 */
	public $Instances;
	/**
	 * The HealthCheck
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Specifies information regarding the various health probes conducted on the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeHealthCheck
	 */
	public $HealthCheck;
	/**
	 * The SourceSecurityGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The security group that you can use as part of your inbound rules for your LoadBalancer's back-end Amazon EC2 application instances. To only allow traffic from LoadBalancers, add a security group rule to your back end instance that specifies this source security group as the inbound source. </p>
	 * @var AmazonElasticLoadBalancingTypeSourceSecurityGroup
	 */
	public $SourceSecurityGroup;
	/**
	 * The SecurityGroups
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The security groups the LoadBalancer is a member of (VPC only). </p>
	 * @var AmazonElasticLoadBalancingTypeSecurityGroups
	 */
	public $SecurityGroups;
	/**
	 * The CreatedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides the date and time the LoadBalancer was created. </p>
	 * @var dateTime
	 */
	public $CreatedTime;
	/**
	 * The Scheme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p>Specifies the type of LoadBalancer.</p> <p>If the <code>Scheme</code> is <code>internet-facing</code>, the LoadBalancer has a publicly resolvable DNS name that resolves to public IP addresses.</p> <p>If the <code>Scheme</code> is <code>internal</code>, the LoadBalancer has a publicly resolvable DNS name that resolves to private IP addresses.</p> <p> This option is only available for LoadBalancers attached to an Amazon VPC. </p>
	 * @var string
	 */
	public $Scheme;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param string DNSName
	 * @param string CanonicalHostedZoneName
	 * @param string CanonicalHostedZoneNameID
	 * @param AmazonElasticLoadBalancingTypeListenerDescriptions ListenerDescriptions
	 * @param AmazonElasticLoadBalancingTypePolicies Policies
	 * @param AmazonElasticLoadBalancingTypeBackendServerDescriptions BackendServerDescriptions
	 * @param AmazonElasticLoadBalancingTypeAvailabilityZones AvailabilityZones
	 * @param AmazonElasticLoadBalancingTypeSubnets Subnets
	 * @param string VPCId
	 * @param AmazonElasticLoadBalancingTypeInstances Instances
	 * @param AmazonElasticLoadBalancingTypeHealthCheck HealthCheck
	 * @param AmazonElasticLoadBalancingTypeSourceSecurityGroup SourceSecurityGroup
	 * @param AmazonElasticLoadBalancingTypeSecurityGroups SecurityGroups
	 * @param dateTime CreatedTime
	 * @param string Scheme
	 * @return AmazonElasticLoadBalancingTypeLoadBalancerDescription
	 */
	public function __construct($_LoadBalancerName = null,$_DNSName = null,$_CanonicalHostedZoneName = null,$_CanonicalHostedZoneNameID = null,$_ListenerDescriptions = null,$_Policies = null,$_BackendServerDescriptions = null,$_AvailabilityZones = null,$_Subnets = null,$_VPCId = null,$_Instances = null,$_HealthCheck = null,$_SourceSecurityGroup = null,$_SecurityGroups = null,$_CreatedTime = null,$_Scheme = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'DNSName'=>$_DNSName,'CanonicalHostedZoneName'=>$_CanonicalHostedZoneName,'CanonicalHostedZoneNameID'=>$_CanonicalHostedZoneNameID,'ListenerDescriptions'=>$_ListenerDescriptions,'Policies'=>$_Policies,'BackendServerDescriptions'=>$_BackendServerDescriptions,'AvailabilityZones'=>$_AvailabilityZones,'Subnets'=>$_Subnets,'VPCId'=>$_VPCId,'Instances'=>$_Instances,'HealthCheck'=>$_HealthCheck,'SourceSecurityGroup'=>$_SourceSecurityGroup,'SecurityGroups'=>$_SecurityGroups,'CreatedTime'=>$_CreatedTime,'Scheme'=>$_Scheme));
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
	 * Set CanonicalHostedZoneName
	 * @param string CanonicalHostedZoneName
	 * @return string
	 */
	public function setCanonicalHostedZoneName($_CanonicalHostedZoneName)
	{
		return ($this->CanonicalHostedZoneName = $_CanonicalHostedZoneName);
	}
	/**
	 * Get CanonicalHostedZoneName
	 * @return string
	 */
	public function getCanonicalHostedZoneName()
	{
		return $this->CanonicalHostedZoneName;
	}
	/**
	 * Set CanonicalHostedZoneNameID
	 * @param string CanonicalHostedZoneNameID
	 * @return string
	 */
	public function setCanonicalHostedZoneNameID($_CanonicalHostedZoneNameID)
	{
		return ($this->CanonicalHostedZoneNameID = $_CanonicalHostedZoneNameID);
	}
	/**
	 * Get CanonicalHostedZoneNameID
	 * @return string
	 */
	public function getCanonicalHostedZoneNameID()
	{
		return $this->CanonicalHostedZoneNameID;
	}
	/**
	 * Set ListenerDescriptions
	 * @param ListenerDescriptions ListenerDescriptions
	 * @return ListenerDescriptions
	 */
	public function setListenerDescriptions($_ListenerDescriptions)
	{
		return ($this->ListenerDescriptions = $_ListenerDescriptions);
	}
	/**
	 * Get ListenerDescriptions
	 * @return AmazonElasticLoadBalancingTypeListenerDescriptions
	 */
	public function getListenerDescriptions()
	{
		return $this->ListenerDescriptions;
	}
	/**
	 * Set Policies
	 * @param Policies Policies
	 * @return Policies
	 */
	public function setPolicies($_Policies)
	{
		return ($this->Policies = $_Policies);
	}
	/**
	 * Get Policies
	 * @return AmazonElasticLoadBalancingTypePolicies
	 */
	public function getPolicies()
	{
		return $this->Policies;
	}
	/**
	 * Set BackendServerDescriptions
	 * @param BackendServerDescriptions BackendServerDescriptions
	 * @return BackendServerDescriptions
	 */
	public function setBackendServerDescriptions($_BackendServerDescriptions)
	{
		return ($this->BackendServerDescriptions = $_BackendServerDescriptions);
	}
	/**
	 * Get BackendServerDescriptions
	 * @return AmazonElasticLoadBalancingTypeBackendServerDescriptions
	 */
	public function getBackendServerDescriptions()
	{
		return $this->BackendServerDescriptions;
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
	 * Set VPCId
	 * @param string VPCId
	 * @return string
	 */
	public function setVPCId($_VPCId)
	{
		return ($this->VPCId = $_VPCId);
	}
	/**
	 * Get VPCId
	 * @return string
	 */
	public function getVPCId()
	{
		return $this->VPCId;
	}
	/**
	 * Set Instances
	 * @param Instances Instances
	 * @return Instances
	 */
	public function setInstances($_Instances)
	{
		return ($this->Instances = $_Instances);
	}
	/**
	 * Get Instances
	 * @return AmazonElasticLoadBalancingTypeInstances
	 */
	public function getInstances()
	{
		return $this->Instances;
	}
	/**
	 * Set HealthCheck
	 * @param HealthCheck HealthCheck
	 * @return HealthCheck
	 */
	public function setHealthCheck($_HealthCheck)
	{
		return ($this->HealthCheck = $_HealthCheck);
	}
	/**
	 * Get HealthCheck
	 * @return AmazonElasticLoadBalancingTypeHealthCheck
	 */
	public function getHealthCheck()
	{
		return $this->HealthCheck;
	}
	/**
	 * Set SourceSecurityGroup
	 * @param SourceSecurityGroup SourceSecurityGroup
	 * @return SourceSecurityGroup
	 */
	public function setSourceSecurityGroup($_SourceSecurityGroup)
	{
		return ($this->SourceSecurityGroup = $_SourceSecurityGroup);
	}
	/**
	 * Get SourceSecurityGroup
	 * @return AmazonElasticLoadBalancingTypeSourceSecurityGroup
	 */
	public function getSourceSecurityGroup()
	{
		return $this->SourceSecurityGroup;
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
	 * Set CreatedTime
	 * @param dateTime CreatedTime
	 * @return dateTime
	 */
	public function setCreatedTime($_CreatedTime)
	{
		return ($this->CreatedTime = $_CreatedTime);
	}
	/**
	 * Get CreatedTime
	 * @return dateTime
	 */
	public function getCreatedTime()
	{
		return $this->CreatedTime;
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