<?php
/**
 * Class file for OvhServiceManaged
 * @date 02/07/2012
 */
/**
 * Class OvhServiceManaged
 * @date 02/07/2012
 */
class OvhServiceManaged extends OvhWsdlClass
{
	/**
	 * Method to call managedServicesPartitionQuotaUsed
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesPartitionQuotaUsed::getSession()
	 * @uses OvhTypeManagedServicesPartitionQuotaUsed::getStorage()
	 * @uses OvhTypeManagedServicesPartitionQuotaUsed::getPartitionName()
	 * @param OvhTypeManagedServicesPartitionQuotaUsed ManagedServicesPartitionQuotaUsed
	 * @return OvhTypeManagedServicesPartitionQuotaUsedResponse
	 */
	public function managedServicesPartitionQuotaUsed(OvhTypeManagedServicesPartitionQuotaUsed $_ovhTypeManagedServicesPartitionQuotaUsed)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesPartitionQuotaUsedResponse(self::getSoapClient()->managedServicesPartitionQuotaUsed($_ovhTypeManagedServicesPartitionQuotaUsed->getSession(),$_ovhTypeManagedServicesPartitionQuotaUsed->getStorage(),$_ovhTypeManagedServicesPartitionQuotaUsed->getPartitionName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesIpAccessChange
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesIpAccessChange::getSession()
	 * @uses OvhTypeManagedServicesIpAccessChange::getStorage()
	 * @uses OvhTypeManagedServicesIpAccessChange::getValue()
	 * @uses OvhTypeManagedServicesIpAccessChange::getServer()
	 * @uses OvhTypeManagedServicesIpAccessChange::getIdZfs()
	 * @param OvhTypeManagedServicesIpAccessChange ManagedServicesIpAccessChange
	 * @return OvhTypeManagedServicesIpAccessChangeResponse
	 */
	public function managedServicesIpAccessChange(OvhTypeManagedServicesIpAccessChange $_ovhTypeManagedServicesIpAccessChange)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesIpAccessChangeResponse(self::getSoapClient()->managedServicesIpAccessChange($_ovhTypeManagedServicesIpAccessChange->getSession(),$_ovhTypeManagedServicesIpAccessChange->getStorage(),$_ovhTypeManagedServicesIpAccessChange->getValue(),$_ovhTypeManagedServicesIpAccessChange->getServer(),$_ovhTypeManagedServicesIpAccessChange->getIdZfs())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesSnapshotUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesSnapshotUpdate::getSession()
	 * @uses OvhTypeManagedServicesSnapshotUpdate::getDomain()
	 * @uses OvhTypeManagedServicesSnapshotUpdate::getSnapShotList()
	 * @param OvhTypeManagedServicesSnapshotUpdate ManagedServicesSnapshotUpdate
	 * @return OvhTypeManagedServicesSnapshotUpdateResponse
	 */
	public function managedServicesSnapshotUpdate(OvhTypeManagedServicesSnapshotUpdate $_ovhTypeManagedServicesSnapshotUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesSnapshotUpdateResponse(self::getSoapClient()->managedServicesSnapshotUpdate($_ovhTypeManagedServicesSnapshotUpdate->getSession(),$_ovhTypeManagedServicesSnapshotUpdate->getDomain(),$_ovhTypeManagedServicesSnapshotUpdate->getSnapShotList())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesHostMasterIpGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesHostMasterIpGet::getSession()
	 * @uses OvhTypeManagedServicesHostMasterIpGet::getDomain()
	 * @param OvhTypeManagedServicesHostMasterIpGet ManagedServicesHostMasterIpGet
	 * @return OvhTypeManagedServicesHostMasterIpGetResponse
	 */
	public function managedServicesHostMasterIpGet(OvhTypeManagedServicesHostMasterIpGet $_ovhTypeManagedServicesHostMasterIpGet)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesHostMasterIpGetResponse(self::getSoapClient()->managedServicesHostMasterIpGet($_ovhTypeManagedServicesHostMasterIpGet->getSession(),$_ovhTypeManagedServicesHostMasterIpGet->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesPartitionDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesPartitionDelete::getSession()
	 * @uses OvhTypeManagedServicesPartitionDelete::getStorage()
	 * @uses OvhTypeManagedServicesPartitionDelete::getName()
	 * @param OvhTypeManagedServicesPartitionDelete ManagedServicesPartitionDelete
	 * @return OvhTypeManagedServicesPartitionDeleteResponse
	 */
	public function managedServicesPartitionDelete(OvhTypeManagedServicesPartitionDelete $_ovhTypeManagedServicesPartitionDelete)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesPartitionDeleteResponse(self::getSoapClient()->managedServicesPartitionDelete($_ovhTypeManagedServicesPartitionDelete->getSession(),$_ovhTypeManagedServicesPartitionDelete->getStorage(),$_ovhTypeManagedServicesPartitionDelete->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesPartitionStatusCheck
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesPartitionStatusCheck::getSession()
	 * @uses OvhTypeManagedServicesPartitionStatusCheck::getStorage()
	 * @uses OvhTypeManagedServicesPartitionStatusCheck::getPartitionName()
	 * @param OvhTypeManagedServicesPartitionStatusCheck ManagedServicesPartitionStatusCheck
	 * @return OvhTypeManagedServicesPartitionStatusCheckResponse
	 */
	public function managedServicesPartitionStatusCheck(OvhTypeManagedServicesPartitionStatusCheck $_ovhTypeManagedServicesPartitionStatusCheck)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesPartitionStatusCheckResponse(self::getSoapClient()->managedServicesPartitionStatusCheck($_ovhTypeManagedServicesPartitionStatusCheck->getSession(),$_ovhTypeManagedServicesPartitionStatusCheck->getStorage(),$_ovhTypeManagedServicesPartitionStatusCheck->getPartitionName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesPartitionCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesPartitionCreate::getSession()
	 * @uses OvhTypeManagedServicesPartitionCreate::getStorage()
	 * @uses OvhTypeManagedServicesPartitionCreate::getName()
	 * @uses OvhTypeManagedServicesPartitionCreate::getSize()
	 * @uses OvhTypeManagedServicesPartitionCreate::getProtocol()
	 * @param OvhTypeManagedServicesPartitionCreate ManagedServicesPartitionCreate
	 * @return OvhTypeManagedServicesPartitionCreateResponse
	 */
	public function managedServicesPartitionCreate(OvhTypeManagedServicesPartitionCreate $_ovhTypeManagedServicesPartitionCreate)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesPartitionCreateResponse(self::getSoapClient()->managedServicesPartitionCreate($_ovhTypeManagedServicesPartitionCreate->getSession(),$_ovhTypeManagedServicesPartitionCreate->getStorage(),$_ovhTypeManagedServicesPartitionCreate->getName(),$_ovhTypeManagedServicesPartitionCreate->getSize(),$_ovhTypeManagedServicesPartitionCreate->getProtocol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesPartitionGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesPartitionGet::getSession()
	 * @uses OvhTypeManagedServicesPartitionGet::getDomain()
	 * @param OvhTypeManagedServicesPartitionGet ManagedServicesPartitionGet
	 * @return OvhTypeManagedServicesPartitionGetResponse
	 */
	public function managedServicesPartitionGet(OvhTypeManagedServicesPartitionGet $_ovhTypeManagedServicesPartitionGet)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesPartitionGetResponse(self::getSoapClient()->managedServicesPartitionGet($_ovhTypeManagedServicesPartitionGet->getSession(),$_ovhTypeManagedServicesPartitionGet->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesPartitionUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesPartitionUpdate::getSession()
	 * @uses OvhTypeManagedServicesPartitionUpdate::getStorage()
	 * @uses OvhTypeManagedServicesPartitionUpdate::getName()
	 * @uses OvhTypeManagedServicesPartitionUpdate::getSize()
	 * @param OvhTypeManagedServicesPartitionUpdate ManagedServicesPartitionUpdate
	 * @return OvhTypeManagedServicesPartitionUpdateResponse
	 */
	public function managedServicesPartitionUpdate(OvhTypeManagedServicesPartitionUpdate $_ovhTypeManagedServicesPartitionUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesPartitionUpdateResponse(self::getSoapClient()->managedServicesPartitionUpdate($_ovhTypeManagedServicesPartitionUpdate->getSession(),$_ovhTypeManagedServicesPartitionUpdate->getStorage(),$_ovhTypeManagedServicesPartitionUpdate->getName(),$_ovhTypeManagedServicesPartitionUpdate->getSize())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call managedServicesNameUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeManagedServicesNameUpdate::getSession()
	 * @uses OvhTypeManagedServicesNameUpdate::getStorage()
	 * @uses OvhTypeManagedServicesNameUpdate::getCustomName()
	 * @param OvhTypeManagedServicesNameUpdate ManagedServicesNameUpdate
	 * @return OvhTypeManagedServicesNameUpdateResponse
	 */
	public function managedServicesNameUpdate(OvhTypeManagedServicesNameUpdate $_ovhTypeManagedServicesNameUpdate)
	{
		try
		{
			$this->setResult(new OvhTypeManagedServicesNameUpdateResponse(self::getSoapClient()->managedServicesNameUpdate($_ovhTypeManagedServicesNameUpdate->getSession(),$_ovhTypeManagedServicesNameUpdate->getStorage(),$_ovhTypeManagedServicesNameUpdate->getCustomName())));
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
	 * @return OvhTypeManagedServicesNameUpdateResponse
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