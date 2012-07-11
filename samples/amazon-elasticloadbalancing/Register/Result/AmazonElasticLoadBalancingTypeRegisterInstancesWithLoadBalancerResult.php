<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The Instances
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> An updated list of instances for the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeInstances
	 */
	public $Instances;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeInstances Instances
	 * @return AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResult
	 */
	public function __construct($_Instances = null)
	{
		parent::__construct(array('Instances'=>$_Instances));
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