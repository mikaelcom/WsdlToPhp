<?php
/**
 * Class file for MicrosoftSmDhServiceGet
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceGet
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceGet extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call GetSensorDescriptionByName
	 * Meta informations :
	 * 	- documentation : Get the meta data for a registered sensor.
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeGetSensorDescriptionByName::getPublisherName()
	 * @uses MicrosoftSmDhTypeGetSensorDescriptionByName::getPassword()
	 * @uses MicrosoftSmDhTypeGetSensorDescriptionByName::getSensorName()
	 * @param MicrosoftSmDhTypeGetSensorDescriptionByName GetSensorDescriptionByName
	 * @return MicrosoftSmDhTypeGetSensorDescriptionByNameResponse
	 */
	public function GetSensorDescriptionByName(MicrosoftSmDhTypeGetSensorDescriptionByName $_MicrosoftSmDhTypeGetSensorDescriptionByName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSensorDescriptionByName(array('publisherName'=>$_MicrosoftSmDhTypeGetSensorDescriptionByName->getPublisherName(),'password'=>$_MicrosoftSmDhTypeGetSensorDescriptionByName->getPassword(),'sensorName'=>$_MicrosoftSmDhTypeGetSensorDescriptionByName->getSensorName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestScalarSensorData
	 * Meta informations :
	 * 	- documentation : Returns the latest scalar data reported by a sensor
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeGetLatestScalarSensorData::getSensorName()
	 * @uses MicrosoftSmDhTypeGetLatestScalarSensorData::getPublisherName()
	 * @param MicrosoftSmDhTypeGetLatestScalarSensorData GetLatestScalarSensorData
	 * @return MicrosoftSmDhTypeGetLatestScalarSensorDataResponse
	 */
	public function GetLatestScalarSensorData(MicrosoftSmDhTypeGetLatestScalarSensorData $_MicrosoftSmDhTypeGetLatestScalarSensorData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestScalarSensorData(array('sensorName'=>$_MicrosoftSmDhTypeGetLatestScalarSensorData->getSensorName(),'publisherName'=>$_MicrosoftSmDhTypeGetLatestScalarSensorData->getPublisherName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestBinarySensorData
	 * Meta informations :
	 * 	- documentation : Returns the latest image data reported by a sensor
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeGetLatestBinarySensorData::getSensorName()
	 * @uses MicrosoftSmDhTypeGetLatestBinarySensorData::getPublisherName()
	 * @param MicrosoftSmDhTypeGetLatestBinarySensorData GetLatestBinarySensorData
	 * @return MicrosoftSmDhTypeGetLatestBinarySensorDataResponse
	 */
	public function GetLatestBinarySensorData(MicrosoftSmDhTypeGetLatestBinarySensorData $_MicrosoftSmDhTypeGetLatestBinarySensorData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestBinarySensorData(array('sensorName'=>$_MicrosoftSmDhTypeGetLatestBinarySensorData->getSensorName(),'publisherName'=>$_MicrosoftSmDhTypeGetLatestBinarySensorData->getPublisherName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestSensingTime
	 * Meta informations :
	 * 	- documentation : Gets the latest timestamp of a sensor data
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeGetLatestSensingTime::getSensorName()
	 * @uses MicrosoftSmDhTypeGetLatestSensingTime::getPublisherName()
	 * @param MicrosoftSmDhTypeGetLatestSensingTime GetLatestSensingTime
	 * @return MicrosoftSmDhTypeGetLatestSensingTimeResponse
	 */
	public function GetLatestSensingTime(MicrosoftSmDhTypeGetLatestSensingTime $_MicrosoftSmDhTypeGetLatestSensingTime)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestSensingTime(array('sensorName'=>$_MicrosoftSmDhTypeGetLatestSensingTime->getSensorName(),'publisherName'=>$_MicrosoftSmDhTypeGetLatestSensingTime->getPublisherName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllSensorsByPublisher
	 * Meta informations :
	 * 	- documentation : Return all sensors published by a publisher
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeGetAllSensorsByPublisher::getPublisherName()
	 * @uses MicrosoftSmDhTypeGetAllSensorsByPublisher::getPassword()
	 * @param MicrosoftSmDhTypeGetAllSensorsByPublisher GetAllSensorsByPublisher
	 * @return MicrosoftSmDhTypeGetAllSensorsByPublisherResponse
	 */
	public function GetAllSensorsByPublisher(MicrosoftSmDhTypeGetAllSensorsByPublisher $_MicrosoftSmDhTypeGetAllSensorsByPublisher)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllSensorsByPublisher(array('publisherName'=>$_MicrosoftSmDhTypeGetAllSensorsByPublisher->getPublisherName(),'password'=>$_MicrosoftSmDhTypeGetAllSensorsByPublisher->getPassword())));
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
	 * @return MicrosoftSmDhTypeGetAllSensorsByPublisherResponse
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