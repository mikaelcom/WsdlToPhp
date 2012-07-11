<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name associated with the LoadBalancer. The name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The LoadBalancerPort
	 * Meta informations :
	 * 	- documentation : <p> The external port of the LoadBalancer with which this policy applies to. </p>
	 * @var integer
	 */
	public $LoadBalancerPort;
	/**
	 * The PolicyNames
	 * Meta informations :
	 * 	- documentation : <p> List of policies to be associated with the listener. Currently this list can have at most one policy. If the list is empty, the current policy is removed from the listener. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyNames
	 */
	public $PolicyNames;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param integer LoadBalancerPort
	 * @param AmazonElasticLoadBalancingTypePolicyNames PolicyNames
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener
	 */
	public function __construct($_LoadBalancerName = null,$_LoadBalancerPort = null,$_PolicyNames = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'LoadBalancerPort'=>$_LoadBalancerPort,'PolicyNames'=>$_PolicyNames));
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
	 * Set LoadBalancerPort
	 * @param integer LoadBalancerPort
	 * @return integer
	 */
	public function setLoadBalancerPort($_LoadBalancerPort)
	{
		return ($this->LoadBalancerPort = $_LoadBalancerPort);
	}
	/**
	 * Get LoadBalancerPort
	 * @return integer
	 */
	public function getLoadBalancerPort()
	{
		return $this->LoadBalancerPort;
	}
	/**
	 * Set PolicyNames
	 * @param PolicyNames PolicyNames
	 * @return PolicyNames
	 */
	public function setPolicyNames($_PolicyNames)
	{
		return ($this->PolicyNames = $_PolicyNames);
	}
	/**
	 * Get PolicyNames
	 * @return AmazonElasticLoadBalancingTypePolicyNames
	 */
	public function getPolicyNames()
	{
		return $this->PolicyNames;
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