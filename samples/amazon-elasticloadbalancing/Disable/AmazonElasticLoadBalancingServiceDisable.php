<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceDisable
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceDisable
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceDisable extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call DisableAvailabilityZonesForLoadBalancer
	 * Meta informations :
	 * 	- documentation : <p> Removes the specified EC2 Availability Zones from the set of configured Availability Zones for the LoadBalancer. </p> <p> There must be at least one Availability Zone registered with a LoadBalancer at all times. A client cannot remove all the Availability Zones from a LoadBalancer. Once an Availability Zone is removed, all the instances registered with the LoadBalancer that are in the removed Availability Zone go into the OutOfService state. Upon Availability Zone removal, the LoadBalancer attempts to equally balance the traffic among its remaining usable Availability Zones. Trying to remove an Availability Zone that was not associated with the LoadBalancer does nothing. </p> <note> In order for this call to be successful, the client must have created the LoadBalancer. The client must provide the same account credentials as those that were used to create the LoadBalancer. </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancer::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancer::getAvailabilityZones()
	 * @param AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancer DisableAvailabilityZonesForLoadBalancer
	 * @return AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResponse
	 */
	public function DisableAvailabilityZonesForLoadBalancer(AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancer $_AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DisableAvailabilityZonesForLoadBalancer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancer->getLoadBalancerName(),'AvailabilityZones'=>$_AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancer->getAvailabilityZones())));
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
	 * @return AmazonElasticLoadBalancingTypeDisableAvailabilityZonesForLoadBalancerResponse
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