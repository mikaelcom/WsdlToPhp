<?php
/**
 * Class file for YMailServiceSend
 * @date 02/07/2012
 */
/**
 * Class YMailServiceSend
 * @date 02/07/2012
 */
class YMailServiceSend extends YMailWsdlClass
{
	/**
	 * Method to call SendMessage
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeSendMessage::getMessage()
	 * @uses YMailTypeSendMessage::getSavecopy()
	 * @param YMailTypeSendMessage SendMessage
	 * @return YMailTypeSendMessageResponse
	 */
	public function SendMessage(YMailTypeSendMessage $_YMailTypeSendMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendMessage(array('message'=>$_YMailTypeSendMessage->getMessage(),'savecopy'=>$_YMailTypeSendMessage->getSavecopy())));
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
	 * @return YMailTypeSendMessageResponse
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