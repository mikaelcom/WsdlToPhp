<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceEnable
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceEnable
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceEnable extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call EnableAvailabilityZonesForLoadBalancer
	 * Meta informations :
	 * 	- documentation : <p> Adds one or more EC2 Availability Zones to the LoadBalancer. </p> <p> The LoadBalancer evenly distributes requests across all its registered Availability Zones that contain instances. As a result, the client must ensure that its LoadBalancer is appropriately scaled for each registered Availability Zone. </p> <note> The new EC2 Availability Zones to be added must be in the same EC2 Region as the Availability Zones for which the LoadBalancer was created. </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer::getAvailabilityZones()
	 * @param AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer EnableAvailabilityZonesForLoadBalancer
	 * @return AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResponse
	 */
	public function EnableAvailabilityZonesForLoadBalancer(AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer $_AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EnableAvailabilityZonesForLoadBalancer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer->getLoadBalancerName(),'AvailabilityZones'=>$_AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancer->getAvailabilityZones())));
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
	 * @return AmazonElasticLoadBalancingTypeEnableAvailabilityZonesForLoadBalancerResponse
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