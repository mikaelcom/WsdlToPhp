<?php
/**
 * Class file for XWebForumServiceProcess
 * @date 09/07/2012
 */
/**
 * Class XWebForumServiceProcess
 * @date 09/07/2012
 */
class XWebForumServiceProcess extends XWebForumWsdlClass
{
	/**
	 * Method to call ProcessMessage
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeProcessMessageRequest::getMessage()
	 * @param XWebForumTypeProcessMessageRequest ProcessMessageRequest
	 * @return XWebForumTypeUNKNOWN
	 */
	public function ProcessMessage(XWebForumTypeProcessMessageRequest $_XWebForumTypeProcessMessageRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessMessage(array('Message'=>$_XWebForumTypeProcessMessageRequest->getMessage())));
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