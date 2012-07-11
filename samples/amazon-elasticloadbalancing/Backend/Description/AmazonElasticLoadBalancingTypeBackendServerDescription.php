<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeBackendServerDescription
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeBackendServerDescription
 * Documentation : <p> This data type is used as a response element in the <a>DescribeLoadBalancers</a> action to describe the configuration of the back-end server. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeBackendServerDescription extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The InstancePort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides the port on which the back-end server is listening. </p>
	 * @var AmazonElasticLoadBalancingTypeInstancePort
	 */
	public $InstancePort;
	/**
	 * The PolicyNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides a list of policy names enabled for the back-end server. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyNames
	 */
	public $PolicyNames;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeInstancePort InstancePort
	 * @param AmazonElasticLoadBalancingTypePolicyNames PolicyNames
	 * @return AmazonElasticLoadBalancingTypeBackendServerDescription
	 */
	public function __construct($_InstancePort = null,$_PolicyNames = null)
	{
		parent::__construct(array('InstancePort'=>$_InstancePort,'PolicyNames'=>$_PolicyNames));
	}
	/**
	 * Set InstancePort
	 * @param InstancePort InstancePort
	 * @return InstancePort
	 */
	public function setInstancePort($_InstancePort)
	{
		return ($this->InstancePort = AmazonElasticLoadBalancingTypeInstancePort::valueIsValid($_InstancePort)?$_InstancePort:null);
	}
	/**
	 * Get InstancePort
	 * @return AmazonElasticLoadBalancingTypeInstancePort
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