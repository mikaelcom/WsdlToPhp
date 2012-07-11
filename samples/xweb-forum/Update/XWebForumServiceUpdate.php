<?php
/**
 * Class file for XWebForumServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWebForumServiceUpdate
 * @date 09/07/2012
 */
class XWebForumServiceUpdate extends XWebForumWsdlClass
{
	/**
	 * Method to call UpdateMessage
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeUpdateMessageRequest::getMessage()
	 * @param XWebForumTypeUpdateMessageRequest UpdateMessageRequest
	 * @return XWebForumTypeUNKNOWN
	 */
	public function UpdateMessage(XWebForumTypeUpdateMessageRequest $_XWebForumTypeUpdateMessageRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateMessage(array('Message'=>$_XWebForumTypeUpdateMessageRequest->getMessage())));
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
	 * @return XWebForumTypeUNKNOWN
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