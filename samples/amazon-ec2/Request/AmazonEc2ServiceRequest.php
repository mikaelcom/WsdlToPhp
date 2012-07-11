<?php
/**
 * Class file for AmazonEc2ServiceRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceRequest
 * @date 10/07/2012
 */
class AmazonEc2ServiceRequest extends AmazonEc2WsdlClass
{
	/**
	 * Method to call RequestSpotInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getSpotPrice()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getInstanceCount()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getType()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getValidFrom()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getValidUntil()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getLaunchGroup()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getAvailabilityZoneGroup()
	 * @uses AmazonEc2TypeRequestSpotInstancesType::getLaunchSpecification()
	 * @param AmazonEc2TypeRequestSpotInstancesType RequestSpotInstancesType
	 * @return AmazonEc2TypeRequestSpotInstancesResponseType
	 */
	public function RequestSpotInstances(AmazonEc2TypeRequestSpotInstancesType $_AmazonEc2TypeRequestSpotInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RequestSpotInstances(array('spotPrice'=>$_AmazonEc2TypeRequestSpotInstancesType->getSpotPrice(),'instanceCount'=>$_AmazonEc2TypeRequestSpotInstancesType->getInstanceCount(),'type'=>$_AmazonEc2TypeRequestSpotInstancesType->getType(),'validFrom'=>$_AmazonEc2TypeRequestSpotInstancesType->getValidFrom(),'validUntil'=>$_AmazonEc2TypeRequestSpotInstancesType->getValidUntil(),'launchGroup'=>$_AmazonEc2TypeRequestSpotInstancesType->getLaunchGroup(),'availabilityZoneGroup'=>$_AmazonEc2TypeRequestSpotInstancesType->getAvailabilityZoneGroup(),'launchSpecification'=>$_AmazonEc2TypeRequestSpotInstancesType->getLaunchSpecification())));
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
	 * @return AmazonEc2TypeRequestSpotInstancesResponseType
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