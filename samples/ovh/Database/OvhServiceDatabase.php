<?php
/**
 * Class file for OvhServiceDatabase
 * @date 02/07/2012
 */
/**
 * Class OvhServiceDatabase
 * @date 02/07/2012
 */
class OvhServiceDatabase extends OvhWsdlClass
{
	/**
	 * Method to call databaseChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDatabaseChangePassword::getSession()
	 * @uses OvhTypeDatabaseChangePassword::getDomain()
	 * @uses OvhTypeDatabaseChangePassword::getDb()
	 * @uses OvhTypeDatabaseChangePassword::getPassword()
	 * @param OvhTypeDatabaseChangePassword DatabaseChangePassword
	 * @return OvhTypeDatabaseChangePasswordResponse
	 */
	public function databaseChangePassword(OvhTypeDatabaseChangePassword $_ovhTypeDatabaseChangePassword)
	{
		try
		{
			$this->setResult(new OvhTypeDatabaseChangePasswordResponse(self::getSoapClient()->databaseChangePassword($_ovhTypeDatabaseChangePassword->getSession(),$_ovhTypeDatabaseChangePassword->getDomain(),$_ovhTypeDatabaseChangePassword->getDb(),$_ovhTypeDatabaseChangePassword->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call databaseDump
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDatabaseDump::getSession()
	 * @uses OvhTypeDatabaseDump::getDomain()
	 * @uses OvhTypeDatabaseDump::getDb()
	 * @uses OvhTypeDatabaseDump::getBackup()
	 * @param OvhTypeDatabaseDump DatabaseDump
	 * @return OvhTypeDatabaseDumpResponse
	 */
	public function databaseDump(OvhTypeDatabaseDump $_ovhTypeDatabaseDump)
	{
		try
		{
			$this->setResult(new OvhTypeDatabaseDumpResponse(self::getSoapClient()->databaseDump($_ovhTypeDatabaseDump->getSession(),$_ovhTypeDatabaseDump->getDomain(),$_ovhTypeDatabaseDump->getDb(),$_ovhTypeDatabaseDump->getBackup())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call databaseCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDatabaseCreate::getSession()
	 * @uses OvhTypeDatabaseCreate::getDomain()
	 * @uses OvhTypeDatabaseCreate::getDb()
	 * @uses OvhTypeDatabaseCreate::getPassword()
	 * @uses OvhTypeDatabaseCreate::getDbType()
	 * @param OvhTypeDatabaseCreate DatabaseCreate
	 * @return OvhTypeDatabaseCreateResponse
	 */
	public function databaseCreate(OvhTypeDatabaseCreate $_ovhTypeDatabaseCreate)
	{
		try
		{
			$this->setResult(new OvhTypeDatabaseCreateResponse(self::getSoapClient()->databaseCreate($_ovhTypeDatabaseCreate->getSession(),$_ovhTypeDatabaseCreate->getDomain(),$_ovhTypeDatabaseCreate->getDb(),$_ovhTypeDatabaseCreate->getPassword(),$_ovhTypeDatabaseCreate->getDbType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call databaseList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDatabaseList::getSession()
	 * @uses OvhTypeDatabaseList::getDomain()
	 * @param OvhTypeDatabaseList DatabaseList
	 * @return OvhTypeDatabaseListResponse
	 */
	public function databaseList(OvhTypeDatabaseList $_ovhTypeDatabaseList)
	{
		try
		{
			$this->setResult(new OvhTypeDatabaseListResponse(self::getSoapClient()->databaseList($_ovhTypeDatabaseList->getSession(),$_ovhTypeDatabaseList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call databaseDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDatabaseDelete::getSession()
	 * @uses OvhTypeDatabaseDelete::getDomain()
	 * @uses OvhTypeDatabaseDelete::getDb()
	 * @param OvhTypeDatabaseDelete DatabaseDelete
	 * @return OvhTypeDatabaseDeleteResponse
	 */
	public function databaseDelete(OvhTypeDatabaseDelete $_ovhTypeDatabaseDelete)
	{
		try
		{
			$this->setResult(new OvhTypeDatabaseDeleteResponse(self::getSoapClient()->databaseDelete($_ovhTypeDatabaseDelete->getSession(),$_ovhTypeDatabaseDelete->getDomain(),$_ovhTypeDatabaseDelete->getDb())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call databaseRecreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDatabaseRecreate::getSession()
	 * @uses OvhTypeDatabaseRecreate::getDomain()
	 * @uses OvhTypeDatabaseRecreate::getDb()
	 * @param OvhTypeDatabaseRecreate DatabaseRecreate
	 * @return OvhTypeDatabaseRecreateResponse
	 */
	public function databaseRecreate(OvhTypeDatabaseRecreate $_ovhTypeDatabaseRecreate)
	{
		try
		{
			$this->setResult(new OvhTypeDatabaseRecreateResponse(self::getSoapClient()->databaseRecreate($_ovhTypeDatabaseRecreate->getSession(),$_ovhTypeDatabaseRecreate->getDomain(),$_ovhTypeDatabaseRecreate->getDb())));
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
	 * @return OvhTypeDatabaseRecreateResponse
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