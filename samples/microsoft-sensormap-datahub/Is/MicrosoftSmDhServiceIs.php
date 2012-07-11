<?php
/**
 * Class file for MicrosoftSmDhServiceIs
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceIs
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceIs extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call IsDataYoungerThan
	 * Meta informations :
	 * 	- documentation : Returns true of the sensor data is younger than specified milliseconds
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeIsDataYoungerThan::getSensorName()
	 * @uses MicrosoftSmDhTypeIsDataYoungerThan::getPublisherName()
	 * @uses MicrosoftSmDhTypeIsDataYoungerThan::getMilliSeconds()
	 * @param MicrosoftSmDhTypeIsDataYoungerThan IsDataYoungerThan
	 * @return MicrosoftSmDhTypeIsDataYoungerThanResponse
	 */
	public function IsDataYoungerThan(MicrosoftSmDhTypeIsDataYoungerThan $_MicrosoftSmDhTypeIsDataYoungerThan)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsDataYoungerThan(array('sensorName'=>$_MicrosoftSmDhTypeIsDataYoungerThan->getSensorName(),'publisherName'=>$_MicrosoftSmDhTypeIsDataYoungerThan->getPublisherName(),'milliSeconds'=>$_MicrosoftSmDhTypeIsDataYoungerThan->getMilliSeconds())));
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
	 * @return MicrosoftSmDhTypeIsDataYoungerThanResponse
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