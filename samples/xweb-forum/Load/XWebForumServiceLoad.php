<?php
/**
 * Class file for XWebForumServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWebForumServiceLoad
 * @date 09/07/2012
 */
class XWebForumServiceLoad extends XWebForumWsdlClass
{
	/**
	 * Method to call LoadTopic
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeLoadTopicRequest::getTopic_ID()
	 * @param XWebForumTypeLoadTopicRequest LoadTopicRequest
	 * @return XWebForumTypeLoadTopicResponse
	 */
	public function LoadTopic(XWebForumTypeLoadTopicRequest $_XWebForumTypeLoadTopicRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadTopic(array('Topic_ID'=>$_XWebForumTypeLoadTopicRequest->getTopic_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadMessage
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeLoadMessageRequest::getMessage_ID()
	 * @param XWebForumTypeLoadMessageRequest LoadMessageRequest
	 * @return XWebForumTypeLoadMessageResponse
	 */
	public function LoadMessage(XWebForumTypeLoadMessageRequest $_XWebForumTypeLoadMessageRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadMessage(array('Message_ID'=>$_XWebForumTypeLoadMessageRequest->getMessage_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadTopics
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebForumTypeLoadTopicsResponse
	 */
	public function LoadTopics(XWebForumTypeUNKNOWN $_XWebForumTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadTopics(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadTopicsPaged
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeLoadTopicsPagedRequest::getPage_Number()
	 * @uses XWebForumTypeLoadTopicsPagedRequest::getPage_Size()
	 * @param XWebForumTypeLoadTopicsPagedRequest LoadTopicsPagedRequest
	 * @return XWebForumTypeLoadTopicsPagedResponse
	 */
	public function LoadTopicsPaged(XWebForumTypeLoadTopicsPagedRequest $_XWebForumTypeLoadTopicsPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadTopicsPaged(array('Page_Number'=>$_XWebForumTypeLoadTopicsPagedRequest->getPage_Number(),'Page_Size'=>$_XWebForumTypeLoadTopicsPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadMessages
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebForumTypeLoadMessagesResponse
	 */
	public function LoadMessages(XWebForumTypeUNKNOWN $_XWebForumTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadMessages(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadMessagesPaged
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeLoadMessagesPagedRequest::getPage_Number()
	 * @uses XWebForumTypeLoadMessagesPagedRequest::getPage_Size()
	 * @param XWebForumTypeLoadMessagesPagedRequest LoadMessagesPagedRequest
	 * @return XWebForumTypeLoadMessagesPagedResponse
	 */
	public function LoadMessagesPaged(XWebForumTypeLoadMessagesPagedRequest $_XWebForumTypeLoadMessagesPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadMessagesPaged(array('Page_Number'=>$_XWebForumTypeLoadMessagesPagedRequest->getPage_Number(),'Page_Size'=>$_XWebForumTypeLoadMessagesPagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadMessagesBySource
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeLoadMessagesBySourceRequest::getSource_Identifier()
	 * @param XWebForumTypeLoadMessagesBySourceRequest LoadMessagesBySourceRequest
	 * @return XWebForumTypeLoadMessagesBySourceResponse
	 */
	public function LoadMessagesBySource(XWebForumTypeLoadMessagesBySourceRequest $_XWebForumTypeLoadMessagesBySourceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadMessagesBySource(array('Source_Identifier'=>$_XWebForumTypeLoadMessagesBySourceRequest->getSource_Identifier())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadMessagesBySourcePaged
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeLoadMessagesBySourcePagedRequest::getSource_Identifier()
	 * @uses XWebForumTypeLoadMessagesBySourcePagedRequest::getPage_Number()
	 * @uses XWebForumTypeLoadMessagesBySourcePagedRequest::getPage_Size()
	 * @param XWebForumTypeLoadMessagesBySourcePagedRequest LoadMessagesBySourcePagedRequest
	 * @return XWebForumTypeLoadMessagesBySourcePagedResponse
	 */
	public function LoadMessagesBySourcePaged(XWebForumTypeLoadMessagesBySourcePagedRequest $_XWebForumTypeLoadMessagesBySourcePagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadMessagesBySourcePaged(array('Source_Identifier'=>$_XWebForumTypeLoadMessagesBySourcePagedRequest->getSource_Identifier(),'Page_Number'=>$_XWebForumTypeLoadMessagesBySourcePagedRequest->getPage_Number(),'Page_Size'=>$_XWebForumTypeLoadMessagesBySourcePagedRequest->getPage_Size())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadPersonalizedMessages
	 * @uses XWebForumWsdlClass::getSoapClient()
	 * @uses XWebForumWsdlClass::setResult()
	 * @uses XWebForumWsdlClass::getResult()
	 * @uses XWebForumWsdlClass::saveLastError()
	 * @uses XWebForumTypeLoadPersonalizedMessagesRequest::getSource_Identifier()
	 * @param XWebForumTypeLoadPersonalizedMessagesRequest LoadPersonalizedMessagesRequest
	 * @return XWebForumTypeLoadPersonalizedMessagesResponse
	 */
	public function LoadPersonalizedMessages(XWebForumTypeLoadPersonalizedMessagesRequest $_XWebForumTypeLoadPersonalizedMessagesRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadPersonalizedMessages(array('Source_Identifier'=>$_XWebForumTypeLoadPersonalizedMessagesRequest->getSource_Identifier())));
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
	 * @return XWebForumTypeLoadPersonalizedMessagesResponse
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