<?php
/**
 * Class file for AmazonEc2ServiceUnmonitor
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2ServiceUnmonitor
 * @date 10/07/2012
 */
class AmazonEc2ServiceUnmonitor extends AmazonEc2WsdlClass
{
	/**
	 * Method to call UnmonitorInstances
	 * @uses AmazonEc2WsdlClass::getSoapClient()
	 * @uses AmazonEc2WsdlClass::setResult()
	 * @uses AmazonEc2WsdlClass::getResult()
	 * @uses AmazonEc2WsdlClass::saveLastError()
	 * @uses AmazonEc2TypeMonitorInstancesType::getInstancesSet()
	 * @param AmazonEc2TypeMonitorInstancesType MonitorInstancesType
	 * @return AmazonEc2TypeMonitorInstancesResponseType
	 */
	public function UnmonitorInstances(AmazonEc2TypeMonitorInstancesType $_AmazonEc2TypeMonitorInstancesType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UnmonitorInstances(array('instancesSet'=>$_AmazonEc2TypeMonitorInstancesType->getInstancesSet())));
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
	 * @return AmazonEc2TypeMonitorInstancesResponseType
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