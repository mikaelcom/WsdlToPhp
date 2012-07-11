<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The Instances
	 * Meta informations :
	 * 	- documentation : <p> A list of instance IDs that should be registered with the LoadBalancer.</p> <note>When the instance is stopped and then restarted, the IP addresses associated with your instance changes. Elastic Load Balancing cannot recognize the new IP address, which prevents it from routing traffic to your instances. We recommend that you de-register your Amazon EC2 instances from your load balancer after you stop your instance, and then register the load balancer with your instance after you've restarted. To de-register your instances from load balancer, use <a>DeregisterInstancesFromLoadBalancer</a> action.</note>
	 * @var AmazonElasticLoadBalancingTypeInstances
	 */
	public $Instances;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeInstances Instances
	 * @return AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer
	 */
	public function __construct($_LoadBalancerName = null,$_Instances = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'Instances'=>$_Instances));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>