<?php
/**
 * Class file for OvhServiceLogs
 * @date 02/07/2012
 */
/**
 * Class OvhServiceLogs
 * @date 02/07/2012
 */
class OvhServiceLogs extends OvhWsdlClass
{
	/**
	 * Method to call logsAccessList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeLogsAccessList::getSession()
	 * @uses OvhTypeLogsAccessList::getDomain()
	 * @param OvhTypeLogsAccessList LogsAccessList
	 * @return OvhTypeLogsAccessListResponse
	 */
	public function logsAccessList(OvhTypeLogsAccessList $_ovhTypeLogsAccessList)
	{
		try
		{
			$this->setResult(new OvhTypeLogsAccessListResponse(self::getSoapClient()->logsAccessList($_ovhTypeLogsAccessList->getSession(),$_ovhTypeLogsAccessList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call logsAccessDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeLogsAccessDel::getSession()
	 * @uses OvhTypeLogsAccessDel::getDomain()
	 * @uses OvhTypeLogsAccessDel::getUser()
	 * @param OvhTypeLogsAccessDel LogsAccessDel
	 * @return OvhTypeLogsAccessDelResponse
	 */
	public function logsAccessDel(OvhTypeLogsAccessDel $_ovhTypeLogsAccessDel)
	{
		try
		{
			$this->setResult(new OvhTypeLogsAccessDelResponse(self::getSoapClient()->logsAccessDel($_ovhTypeLogsAccessDel->getSession(),$_ovhTypeLogsAccessDel->getDomain(),$_ovhTypeLogsAccessDel->getUser())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call logsAccessAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeLogsAccessAdd::getSession()
	 * @uses OvhTypeLogsAccessAdd::getDomain()
	 * @uses OvhTypeLogsAccessAdd::getUser()
	 * @uses OvhTypeLogsAccessAdd::getPassword()
	 * @param OvhTypeLogsAccessAdd LogsAccessAdd
	 * @return OvhTypeLogsAccessAddResponse
	 */
	public function logsAccessAdd(OvhTypeLogsAccessAdd $_ovhTypeLogsAccessAdd)
	{
		try
		{
			$this->setResult(new OvhTypeLogsAccessAddResponse(self::getSoapClient()->logsAccessAdd($_ovhTypeLogsAccessAdd->getSession(),$_ovhTypeLogsAccessAdd->getDomain(),$_ovhTypeLogsAccessAdd->getUser(),$_ovhTypeLogsAccessAdd->getPassword())));
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
	 * @return OvhTypeLogsAccessAddResponse
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