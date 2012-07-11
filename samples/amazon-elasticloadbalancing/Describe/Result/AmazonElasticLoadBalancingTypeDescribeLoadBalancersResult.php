<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancersResult
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancersResult
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancersResult extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of LoadBalancer description structures. </p>
	 * @var AmazonElasticLoadBalancingTypeLoadBalancerDescriptions
	 */
	public $LoadBalancerDescriptions;
	/**
	 * The NextMarker
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> An optional parameter reserved for future use. </p>
	 * @var string
	 */
	public $NextMarker;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeLoadBalancerDescriptions LoadBalancerDescriptions
	 * @param string NextMarker
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancersResult
	 */
	public function __construct($_LoadBalancerDescriptions = null,$_NextMarker = null)
	{
		parent::__construct(array('LoadBalancerDescriptions'=>$_LoadBalancerDescriptions,'NextMarker'=>$_NextMarker));
	}
	/**
	 * Set LoadBalancerDescriptions
	 * @param LoadBalancerDescriptions LoadBalancerDescriptions
	 * @return LoadBalancerDescriptions
	 */
	public function setLoadBalancerDescriptions($_LoadBalancerDescriptions)
	{
		return ($this->LoadBalancerDescriptions = $_LoadBalancerDescriptions);
	}
	/**
	 * Get LoadBalancerDescriptions
	 * @return AmazonElasticLoadBalancingTypeLoadBalancerDescriptions
	 */
	public function getLoadBalancerDescriptions()
	{
		return $this->LoadBalancerDescriptions;
	}
	/**
	 * Set NextMarker
	 * @param string NextMarker
	 * @return string
	 */
	public function setNextMarker($_NextMarker)
	{
		return ($this->NextMarker = $_NextMarker);
	}
	/**
	 * Get NextMarker
	 * @return string
	 */
	public function getNextMarker()
	{
		return $this->NextMarker;
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