<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name of the new LoadBalancer. The name must be unique within your AWS account. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The Listeners
	 * Meta informations :
	 * 	- documentation : <p> A list of <code>LoadBalancerPort</code>, <code>InstancePort</code>, <code>Protocol</code>, and <code>SSLCertificateId</code> items. </p>
	 * @var AmazonElasticLoadBalancingTypeListeners
	 */
	public $Listeners;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param AmazonElasticLoadBalancingTypeListeners Listeners
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners
	 */
	public function __construct($_LoadBalancerName = null,$_Listeners = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'Listeners'=>$_Listeners));
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
	 * Set Listeners
	 * @param Listeners Listeners
	 * @return Listeners
	 */
	public function setListeners($_Listeners)
	{
		return ($this->Listeners = $_Listeners);
	}
	/**
	 * Get Listeners
	 * @return AmazonElasticLoadBalancingTypeListeners
	 */
	public function getListeners()
	{
		return $this->Listeners;
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