<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDescribeLoadBalancers
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDescribeLoadBalancers
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDescribeLoadBalancers extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of names associated with the LoadBalancers at creation time. </p>
	 * @var AmazonElasticLoadBalancingTypeLoadBalancerNames
	 */
	public $LoadBalancerNames;
	/**
	 * The Marker
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> An optional parameter reserved for future use. </p>
	 * @var string
	 */
	public $Marker;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeLoadBalancerNames LoadBalancerNames
	 * @param string Marker
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancers
	 */
	public function __construct($_LoadBalancerNames = null,$_Marker = null)
	{
		parent::__construct(array('LoadBalancerNames'=>$_LoadBalancerNames,'Marker'=>$_Marker));
	}
	/**
	 * Set LoadBalancerNames
	 * @param LoadBalancerNames LoadBalancerNames
	 * @return LoadBalancerNames
	 */
	public function setLoadBalancerNames($_LoadBalancerNames)
	{
		return ($this->LoadBalancerNames = $_LoadBalancerNames);
	}
	/**
	 * Get LoadBalancerNames
	 * @return AmazonElasticLoadBalancingTypeLoadBalancerNames
	 */
	public function getLoadBalancerNames()
	{
		return $this->LoadBalancerNames;
	}
	/**
	 * Set Marker
	 * @param string Marker
	 * @return string
	 */
	public function setMarker($_Marker)
	{
		return ($this->Marker = $_Marker);
	}
	/**
	 * Get Marker
	 * @return string
	 */
	public function getMarker()
	{
		return $this->Marker;
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