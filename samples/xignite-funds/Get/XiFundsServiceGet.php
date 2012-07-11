<?php
/**
 * Class file for XiFundsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiFundsServiceGet
 * @date 08/07/2012
 */
class XiFundsServiceGet extends XiFundsWsdlClass
{
	/**
	 * Method to call GetSymbols
	 * Meta informations :
	 * 	- documentation : Returns a list of symbols available in the historical database.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @param XiFundsTypeGetSymbols GetSymbols
	 * @return XiFundsTypeGetSymbolsResponse
	 */
	public function GetSymbols(XiFundsTypeGetSymbols $_XiFundsTypeGetSymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSymbols(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSymbolsByCountry
	 * Meta informations :
	 * 	- documentation : Returns a list of symbols available in the historical database by country.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetSymbolsByCountry::getCountry()
	 * @param XiFundsTypeGetSymbolsByCountry GetSymbolsByCountry
	 * @return XiFundsTypeGetSymbolsByCountryResponse
	 */
	public function GetSymbolsByCountry(XiFundsTypeGetSymbolsByCountry $_XiFundsTypeGetSymbolsByCountry)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSymbolsByCountry(array('Country'=>$_XiFundsTypeGetSymbolsByCountry->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestNAV
	 * Meta informations :
	 * 	- documentation : Returns last closing NAV for a fund.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLatestNAV::getIdentifier()
	 * @uses XiFundsTypeGetLatestNAV::getIdentifierType()
	 * @param XiFundsTypeGetLatestNAV GetLatestNAV
	 * @return XiFundsTypeGetLatestNAVResponse
	 */
	public function GetLatestNAV(XiFundsTypeGetLatestNAV $_XiFundsTypeGetLatestNAV)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestNAV(array('Identifier'=>$_XiFundsTypeGetLatestNAV->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetLatestNAV->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastNAV
	 * Meta informations :
	 * 	- documentation : Returns the most recent NAV for a fund.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLastNAV::getIdentifier()
	 * @uses XiFundsTypeGetLastNAV::getIdentifierType()
	 * @param XiFundsTypeGetLastNAV GetLastNAV
	 * @return XiFundsTypeGetLastNAVResponse
	 */
	public function GetLastNAV(XiFundsTypeGetLastNAV $_XiFundsTypeGetLastNAV)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastNAV(array('Identifier'=>$_XiFundsTypeGetLastNAV->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetLastNAV->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastNAVs
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of funds.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLastNAVs::getIdentifiers()
	 * @uses XiFundsTypeGetLastNAVs::getIdentifierType()
	 * @param XiFundsTypeGetLastNAVs GetLastNAVs
	 * @return XiFundsTypeGetLastNAVsResponse
	 */
	public function GetLastNAVs(XiFundsTypeGetLastNAVs $_XiFundsTypeGetLastNAVs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastNAVs(array('Identifiers'=>$_XiFundsTypeGetLastNAVs->getIdentifiers(),'IdentifierType'=>$_XiFundsTypeGetLastNAVs->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestNAVs
	 * Meta informations :
	 * 	- documentation : Returns today's closing price for a collection of funds.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLatestNAVs::getIdentifiers()
	 * @uses XiFundsTypeGetLatestNAVs::getIdentifierType()
	 * @param XiFundsTypeGetLatestNAVs GetLatestNAVs
	 * @return XiFundsTypeGetLatestNAVsResponse
	 */
	public function GetLatestNAVs(XiFundsTypeGetLatestNAVs $_XiFundsTypeGetLatestNAVs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestNAVs(array('Identifiers'=>$_XiFundsTypeGetLatestNAVs->getIdentifiers(),'IdentifierType'=>$_XiFundsTypeGetLatestNAVs->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAV
	 * Meta informations :
	 * 	- documentation : Returns a fund quote as of a historical NAV.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAV::getIdentifier()
	 * @uses XiFundsTypeGetHistoricalNAV::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAV::getAsOfDate()
	 * @param XiFundsTypeGetHistoricalNAV GetHistoricalNAV
	 * @return XiFundsTypeGetHistoricalNAVResponse
	 */
	public function GetHistoricalNAV(XiFundsTypeGetHistoricalNAV $_XiFundsTypeGetHistoricalNAV)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAV(array('Identifier'=>$_XiFundsTypeGetHistoricalNAV->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAV->getIdentifierType(),'AsOfDate'=>$_XiFundsTypeGetHistoricalNAV->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAVs
	 * Meta informations :
	 * 	- documentation : Returns a fund NAV as of a historical date.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAVs::getIdentifiers()
	 * @uses XiFundsTypeGetHistoricalNAVs::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAVs::getAsOfDate()
	 * @param XiFundsTypeGetHistoricalNAVs GetHistoricalNAVs
	 * @return XiFundsTypeGetHistoricalNAVsResponse
	 */
	public function GetHistoricalNAVs(XiFundsTypeGetHistoricalNAVs $_XiFundsTypeGetHistoricalNAVs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAVs(array('Identifiers'=>$_XiFundsTypeGetHistoricalNAVs->getIdentifiers(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAVs->getIdentifierType(),'AsOfDate'=>$_XiFundsTypeGetHistoricalNAVs->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAVsAsOf
	 * Meta informations :
	 * 	- documentation : This operation returns a range of fund NAVs for a security.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOf::getIdentifier()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOf::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOf::getEndDate()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOf::getPeriodType()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOf::getPeriods()
	 * @param XiFundsTypeGetHistoricalNAVsAsOf GetHistoricalNAVsAsOf
	 * @return XiFundsTypeGetHistoricalNAVsAsOfResponse
	 */
	public function GetHistoricalNAVsAsOf(XiFundsTypeGetHistoricalNAVsAsOf $_XiFundsTypeGetHistoricalNAVsAsOf)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAVsAsOf(array('Identifier'=>$_XiFundsTypeGetHistoricalNAVsAsOf->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAVsAsOf->getIdentifierType(),'EndDate'=>$_XiFundsTypeGetHistoricalNAVsAsOf->getEndDate(),'PeriodType'=>$_XiFundsTypeGetHistoricalNAVsAsOf->getPeriodType(),'Periods'=>$_XiFundsTypeGetHistoricalNAVsAsOf->getPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAVsRange
	 * Meta informations :
	 * 	- documentation : This operation returns a range of NAVs for a fund.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAVsRange::getIdentifier()
	 * @uses XiFundsTypeGetHistoricalNAVsRange::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAVsRange::getStartDate()
	 * @uses XiFundsTypeGetHistoricalNAVsRange::getEndDate()
	 * @param XiFundsTypeGetHistoricalNAVsRange GetHistoricalNAVsRange
	 * @return XiFundsTypeGetHistoricalNAVsRangeResponse
	 */
	public function GetHistoricalNAVsRange(XiFundsTypeGetHistoricalNAVsRange $_XiFundsTypeGetHistoricalNAVsRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAVsRange(array('Identifier'=>$_XiFundsTypeGetHistoricalNAVsRange->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAVsRange->getIdentifierType(),'StartDate'=>$_XiFundsTypeGetHistoricalNAVsRange->getStartDate(),'EndDate'=>$_XiFundsTypeGetHistoricalNAVsRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopGainers
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top gaining funds for a date.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetTopGainers::getFromDate()
	 * @uses XiFundsTypeGetTopGainers::getToDate()
	 * @uses XiFundsTypeGetTopGainers::getCount()
	 * @param XiFundsTypeGetTopGainers GetTopGainers
	 * @return XiFundsTypeGetTopGainersResponse
	 */
	public function GetTopGainers(XiFundsTypeGetTopGainers $_XiFundsTypeGetTopGainers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopGainers(array('FromDate'=>$_XiFundsTypeGetTopGainers->getFromDate(),'ToDate'=>$_XiFundsTypeGetTopGainers->getToDate(),'Count'=>$_XiFundsTypeGetTopGainers->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopLosers
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top losing equities from NYSE, NASDAQ and AMEX.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetTopLosers::getFromDate()
	 * @uses XiFundsTypeGetTopLosers::getToDate()
	 * @uses XiFundsTypeGetTopLosers::getCount()
	 * @param XiFundsTypeGetTopLosers GetTopLosers
	 * @return XiFundsTypeGetTopLosersResponse
	 */
	public function GetTopLosers(XiFundsTypeGetTopLosers $_XiFundsTypeGetTopLosers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopLosers(array('FromDate'=>$_XiFundsTypeGetTopLosers->getFromDate(),'ToDate'=>$_XiFundsTypeGetTopLosers->getToDate(),'Count'=>$_XiFundsTypeGetTopLosers->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default design class for the fund Chart.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @param XiFundsTypeGetChartDesign GetChartDesign
	 * @return XiFundsTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiFundsTypeGetChartDesign $_XiFundsTypeGetChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartDesign(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDividendHistory
	 * Meta informations :
	 * 	- documentation : Get dividend history for a fund.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetDividendHistory::getIdentifier()
	 * @uses XiFundsTypeGetDividendHistory::getIdentifierType()
	 * @param XiFundsTypeGetDividendHistory GetDividendHistory
	 * @return XiFundsTypeGetDividendHistoryResponse
	 */
	public function GetDividendHistory(XiFundsTypeGetDividendHistory $_XiFundsTypeGetDividendHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDividendHistory(array('Identifier'=>$_XiFundsTypeGetDividendHistory->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetDividendHistory->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNewSymbols
	 * Meta informations :
	 * 	- documentation : Returns a list of mutual funds added between two dates.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetNewSymbols::getFromDate()
	 * @uses XiFundsTypeGetNewSymbols::getToDate()
	 * @param XiFundsTypeGetNewSymbols GetNewSymbols
	 * @return XiFundsTypeGetNewSymbolsResponse
	 */
	public function GetNewSymbols(XiFundsTypeGetNewSymbols $_XiFundsTypeGetNewSymbols)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNewSymbols(array('FromDate'=>$_XiFundsTypeGetNewSymbols->getFromDate(),'ToDate'=>$_XiFundsTypeGetNewSymbols->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastNAVAdjusted
	 * Meta informations :
	 * 	- documentation : Returns the most recent NAV for a fund.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLastNAVAdjusted::getIdentifier()
	 * @uses XiFundsTypeGetLastNAVAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetLastNAVAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetLastNAVAdjusted GetLastNAVAdjusted
	 * @return XiFundsTypeGetLastNAVAdjustedResponse
	 */
	public function GetLastNAVAdjusted(XiFundsTypeGetLastNAVAdjusted $_XiFundsTypeGetLastNAVAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastNAVAdjusted(array('Identifier'=>$_XiFundsTypeGetLastNAVAdjusted->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetLastNAVAdjusted->getIdentifierType(),'AdjustmentMethod'=>$_XiFundsTypeGetLastNAVAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastNAVsAdjusted
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of funds.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLastNAVsAdjusted::getIdentifiers()
	 * @uses XiFundsTypeGetLastNAVsAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetLastNAVsAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetLastNAVsAdjusted GetLastNAVsAdjusted
	 * @return XiFundsTypeGetLastNAVsAdjustedResponse
	 */
	public function GetLastNAVsAdjusted(XiFundsTypeGetLastNAVsAdjusted $_XiFundsTypeGetLastNAVsAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastNAVsAdjusted(array('Identifiers'=>$_XiFundsTypeGetLastNAVsAdjusted->getIdentifiers(),'IdentifierType'=>$_XiFundsTypeGetLastNAVsAdjusted->getIdentifierType(),'AdjustmentMethod'=>$_XiFundsTypeGetLastNAVsAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestNAVAdjusted
	 * Meta informations :
	 * 	- documentation : Returns the most recent NAV for a fund.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLatestNAVAdjusted::getIdentifier()
	 * @uses XiFundsTypeGetLatestNAVAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetLatestNAVAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetLatestNAVAdjusted GetLatestNAVAdjusted
	 * @return XiFundsTypeGetLatestNAVAdjustedResponse
	 */
	public function GetLatestNAVAdjusted(XiFundsTypeGetLatestNAVAdjusted $_XiFundsTypeGetLatestNAVAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestNAVAdjusted(array('Identifier'=>$_XiFundsTypeGetLatestNAVAdjusted->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetLatestNAVAdjusted->getIdentifierType(),'AdjustmentMethod'=>$_XiFundsTypeGetLatestNAVAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestNAVsAdjusted
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of funds.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetLatestNAVsAdjusted::getIdentifiers()
	 * @uses XiFundsTypeGetLatestNAVsAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetLatestNAVsAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetLatestNAVsAdjusted GetLatestNAVsAdjusted
	 * @return XiFundsTypeGetLatestNAVsAdjustedResponse
	 */
	public function GetLatestNAVsAdjusted(XiFundsTypeGetLatestNAVsAdjusted $_XiFundsTypeGetLatestNAVsAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestNAVsAdjusted(array('Identifiers'=>$_XiFundsTypeGetLatestNAVsAdjusted->getIdentifiers(),'IdentifierType'=>$_XiFundsTypeGetLatestNAVsAdjusted->getIdentifierType(),'AdjustmentMethod'=>$_XiFundsTypeGetLatestNAVsAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAVAdjusted
	 * Meta informations :
	 * 	- documentation : Returns a fund quote as of a historical NAV.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAVAdjusted::getIdentifier()
	 * @uses XiFundsTypeGetHistoricalNAVAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAVAdjusted::getAsOfDate()
	 * @uses XiFundsTypeGetHistoricalNAVAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetHistoricalNAVAdjusted GetHistoricalNAVAdjusted
	 * @return XiFundsTypeGetHistoricalNAVAdjustedResponse
	 */
	public function GetHistoricalNAVAdjusted(XiFundsTypeGetHistoricalNAVAdjusted $_XiFundsTypeGetHistoricalNAVAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAVAdjusted(array('Identifier'=>$_XiFundsTypeGetHistoricalNAVAdjusted->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAVAdjusted->getIdentifierType(),'AsOfDate'=>$_XiFundsTypeGetHistoricalNAVAdjusted->getAsOfDate(),'AdjustmentMethod'=>$_XiFundsTypeGetHistoricalNAVAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAVsAdjusted
	 * Meta informations :
	 * 	- documentation : Returns a fund NAV as of a historical date.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAVsAdjusted::getIdentifiers()
	 * @uses XiFundsTypeGetHistoricalNAVsAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAVsAdjusted::getAsOfDate()
	 * @uses XiFundsTypeGetHistoricalNAVsAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetHistoricalNAVsAdjusted GetHistoricalNAVsAdjusted
	 * @return XiFundsTypeGetHistoricalNAVsAdjustedResponse
	 */
	public function GetHistoricalNAVsAdjusted(XiFundsTypeGetHistoricalNAVsAdjusted $_XiFundsTypeGetHistoricalNAVsAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAVsAdjusted(array('Identifiers'=>$_XiFundsTypeGetHistoricalNAVsAdjusted->getIdentifiers(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAVsAdjusted->getIdentifierType(),'AsOfDate'=>$_XiFundsTypeGetHistoricalNAVsAdjusted->getAsOfDate(),'AdjustmentMethod'=>$_XiFundsTypeGetHistoricalNAVsAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAVsAsOfAdjusted
	 * Meta informations :
	 * 	- documentation : This operation returns a range of fund NAVs for a security.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOfAdjusted::getIdentifier()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOfAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOfAdjusted::getEndDate()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOfAdjusted::getPeriodType()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOfAdjusted::getPeriods()
	 * @uses XiFundsTypeGetHistoricalNAVsAsOfAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetHistoricalNAVsAsOfAdjusted GetHistoricalNAVsAsOfAdjusted
	 * @return XiFundsTypeGetHistoricalNAVsAsOfAdjustedResponse
	 */
	public function GetHistoricalNAVsAsOfAdjusted(XiFundsTypeGetHistoricalNAVsAsOfAdjusted $_XiFundsTypeGetHistoricalNAVsAsOfAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAVsAsOfAdjusted(array('Identifier'=>$_XiFundsTypeGetHistoricalNAVsAsOfAdjusted->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAVsAsOfAdjusted->getIdentifierType(),'EndDate'=>$_XiFundsTypeGetHistoricalNAVsAsOfAdjusted->getEndDate(),'PeriodType'=>$_XiFundsTypeGetHistoricalNAVsAsOfAdjusted->getPeriodType(),'Periods'=>$_XiFundsTypeGetHistoricalNAVsAsOfAdjusted->getPeriods(),'AdjustmentMethod'=>$_XiFundsTypeGetHistoricalNAVsAsOfAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalNAVsRangeAdjusted
	 * Meta informations :
	 * 	- documentation : This operation returns a range of NAVs for a fund.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeGetHistoricalNAVsRangeAdjusted::getIdentifier()
	 * @uses XiFundsTypeGetHistoricalNAVsRangeAdjusted::getIdentifierType()
	 * @uses XiFundsTypeGetHistoricalNAVsRangeAdjusted::getStartDate()
	 * @uses XiFundsTypeGetHistoricalNAVsRangeAdjusted::getEndDate()
	 * @uses XiFundsTypeGetHistoricalNAVsRangeAdjusted::getAdjustmentMethod()
	 * @param XiFundsTypeGetHistoricalNAVsRangeAdjusted GetHistoricalNAVsRangeAdjusted
	 * @return XiFundsTypeGetHistoricalNAVsRangeAdjustedResponse
	 */
	public function GetHistoricalNAVsRangeAdjusted(XiFundsTypeGetHistoricalNAVsRangeAdjusted $_XiFundsTypeGetHistoricalNAVsRangeAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalNAVsRangeAdjusted(array('Identifier'=>$_XiFundsTypeGetHistoricalNAVsRangeAdjusted->getIdentifier(),'IdentifierType'=>$_XiFundsTypeGetHistoricalNAVsRangeAdjusted->getIdentifierType(),'StartDate'=>$_XiFundsTypeGetHistoricalNAVsRangeAdjusted->getStartDate(),'EndDate'=>$_XiFundsTypeGetHistoricalNAVsRangeAdjusted->getEndDate(),'AdjustmentMethod'=>$_XiFundsTypeGetHistoricalNAVsRangeAdjusted->getAdjustmentMethod())));
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
	 * @return XiFundsTypeGetHistoricalNAVsRangeAdjustedResponse
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