<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceDeregister
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceDeregister
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceDeregister extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call DeregisterInstancesFromLoadBalancer
	 * Meta informations :
	 * 	- documentation : <p> Deregisters instances from the LoadBalancer. Once the instance is deregistered, it will stop receiving traffic from the LoadBalancer. </p> <p> In order to successfully call this API, the same account credentials as those used to create the LoadBalancer must be provided. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer::getInstances()
	 * @param AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer DeregisterInstancesFromLoadBalancer
	 * @return AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResponse
	 */
	public function DeregisterInstancesFromLoadBalancer(AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer $_AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeregisterInstancesFromLoadBalancer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer->getLoadBalancerName(),'Instances'=>$_AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancer->getInstances())));
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
	 * @return AmazonElasticLoadBalancingTypeDeregisterInstancesFromLoadBalancerResponse
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