<?php
/**
 * Class file for YMailServiceGet
 * @date 02/07/2012
 */
/**
 * Class YMailServiceGet
 * @date 02/07/2012
 */
class YMailServiceGet extends YMailWsdlClass
{
	/**
	 * Method to call GetUserData
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @param YMailTypeGetUserData GetUserData
	 * @return YMailTypeGetUserDataResponse
	 */
	public function GetUserData(YMailTypeGetUserData $_YMailTypeGetUserData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserData(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMessage
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeGetMessage::getTruncateAt()
	 * @uses YMailTypeGetMessage::getFid()
	 * @uses YMailTypeGetMessage::getMid()
	 * @uses YMailTypeGetMessage::getMessage()
	 * @uses YMailTypeGetMessage::getCharsetHint()
	 * @param YMailTypeGetMessage GetMessage
	 * @return YMailTypeGetMessageResponse
	 */
	public function GetMessage(YMailTypeGetMessage $_YMailTypeGetMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMessage(array('truncateAt'=>$_YMailTypeGetMessage->getTruncateAt(),'fid'=>$_YMailTypeGetMessage->getFid(),'mid'=>$_YMailTypeGetMessage->getMid(),'message'=>$_YMailTypeGetMessage->getMessage(),'charsetHint'=>$_YMailTypeGetMessage->getCharsetHint())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMessageRawHeader
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeGetMessageRawHeader::getFid()
	 * @uses YMailTypeGetMessageRawHeader::getMid()
	 * @param YMailTypeGetMessageRawHeader GetMessageRawHeader
	 * @return YMailTypeGetMessageRawHeaderResponse
	 */
	public function GetMessageRawHeader(YMailTypeGetMessageRawHeader $_YMailTypeGetMessageRawHeader)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMessageRawHeader(array('fid'=>$_YMailTypeGetMessageRawHeader->getFid(),'mid'=>$_YMailTypeGetMessageRawHeader->getMid())));
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
	 * @return YMailTypeGetMessageRawHeaderResponse
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