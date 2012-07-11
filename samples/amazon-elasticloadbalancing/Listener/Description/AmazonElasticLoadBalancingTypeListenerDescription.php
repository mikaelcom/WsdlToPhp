<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeListenerDescription
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeListenerDescription
 * Documentation : <p> The ListenerDescription data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeListenerDescription extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The Listener
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonElasticLoadBalancingTypeListener
	 */
	public $Listener;
	/**
	 * The PolicyNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> A list of policies enabled for this listener. An empty list indicates that no policies are enabled. </p>
	 * @var AmazonElasticLoadBalancingTypePolicyNames
	 */
	public $PolicyNames;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeListener Listener
	 * @param AmazonElasticLoadBalancingTypePolicyNames PolicyNames
	 * @return AmazonElasticLoadBalancingTypeListenerDescription
	 */
	public function __construct($_Listener = null,$_PolicyNames = null)
	{
		parent::__construct(array('Listener'=>$_Listener,'PolicyNames'=>$_PolicyNames));
	}
	/**
	 * Set Listener
	 * @param Listener Listener
	 * @return Listener
	 */
	public function setListener($_Listener)
	{
		return ($this->Listener = $_Listener);
	}
	/**
	 * Get Listener
	 * @return AmazonElasticLoadBalancingTypeListener
	 */
	public function getListener()
	{
		return $this->Listener;
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