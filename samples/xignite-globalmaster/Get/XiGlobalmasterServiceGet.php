<?php
/**
 * Class file for XiGlobalmasterServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterServiceGet
 * @date 08/07/2012
 */
class XiGlobalmasterServiceGet extends XiGlobalmasterWsdlClass
{
	/**
	 * Method to call GetSecurity
	 * Meta informations :
	 * 	- documentation : Get a list of securities.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetSecurity::getIdentifier()
	 * @uses XiGlobalmasterTypeGetSecurity::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetSecurity::getStartDate()
	 * @uses XiGlobalmasterTypeGetSecurity::getEndDate()
	 * @param XiGlobalmasterTypeGetSecurity GetSecurity
	 * @return XiGlobalmasterTypeGetSecurityResponse
	 */
	public function GetSecurity(XiGlobalmasterTypeGetSecurity $_XiGlobalmasterTypeGetSecurity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSecurity(array('Identifier'=>$_XiGlobalmasterTypeGetSecurity->getIdentifier(),'IdentifierType'=>$_XiGlobalmasterTypeGetSecurity->getIdentifierType(),'StartDate'=>$_XiGlobalmasterTypeGetSecurity->getStartDate(),'EndDate'=>$_XiGlobalmasterTypeGetSecurity->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSecurities
	 * Meta informations :
	 * 	- documentation : Get a list of securities.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetSecurities::getIdentifiers()
	 * @uses XiGlobalmasterTypeGetSecurities::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetSecurities::getAsOfDate()
	 * @param XiGlobalmasterTypeGetSecurities GetSecurities
	 * @return XiGlobalmasterTypeGetSecuritiesResponse
	 */
	public function GetSecurities(XiGlobalmasterTypeGetSecurities $_XiGlobalmasterTypeGetSecurities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSecurities(array('Identifiers'=>$_XiGlobalmasterTypeGetSecurities->getIdentifiers(),'IdentifierType'=>$_XiGlobalmasterTypeGetSecurities->getIdentifierType(),'AsOfDate'=>$_XiGlobalmasterTypeGetSecurities->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInstrument
	 * Meta informations :
	 * 	- documentation : Get a list of instruments.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetInstrument::getIncludeRelated()
	 * @uses XiGlobalmasterTypeGetInstrument::getIdentifier()
	 * @uses XiGlobalmasterTypeGetInstrument::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetInstrument::getStartDate()
	 * @uses XiGlobalmasterTypeGetInstrument::getEndDate()
	 * @param XiGlobalmasterTypeGetInstrument GetInstrument
	 * @return XiGlobalmasterTypeGetInstrumentResponse
	 */
	public function GetInstrument(XiGlobalmasterTypeGetInstrument $_XiGlobalmasterTypeGetInstrument)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInstrument(array('IncludeRelated'=>$_XiGlobalmasterTypeGetInstrument->getIncludeRelated(),'Identifier'=>$_XiGlobalmasterTypeGetInstrument->getIdentifier(),'IdentifierType'=>$_XiGlobalmasterTypeGetInstrument->getIdentifierType(),'StartDate'=>$_XiGlobalmasterTypeGetInstrument->getStartDate(),'EndDate'=>$_XiGlobalmasterTypeGetInstrument->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInstruments
	 * Meta informations :
	 * 	- documentation : Get a list of instruments.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetInstruments::getIncludeRelated()
	 * @uses XiGlobalmasterTypeGetInstruments::getIdentifiers()
	 * @uses XiGlobalmasterTypeGetInstruments::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetInstruments::getAsOfDate()
	 * @param XiGlobalmasterTypeGetInstruments GetInstruments
	 * @return XiGlobalmasterTypeGetInstrumentsResponse
	 */
	public function GetInstruments(XiGlobalmasterTypeGetInstruments $_XiGlobalmasterTypeGetInstruments)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInstruments(array('IncludeRelated'=>$_XiGlobalmasterTypeGetInstruments->getIncludeRelated(),'Identifiers'=>$_XiGlobalmasterTypeGetInstruments->getIdentifiers(),'IdentifierType'=>$_XiGlobalmasterTypeGetInstruments->getIdentifierType(),'AsOfDate'=>$_XiGlobalmasterTypeGetInstruments->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssuer
	 * Meta informations :
	 * 	- documentation : Get a list of issuers.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetIssuer::getIncludeRelated()
	 * @uses XiGlobalmasterTypeGetIssuer::getIdentifier()
	 * @uses XiGlobalmasterTypeGetIssuer::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetIssuer::getStartDate()
	 * @uses XiGlobalmasterTypeGetIssuer::getEndDate()
	 * @param XiGlobalmasterTypeGetIssuer GetIssuer
	 * @return XiGlobalmasterTypeGetIssuerResponse
	 */
	public function GetIssuer(XiGlobalmasterTypeGetIssuer $_XiGlobalmasterTypeGetIssuer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssuer(array('IncludeRelated'=>$_XiGlobalmasterTypeGetIssuer->getIncludeRelated(),'Identifier'=>$_XiGlobalmasterTypeGetIssuer->getIdentifier(),'IdentifierType'=>$_XiGlobalmasterTypeGetIssuer->getIdentifierType(),'StartDate'=>$_XiGlobalmasterTypeGetIssuer->getStartDate(),'EndDate'=>$_XiGlobalmasterTypeGetIssuer->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssuers
	 * Meta informations :
	 * 	- documentation : Get a list of issuers
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetIssuers::getIncludeRelated()
	 * @uses XiGlobalmasterTypeGetIssuers::getIdentifiers()
	 * @uses XiGlobalmasterTypeGetIssuers::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetIssuers::getAsOfDate()
	 * @param XiGlobalmasterTypeGetIssuers GetIssuers
	 * @return XiGlobalmasterTypeGetIssuersResponse
	 */
	public function GetIssuers(XiGlobalmasterTypeGetIssuers $_XiGlobalmasterTypeGetIssuers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssuers(array('IncludeRelated'=>$_XiGlobalmasterTypeGetIssuers->getIncludeRelated(),'Identifiers'=>$_XiGlobalmasterTypeGetIssuers->getIdentifiers(),'IdentifierType'=>$_XiGlobalmasterTypeGetIssuers->getIdentifierType(),'AsOfDate'=>$_XiGlobalmasterTypeGetIssuers->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIssuerByCompanyIdentifier
	 * Meta informations :
	 * 	- documentation : Get a issuer by the company identifier.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetIssuerByCompanyIdentifier::getIncludeRelated()
	 * @uses XiGlobalmasterTypeGetIssuerByCompanyIdentifier::getIdentifier()
	 * @param XiGlobalmasterTypeGetIssuerByCompanyIdentifier GetIssuerByCompanyIdentifier
	 * @return XiGlobalmasterTypeGetIssuerByCompanyIdentifierResponse
	 */
	public function GetIssuerByCompanyIdentifier(XiGlobalmasterTypeGetIssuerByCompanyIdentifier $_XiGlobalmasterTypeGetIssuerByCompanyIdentifier)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIssuerByCompanyIdentifier(array('IncludeRelated'=>$_XiGlobalmasterTypeGetIssuerByCompanyIdentifier->getIncludeRelated(),'Identifier'=>$_XiGlobalmasterTypeGetIssuerByCompanyIdentifier->getIdentifier())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMasterByIdentifier
	 * Meta informations :
	 * 	- documentation : Get master records by identifier.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetMasterByIdentifier::getIdentifier()
	 * @uses XiGlobalmasterTypeGetMasterByIdentifier::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetMasterByIdentifier::getStartDate()
	 * @uses XiGlobalmasterTypeGetMasterByIdentifier::getEndDate()
	 * @param XiGlobalmasterTypeGetMasterByIdentifier GetMasterByIdentifier
	 * @return XiGlobalmasterTypeGetMasterByIdentifierResponse
	 */
	public function GetMasterByIdentifier(XiGlobalmasterTypeGetMasterByIdentifier $_XiGlobalmasterTypeGetMasterByIdentifier)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMasterByIdentifier(array('Identifier'=>$_XiGlobalmasterTypeGetMasterByIdentifier->getIdentifier(),'IdentifierType'=>$_XiGlobalmasterTypeGetMasterByIdentifier->getIdentifierType(),'StartDate'=>$_XiGlobalmasterTypeGetMasterByIdentifier->getStartDate(),'EndDate'=>$_XiGlobalmasterTypeGetMasterByIdentifier->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMasterByIdentifiers
	 * Meta informations :
	 * 	- documentation : Get master records by identifiers.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetMasterByIdentifiers::getIdentifiers()
	 * @uses XiGlobalmasterTypeGetMasterByIdentifiers::getIdentifierType()
	 * @uses XiGlobalmasterTypeGetMasterByIdentifiers::getAsOfDate()
	 * @param XiGlobalmasterTypeGetMasterByIdentifiers GetMasterByIdentifiers
	 * @return XiGlobalmasterTypeGetMasterByIdentifiersResponse
	 */
	public function GetMasterByIdentifiers(XiGlobalmasterTypeGetMasterByIdentifiers $_XiGlobalmasterTypeGetMasterByIdentifiers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMasterByIdentifiers(array('Identifiers'=>$_XiGlobalmasterTypeGetMasterByIdentifiers->getIdentifiers(),'IdentifierType'=>$_XiGlobalmasterTypeGetMasterByIdentifiers->getIdentifierType(),'AsOfDate'=>$_XiGlobalmasterTypeGetMasterByIdentifiers->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMasterByExchange
	 * Meta informations :
	 * 	- documentation : Get master records by exchange.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetMasterByExchange::getExchange()
	 * @uses XiGlobalmasterTypeGetMasterByExchange::getStartSymbol()
	 * @uses XiGlobalmasterTypeGetMasterByExchange::getEndSymbol()
	 * @uses XiGlobalmasterTypeGetMasterByExchange::getInstrumentClass()
	 * @uses XiGlobalmasterTypeGetMasterByExchange::getAsOfDate()
	 * @param XiGlobalmasterTypeGetMasterByExchange GetMasterByExchange
	 * @return XiGlobalmasterTypeGetMasterByExchangeResponse
	 */
	public function GetMasterByExchange(XiGlobalmasterTypeGetMasterByExchange $_XiGlobalmasterTypeGetMasterByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMasterByExchange(array('Exchange'=>$_XiGlobalmasterTypeGetMasterByExchange->getExchange(),'StartSymbol'=>$_XiGlobalmasterTypeGetMasterByExchange->getStartSymbol(),'EndSymbol'=>$_XiGlobalmasterTypeGetMasterByExchange->getEndSymbol(),'InstrumentClass'=>$_XiGlobalmasterTypeGetMasterByExchange->getInstrumentClass(),'AsOfDate'=>$_XiGlobalmasterTypeGetMasterByExchange->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMasterByExchangeChanges
	 * Meta informations :
	 * 	- documentation : Get a master record by exchange and the last modified since date
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetMasterByExchangeChanges::getExchange()
	 * @uses XiGlobalmasterTypeGetMasterByExchangeChanges::getStartSymbol()
	 * @uses XiGlobalmasterTypeGetMasterByExchangeChanges::getEndSymbol()
	 * @uses XiGlobalmasterTypeGetMasterByExchangeChanges::getInstrumentClass()
	 * @uses XiGlobalmasterTypeGetMasterByExchangeChanges::getStartModifiedDate()
	 * @uses XiGlobalmasterTypeGetMasterByExchangeChanges::getEndModifiedDate()
	 * @param XiGlobalmasterTypeGetMasterByExchangeChanges GetMasterByExchangeChanges
	 * @return XiGlobalmasterTypeGetMasterByExchangeChangesResponse
	 */
	public function GetMasterByExchangeChanges(XiGlobalmasterTypeGetMasterByExchangeChanges $_XiGlobalmasterTypeGetMasterByExchangeChanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMasterByExchangeChanges(array('Exchange'=>$_XiGlobalmasterTypeGetMasterByExchangeChanges->getExchange(),'StartSymbol'=>$_XiGlobalmasterTypeGetMasterByExchangeChanges->getStartSymbol(),'EndSymbol'=>$_XiGlobalmasterTypeGetMasterByExchangeChanges->getEndSymbol(),'InstrumentClass'=>$_XiGlobalmasterTypeGetMasterByExchangeChanges->getInstrumentClass(),'StartModifiedDate'=>$_XiGlobalmasterTypeGetMasterByExchangeChanges->getStartModifiedDate(),'EndModifiedDate'=>$_XiGlobalmasterTypeGetMasterByExchangeChanges->getEndModifiedDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMasterBySector
	 * Meta informations :
	 * 	- documentation : Get a master record by sector.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetMasterBySector::getExchange()
	 * @uses XiGlobalmasterTypeGetMasterBySector::getSector()
	 * @uses XiGlobalmasterTypeGetMasterBySector::getStartSymbol()
	 * @uses XiGlobalmasterTypeGetMasterBySector::getEndSymbol()
	 * @uses XiGlobalmasterTypeGetMasterBySector::getInstrumentClass()
	 * @uses XiGlobalmasterTypeGetMasterBySector::getAsOfDate()
	 * @param XiGlobalmasterTypeGetMasterBySector GetMasterBySector
	 * @return XiGlobalmasterTypeGetMasterBySectorResponse
	 */
	public function GetMasterBySector(XiGlobalmasterTypeGetMasterBySector $_XiGlobalmasterTypeGetMasterBySector)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMasterBySector(array('Exchange'=>$_XiGlobalmasterTypeGetMasterBySector->getExchange(),'Sector'=>$_XiGlobalmasterTypeGetMasterBySector->getSector(),'StartSymbol'=>$_XiGlobalmasterTypeGetMasterBySector->getStartSymbol(),'EndSymbol'=>$_XiGlobalmasterTypeGetMasterBySector->getEndSymbol(),'InstrumentClass'=>$_XiGlobalmasterTypeGetMasterBySector->getInstrumentClass(),'AsOfDate'=>$_XiGlobalmasterTypeGetMasterBySector->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMasterByIndustry
	 * Meta informations :
	 * 	- documentation : Get a master record by industry.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetMasterByIndustry::getExchange()
	 * @uses XiGlobalmasterTypeGetMasterByIndustry::getIndustry()
	 * @uses XiGlobalmasterTypeGetMasterByIndustry::getStartSymbol()
	 * @uses XiGlobalmasterTypeGetMasterByIndustry::getEndSymbol()
	 * @uses XiGlobalmasterTypeGetMasterByIndustry::getInstrumentClass()
	 * @uses XiGlobalmasterTypeGetMasterByIndustry::getAsOfDate()
	 * @param XiGlobalmasterTypeGetMasterByIndustry GetMasterByIndustry
	 * @return XiGlobalmasterTypeGetMasterByIndustryResponse
	 */
	public function GetMasterByIndustry(XiGlobalmasterTypeGetMasterByIndustry $_XiGlobalmasterTypeGetMasterByIndustry)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMasterByIndustry(array('Exchange'=>$_XiGlobalmasterTypeGetMasterByIndustry->getExchange(),'Industry'=>$_XiGlobalmasterTypeGetMasterByIndustry->getIndustry(),'StartSymbol'=>$_XiGlobalmasterTypeGetMasterByIndustry->getStartSymbol(),'EndSymbol'=>$_XiGlobalmasterTypeGetMasterByIndustry->getEndSymbol(),'InstrumentClass'=>$_XiGlobalmasterTypeGetMasterByIndustry->getInstrumentClass(),'AsOfDate'=>$_XiGlobalmasterTypeGetMasterByIndustry->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMasterStatisticsByExchange
	 * Meta informations :
	 * 	- documentation : Get statistical information about exchanges.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeGetMasterStatisticsByExchange::getExchange()
	 * @uses XiGlobalmasterTypeGetMasterStatisticsByExchange::getStartSymbol()
	 * @uses XiGlobalmasterTypeGetMasterStatisticsByExchange::getEndSymbol()
	 * @uses XiGlobalmasterTypeGetMasterStatisticsByExchange::getInstrumentClass()
	 * @uses XiGlobalmasterTypeGetMasterStatisticsByExchange::getAsOfDate()
	 * @param XiGlobalmasterTypeGetMasterStatisticsByExchange GetMasterStatisticsByExchange
	 * @return XiGlobalmasterTypeGetMasterStatisticsByExchangeResponse
	 */
	public function GetMasterStatisticsByExchange(XiGlobalmasterTypeGetMasterStatisticsByExchange $_XiGlobalmasterTypeGetMasterStatisticsByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMasterStatisticsByExchange(array('Exchange'=>$_XiGlobalmasterTypeGetMasterStatisticsByExchange->getExchange(),'StartSymbol'=>$_XiGlobalmasterTypeGetMasterStatisticsByExchange->getStartSymbol(),'EndSymbol'=>$_XiGlobalmasterTypeGetMasterStatisticsByExchange->getEndSymbol(),'InstrumentClass'=>$_XiGlobalmasterTypeGetMasterStatisticsByExchange->getInstrumentClass(),'AsOfDate'=>$_XiGlobalmasterTypeGetMasterStatisticsByExchange->getAsOfDate())));
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
	 * @return XiGlobalmasterTypeGetMasterStatisticsByExchangeResponse
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