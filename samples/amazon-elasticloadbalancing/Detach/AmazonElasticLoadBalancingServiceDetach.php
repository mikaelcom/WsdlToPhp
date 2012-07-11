<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceDetach
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceDetach
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceDetach extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call DetachLoadBalancerFromSubnets
	 * Meta informations :
	 * 	- documentation : <p> Removes subnets from the set of configured subnets in the VPC for the LoadBalancer. </p> <p> After a subnet is removed all of the EndPoints registered with the LoadBalancer that are in the removed subnet will go into the <i>OutOfService</i> state. When a subnet is removed, the LoadBalancer will balance the traffic among the remaining routable subnets for the LoadBalancer. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets::getSubnets()
	 * @param AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets DetachLoadBalancerFromSubnets
	 * @return AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResponse
	 */
	public function DetachLoadBalancerFromSubnets(AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets $_AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DetachLoadBalancerFromSubnets(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets->getLoadBalancerName(),'Subnets'=>$_AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnets->getSubnets())));
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
	 * @return AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResponse
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