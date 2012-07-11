<?php
/**
 * Class file for OvhServiceDns
 * @date 02/07/2012
 */
/**
 * Class OvhServiceDns
 * @date 02/07/2012
 */
class OvhServiceDns extends OvhWsdlClass
{
	/**
	 * Method to call dnsDefaultInstallCustom
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDnsDefaultInstallCustom::getSession()
	 * @uses OvhTypeDnsDefaultInstallCustom::getDomain()
	 * @uses OvhTypeDnsDefaultInstallCustom::getSubdomain()
	 * @uses OvhTypeDnsDefaultInstallCustom::getHostingtype()
	 * @uses OvhTypeDnsDefaultInstallCustom::getHosting()
	 * @uses OvhTypeDnsDefaultInstallCustom::getMxtype()
	 * @uses OvhTypeDnsDefaultInstallCustom::getMx()
	 * @uses OvhTypeDnsDefaultInstallCustom::getCountry()
	 * @uses OvhTypeDnsDefaultInstallCustom::getMinimized()
	 * @param OvhTypeDnsDefaultInstallCustom DnsDefaultInstallCustom
	 * @return OvhTypeDnsDefaultInstallCustomResponse
	 */
	public function dnsDefaultInstallCustom(OvhTypeDnsDefaultInstallCustom $_ovhTypeDnsDefaultInstallCustom)
	{
		try
		{
			$this->setResult(new OvhTypeDnsDefaultInstallCustomResponse(self::getSoapClient()->dnsDefaultInstallCustom($_ovhTypeDnsDefaultInstallCustom->getSession(),$_ovhTypeDnsDefaultInstallCustom->getDomain(),$_ovhTypeDnsDefaultInstallCustom->getSubdomain(),$_ovhTypeDnsDefaultInstallCustom->getHostingtype(),$_ovhTypeDnsDefaultInstallCustom->getHosting(),$_ovhTypeDnsDefaultInstallCustom->getMxtype(),$_ovhTypeDnsDefaultInstallCustom->getMx(),$_ovhTypeDnsDefaultInstallCustom->getCountry(),$_ovhTypeDnsDefaultInstallCustom->getMinimized())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dnsInstall
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDnsInstall::getSession()
	 * @uses OvhTypeDnsInstall::getDomain()
	 * @uses OvhTypeDnsInstall::getHosting()
	 * @uses OvhTypeDnsInstall::getMinimized()
	 * @param OvhTypeDnsInstall DnsInstall
	 * @return OvhTypeDnsInstallResponse
	 */
	public function dnsInstall(OvhTypeDnsInstall $_ovhTypeDnsInstall)
	{
		try
		{
			$this->setResult(new OvhTypeDnsInstallResponse(self::getSoapClient()->dnsInstall($_ovhTypeDnsInstall->getSession(),$_ovhTypeDnsInstall->getDomain(),$_ovhTypeDnsInstall->getHosting(),$_ovhTypeDnsInstall->getMinimized())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dnsReset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDnsReset::getSession()
	 * @uses OvhTypeDnsReset::getDomain()
	 * @uses OvhTypeDnsReset::getHosting()
	 * @uses OvhTypeDnsReset::getMinimized()
	 * @param OvhTypeDnsReset DnsReset
	 * @return OvhTypeDnsResetResponse
	 */
	public function dnsReset(OvhTypeDnsReset $_ovhTypeDnsReset)
	{
		try
		{
			$this->setResult(new OvhTypeDnsResetResponse(self::getSoapClient()->dnsReset($_ovhTypeDnsReset->getSession(),$_ovhTypeDnsReset->getDomain(),$_ovhTypeDnsReset->getHosting(),$_ovhTypeDnsReset->getMinimized())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dnsInstallCustom
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDnsInstallCustom::getSession()
	 * @uses OvhTypeDnsInstallCustom::getDomain()
	 * @uses OvhTypeDnsInstallCustom::getSubdomain()
	 * @uses OvhTypeDnsInstallCustom::getHostingtype()
	 * @uses OvhTypeDnsInstallCustom::getHosting()
	 * @uses OvhTypeDnsInstallCustom::getMxtype()
	 * @uses OvhTypeDnsInstallCustom::getMx()
	 * @uses OvhTypeDnsInstallCustom::getCountry()
	 * @uses OvhTypeDnsInstallCustom::getMinimized()
	 * @param OvhTypeDnsInstallCustom DnsInstallCustom
	 * @return OvhTypeDnsInstallCustomResponse
	 */
	public function dnsInstallCustom(OvhTypeDnsInstallCustom $_ovhTypeDnsInstallCustom)
	{
		try
		{
			$this->setResult(new OvhTypeDnsInstallCustomResponse(self::getSoapClient()->dnsInstallCustom($_ovhTypeDnsInstallCustom->getSession(),$_ovhTypeDnsInstallCustom->getDomain(),$_ovhTypeDnsInstallCustom->getSubdomain(),$_ovhTypeDnsInstallCustom->getHostingtype(),$_ovhTypeDnsInstallCustom->getHosting(),$_ovhTypeDnsInstallCustom->getMxtype(),$_ovhTypeDnsInstallCustom->getMx(),$_ovhTypeDnsInstallCustom->getCountry(),$_ovhTypeDnsInstallCustom->getMinimized())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dnsUninstall
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDnsUninstall::getSession()
	 * @uses OvhTypeDnsUninstall::getDomain()
	 * @param OvhTypeDnsUninstall DnsUninstall
	 * @return OvhTypeDnsUninstallResponse
	 */
	public function dnsUninstall(OvhTypeDnsUninstall $_ovhTypeDnsUninstall)
	{
		try
		{
			$this->setResult(new OvhTypeDnsUninstallResponse(self::getSoapClient()->dnsUninstall($_ovhTypeDnsUninstall->getSession(),$_ovhTypeDnsUninstall->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call dnsGeolocalizeHosting
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeDnsGeolocalizeHosting::getSession()
	 * @uses OvhTypeDnsGeolocalizeHosting::getDomain()
	 * @uses OvhTypeDnsGeolocalizeHosting::getHosting()
	 * @uses OvhTypeDnsGeolocalizeHosting::getCountry()
	 * @param OvhTypeDnsGeolocalizeHosting DnsGeolocalizeHosting
	 * @return OvhTypeDnsGeolocalizeHostingResponse
	 */
	public function dnsGeolocalizeHosting(OvhTypeDnsGeolocalizeHosting $_ovhTypeDnsGeolocalizeHosting)
	{
		try
		{
			$this->setResult(new OvhTypeDnsGeolocalizeHostingResponse(self::getSoapClient()->dnsGeolocalizeHosting($_ovhTypeDnsGeolocalizeHosting->getSession(),$_ovhTypeDnsGeolocalizeHosting->getDomain(),$_ovhTypeDnsGeolocalizeHosting->getHosting(),$_ovhTypeDnsGeolocalizeHosting->getCountry())));
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
	 * @return OvhTypeDnsGeolocalizeHostingResponse
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