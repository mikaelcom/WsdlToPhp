<?php
/**
 * Class file for OvhServiceAutomated
 * @date 02/07/2012
 */
/**
 * Class OvhServiceAutomated
 * @date 02/07/2012
 */
class OvhServiceAutomated extends OvhWsdlClass
{
	/**
	 * Method to call automatedMailGetVolumeHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailGetVolumeHistory::getSession()
	 * @uses OvhTypeAutomatedMailGetVolumeHistory::getDomain()
	 * @param OvhTypeAutomatedMailGetVolumeHistory AutomatedMailGetVolumeHistory
	 * @return OvhTypeAutomatedMailGetVolumeHistoryResponse
	 */
	public function automatedMailGetVolumeHistory(OvhTypeAutomatedMailGetVolumeHistory $_ovhTypeAutomatedMailGetVolumeHistory)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailGetVolumeHistoryResponse(self::getSoapClient()->automatedMailGetVolumeHistory($_ovhTypeAutomatedMailGetVolumeHistory->getSession(),$_ovhTypeAutomatedMailGetVolumeHistory->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call automatedMailGetTodo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailGetTodo::getSession()
	 * @uses OvhTypeAutomatedMailGetTodo::getDomain()
	 * @param OvhTypeAutomatedMailGetTodo AutomatedMailGetTodo
	 * @return OvhTypeAutomatedMailGetTodoResponse
	 */
	public function automatedMailGetTodo(OvhTypeAutomatedMailGetTodo $_ovhTypeAutomatedMailGetTodo)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailGetTodoResponse(self::getSoapClient()->automatedMailGetTodo($_ovhTypeAutomatedMailGetTodo->getSession(),$_ovhTypeAutomatedMailGetTodo->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call automatedMailGetErrors
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailGetErrors::getSession()
	 * @uses OvhTypeAutomatedMailGetErrors::getDomain()
	 * @uses OvhTypeAutomatedMailGetErrors::getDeep()
	 * @uses OvhTypeAutomatedMailGetErrors::getLimit()
	 * @param OvhTypeAutomatedMailGetErrors AutomatedMailGetErrors
	 * @return OvhTypeAutomatedMailGetErrorsResponse
	 */
	public function automatedMailGetErrors(OvhTypeAutomatedMailGetErrors $_ovhTypeAutomatedMailGetErrors)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailGetErrorsResponse(self::getSoapClient()->automatedMailGetErrors($_ovhTypeAutomatedMailGetErrors->getSession(),$_ovhTypeAutomatedMailGetErrors->getDomain(),$_ovhTypeAutomatedMailGetErrors->getDeep(),$_ovhTypeAutomatedMailGetErrors->getLimit())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call automatedMailGetState
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailGetState::getSession()
	 * @uses OvhTypeAutomatedMailGetState::getDomain()
	 * @param OvhTypeAutomatedMailGetState AutomatedMailGetState
	 * @return OvhTypeAutomatedMailGetStateResponse
	 */
	public function automatedMailGetState(OvhTypeAutomatedMailGetState $_ovhTypeAutomatedMailGetState)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailGetStateResponse(self::getSoapClient()->automatedMailGetState($_ovhTypeAutomatedMailGetState->getSession(),$_ovhTypeAutomatedMailGetState->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call automatedMailUnlock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailUnlock::getSession()
	 * @uses OvhTypeAutomatedMailUnlock::getDomain()
	 * @param OvhTypeAutomatedMailUnlock AutomatedMailUnlock
	 * @return OvhTypeAutomatedMailUnlockResponse
	 */
	public function automatedMailUnlock(OvhTypeAutomatedMailUnlock $_ovhTypeAutomatedMailUnlock)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailUnlockResponse(self::getSoapClient()->automatedMailUnlock($_ovhTypeAutomatedMailUnlock->getSession(),$_ovhTypeAutomatedMailUnlock->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call automatedMailLock
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailLock::getSession()
	 * @uses OvhTypeAutomatedMailLock::getDomain()
	 * @param OvhTypeAutomatedMailLock AutomatedMailLock
	 * @return OvhTypeAutomatedMailLockResponse
	 */
	public function automatedMailLock(OvhTypeAutomatedMailLock $_ovhTypeAutomatedMailLock)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailLockResponse(self::getSoapClient()->automatedMailLock($_ovhTypeAutomatedMailLock->getSession(),$_ovhTypeAutomatedMailLock->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call automatedMailReturnSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailReturnSet::getSession()
	 * @uses OvhTypeAutomatedMailReturnSet::getDomain()
	 * @uses OvhTypeAutomatedMailReturnSet::getEmail()
	 * @param OvhTypeAutomatedMailReturnSet AutomatedMailReturnSet
	 * @return OvhTypeAutomatedMailReturnSetResponse
	 */
	public function automatedMailReturnSet(OvhTypeAutomatedMailReturnSet $_ovhTypeAutomatedMailReturnSet)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailReturnSetResponse(self::getSoapClient()->automatedMailReturnSet($_ovhTypeAutomatedMailReturnSet->getSession(),$_ovhTypeAutomatedMailReturnSet->getDomain(),$_ovhTypeAutomatedMailReturnSet->getEmail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call automatedMailFlush
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAutomatedMailFlush::getSession()
	 * @uses OvhTypeAutomatedMailFlush::getDomain()
	 * @param OvhTypeAutomatedMailFlush AutomatedMailFlush
	 * @return OvhTypeAutomatedMailFlushResponse
	 */
	public function automatedMailFlush(OvhTypeAutomatedMailFlush $_ovhTypeAutomatedMailFlush)
	{
		try
		{
			$this->setResult(new OvhTypeAutomatedMailFlushResponse(self::getSoapClient()->automatedMailFlush($_ovhTypeAutomatedMailFlush->getSession(),$_ovhTypeAutomatedMailFlush->getDomain())));
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
	 * @return OvhTypeAutomatedMailFlushResponse
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