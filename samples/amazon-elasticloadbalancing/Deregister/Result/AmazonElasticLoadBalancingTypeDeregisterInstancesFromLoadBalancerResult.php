<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The Instances
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> An updated list of remaining instances registered with the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeInstances
	 */
	public $Instances;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeInstances Instances
	 * @return AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResult
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