<?php
/**
 * Class file for OvhServiceRps
 * @date 02/07/2012
 */
/**
 * Class OvhServiceRps
 * @date 02/07/2012
 */
class OvhServiceRps extends OvhWsdlClass
{
	/**
	 * Method to call rpsMigrationGetProgressStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRpsMigrationGetProgressStatus::getSession()
	 * @uses OvhTypeRpsMigrationGetProgressStatus::getHostname()
	 * @param OvhTypeRpsMigrationGetProgressStatus RpsMigrationGetProgressStatus
	 * @return OvhTypeRpsMigrationGetProgressStatusResponse
	 */
	public function rpsMigrationGetProgressStatus(OvhTypeRpsMigrationGetProgressStatus $_ovhTypeRpsMigrationGetProgressStatus)
	{
		try
		{
			$this->setResult(new OvhTypeRpsMigrationGetProgressStatusResponse(self::getSoapClient()->rpsMigrationGetProgressStatus($_ovhTypeRpsMigrationGetProgressStatus->getSession(),$_ovhTypeRpsMigrationGetProgressStatus->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call rpsMigrationStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRpsMigrationStatus::getSession()
	 * @uses OvhTypeRpsMigrationStatus::getHostname()
	 * @param OvhTypeRpsMigrationStatus RpsMigrationStatus
	 * @return OvhTypeRpsMigrationStatusResponse
	 */
	public function rpsMigrationStatus(OvhTypeRpsMigrationStatus $_ovhTypeRpsMigrationStatus)
	{
		try
		{
			$this->setResult(new OvhTypeRpsMigrationStatusResponse(self::getSoapClient()->rpsMigrationStatus($_ovhTypeRpsMigrationStatus->getSession(),$_ovhTypeRpsMigrationStatus->getHostname())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call rpsMigrationTodo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRpsMigrationTodo::getSession()
	 * @uses OvhTypeRpsMigrationTodo::getLogicalRpsName()
	 * @uses OvhTypeRpsMigrationTodo::getPhysicalRpsTo()
	 * @param OvhTypeRpsMigrationTodo RpsMigrationTodo
	 * @return OvhTypeRpsMigrationTodoResponse
	 */
	public function rpsMigrationTodo(OvhTypeRpsMigrationTodo $_ovhTypeRpsMigrationTodo)
	{
		try
		{
			$this->setResult(new OvhTypeRpsMigrationTodoResponse(self::getSoapClient()->rpsMigrationTodo($_ovhTypeRpsMigrationTodo->getSession(),$_ovhTypeRpsMigrationTodo->getLogicalRpsName(),$_ovhTypeRpsMigrationTodo->getPhysicalRpsTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call rpsGetIoStats
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRpsGetIoStats::getSession()
	 * @uses OvhTypeRpsGetIoStats::getDomain()
	 * @uses OvhTypeRpsGetIoStats::getType()
	 * @uses OvhTypeRpsGetIoStats::getDuration()
	 * @param OvhTypeRpsGetIoStats RpsGetIoStats
	 * @return OvhTypeRpsGetIoStatsResponse
	 */
	public function rpsGetIoStats(OvhTypeRpsGetIoStats $_ovhTypeRpsGetIoStats)
	{
		try
		{
			$this->setResult(new OvhTypeRpsGetIoStatsResponse(self::getSoapClient()->rpsGetIoStats($_ovhTypeRpsGetIoStats->getSession(),$_ovhTypeRpsGetIoStats->getDomain(),$_ovhTypeRpsGetIoStats->getType(),$_ovhTypeRpsGetIoStats->getDuration())));
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
	 * @return OvhTypeRpsGetIoStatsResponse
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