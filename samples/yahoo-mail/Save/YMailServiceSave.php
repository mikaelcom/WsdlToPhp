<?php
/**
 * Class file for YMailServiceSave
 * @date 02/07/2012
 */
/**
 * Class YMailServiceSave
 * @date 02/07/2012
 */
class YMailServiceSave extends YMailWsdlClass
{
	/**
	 * Method to call SaveRawMessage
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeSaveRawMessage::getFid()
	 * @uses YMailTypeSaveRawMessage::getText()
	 * @param YMailTypeSaveRawMessage SaveRawMessage
	 * @return YMailTypeSaveRawMessageResponse
	 */
	public function SaveRawMessage(YMailTypeSaveRawMessage $_YMailTypeSaveRawMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SaveRawMessage(array('fid'=>$_YMailTypeSaveRawMessage->getFid(),'text'=>$_YMailTypeSaveRawMessage->getText())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SaveMessage
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeSaveMessage::getDestination()
	 * @uses YMailTypeSaveMessage::getMessage()
	 * @param YMailTypeSaveMessage SaveMessage
	 * @return YMailTypeSaveMessageResponse
	 */
	public function SaveMessage(YMailTypeSaveMessage $_YMailTypeSaveMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SaveMessage(array('destination'=>$_YMailTypeSaveMessage->getDestination(),'message'=>$_YMailTypeSaveMessage->getMessage())));
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
	 * @return YMailTypeSaveMessageResponse
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