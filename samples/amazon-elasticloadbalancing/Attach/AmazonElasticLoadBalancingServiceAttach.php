<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceAttach
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceAttach
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceAttach extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call AttachLoadBalancerToSubnets
	 * Meta informations :
	 * 	- documentation : <p> Adds one or more subnets to the set of configured subnets in the VPC for the LoadBalancer. </p> <p> The Loadbalancers evenly distribute requests across all of the registered subnets. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnets::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnets::getSubnets()
	 * @param AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnets AttachLoadBalancerToSubnets
	 * @return AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResponse
	 */
	public function AttachLoadBalancerToSubnets(AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnets $_AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnets)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AttachLoadBalancerToSubnets(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnets->getLoadBalancerName(),'Subnets'=>$_AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnets->getSubnets())));
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
	 * @return AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResponse
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