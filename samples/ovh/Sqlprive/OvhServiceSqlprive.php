<?php
/**
 * Class file for OvhServiceSqlprive
 * @date 02/07/2012
 */
/**
 * Class OvhServiceSqlprive
 * @date 02/07/2012
 */
class OvhServiceSqlprive extends OvhWsdlClass
{
	/**
	 * Method to call sqlpriveMysqlRestart
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlRestart::getSession()
	 * @uses OvhTypeSqlpriveMysqlRestart::getServer()
	 * @param OvhTypeSqlpriveMysqlRestart SqlpriveMysqlRestart
	 * @return OvhTypeSqlpriveMysqlRestartResponse
	 */
	public function sqlpriveMysqlRestart(OvhTypeSqlpriveMysqlRestart $_ovhTypeSqlpriveMysqlRestart)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlRestartResponse(self::getSoapClient()->sqlpriveMysqlRestart($_ovhTypeSqlpriveMysqlRestart->getSession(),$_ovhTypeSqlpriveMysqlRestart->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlVersion
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlVersion::getSession()
	 * @uses OvhTypeSqlpriveMysqlVersion::getServer()
	 * @uses OvhTypeSqlpriveMysqlVersion::getVersion()
	 * @param OvhTypeSqlpriveMysqlVersion SqlpriveMysqlVersion
	 * @return OvhTypeSqlpriveMysqlVersionResponse
	 */
	public function sqlpriveMysqlVersion(OvhTypeSqlpriveMysqlVersion $_ovhTypeSqlpriveMysqlVersion)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlVersionResponse(self::getSoapClient()->sqlpriveMysqlVersion($_ovhTypeSqlpriveMysqlVersion->getSession(),$_ovhTypeSqlpriveMysqlVersion->getServer(),$_ovhTypeSqlpriveMysqlVersion->getVersion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlDatabaseImportFromFile
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromFile::getSession()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromFile::getServer()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromFile::getDatabase()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromFile::getFilename()
	 * @param OvhTypeSqlpriveMysqlDatabaseImportFromFile SqlpriveMysqlDatabaseImportFromFile
	 * @return OvhTypeSqlpriveMysqlDatabaseImportFromFileResponse
	 */
	public function sqlpriveMysqlDatabaseImportFromFile(OvhTypeSqlpriveMysqlDatabaseImportFromFile $_ovhTypeSqlpriveMysqlDatabaseImportFromFile)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlDatabaseImportFromFileResponse(self::getSoapClient()->sqlpriveMysqlDatabaseImportFromFile($_ovhTypeSqlpriveMysqlDatabaseImportFromFile->getSession(),$_ovhTypeSqlpriveMysqlDatabaseImportFromFile->getServer(),$_ovhTypeSqlpriveMysqlDatabaseImportFromFile->getDatabase(),$_ovhTypeSqlpriveMysqlDatabaseImportFromFile->getFilename())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlUserList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlUserList::getSession()
	 * @uses OvhTypeSqlpriveMysqlUserList::getServer()
	 * @param OvhTypeSqlpriveMysqlUserList SqlpriveMysqlUserList
	 * @return OvhTypeSqlpriveMysqlUserListResponse
	 */
	public function sqlpriveMysqlUserList(OvhTypeSqlpriveMysqlUserList $_ovhTypeSqlpriveMysqlUserList)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlUserListResponse(self::getSoapClient()->sqlpriveMysqlUserList($_ovhTypeSqlpriveMysqlUserList->getSession(),$_ovhTypeSqlpriveMysqlUserList->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlRamUsed
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlRamUsed::getSession()
	 * @uses OvhTypeSqlpriveMysqlRamUsed::getServer()
	 * @param OvhTypeSqlpriveMysqlRamUsed SqlpriveMysqlRamUsed
	 * @return OvhTypeSqlpriveMysqlRamUsedResponse
	 */
	public function sqlpriveMysqlRamUsed(OvhTypeSqlpriveMysqlRamUsed $_ovhTypeSqlpriveMysqlRamUsed)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlRamUsedResponse(self::getSoapClient()->sqlpriveMysqlRamUsed($_ovhTypeSqlpriveMysqlRamUsed->getSession(),$_ovhTypeSqlpriveMysqlRamUsed->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveAlertInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveAlertInfo::getSession()
	 * @uses OvhTypeSqlpriveAlertInfo::getServer()
	 * @param OvhTypeSqlpriveAlertInfo SqlpriveAlertInfo
	 * @return OvhTypeSqlpriveAlertInfoResponse
	 */
	public function sqlpriveAlertInfo(OvhTypeSqlpriveAlertInfo $_ovhTypeSqlpriveAlertInfo)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveAlertInfoResponse(self::getSoapClient()->sqlpriveAlertInfo($_ovhTypeSqlpriveAlertInfo->getSession(),$_ovhTypeSqlpriveAlertInfo->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveList::getSession()
	 * @param OvhTypeSqlpriveList SqlpriveList
	 * @return OvhTypeSqlpriveListResponse
	 */
	public function sqlpriveList(OvhTypeSqlpriveList $_ovhTypeSqlpriveList)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveListResponse(self::getSoapClient()->sqlpriveList($_ovhTypeSqlpriveList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlLogs
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlLogs::getSession()
	 * @uses OvhTypeSqlpriveMysqlLogs::getServer()
	 * @param OvhTypeSqlpriveMysqlLogs SqlpriveMysqlLogs
	 * @return OvhTypeSqlpriveMysqlLogsResponse
	 */
	public function sqlpriveMysqlLogs(OvhTypeSqlpriveMysqlLogs $_ovhTypeSqlpriveMysqlLogs)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlLogsResponse(self::getSoapClient()->sqlpriveMysqlLogs($_ovhTypeSqlpriveMysqlLogs->getSession(),$_ovhTypeSqlpriveMysqlLogs->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveCronSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveCronSet::getSession()
	 * @uses OvhTypeSqlpriveCronSet::getServer()
	 * @uses OvhTypeSqlpriveCronSet::getOperation()
	 * @uses OvhTypeSqlpriveCronSet::getRecursivityDays()
	 * @uses OvhTypeSqlpriveCronSet::getRecursivityHours()
	 * @uses OvhTypeSqlpriveCronSet::getEndDate()
	 * @uses OvhTypeSqlpriveCronSet::getComment()
	 * @param OvhTypeSqlpriveCronSet SqlpriveCronSet
	 * @return OvhTypeSqlpriveCronSetResponse
	 */
	public function sqlpriveCronSet(OvhTypeSqlpriveCronSet $_ovhTypeSqlpriveCronSet)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveCronSetResponse(self::getSoapClient()->sqlpriveCronSet($_ovhTypeSqlpriveCronSet->getSession(),$_ovhTypeSqlpriveCronSet->getServer(),$_ovhTypeSqlpriveCronSet->getOperation(),$_ovhTypeSqlpriveCronSet->getRecursivityDays(),$_ovhTypeSqlpriveCronSet->getRecursivityHours(),$_ovhTypeSqlpriveCronSet->getEndDate(),$_ovhTypeSqlpriveCronSet->getComment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlDatabasePrivilegeList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlDatabasePrivilegeList::getSession()
	 * @uses OvhTypeSqlpriveMysqlDatabasePrivilegeList::getServer()
	 * @param OvhTypeSqlpriveMysqlDatabasePrivilegeList SqlpriveMysqlDatabasePrivilegeList
	 * @return OvhTypeSqlpriveMysqlDatabasePrivilegeListResponse
	 */
	public function sqlpriveMysqlDatabasePrivilegeList(OvhTypeSqlpriveMysqlDatabasePrivilegeList $_ovhTypeSqlpriveMysqlDatabasePrivilegeList)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlDatabasePrivilegeListResponse(self::getSoapClient()->sqlpriveMysqlDatabasePrivilegeList($_ovhTypeSqlpriveMysqlDatabasePrivilegeList->getSession(),$_ovhTypeSqlpriveMysqlDatabasePrivilegeList->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveCronDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveCronDel::getSession()
	 * @uses OvhTypeSqlpriveCronDel::getServer()
	 * @uses OvhTypeSqlpriveCronDel::getCronId()
	 * @param OvhTypeSqlpriveCronDel SqlpriveCronDel
	 * @return OvhTypeSqlpriveCronDelResponse
	 */
	public function sqlpriveCronDel(OvhTypeSqlpriveCronDel $_ovhTypeSqlpriveCronDel)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveCronDelResponse(self::getSoapClient()->sqlpriveCronDel($_ovhTypeSqlpriveCronDel->getSession(),$_ovhTypeSqlpriveCronDel->getServer(),$_ovhTypeSqlpriveCronDel->getCronId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlDatabaseImportFromHost
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromHost::getSession()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromHost::getServer()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromHost::getDatabase()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromHost::getForeignHost()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromHost::getForeignUser()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromHost::getForeignPassword()
	 * @uses OvhTypeSqlpriveMysqlDatabaseImportFromHost::getForeignDatabase()
	 * @param OvhTypeSqlpriveMysqlDatabaseImportFromHost SqlpriveMysqlDatabaseImportFromHost
	 * @return OvhTypeSqlpriveMysqlDatabaseImportFromHostResponse
	 */
	public function sqlpriveMysqlDatabaseImportFromHost(OvhTypeSqlpriveMysqlDatabaseImportFromHost $_ovhTypeSqlpriveMysqlDatabaseImportFromHost)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlDatabaseImportFromHostResponse(self::getSoapClient()->sqlpriveMysqlDatabaseImportFromHost($_ovhTypeSqlpriveMysqlDatabaseImportFromHost->getSession(),$_ovhTypeSqlpriveMysqlDatabaseImportFromHost->getServer(),$_ovhTypeSqlpriveMysqlDatabaseImportFromHost->getDatabase(),$_ovhTypeSqlpriveMysqlDatabaseImportFromHost->getForeignHost(),$_ovhTypeSqlpriveMysqlDatabaseImportFromHost->getForeignUser(),$_ovhTypeSqlpriveMysqlDatabaseImportFromHost->getForeignPassword(),$_ovhTypeSqlpriveMysqlDatabaseImportFromHost->getForeignDatabase())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveAlertSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveAlertSet::getSession()
	 * @uses OvhTypeSqlpriveAlertSet::getServer()
	 * @uses OvhTypeSqlpriveAlertSet::getEmail()
	 * @uses OvhTypeSqlpriveAlertSet::getSmsAccount()
	 * @uses OvhTypeSqlpriveAlertSet::getSmsNumber()
	 * @uses OvhTypeSqlpriveAlertSet::getAlert()
	 * @param OvhTypeSqlpriveAlertSet SqlpriveAlertSet
	 * @return OvhTypeSqlpriveAlertSetResponse
	 */
	public function sqlpriveAlertSet(OvhTypeSqlpriveAlertSet $_ovhTypeSqlpriveAlertSet)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveAlertSetResponse(self::getSoapClient()->sqlpriveAlertSet($_ovhTypeSqlpriveAlertSet->getSession(),$_ovhTypeSqlpriveAlertSet->getServer(),$_ovhTypeSqlpriveAlertSet->getEmail(),$_ovhTypeSqlpriveAlertSet->getSmsAccount(),$_ovhTypeSqlpriveAlertSet->getSmsNumber(),$_ovhTypeSqlpriveAlertSet->getAlert())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlOvhMyAdmin
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlOvhMyAdmin::getSession()
	 * @uses OvhTypeSqlpriveMysqlOvhMyAdmin::getServer()
	 * @uses OvhTypeSqlpriveMysqlOvhMyAdmin::getFunction()
	 * @uses OvhTypeSqlpriveMysqlOvhMyAdmin::getDatabase()
	 * @uses OvhTypeSqlpriveMysqlOvhMyAdmin::getUsername()
	 * @uses OvhTypeSqlpriveMysqlOvhMyAdmin::getPassword()
	 * @param OvhTypeSqlpriveMysqlOvhMyAdmin SqlpriveMysqlOvhMyAdmin
	 * @return OvhTypeSqlpriveMysqlOvhMyAdminResponse
	 */
	public function sqlpriveMysqlOvhMyAdmin(OvhTypeSqlpriveMysqlOvhMyAdmin $_ovhTypeSqlpriveMysqlOvhMyAdmin)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlOvhMyAdminResponse(self::getSoapClient()->sqlpriveMysqlOvhMyAdmin($_ovhTypeSqlpriveMysqlOvhMyAdmin->getSession(),$_ovhTypeSqlpriveMysqlOvhMyAdmin->getServer(),$_ovhTypeSqlpriveMysqlOvhMyAdmin->getFunction(),$_ovhTypeSqlpriveMysqlOvhMyAdmin->getDatabase(),$_ovhTypeSqlpriveMysqlOvhMyAdmin->getUsername(),$_ovhTypeSqlpriveMysqlOvhMyAdmin->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlDatabaseList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlDatabaseList::getSession()
	 * @uses OvhTypeSqlpriveMysqlDatabaseList::getServer()
	 * @param OvhTypeSqlpriveMysqlDatabaseList SqlpriveMysqlDatabaseList
	 * @return OvhTypeSqlpriveMysqlDatabaseListResponse
	 */
	public function sqlpriveMysqlDatabaseList(OvhTypeSqlpriveMysqlDatabaseList $_ovhTypeSqlpriveMysqlDatabaseList)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlDatabaseListResponse(self::getSoapClient()->sqlpriveMysqlDatabaseList($_ovhTypeSqlpriveMysqlDatabaseList->getSession(),$_ovhTypeSqlpriveMysqlDatabaseList->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlProcessList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlProcessList::getSession()
	 * @uses OvhTypeSqlpriveMysqlProcessList::getServer()
	 * @param OvhTypeSqlpriveMysqlProcessList SqlpriveMysqlProcessList
	 * @return OvhTypeSqlpriveMysqlProcessListResponse
	 */
	public function sqlpriveMysqlProcessList(OvhTypeSqlpriveMysqlProcessList $_ovhTypeSqlpriveMysqlProcessList)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlProcessListResponse(self::getSoapClient()->sqlpriveMysqlProcessList($_ovhTypeSqlpriveMysqlProcessList->getSession(),$_ovhTypeSqlpriveMysqlProcessList->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlActivateOvhManagement
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlActivateOvhManagement::getSession()
	 * @uses OvhTypeSqlpriveMysqlActivateOvhManagement::getServer()
	 * @param OvhTypeSqlpriveMysqlActivateOvhManagement SqlpriveMysqlActivateOvhManagement
	 * @return OvhTypeSqlpriveMysqlActivateOvhManagementResponse
	 */
	public function sqlpriveMysqlActivateOvhManagement(OvhTypeSqlpriveMysqlActivateOvhManagement $_ovhTypeSqlpriveMysqlActivateOvhManagement)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlActivateOvhManagementResponse(self::getSoapClient()->sqlpriveMysqlActivateOvhManagement($_ovhTypeSqlpriveMysqlActivateOvhManagement->getSession(),$_ovhTypeSqlpriveMysqlActivateOvhManagement->getServer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlGetPossibleDump
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlGetPossibleDump::getSession()
	 * @uses OvhTypeSqlpriveMysqlGetPossibleDump::getServer()
	 * @uses OvhTypeSqlpriveMysqlGetPossibleDump::getDirectory()
	 * @param OvhTypeSqlpriveMysqlGetPossibleDump SqlpriveMysqlGetPossibleDump
	 * @return OvhTypeSqlpriveMysqlGetPossibleDumpResponse
	 */
	public function sqlpriveMysqlGetPossibleDump(OvhTypeSqlpriveMysqlGetPossibleDump $_ovhTypeSqlpriveMysqlGetPossibleDump)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlGetPossibleDumpResponse(self::getSoapClient()->sqlpriveMysqlGetPossibleDump($_ovhTypeSqlpriveMysqlGetPossibleDump->getSession(),$_ovhTypeSqlpriveMysqlGetPossibleDump->getServer(),$_ovhTypeSqlpriveMysqlGetPossibleDump->getDirectory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveFtpPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveFtpPassword::getSession()
	 * @uses OvhTypeSqlpriveFtpPassword::getServer()
	 * @uses OvhTypeSqlpriveFtpPassword::getPassword()
	 * @param OvhTypeSqlpriveFtpPassword SqlpriveFtpPassword
	 * @return OvhTypeSqlpriveFtpPasswordResponse
	 */
	public function sqlpriveFtpPassword(OvhTypeSqlpriveFtpPassword $_ovhTypeSqlpriveFtpPassword)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveFtpPasswordResponse(self::getSoapClient()->sqlpriveFtpPassword($_ovhTypeSqlpriveFtpPassword->getSession(),$_ovhTypeSqlpriveFtpPassword->getServer(),$_ovhTypeSqlpriveFtpPassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlRootPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlRootPassword::getSession()
	 * @uses OvhTypeSqlpriveMysqlRootPassword::getServer()
	 * @uses OvhTypeSqlpriveMysqlRootPassword::getPassword()
	 * @param OvhTypeSqlpriveMysqlRootPassword SqlpriveMysqlRootPassword
	 * @return OvhTypeSqlpriveMysqlRootPasswordResponse
	 */
	public function sqlpriveMysqlRootPassword(OvhTypeSqlpriveMysqlRootPassword $_ovhTypeSqlpriveMysqlRootPassword)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlRootPasswordResponse(self::getSoapClient()->sqlpriveMysqlRootPassword($_ovhTypeSqlpriveMysqlRootPassword->getSession(),$_ovhTypeSqlpriveMysqlRootPassword->getServer(),$_ovhTypeSqlpriveMysqlRootPassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlProcessKill
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlProcessKill::getSession()
	 * @uses OvhTypeSqlpriveMysqlProcessKill::getServer()
	 * @uses OvhTypeSqlpriveMysqlProcessKill::getProcess()
	 * @param OvhTypeSqlpriveMysqlProcessKill SqlpriveMysqlProcessKill
	 * @return OvhTypeSqlpriveMysqlProcessKillResponse
	 */
	public function sqlpriveMysqlProcessKill(OvhTypeSqlpriveMysqlProcessKill $_ovhTypeSqlpriveMysqlProcessKill)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlProcessKillResponse(self::getSoapClient()->sqlpriveMysqlProcessKill($_ovhTypeSqlpriveMysqlProcessKill->getSession(),$_ovhTypeSqlpriveMysqlProcessKill->getServer(),$_ovhTypeSqlpriveMysqlProcessKill->getProcess())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveMysqlDatabaseSave
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveMysqlDatabaseSave::getSession()
	 * @uses OvhTypeSqlpriveMysqlDatabaseSave::getServer()
	 * @uses OvhTypeSqlpriveMysqlDatabaseSave::getDatabase()
	 * @uses OvhTypeSqlpriveMysqlDatabaseSave::getComment()
	 * @uses OvhTypeSqlpriveMysqlDatabaseSave::getCompress()
	 * @param OvhTypeSqlpriveMysqlDatabaseSave SqlpriveMysqlDatabaseSave
	 * @return OvhTypeSqlpriveMysqlDatabaseSaveResponse
	 */
	public function sqlpriveMysqlDatabaseSave(OvhTypeSqlpriveMysqlDatabaseSave $_ovhTypeSqlpriveMysqlDatabaseSave)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveMysqlDatabaseSaveResponse(self::getSoapClient()->sqlpriveMysqlDatabaseSave($_ovhTypeSqlpriveMysqlDatabaseSave->getSession(),$_ovhTypeSqlpriveMysqlDatabaseSave->getServer(),$_ovhTypeSqlpriveMysqlDatabaseSave->getDatabase(),$_ovhTypeSqlpriveMysqlDatabaseSave->getComment(),$_ovhTypeSqlpriveMysqlDatabaseSave->getCompress())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call sqlpriveCronGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSqlpriveCronGet::getSession()
	 * @uses OvhTypeSqlpriveCronGet::getServer()
	 * @param OvhTypeSqlpriveCronGet SqlpriveCronGet
	 * @return OvhTypeSqlpriveCronGetResponse
	 */
	public function sqlpriveCronGet(OvhTypeSqlpriveCronGet $_ovhTypeSqlpriveCronGet)
	{
		try
		{
			$this->setResult(new OvhTypeSqlpriveCronGetResponse(self::getSoapClient()->sqlpriveCronGet($_ovhTypeSqlpriveCronGet->getSession(),$_ovhTypeSqlpriveCronGet->getServer())));
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
	 * @return OvhTypeSqlpriveCronGetResponse
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