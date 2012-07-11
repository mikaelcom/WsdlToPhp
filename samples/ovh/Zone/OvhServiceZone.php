<?php
/**
 * Class file for OvhServiceZone
 * @date 02/07/2012
 */
/**
 * Class OvhServiceZone
 * @date 02/07/2012
 */
class OvhServiceZone extends OvhWsdlClass
{
	/**
	 * Method to call zoneEntryList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeZoneEntryList::getSession()
	 * @uses OvhTypeZoneEntryList::getDomain()
	 * @param OvhTypeZoneEntryList ZoneEntryList
	 * @return OvhTypeZoneEntryListResponse
	 */
	public function zoneEntryList(OvhTypeZoneEntryList $_ovhTypeZoneEntryList)
	{
		try
		{
			$this->setResult(new OvhTypeZoneEntryListResponse(self::getSoapClient()->zoneEntryList($_ovhTypeZoneEntryList->getSession(),$_ovhTypeZoneEntryList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call zoneEntryAddCustom
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeZoneEntryAddCustom::getSession()
	 * @uses OvhTypeZoneEntryAddCustom::getDomain()
	 * @uses OvhTypeZoneEntryAddCustom::getFieldtype()
	 * @uses OvhTypeZoneEntryAddCustom::getHostingtype()
	 * @uses OvhTypeZoneEntryAddCustom::getHosting()
	 * @uses OvhTypeZoneEntryAddCustom::getSubdomain()
	 * @uses OvhTypeZoneEntryAddCustom::getPriority()
	 * @uses OvhTypeZoneEntryAddCustom::getTarget()
	 * @uses OvhTypeZoneEntryAddCustom::getCountry()
	 * @param OvhTypeZoneEntryAddCustom ZoneEntryAddCustom
	 * @return OvhTypeZoneEntryAddCustomResponse
	 */
	public function zoneEntryAddCustom(OvhTypeZoneEntryAddCustom $_ovhTypeZoneEntryAddCustom)
	{
		try
		{
			$this->setResult(new OvhTypeZoneEntryAddCustomResponse(self::getSoapClient()->zoneEntryAddCustom($_ovhTypeZoneEntryAddCustom->getSession(),$_ovhTypeZoneEntryAddCustom->getDomain(),$_ovhTypeZoneEntryAddCustom->getFieldtype(),$_ovhTypeZoneEntryAddCustom->getHostingtype(),$_ovhTypeZoneEntryAddCustom->getHosting(),$_ovhTypeZoneEntryAddCustom->getSubdomain(),$_ovhTypeZoneEntryAddCustom->getPriority(),$_ovhTypeZoneEntryAddCustom->getTarget(),$_ovhTypeZoneEntryAddCustom->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call zoneEntryModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeZoneEntryModify::getSession()
	 * @uses OvhTypeZoneEntryModify::getDomain()
	 * @uses OvhTypeZoneEntryModify::getSubdomain()
	 * @uses OvhTypeZoneEntryModify::getFieldtype()
	 * @uses OvhTypeZoneEntryModify::getTarget()
	 * @uses OvhTypeZoneEntryModify::getNewTarget()
	 * @param OvhTypeZoneEntryModify ZoneEntryModify
	 * @return OvhTypeZoneEntryModifyResponse
	 */
	public function zoneEntryModify(OvhTypeZoneEntryModify $_ovhTypeZoneEntryModify)
	{
		try
		{
			$this->setResult(new OvhTypeZoneEntryModifyResponse(self::getSoapClient()->zoneEntryModify($_ovhTypeZoneEntryModify->getSession(),$_ovhTypeZoneEntryModify->getDomain(),$_ovhTypeZoneEntryModify->getSubdomain(),$_ovhTypeZoneEntryModify->getFieldtype(),$_ovhTypeZoneEntryModify->getTarget(),$_ovhTypeZoneEntryModify->getNewTarget())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call zoneEntryDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeZoneEntryDel::getSession()
	 * @uses OvhTypeZoneEntryDel::getDomain()
	 * @uses OvhTypeZoneEntryDel::getSubdomain()
	 * @uses OvhTypeZoneEntryDel::getFieldtype()
	 * @uses OvhTypeZoneEntryDel::getTarget()
	 * @param OvhTypeZoneEntryDel ZoneEntryDel
	 * @return OvhTypeZoneEntryDelResponse
	 */
	public function zoneEntryDel(OvhTypeZoneEntryDel $_ovhTypeZoneEntryDel)
	{
		try
		{
			$this->setResult(new OvhTypeZoneEntryDelResponse(self::getSoapClient()->zoneEntryDel($_ovhTypeZoneEntryDel->getSession(),$_ovhTypeZoneEntryDel->getDomain(),$_ovhTypeZoneEntryDel->getSubdomain(),$_ovhTypeZoneEntryDel->getFieldtype(),$_ovhTypeZoneEntryDel->getTarget())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call zoneEntryAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeZoneEntryAdd::getSession()
	 * @uses OvhTypeZoneEntryAdd::getDomain()
	 * @uses OvhTypeZoneEntryAdd::getSubdomain()
	 * @uses OvhTypeZoneEntryAdd::getFieldtype()
	 * @uses OvhTypeZoneEntryAdd::getTarget()
	 * @uses OvhTypeZoneEntryAdd::getOverwrite()
	 * @param OvhTypeZoneEntryAdd ZoneEntryAdd
	 * @return OvhTypeZoneEntryAddResponse
	 */
	public function zoneEntryAdd(OvhTypeZoneEntryAdd $_ovhTypeZoneEntryAdd)
	{
		try
		{
			$this->setResult(new OvhTypeZoneEntryAddResponse(self::getSoapClient()->zoneEntryAdd($_ovhTypeZoneEntryAdd->getSession(),$_ovhTypeZoneEntryAdd->getDomain(),$_ovhTypeZoneEntryAdd->getSubdomain(),$_ovhTypeZoneEntryAdd->getFieldtype(),$_ovhTypeZoneEntryAdd->getTarget(),$_ovhTypeZoneEntryAdd->getOverwrite())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call zoneExport
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeZoneExport::getSession()
	 * @uses OvhTypeZoneExport::getDomain()
	 * @param OvhTypeZoneExport ZoneExport
	 * @return OvhTypeZoneExportResponse
	 */
	public function zoneExport(OvhTypeZoneExport $_ovhTypeZoneExport)
	{
		try
		{
			$this->setResult(new OvhTypeZoneExportResponse(self::getSoapClient()->zoneExport($_ovhTypeZoneExport->getSession(),$_ovhTypeZoneExport->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call zoneImport
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeZoneImport::getSession()
	 * @uses OvhTypeZoneImport::getDomain()
	 * @uses OvhTypeZoneImport::getZone()
	 * @param OvhTypeZoneImport ZoneImport
	 * @return OvhTypeZoneImportResponse
	 */
	public function zoneImport(OvhTypeZoneImport $_ovhTypeZoneImport)
	{
		try
		{
			$this->setResult(new OvhTypeZoneImportResponse(self::getSoapClient()->zoneImport($_ovhTypeZoneImport->getSession(),$_ovhTypeZoneImport->getDomain(),$_ovhTypeZoneImport->getZone())));
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
	 * @return OvhTypeZoneImportResponse
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