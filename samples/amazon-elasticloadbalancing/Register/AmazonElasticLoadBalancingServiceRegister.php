<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceRegister
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceRegister
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceRegister extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call RegisterInstancesWithLoadBalancer
	 * Meta informations :
	 * 	- documentation : <p> Adds new instances to the LoadBalancer. </p> <p> Once the instance is registered, it starts receiving traffic and requests from the LoadBalancer. Any instance that is not in any of the Availability Zones registered for the LoadBalancer will be moved to the <i>OutOfService</i> state. It will move to the <i>InService</i> state when the Availability Zone is added to the LoadBalancer. </p> <note> In order for this call to be successful, the client must have created the LoadBalancer. The client must provide the same account credentials as those that were used to create the LoadBalancer. </note> <note> Completion of this API does not guarantee that operation has completed. Rather, it means that the request has been registered and the changes will happen shortly. </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer::getInstances()
	 * @param AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer RegisterInstancesWithLoadBalancer
	 * @return AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResponse
	 */
	public function RegisterInstancesWithLoadBalancer(AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer $_AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RegisterInstancesWithLoadBalancer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer->getLoadBalancerName(),'Instances'=>$_AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancer->getInstances())));
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
	 * @return AmazonElasticLoadBalancingTypeRegisterInstancesWithLoadBalancerResponse
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