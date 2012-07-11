<?php
/**
 * Class file for XWebForumServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWebForumServiceDelete
 * @date 09/07/2012
 */
class XWebForumServiceDelete extends XWebForumWsdlClass
{
	/**
	 * Method to call DeleteMessage
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeDeleteMessageRequest::getMessage_ID()
	 * @param XWebForumTypeDeleteMessageRequest DeleteMessageRequest
	 * @return XWebForumTypeUNKNOWN
	 */
	public function DeleteMessage(XWebForumTypeDeleteMessageRequest $_XWebForumTypeDeleteMessageRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteMessage(array('Message_ID'=>$_XWebForumTypeDeleteMessageRequest->getMessage_ID())));
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