<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeInstanceHealthResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeInstanceHealthResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeInstanceHealthResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The InstanceStates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list containing health information for the specified instances. </p>
	 * @var AmazonElasticLoadBalancingTypeInstanceStates
	 */
	public $InstanceStates;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeInstanceStates InstanceStates
	 * @return AmazonElasticLoadBalancingTypeDescribeInstanceHealthResult
	 */
	public function __construct($_InstanceStates = null)
	{
		parent::__construct(array('InstanceStates'=>$_InstanceStates));
	}
	/**
	 * Set InstanceStates
	 * @param InstanceStates InstanceStates
	 * @return InstanceStates
	 */
	public function setInstanceStates($_InstanceStates)
	{
		return ($this->InstanceStates = $_InstanceStates);
	}
	/**
	 * Get InstanceStates
	 * @return AmazonElasticLoadBalancingTypeInstanceStates
	 */
	public function getInstanceStates()
	{
		return $this->InstanceStates;
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