<?php
/**
 * Class file for OvhServiceCms
 * @date 02/07/2012
 */
/**
 * Class OvhServiceCms
 * @date 02/07/2012
 */
class OvhServiceCms extends OvhWsdlClass
{
	/**
	 * Method to call cmsInstall
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCmsInstall::getSession()
	 * @uses OvhTypeCmsInstall::getDomain()
	 * @uses OvhTypeCmsInstall::getCmsName()
	 * @uses OvhTypeCmsInstall::getPath()
	 * @uses OvhTypeCmsInstall::getLanguage()
	 * @param OvhTypeCmsInstall CmsInstall
	 * @return OvhTypeCmsInstallResponse
	 */
	public function cmsInstall(OvhTypeCmsInstall $_ovhTypeCmsInstall)
	{
		try
		{
			$this->setResult(new OvhTypeCmsInstallResponse(self::getSoapClient()->cmsInstall($_ovhTypeCmsInstall->getSession(),$_ovhTypeCmsInstall->getDomain(),$_ovhTypeCmsInstall->getCmsName(),$_ovhTypeCmsInstall->getPath(),$_ovhTypeCmsInstall->getLanguage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call cmsAvailableList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCmsAvailableList::getSession()
	 * @uses OvhTypeCmsAvailableList::getDomain()
	 * @param OvhTypeCmsAvailableList CmsAvailableList
	 * @return OvhTypeCmsAvailableListResponse
	 */
	public function cmsAvailableList(OvhTypeCmsAvailableList $_ovhTypeCmsAvailableList)
	{
		try
		{
			$this->setResult(new OvhTypeCmsAvailableListResponse(self::getSoapClient()->cmsAvailableList($_ovhTypeCmsAvailableList->getSession(),$_ovhTypeCmsAvailableList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call cmsRemove
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCmsRemove::getSession()
	 * @uses OvhTypeCmsRemove::getId()
	 * @param OvhTypeCmsRemove CmsRemove
	 * @return OvhTypeCmsRemoveResponse
	 */
	public function cmsRemove(OvhTypeCmsRemove $_ovhTypeCmsRemove)
	{
		try
		{
			$this->setResult(new OvhTypeCmsRemoveResponse(self::getSoapClient()->cmsRemove($_ovhTypeCmsRemove->getSession(),$_ovhTypeCmsRemove->getId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call cmsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCmsList::getSession()
	 * @uses OvhTypeCmsList::getDomain()
	 * @param OvhTypeCmsList CmsList
	 * @return OvhTypeCmsListResponse
	 */
	public function cmsList(OvhTypeCmsList $_ovhTypeCmsList)
	{
		try
		{
			$this->setResult(new OvhTypeCmsListResponse(self::getSoapClient()->cmsList($_ovhTypeCmsList->getSession(),$_ovhTypeCmsList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call cmsRenewAdminPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeCmsRenewAdminPassword::getSession()
	 * @uses OvhTypeCmsRenewAdminPassword::getId()
	 * @param OvhTypeCmsRenewAdminPassword CmsRenewAdminPassword
	 * @return OvhTypeCmsRenewAdminPasswordResponse
	 */
	public function cmsRenewAdminPassword(OvhTypeCmsRenewAdminPassword $_ovhTypeCmsRenewAdminPassword)
	{
		try
		{
			$this->setResult(new OvhTypeCmsRenewAdminPasswordResponse(self::getSoapClient()->cmsRenewAdminPassword($_ovhTypeCmsRenewAdminPassword->getSession(),$_ovhTypeCmsRenewAdminPassword->getId())));
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
	 * @return OvhTypeCmsRenewAdminPasswordResponse
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