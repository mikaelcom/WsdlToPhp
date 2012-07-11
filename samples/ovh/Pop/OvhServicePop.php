<?php
/**
 * Class file for OvhServicePop
 * @date 02/07/2012
 */
/**
 * Class OvhServicePop
 * @date 02/07/2012
 */
class OvhServicePop extends OvhWsdlClass
{
	/**
	 * Method to call popDetachMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopDetachMasterNic::getSession()
	 * @uses OvhTypePopDetachMasterNic::getDomain()
	 * @uses OvhTypePopDetachMasterNic::getPop()
	 * @param OvhTypePopDetachMasterNic PopDetachMasterNic
	 * @return OvhTypePopDetachMasterNicResponse
	 */
	public function popDetachMasterNic(OvhTypePopDetachMasterNic $_ovhTypePopDetachMasterNic)
	{
		try
		{
			$this->setResult(new OvhTypePopDetachMasterNicResponse(self::getSoapClient()->popDetachMasterNic($_ovhTypePopDetachMasterNic->getSession(),$_ovhTypePopDetachMasterNic->getDomain(),$_ovhTypePopDetachMasterNic->getPop())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopList::getSession()
	 * @uses OvhTypePopList::getDomain()
	 * @param OvhTypePopList PopList
	 * @return OvhTypePopListResponse
	 */
	public function popList(OvhTypePopList $_ovhTypePopList)
	{
		try
		{
			$this->setResult(new OvhTypePopListResponse(self::getSoapClient()->popList($_ovhTypePopList->getSession(),$_ovhTypePopList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popUpgradeQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopUpgradeQuota::getSession()
	 * @uses OvhTypePopUpgradeQuota::getDomain()
	 * @uses OvhTypePopUpgradeQuota::getPop()
	 * @uses OvhTypePopUpgradeQuota::getSize()
	 * @param OvhTypePopUpgradeQuota PopUpgradeQuota
	 * @return OvhTypePopUpgradeQuotaResponse
	 */
	public function popUpgradeQuota(OvhTypePopUpgradeQuota $_ovhTypePopUpgradeQuota)
	{
		try
		{
			$this->setResult(new OvhTypePopUpgradeQuotaResponse(self::getSoapClient()->popUpgradeQuota($_ovhTypePopUpgradeQuota->getSession(),$_ovhTypePopUpgradeQuota->getDomain(),$_ovhTypePopUpgradeQuota->getPop(),$_ovhTypePopUpgradeQuota->getSize())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopDel::getSession()
	 * @uses OvhTypePopDel::getDomain()
	 * @uses OvhTypePopDel::getPop()
	 * @param OvhTypePopDel PopDel
	 * @return OvhTypePopDelResponse
	 */
	public function popDel(OvhTypePopDel $_ovhTypePopDel)
	{
		try
		{
			$this->setResult(new OvhTypePopDelResponse(self::getSoapClient()->popDel($_ovhTypePopDel->getSession(),$_ovhTypePopDel->getDomain(),$_ovhTypePopDel->getPop())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popListByMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopListByMasterNic::getSession()
	 * @param OvhTypePopListByMasterNic PopListByMasterNic
	 * @return OvhTypePopListByMasterNicResponse
	 */
	public function popListByMasterNic(OvhTypePopListByMasterNic $_ovhTypePopListByMasterNic)
	{
		try
		{
			$this->setResult(new OvhTypePopListByMasterNicResponse(self::getSoapClient()->popListByMasterNic($_ovhTypePopListByMasterNic->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popModifyDescription
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopModifyDescription::getSession()
	 * @uses OvhTypePopModifyDescription::getDomain()
	 * @uses OvhTypePopModifyDescription::getPop()
	 * @uses OvhTypePopModifyDescription::getDescription()
	 * @param OvhTypePopModifyDescription PopModifyDescription
	 * @return OvhTypePopModifyDescriptionResponse
	 */
	public function popModifyDescription(OvhTypePopModifyDescription $_ovhTypePopModifyDescription)
	{
		try
		{
			$this->setResult(new OvhTypePopModifyDescriptionResponse(self::getSoapClient()->popModifyDescription($_ovhTypePopModifyDescription->getSession(),$_ovhTypePopModifyDescription->getDomain(),$_ovhTypePopModifyDescription->getPop(),$_ovhTypePopModifyDescription->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopInfo::getSession()
	 * @uses OvhTypePopInfo::getDomain()
	 * @uses OvhTypePopInfo::getPop()
	 * @param OvhTypePopInfo PopInfo
	 * @return OvhTypePopInfoResponse
	 */
	public function popInfo(OvhTypePopInfo $_ovhTypePopInfo)
	{
		try
		{
			$this->setResult(new OvhTypePopInfoResponse(self::getSoapClient()->popInfo($_ovhTypePopInfo->getSession(),$_ovhTypePopInfo->getDomain(),$_ovhTypePopInfo->getPop())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopModifyPassword::getSession()
	 * @uses OvhTypePopModifyPassword::getDomain()
	 * @uses OvhTypePopModifyPassword::getPop()
	 * @uses OvhTypePopModifyPassword::getPassword()
	 * @uses OvhTypePopModifyPassword::getDoNotSendMail()
	 * @param OvhTypePopModifyPassword PopModifyPassword
	 * @return OvhTypePopModifyPasswordResponse
	 */
	public function popModifyPassword(OvhTypePopModifyPassword $_ovhTypePopModifyPassword)
	{
		try
		{
			$this->setResult(new OvhTypePopModifyPasswordResponse(self::getSoapClient()->popModifyPassword($_ovhTypePopModifyPassword->getSession(),$_ovhTypePopModifyPassword->getDomain(),$_ovhTypePopModifyPassword->getPop(),$_ovhTypePopModifyPassword->getPassword(),$_ovhTypePopModifyPassword->getDoNotSendMail())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popAttachMasterNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopAttachMasterNic::getSession()
	 * @uses OvhTypePopAttachMasterNic::getDomain()
	 * @uses OvhTypePopAttachMasterNic::getPop()
	 * @uses OvhTypePopAttachMasterNic::getNic()
	 * @param OvhTypePopAttachMasterNic PopAttachMasterNic
	 * @return OvhTypePopAttachMasterNicResponse
	 */
	public function popAttachMasterNic(OvhTypePopAttachMasterNic $_ovhTypePopAttachMasterNic)
	{
		try
		{
			$this->setResult(new OvhTypePopAttachMasterNicResponse(self::getSoapClient()->popAttachMasterNic($_ovhTypePopAttachMasterNic->getSession(),$_ovhTypePopAttachMasterNic->getDomain(),$_ovhTypePopAttachMasterNic->getPop(),$_ovhTypePopAttachMasterNic->getNic())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopAdd::getSession()
	 * @uses OvhTypePopAdd::getDomain()
	 * @uses OvhTypePopAdd::getPop()
	 * @uses OvhTypePopAdd::getPassword()
	 * @uses OvhTypePopAdd::getDescription()
	 * @uses OvhTypePopAdd::getNic()
	 * @uses OvhTypePopAdd::getQuota()
	 * @param OvhTypePopAdd PopAdd
	 * @return OvhTypePopAddResponse
	 */
	public function popAdd(OvhTypePopAdd $_ovhTypePopAdd)
	{
		try
		{
			$this->setResult(new OvhTypePopAddResponse(self::getSoapClient()->popAdd($_ovhTypePopAdd->getSession(),$_ovhTypePopAdd->getDomain(),$_ovhTypePopAdd->getPop(),$_ovhTypePopAdd->getPassword(),$_ovhTypePopAdd->getDescription(),$_ovhTypePopAdd->getNic(),$_ovhTypePopAdd->getQuota())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call popGetQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePopGetQuota::getSession()
	 * @uses OvhTypePopGetQuota::getDomain()
	 * @uses OvhTypePopGetQuota::getPop()
	 * @param OvhTypePopGetQuota PopGetQuota
	 * @return OvhTypePopGetQuotaResponse
	 */
	public function popGetQuota(OvhTypePopGetQuota $_ovhTypePopGetQuota)
	{
		try
		{
			$this->setResult(new OvhTypePopGetQuotaResponse(self::getSoapClient()->popGetQuota($_ovhTypePopGetQuota->getSession(),$_ovhTypePopGetQuota->getDomain(),$_ovhTypePopGetQuota->getPop())));
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
	 * @return OvhTypePopGetQuotaResponse
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