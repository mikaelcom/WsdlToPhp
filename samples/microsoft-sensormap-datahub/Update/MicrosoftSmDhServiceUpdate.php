<?php
/**
 * Class file for MicrosoftSmDhServiceUpdate
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceUpdate
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceUpdate extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call UpdateSensorLocation
	 * Meta informations :
	 * 	- documentation : Changes the location of a sensor
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeUpdateSensorLocation::getPublisherName()
	 * @uses MicrosoftSmDhTypeUpdateSensorLocation::getPassword()
	 * @uses MicrosoftSmDhTypeUpdateSensorLocation::getSensorName()
	 * @uses MicrosoftSmDhTypeUpdateSensorLocation::getLat()
	 * @uses MicrosoftSmDhTypeUpdateSensorLocation::getLon()
	 * @uses MicrosoftSmDhTypeUpdateSensorLocation::getAlt()
	 * @param MicrosoftSmDhTypeUpdateSensorLocation UpdateSensorLocation
	 * @return MicrosoftSmDhTypeUpdateSensorLocationResponse
	 */
	public function UpdateSensorLocation(MicrosoftSmDhTypeUpdateSensorLocation $_MicrosoftSmDhTypeUpdateSensorLocation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateSensorLocation(array('publisherName'=>$_MicrosoftSmDhTypeUpdateSensorLocation->getPublisherName(),'password'=>$_MicrosoftSmDhTypeUpdateSensorLocation->getPassword(),'sensorName'=>$_MicrosoftSmDhTypeUpdateSensorLocation->getSensorName(),'lat'=>$_MicrosoftSmDhTypeUpdateSensorLocation->getLat(),'lon'=>$_MicrosoftSmDhTypeUpdateSensorLocation->getLon(),'alt'=>$_MicrosoftSmDhTypeUpdateSensorLocation->getAlt())));
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
	 * @return MicrosoftSmDhTypeUpdateSensorLocationResponse
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