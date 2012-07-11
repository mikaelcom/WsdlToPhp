<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeInstance
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeInstance
 * Documentation : <p> The Instance data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeInstance extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The InstanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides an EC2 instance ID. </p>
	 * @var string
	 */
	public $InstanceId;
	/**
	 * Constructor
	 * @param string InstanceId
	 * @return AmazonElasticLoadBalancingTypeInstance
	 */
	public function __construct($_InstanceId = null)
	{
		parent::__construct(array('InstanceId'=>$_InstanceId));
	}
	/**
	 * Set InstanceId
	 * @param string InstanceId
	 * @return string
	 */
	public function setInstanceId($_InstanceId)
	{
		return ($this->InstanceId = $_InstanceId);
	}
	/**
	 * Get InstanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->InstanceId;
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