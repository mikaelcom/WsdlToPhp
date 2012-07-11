<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceDelete
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceDelete
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceDelete extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call DeleteLoadBalancerPolicy
	 * Meta informations :
	 * 	- documentation : <p> Deletes a policy from the LoadBalancer. The specified policy must not be enabled for any listeners. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy::getPolicyName()
	 * @param AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy DeleteLoadBalancerPolicy
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicyResponse
	 */
	public function DeleteLoadBalancerPolicy(AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy $_AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteLoadBalancerPolicy(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy->getLoadBalancerName(),'PolicyName'=>$_AmazonElasticLoadBalancingTypeDeleteLoadBalancerPolicy->getPolicyName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteLoadBalancer
	 * Meta informations :
	 * 	- documentation : <p> Deletes the specified LoadBalancer. </p> <p> If attempting to recreate the LoadBalancer, the client must reconfigure all the settings. The DNS name associated with a deleted LoadBalancer will no longer be usable. Once deleted, the name and associated DNS record of the LoadBalancer no longer exist and traffic sent to any of its IP addresses will no longer be delivered to client instances. The client will not receive the same DNS name even if a new LoadBalancer with same LoadBalancerName is created. </p> <p> To successfully call this API, the client must provide the same account credentials as were used to create the LoadBalancer. </p> <note> By design, if the LoadBalancer does not exist or has already been deleted, DeleteLoadBalancer still succeeds. </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDeleteLoadBalancer::getLoadBalancerName()
	 * @param AmazonElasticLoadBalancingTypeDeleteLoadBalancer DeleteLoadBalancer
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerResponse
	 */
	public function DeleteLoadBalancer(AmazonElasticLoadBalancingTypeDeleteLoadBalancer $_AmazonElasticLoadBalancingTypeDeleteLoadBalancer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteLoadBalancer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDeleteLoadBalancer->getLoadBalancerName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteLoadBalancerListeners
	 * Meta informations :
	 * 	- documentation : <p> Deletes listeners from the LoadBalancer for the specified port. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners::getLoadBalancerPorts()
	 * @param AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners DeleteLoadBalancerListeners
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResponse
	 */
	public function DeleteLoadBalancerListeners(AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners $_AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteLoadBalancerListeners(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners->getLoadBalancerName(),'LoadBalancerPorts'=>$_AmazonElasticLoadBalancingTypeDeleteLoadBalancerListeners->getLoadBalancerPorts())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>