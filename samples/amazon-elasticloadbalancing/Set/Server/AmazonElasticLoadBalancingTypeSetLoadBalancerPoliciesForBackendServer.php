<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The mnemonic name associated with the LoadBalancer. This name must be unique within the client AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The InstancePort
	 * Meta informations :
	 * 	- documentation : <p> The port number associated with the back-end server. </p>
	 * @var integer
	 */
	public $InstancePort;
	/**
	 * The PolicyNames
	 * Meta informations :
	 * 	- documentation : <p> List of policy names to be set. If the list is empty, then all current polices are removed from the back-end server. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyNames
	 */
	public $PolicyNames;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param integer InstancePort
	 * @param AmazonElasticLoadBalancingTypePolicyNames PolicyNames
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer
	 */
	public function __construct($_LoadBalancerName = null,$_InstancePort = null,$_PolicyNames = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'InstancePort'=>$_InstancePort,'PolicyNames'=>$_PolicyNames));
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
	 * Set InstancePort
	 * @param integer InstancePort
	 * @return integer
	 */
	public function setInstancePort($_InstancePort)
	{
		return ($this->InstancePort = $_InstancePort);
	}
	/**
	 * Get InstancePort
	 * @return integer
	 */
	public function getInstancePort()
	{
		return $this->InstancePort;
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