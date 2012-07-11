<?php
/**
 * Class file for XiGlobalmasterServiceList
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterServiceList
 * @date 08/07/2012
 */
class XiGlobalmasterServiceList extends XiGlobalmasterWsdlClass
{
	/**
	 * Method to call ListExchanges
	 * Meta informations :
	 * 	- documentation : Get the possible exchanges.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @param XiGlobalmasterTypeListExchanges ListExchanges
	 * @return XiGlobalmasterTypeListExchangesResponse
	 */
	public function ListExchanges(XiGlobalmasterTypeListExchanges $_XiGlobalmasterTypeListExchanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListExchanges(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListIndustries
	 * Meta informations :
	 * 	- documentation : Get the possible industries.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @param XiGlobalmasterTypeListIndustries ListIndustries
	 * @return XiGlobalmasterTypeListIndustriesResponse
	 */
	public function ListIndustries(XiGlobalmasterTypeListIndustries $_XiGlobalmasterTypeListIndustries)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListIndustries(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListSectors
	 * Meta informations :
	 * 	- documentation : Get the possible sectors.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @param XiGlobalmasterTypeListSectors ListSectors
	 * @return XiGlobalmasterTypeListSectorsResponse
	 */
	public function ListSectors(XiGlobalmasterTypeListSectors $_XiGlobalmasterTypeListSectors)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListSectors(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListMICToLegacyExchange
	 * Meta informations :
	 * 	- documentation : Get the legacy exchanges.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @param XiGlobalmasterTypeListMICToLegacyExchange ListMICToLegacyExchange
	 * @return XiGlobalmasterTypeListMICToLegacyExchangeResponse
	 */
	public function ListMICToLegacyExchange(XiGlobalmasterTypeListMICToLegacyExchange $_XiGlobalmasterTypeListMICToLegacyExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListMICToLegacyExchange(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListMICToLegacySuffix
	 * Meta informations :
	 * 	- documentation : Get the legacy exchange suffix.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @param XiGlobalmasterTypeListMICToLegacySuffix ListMICToLegacySuffix
	 * @return XiGlobalmasterTypeListMICToLegacySuffixResponse
	 */
	public function ListMICToLegacySuffix(XiGlobalmasterTypeListMICToLegacySuffix $_XiGlobalmasterTypeListMICToLegacySuffix)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListMICToLegacySuffix(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListIdentifiersByExchange
	 * Meta informations :
	 * 	- documentation : Returns all the Indetifiers and names for securities listed on an exchange.
	 * @uses XiGlobalmasterWsdlClass::getSoapClient()
	 * @uses XiGlobalmasterWsdlClass::setResult()
	 * @uses XiGlobalmasterWsdlClass::getResult()
	 * @uses XiGlobalmasterWsdlClass::saveLastError()
	 * @uses XiGlobalmasterTypeListIdentifiersByExchange::getExchange()
	 * @uses XiGlobalmasterTypeListIdentifiersByExchange::getIdentifierType()
	 * @uses XiGlobalmasterTypeListIdentifiersByExchange::getInstrumentClass()
	 * @uses XiGlobalmasterTypeListIdentifiersByExchange::getAsOfDate()
	 * @param XiGlobalmasterTypeListIdentifiersByExchange ListIdentifiersByExchange
	 * @return XiGlobalmasterTypeListIdentifiersByExchangeResponse
	 */
	public function ListIdentifiersByExchange(XiGlobalmasterTypeListIdentifiersByExchange $_XiGlobalmasterTypeListIdentifiersByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListIdentifiersByExchange(array('Exchange'=>$_XiGlobalmasterTypeListIdentifiersByExchange->getExchange(),'IdentifierType'=>$_XiGlobalmasterTypeListIdentifiersByExchange->getIdentifierType(),'InstrumentClass'=>$_XiGlobalmasterTypeListIdentifiersByExchange->getInstrumentClass(),'AsOfDate'=>$_XiGlobalmasterTypeListIdentifiersByExchange->getAsOfDate())));
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
	 * @return XiGlobalmasterTypeListIdentifiersByExchangeResponse
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