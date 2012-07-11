<?php
/**
 * Class file for MicrosoftSmDhServiceRegister
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceRegister
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceRegister extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call RegisterSensor2
	 * Meta informations :
	 * 	- documentation : Register a sensor.
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeRegisterSensor2::getPublisherName()
	 * @uses MicrosoftSmDhTypeRegisterSensor2::getPassword()
	 * @uses MicrosoftSmDhTypeRegisterSensor2::getSensor()
	 * @param MicrosoftSmDhTypeRegisterSensor2 RegisterSensor2
	 * @return MicrosoftSmDhTypeRegisterSensor2Response
	 */
	public function RegisterSensor2(MicrosoftSmDhTypeRegisterSensor2 $_MicrosoftSmDhTypeRegisterSensor2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RegisterSensor2(array('publisherName'=>$_MicrosoftSmDhTypeRegisterSensor2->getPublisherName(),'password'=>$_MicrosoftSmDhTypeRegisterSensor2->getPassword(),'Sensor'=>$_MicrosoftSmDhTypeRegisterSensor2->getSensor())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RegisterSensor
	 * Meta informations :
	 * 	- documentation : Register a sensor.
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeRegisterSensor::getPublisherName()
	 * @uses MicrosoftSmDhTypeRegisterSensor::getPassword()
	 * @uses MicrosoftSmDhTypeRegisterSensor::getSensorDescription()
	 * @param MicrosoftSmDhTypeRegisterSensor RegisterSensor
	 * @return MicrosoftSmDhTypeRegisterSensorResponse
	 */
	public function RegisterSensor(MicrosoftSmDhTypeRegisterSensor $_MicrosoftSmDhTypeRegisterSensor)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RegisterSensor(array('publisherName'=>$_MicrosoftSmDhTypeRegisterSensor->getPublisherName(),'password'=>$_MicrosoftSmDhTypeRegisterSensor->getPassword(),'sensorDescription'=>$_MicrosoftSmDhTypeRegisterSensor->getSensorDescription())));
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
	 * @return MicrosoftSmDhTypeRegisterSensorResponse
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