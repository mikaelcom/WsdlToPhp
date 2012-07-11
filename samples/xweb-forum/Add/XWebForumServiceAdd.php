<?php
/**
 * Class file for XWebForumServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWebForumServiceAdd
 * @date 09/07/2012
 */
class XWebForumServiceAdd extends XWebForumWsdlClass
{
	/**
	 * Method to call AddMessage
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeAddMessageRequest::getMessage()
	 * @param XWebForumTypeAddMessageRequest AddMessageRequest
	 * @return XWebForumTypeUNKNOWN
	 */
	public function AddMessage(XWebForumTypeAddMessageRequest $_XWebForumTypeAddMessageRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddMessage(array('Message'=>$_XWebForumTypeAddMessageRequest->getMessage())));
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