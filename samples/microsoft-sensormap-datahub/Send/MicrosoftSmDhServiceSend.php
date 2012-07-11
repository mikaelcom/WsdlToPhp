<?php
/**
 * Class file for MicrosoftSmDhServiceSend
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceSend
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceSend extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call SendScalarData
	 * Meta informations :
	 * 	- documentation : Archive scalar sensor data. Array data are encoded as comma separated values. Time parameter is the time stamp of the first data.
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeSendScalarData::getPublisherName()
	 * @uses MicrosoftSmDhTypeSendScalarData::getPassword()
	 * @uses MicrosoftSmDhTypeSendScalarData::getSensorName()
	 * @uses MicrosoftSmDhTypeSendScalarData::getTime()
	 * @uses MicrosoftSmDhTypeSendScalarData::getData()
	 * @param MicrosoftSmDhTypeSendScalarData SendScalarData
	 * @return MicrosoftSmDhTypeSendScalarDataResponse
	 */
	public function SendScalarData(MicrosoftSmDhTypeSendScalarData $_MicrosoftSmDhTypeSendScalarData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendScalarData(array('publisherName'=>$_MicrosoftSmDhTypeSendScalarData->getPublisherName(),'password'=>$_MicrosoftSmDhTypeSendScalarData->getPassword(),'sensorName'=>$_MicrosoftSmDhTypeSendScalarData->getSensorName(),'time'=>$_MicrosoftSmDhTypeSendScalarData->getTime(),'data'=>$_MicrosoftSmDhTypeSendScalarData->getData())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SendBinaryData
	 * Meta informations :
	 * 	- documentation : Send binary sensor data such as images, sound or video. Data are treated as a binary file. Time parameter is the time stamp of the first data.
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @uses MicrosoftSmDhTypeSendBinaryData::getPublisherName()
	 * @uses MicrosoftSmDhTypeSendBinaryData::getPassword()
	 * @uses MicrosoftSmDhTypeSendBinaryData::getSensorName()
	 * @uses MicrosoftSmDhTypeSendBinaryData::getTime()
	 * @uses MicrosoftSmDhTypeSendBinaryData::getData()
	 * @param MicrosoftSmDhTypeSendBinaryData SendBinaryData
	 * @return MicrosoftSmDhTypeSendBinaryDataResponse
	 */
	public function SendBinaryData(MicrosoftSmDhTypeSendBinaryData $_MicrosoftSmDhTypeSendBinaryData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendBinaryData(array('publisherName'=>$_MicrosoftSmDhTypeSendBinaryData->getPublisherName(),'password'=>$_MicrosoftSmDhTypeSendBinaryData->getPassword(),'sensorName'=>$_MicrosoftSmDhTypeSendBinaryData->getSensorName(),'time'=>$_MicrosoftSmDhTypeSendBinaryData->getTime(),'data'=>$_MicrosoftSmDhTypeSendBinaryData->getData())));
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
	 * @return MicrosoftSmDhTypeSendBinaryDataResponse
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