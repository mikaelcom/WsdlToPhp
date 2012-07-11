<?php
/**
 * Class file for MicrosoftSmDhServiceRemove
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceRemove
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceRemove extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call RemoveSensor
	 * Meta informations :
	 * 	- documentation : Removes a sensor.
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeRemoveSensor::getPublisherName()
	 * @uses MicrosoftSmDhTypeRemoveSensor::getPassword()
	 * @uses MicrosoftSmDhTypeRemoveSensor::getSensorName()
	 * @param MicrosoftSmDhTypeRemoveSensor RemoveSensor
	 * @return MicrosoftSmDhTypeRemoveSensorResponse
	 */
	public function RemoveSensor(MicrosoftSmDhTypeRemoveSensor $_MicrosoftSmDhTypeRemoveSensor)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveSensor(array('publisherName'=>$_MicrosoftSmDhTypeRemoveSensor->getPublisherName(),'password'=>$_MicrosoftSmDhTypeRemoveSensor->getPassword(),'sensorName'=>$_MicrosoftSmDhTypeRemoveSensor->getSensorName())));
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
	 * @return MicrosoftSmDhTypeRemoveSensorResponse
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