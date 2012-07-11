<?php
/**
 * Class file for OvhServiceSupport
 * @date 02/07/2012
 */
/**
 * Class OvhServiceSupport
 * @date 02/07/2012
 */
class OvhServiceSupport extends OvhWsdlClass
{
	/**
	 * Method to call supportGetNicDomains
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportGetNicDomains::getSession()
	 * @param OvhTypeSupportGetNicDomains SupportGetNicDomains
	 * @return OvhTypeSupportGetNicDomainsResponse
	 */
	public function supportGetNicDomains(OvhTypeSupportGetNicDomains $_ovhTypeSupportGetNicDomains)
	{
		try
		{
			$this->setResult(new OvhTypeSupportGetNicDomainsResponse(self::getSoapClient()->supportGetNicDomains($_ovhTypeSupportGetNicDomains->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportGetThreads
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportGetThreads::getSession()
	 * @uses OvhTypeSupportGetThreads::getPage()
	 * @uses OvhTypeSupportGetThreads::getView()
	 * @uses OvhTypeSupportGetThreads::getUnread()
	 * @uses OvhTypeSupportGetThreads::getSortDir()
	 * @uses OvhTypeSupportGetThreads::getSortBy()
	 * @uses OvhTypeSupportGetThreads::getLimit()
	 * @param OvhTypeSupportGetThreads SupportGetThreads
	 * @return OvhTypeSupportGetThreadsResponse
	 */
	public function supportGetThreads(OvhTypeSupportGetThreads $_ovhTypeSupportGetThreads)
	{
		try
		{
			$this->setResult(new OvhTypeSupportGetThreadsResponse(self::getSoapClient()->supportGetThreads($_ovhTypeSupportGetThreads->getSession(),$_ovhTypeSupportGetThreads->getPage(),$_ovhTypeSupportGetThreads->getView(),$_ovhTypeSupportGetThreads->getUnread(),$_ovhTypeSupportGetThreads->getSortDir(),$_ovhTypeSupportGetThreads->getSortBy(),$_ovhTypeSupportGetThreads->getLimit())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportSendMessage
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportSendMessage::getSession()
	 * @uses OvhTypeSupportSendMessage::getMessagePrevious()
	 * @uses OvhTypeSupportSendMessage::getCategory()
	 * @uses OvhTypeSupportSendMessage::getDomain()
	 * @uses OvhTypeSupportSendMessage::getSubject()
	 * @uses OvhTypeSupportSendMessage::getBody()
	 * @param OvhTypeSupportSendMessage SupportSendMessage
	 * @return OvhTypeSupportSendMessageResponse
	 */
	public function supportSendMessage(OvhTypeSupportSendMessage $_ovhTypeSupportSendMessage)
	{
		try
		{
			$this->setResult(new OvhTypeSupportSendMessageResponse(self::getSoapClient()->supportSendMessage($_ovhTypeSupportSendMessage->getSession(),$_ovhTypeSupportSendMessage->getMessagePrevious(),$_ovhTypeSupportSendMessage->getCategory(),$_ovhTypeSupportSendMessage->getDomain(),$_ovhTypeSupportSendMessage->getSubject(),$_ovhTypeSupportSendMessage->getBody())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportGetAllVisibleCategories
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportGetAllVisibleCategories::getSession()
	 * @param OvhTypeSupportGetAllVisibleCategories SupportGetAllVisibleCategories
	 * @return OvhTypeSupportGetAllVisibleCategoriesResponse
	 */
	public function supportGetAllVisibleCategories(OvhTypeSupportGetAllVisibleCategories $_ovhTypeSupportGetAllVisibleCategories)
	{
		try
		{
			$this->setResult(new OvhTypeSupportGetAllVisibleCategoriesResponse(self::getSoapClient()->supportGetAllVisibleCategories($_ovhTypeSupportGetAllVisibleCategories->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportGetThreadTree
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportGetThreadTree::getSession()
	 * @uses OvhTypeSupportGetThreadTree::getThreadId()
	 * @param OvhTypeSupportGetThreadTree SupportGetThreadTree
	 * @return OvhTypeSupportGetThreadTreeResponse
	 */
	public function supportGetThreadTree(OvhTypeSupportGetThreadTree $_ovhTypeSupportGetThreadTree)
	{
		try
		{
			$this->setResult(new OvhTypeSupportGetThreadTreeResponse(self::getSoapClient()->supportGetThreadTree($_ovhTypeSupportGetThreadTree->getSession(),$_ovhTypeSupportGetThreadTree->getThreadId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportReportAnswerProblem
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportReportAnswerProblem::getSession()
	 * @uses OvhTypeSupportReportAnswerProblem::getMessageId()
	 * @uses OvhTypeSupportReportAnswerProblem::getReportReason()
	 * @param OvhTypeSupportReportAnswerProblem SupportReportAnswerProblem
	 * @return OvhTypeSupportReportAnswerProblemResponse
	 */
	public function supportReportAnswerProblem(OvhTypeSupportReportAnswerProblem $_ovhTypeSupportReportAnswerProblem)
	{
		try
		{
			$this->setResult(new OvhTypeSupportReportAnswerProblemResponse(self::getSoapClient()->supportReportAnswerProblem($_ovhTypeSupportReportAnswerProblem->getSession(),$_ovhTypeSupportReportAnswerProblem->getMessageId(),$_ovhTypeSupportReportAnswerProblem->getReportReason())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportGetFullMessage
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportGetFullMessage::getSession()
	 * @uses OvhTypeSupportGetFullMessage::getMessageId()
	 * @param OvhTypeSupportGetFullMessage SupportGetFullMessage
	 * @return OvhTypeSupportGetFullMessageResponse
	 */
	public function supportGetFullMessage(OvhTypeSupportGetFullMessage $_ovhTypeSupportGetFullMessage)
	{
		try
		{
			$this->setResult(new OvhTypeSupportGetFullMessageResponse(self::getSoapClient()->supportGetFullMessage($_ovhTypeSupportGetFullMessage->getSession(),$_ovhTypeSupportGetFullMessage->getMessageId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportCloseThreads
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportCloseThreads::getSession()
	 * @uses OvhTypeSupportCloseThreads::getThreads()
	 * @param OvhTypeSupportCloseThreads SupportCloseThreads
	 * @return OvhTypeSupportCloseThreadsResponse
	 */
	public function supportCloseThreads(OvhTypeSupportCloseThreads $_ovhTypeSupportCloseThreads)
	{
		try
		{
			$this->setResult(new OvhTypeSupportCloseThreadsResponse(self::getSoapClient()->supportCloseThreads($_ovhTypeSupportCloseThreads->getSession(),$_ovhTypeSupportCloseThreads->getThreads())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call supportReactivateThread
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSupportReactivateThread::getSession()
	 * @uses OvhTypeSupportReactivateThread::getThreadId()
	 * @param OvhTypeSupportReactivateThread SupportReactivateThread
	 * @return OvhTypeSupportReactivateThreadResponse
	 */
	public function supportReactivateThread(OvhTypeSupportReactivateThread $_ovhTypeSupportReactivateThread)
	{
		try
		{
			$this->setResult(new OvhTypeSupportReactivateThreadResponse(self::getSoapClient()->supportReactivateThread($_ovhTypeSupportReactivateThread->getSession(),$_ovhTypeSupportReactivateThread->getThreadId())));
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
	 * @return OvhTypeSupportReactivateThreadResponse
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