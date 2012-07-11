<?php
/**
 * Class file for XiCurrenciesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesServiceGet
 * @date 08/07/2012
 */
class XiCurrenciesServiceGet extends XiCurrenciesWsdlClass
{
	/**
	 * Method to call GetRealTimeForwardRate
	 * Meta informations :
	 * 	- documentation : Returns a set of real-time currency forward rates.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeForwardRate::getFrom()
	 * @uses XiCurrenciesTypeGetRealTimeForwardRate::getTo()
	 * @param XiCurrenciesTypeGetRealTimeForwardRate GetRealTimeForwardRate
	 * @return XiCurrenciesTypeGetRealTimeForwardRateResponse
	 */
	public function GetRealTimeForwardRate(XiCurrenciesTypeGetRealTimeForwardRate $_XiCurrenciesTypeGetRealTimeForwardRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeForwardRate(array('From'=>$_XiCurrenciesTypeGetRealTimeForwardRate->getFrom(),'To'=>$_XiCurrenciesTypeGetRealTimeForwardRate->getTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeCrossRateAsString
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateAsString::getFrom()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateAsString::getTo()
	 * @param XiCurrenciesTypeGetRealTimeCrossRateAsString GetRealTimeCrossRateAsString
	 * @return XiCurrenciesTypeGetRealTimeCrossRateAsStringResponse
	 */
	public function GetRealTimeCrossRateAsString(XiCurrenciesTypeGetRealTimeCrossRateAsString $_XiCurrenciesTypeGetRealTimeCrossRateAsString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeCrossRateAsString(array('From'=>$_XiCurrenciesTypeGetRealTimeCrossRateAsString->getFrom(),'To'=>$_XiCurrenciesTypeGetRealTimeCrossRateAsString->getTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestCrossRate
	 * Meta informations :
	 * 	- documentation : Returns the latest possible cross rate.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetLatestCrossRate::getFrom()
	 * @uses XiCurrenciesTypeGetLatestCrossRate::getTo()
	 * @param XiCurrenciesTypeGetLatestCrossRate GetLatestCrossRate
	 * @return XiCurrenciesTypeGetLatestCrossRateResponse
	 */
	public function GetLatestCrossRate(XiCurrenciesTypeGetLatestCrossRate $_XiCurrenciesTypeGetLatestCrossRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestCrossRate(array('From'=>$_XiCurrenciesTypeGetLatestCrossRate->getFrom(),'To'=>$_XiCurrenciesTypeGetLatestCrossRate->getTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestCrossRates
	 * Meta informations :
	 * 	- documentation : Returns the latest possible cross rate.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetLatestCrossRates::getFrom()
	 * @uses XiCurrenciesTypeGetLatestCrossRates::getTos()
	 * @param XiCurrenciesTypeGetLatestCrossRates GetLatestCrossRates
	 * @return XiCurrenciesTypeGetLatestCrossRatesResponse
	 */
	public function GetLatestCrossRates(XiCurrenciesTypeGetLatestCrossRates $_XiCurrenciesTypeGetLatestCrossRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestCrossRates(array('From'=>$_XiCurrenciesTypeGetLatestCrossRates->getFrom(),'Tos'=>$_XiCurrenciesTypeGetLatestCrossRates->getTos())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeCrossRate
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRate::getFrom()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRate::getTo()
	 * @param XiCurrenciesTypeGetRealTimeCrossRate GetRealTimeCrossRate
	 * @return XiCurrenciesTypeGetRealTimeCrossRateResponse
	 */
	public function GetRealTimeCrossRate(XiCurrenciesTypeGetRealTimeCrossRate $_XiCurrenciesTypeGetRealTimeCrossRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeCrossRate(array('From'=>$_XiCurrenciesTypeGetRealTimeCrossRate->getFrom(),'To'=>$_XiCurrenciesTypeGetRealTimeCrossRate->getTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeCrossRateGMT
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate with the times in GMT.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateGMT::getFrom()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateGMT::getTo()
	 * @param XiCurrenciesTypeGetRealTimeCrossRateGMT GetRealTimeCrossRateGMT
	 * @return XiCurrenciesTypeGetRealTimeCrossRateGMTResponse
	 */
	public function GetRealTimeCrossRateGMT(XiCurrenciesTypeGetRealTimeCrossRateGMT $_XiCurrenciesTypeGetRealTimeCrossRateGMT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeCrossRateGMT(array('From'=>$_XiCurrenciesTypeGetRealTimeCrossRateGMT->getFrom(),'To'=>$_XiCurrenciesTypeGetRealTimeCrossRateGMT->getTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRawCrossRate
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRawCrossRate::getFrom()
	 * @uses XiCurrenciesTypeGetRawCrossRate::getTo()
	 * @param XiCurrenciesTypeGetRawCrossRate GetRawCrossRate
	 * @return XiCurrenciesTypeGetRawCrossRateResponse
	 */
	public function GetRawCrossRate(XiCurrenciesTypeGetRawCrossRate $_XiCurrenciesTypeGetRawCrossRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRawCrossRate(array('From'=>$_XiCurrenciesTypeGetRawCrossRate->getFrom(),'To'=>$_XiCurrenciesTypeGetRawCrossRate->getTo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRawCrossRates
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRawCrossRates::getSymbols()
	 * @param XiCurrenciesTypeGetRawCrossRates GetRawCrossRates
	 * @return XiCurrenciesTypeGetRawCrossRatesResponse
	 */
	public function GetRawCrossRates(XiCurrenciesTypeGetRawCrossRates $_XiCurrenciesTypeGetRawCrossRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRawCrossRates(array('Symbols'=>$_XiCurrenciesTypeGetRawCrossRates->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeCrossRates
	 * Meta informations :
	 * 	- documentation : Returns the latest possible cross rate.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRates::getSymbols()
	 * @param XiCurrenciesTypeGetRealTimeCrossRates GetRealTimeCrossRates
	 * @return XiCurrenciesTypeGetRealTimeCrossRatesResponse
	 */
	public function GetRealTimeCrossRates(XiCurrenciesTypeGetRealTimeCrossRates $_XiCurrenciesTypeGetRealTimeCrossRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeCrossRates(array('Symbols'=>$_XiCurrenciesTypeGetRealTimeCrossRates->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRateTables
	 * Meta informations :
	 * 	- documentation : Returns historical currency cross-rate tables for a range of dates.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTables::getSymbols()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTables::getStartDate()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTables::getEndDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRateTables GetHistoricalCrossRateTables
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTablesResponse
	 */
	public function GetHistoricalCrossRateTables(XiCurrenciesTypeGetHistoricalCrossRateTables $_XiCurrenciesTypeGetHistoricalCrossRateTables)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRateTables(array('Symbols'=>$_XiCurrenciesTypeGetHistoricalCrossRateTables->getSymbols(),'StartDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateTables->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateTables->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRateTablesBidAsk
	 * Meta informations :
	 * 	- documentation : Returns historical currency cross-rate tables for a range of dates.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk::getSymbols()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk::getStartDate()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk::getEndDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk GetHistoricalCrossRateTablesBidAsk
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTablesBidAskResponse
	 */
	public function GetHistoricalCrossRateTablesBidAsk(XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk $_XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRateTablesBidAsk(array('Symbols'=>$_XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk->getSymbols(),'StartDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateTablesBidAsk->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyReport
	 * Meta informations :
	 * 	- documentation : Returns historical currency cross-rate tables for a range of dates.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyReport::getFrom()
	 * @uses XiCurrenciesTypeGetCurrencyReport::getTo()
	 * @uses XiCurrenciesTypeGetCurrencyReport::getStartDate()
	 * @uses XiCurrenciesTypeGetCurrencyReport::getEndDate()
	 * @param XiCurrenciesTypeGetCurrencyReport GetCurrencyReport
	 * @return XiCurrenciesTypeGetCurrencyReportResponse
	 */
	public function GetCurrencyReport(XiCurrenciesTypeGetCurrencyReport $_XiCurrenciesTypeGetCurrencyReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyReport(array('From'=>$_XiCurrenciesTypeGetCurrencyReport->getFrom(),'To'=>$_XiCurrenciesTypeGetCurrencyReport->getTo(),'StartDate'=>$_XiCurrenciesTypeGetCurrencyReport->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetCurrencyReport->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRateTable
	 * Meta informations :
	 * 	- documentation : Returns a historical currency cross-rate table.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTable::getSymbols()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTable::getAsOfDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRateTable GetHistoricalCrossRateTable
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTableResponse
	 */
	public function GetHistoricalCrossRateTable(XiCurrenciesTypeGetHistoricalCrossRateTable $_XiCurrenciesTypeGetHistoricalCrossRateTable)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRateTable(array('Symbols'=>$_XiCurrenciesTypeGetHistoricalCrossRateTable->getSymbols(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateTable->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRateTableBidAsk
	 * Meta informations :
	 * 	- documentation : Returns a historical currency cross-rate table.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTableBidAsk::getSymbols()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTableBidAsk::getAsOfDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRateTableBidAsk GetHistoricalCrossRateTableBidAsk
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTableBidAskResponse
	 */
	public function GetHistoricalCrossRateTableBidAsk(XiCurrenciesTypeGetHistoricalCrossRateTableBidAsk $_XiCurrenciesTypeGetHistoricalCrossRateTableBidAsk)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRateTableBidAsk(array('Symbols'=>$_XiCurrenciesTypeGetHistoricalCrossRateTableBidAsk->getSymbols(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateTableBidAsk->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeCrossRateTable
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate table.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateTable::getSymbols()
	 * @param XiCurrenciesTypeGetRealTimeCrossRateTable GetRealTimeCrossRateTable
	 * @return XiCurrenciesTypeGetRealTimeCrossRateTableResponse
	 */
	public function GetRealTimeCrossRateTable(XiCurrenciesTypeGetRealTimeCrossRateTable $_XiCurrenciesTypeGetRealTimeCrossRateTable)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeCrossRateTable(array('Symbols'=>$_XiCurrenciesTypeGetRealTimeCrossRateTable->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeCrossRateTableWithBidAsk
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate table.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAsk::getSymbols()
	 * @param XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAsk GetRealTimeCrossRateTableWithBidAsk
	 * @return XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAskResponse
	 */
	public function GetRealTimeCrossRateTableWithBidAsk(XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAsk $_XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAsk)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeCrossRateTableWithBidAsk(array('Symbols'=>$_XiCurrenciesTypeGetRealTimeCrossRateTableWithBidAsk->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllCrossRatesForACurrency
	 * Meta informations :
	 * 	- documentation : Returns all valid cross rates for a currency.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetAllCrossRatesForACurrency::getSymbol()
	 * @param XiCurrenciesTypeGetAllCrossRatesForACurrency GetAllCrossRatesForACurrency
	 * @return XiCurrenciesTypeGetAllCrossRatesForACurrencyResponse
	 */
	public function GetAllCrossRatesForACurrency(XiCurrenciesTypeGetAllCrossRatesForACurrency $_XiCurrenciesTypeGetAllCrossRatesForACurrency)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllCrossRatesForACurrency(array('Symbol'=>$_XiCurrenciesTypeGetAllCrossRatesForACurrency->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeCrossRateTableAsHTML
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate table as an HTML Output.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML::getSymbols()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML::getColumnHeaderStyle()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML::getLineHeaderStyle()
	 * @uses XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML::getCellStyle()
	 * @param XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML GetRealTimeCrossRateTableAsHTML
	 * @return XiCurrenciesTypeGetRealTimeCrossRateTableAsHTMLResponse
	 */
	public function GetRealTimeCrossRateTableAsHTML(XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML $_XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeCrossRateTableAsHTML(array('Symbols'=>$_XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML->getSymbols(),'ColumnHeaderStyle'=>$_XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML->getColumnHeaderStyle(),'LineHeaderStyle'=>$_XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML->getLineHeaderStyle(),'CellStyle'=>$_XiCurrenciesTypeGetRealTimeCrossRateTableAsHTML->getCellStyle())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSimpleRealTimeCrossRateTableAsHTML
	 * Meta informations :
	 * 	- documentation : Returns a real-time currency cross-rate table as an HTML Output.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML::getSymbols()
	 * @uses XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML::getColumnHeaderStyle()
	 * @uses XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML::getLineHeaderStyle()
	 * @uses XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML::getCellStyle()
	 * @param XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML GetSimpleRealTimeCrossRateTableAsHTML
	 * @return XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTMLResponse
	 */
	public function GetSimpleRealTimeCrossRateTableAsHTML(XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML $_XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSimpleRealTimeCrossRateTableAsHTML(array('Symbols'=>$_XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML->getSymbols(),'ColumnHeaderStyle'=>$_XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML->getColumnHeaderStyle(),'LineHeaderStyle'=>$_XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML->getLineHeaderStyle(),'CellStyle'=>$_XiCurrenciesTypeGetSimpleRealTimeCrossRateTableAsHTML->getCellStyle())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRateTableAsHTML
	 * Meta informations :
	 * 	- documentation : Returns a historical currency cross-rate table as an HTML Output.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML::getSymbols()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML::getAsOfDate()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML::getColumnHeaderStyle()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML::getLineHeaderStyle()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML::getCellStyle()
	 * @param XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML GetHistoricalCrossRateTableAsHTML
	 * @return XiCurrenciesTypeGetHistoricalCrossRateTableAsHTMLResponse
	 */
	public function GetHistoricalCrossRateTableAsHTML(XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML $_XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRateTableAsHTML(array('Symbols'=>$_XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML->getSymbols(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML->getAsOfDate(),'ColumnHeaderStyle'=>$_XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML->getColumnHeaderStyle(),'LineHeaderStyle'=>$_XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML->getLineHeaderStyle(),'CellStyle'=>$_XiCurrenciesTypeGetHistoricalCrossRateTableAsHTML->getCellStyle())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRate
	 * Meta informations :
	 * 	- documentation : Returns a cross-rate as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRate::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRate::getAsOfDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRate GetHistoricalCrossRate
	 * @return XiCurrenciesTypeGetHistoricalCrossRateResponse
	 */
	public function GetHistoricalCrossRate(XiCurrenciesTypeGetHistoricalCrossRate $_XiCurrenciesTypeGetHistoricalCrossRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRate(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalCrossRate->getSymbol(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalCrossRate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRates
	 * Meta informations :
	 * 	- documentation : Returns multiple cross-rates as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRates::getSymbols()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRates::getAsOfDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRates GetHistoricalCrossRates
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesResponse
	 */
	public function GetHistoricalCrossRates(XiCurrenciesTypeGetHistoricalCrossRates $_XiCurrenciesTypeGetHistoricalCrossRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRates(array('Symbols'=>$_XiCurrenciesTypeGetHistoricalCrossRates->getSymbols(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalCrossRates->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRateBidAsk
	 * Meta informations :
	 * 	- documentation : Returns a cross-rate with bid/ask as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateBidAsk::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRateBidAsk::getAsOfDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRateBidAsk GetHistoricalCrossRateBidAsk
	 * @return XiCurrenciesTypeGetHistoricalCrossRateBidAskResponse
	 */
	public function GetHistoricalCrossRateBidAsk(XiCurrenciesTypeGetHistoricalCrossRateBidAsk $_XiCurrenciesTypeGetHistoricalCrossRateBidAsk)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRateBidAsk(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalCrossRateBidAsk->getSymbol(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalCrossRateBidAsk->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRatesBidAsk
	 * Meta informations :
	 * 	- documentation : Returns multiple cross-rates with bid/ask as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAsk::getSymbols()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAsk::getAsOfDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRatesBidAsk GetHistoricalCrossRatesBidAsk
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesBidAskResponse
	 */
	public function GetHistoricalCrossRatesBidAsk(XiCurrenciesTypeGetHistoricalCrossRatesBidAsk $_XiCurrenciesTypeGetHistoricalCrossRatesBidAsk)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRatesBidAsk(array('Symbols'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAsk->getSymbols(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAsk->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRatesRange
	 * Meta informations :
	 * 	- documentation : This operation returns a range of cross-rates for a currency pair.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesRange::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesRange::getStartDate()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesRange::getEndDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRatesRange GetHistoricalCrossRatesRange
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesRangeResponse
	 */
	public function GetHistoricalCrossRatesRange(XiCurrenciesTypeGetHistoricalCrossRatesRange $_XiCurrenciesTypeGetHistoricalCrossRatesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRatesRange(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalCrossRatesRange->getSymbol(),'StartDate'=>$_XiCurrenciesTypeGetHistoricalCrossRatesRange->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetHistoricalCrossRatesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRatesBidAskRange
	 * Meta informations :
	 * 	- documentation : This operation returns a range of cross-rates for a currency pair.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange::getStartDate()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange::getEndDate()
	 * @param XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange GetHistoricalCrossRatesBidAskRange
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesBidAskRangeResponse
	 */
	public function GetHistoricalCrossRatesBidAskRange(XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange $_XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRatesBidAskRange(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange->getSymbol(),'StartDate'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAskRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRatesAsOf
	 * Meta informations :
	 * 	- documentation : This operation returns a range of cross-rates for a currency pair.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesAsOf::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesAsOf::getEndDate()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesAsOf::getPeriodType()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesAsOf::getPeriods()
	 * @param XiCurrenciesTypeGetHistoricalCrossRatesAsOf GetHistoricalCrossRatesAsOf
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesAsOfResponse
	 */
	public function GetHistoricalCrossRatesAsOf(XiCurrenciesTypeGetHistoricalCrossRatesAsOf $_XiCurrenciesTypeGetHistoricalCrossRatesAsOf)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRatesAsOf(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalCrossRatesAsOf->getSymbol(),'EndDate'=>$_XiCurrenciesTypeGetHistoricalCrossRatesAsOf->getEndDate(),'PeriodType'=>$_XiCurrenciesTypeGetHistoricalCrossRatesAsOf->getPeriodType(),'Periods'=>$_XiCurrenciesTypeGetHistoricalCrossRatesAsOf->getPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalCrossRatesBidAskAsOf
	 * Meta informations :
	 * 	- documentation : This operation returns a range of cross-rates for a currency pair.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf::getEndDate()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf::getPeriodType()
	 * @uses XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf::getPeriods()
	 * @param XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf GetHistoricalCrossRatesBidAskAsOf
	 * @return XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOfResponse
	 */
	public function GetHistoricalCrossRatesBidAskAsOf(XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf $_XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalCrossRatesBidAskAsOf(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf->getSymbol(),'EndDate'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf->getEndDate(),'PeriodType'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf->getPeriodType(),'Periods'=>$_XiCurrenciesTypeGetHistoricalCrossRatesBidAskAsOf->getPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficialCrossRate
	 * Meta informations :
	 * 	- documentation : Returns an official cross-rate as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetOfficialCrossRate::getCountryType()
	 * @uses XiCurrenciesTypeGetOfficialCrossRate::getSymbol()
	 * @uses XiCurrenciesTypeGetOfficialCrossRate::getAsOfDate()
	 * @param XiCurrenciesTypeGetOfficialCrossRate GetOfficialCrossRate
	 * @return XiCurrenciesTypeGetOfficialCrossRateResponse
	 */
	public function GetOfficialCrossRate(XiCurrenciesTypeGetOfficialCrossRate $_XiCurrenciesTypeGetOfficialCrossRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficialCrossRate(array('CountryType'=>$_XiCurrenciesTypeGetOfficialCrossRate->getCountryType(),'Symbol'=>$_XiCurrenciesTypeGetOfficialCrossRate->getSymbol(),'AsOfDate'=>$_XiCurrenciesTypeGetOfficialCrossRate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficialCrossRates
	 * Meta informations :
	 * 	- documentation : Returns an official cross-rate as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetOfficialCrossRates::getCountryType()
	 * @uses XiCurrenciesTypeGetOfficialCrossRates::getSymbols()
	 * @uses XiCurrenciesTypeGetOfficialCrossRates::getAsOfDate()
	 * @param XiCurrenciesTypeGetOfficialCrossRates GetOfficialCrossRates
	 * @return XiCurrenciesTypeGetOfficialCrossRatesResponse
	 */
	public function GetOfficialCrossRates(XiCurrenciesTypeGetOfficialCrossRates $_XiCurrenciesTypeGetOfficialCrossRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficialCrossRates(array('CountryType'=>$_XiCurrenciesTypeGetOfficialCrossRates->getCountryType(),'Symbols'=>$_XiCurrenciesTypeGetOfficialCrossRates->getSymbols(),'AsOfDate'=>$_XiCurrenciesTypeGetOfficialCrossRates->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMutipleHistoricalCrossRates
	 * Meta informations :
	 * 	- documentation : Returns multiple cross-rates as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetMutipleHistoricalCrossRates::getSymbols()
	 * @uses XiCurrenciesTypeGetMutipleHistoricalCrossRates::getAsOfDate()
	 * @param XiCurrenciesTypeGetMutipleHistoricalCrossRates GetMutipleHistoricalCrossRates
	 * @return XiCurrenciesTypeGetMutipleHistoricalCrossRatesResponse
	 */
	public function GetMutipleHistoricalCrossRates(XiCurrenciesTypeGetMutipleHistoricalCrossRates $_XiCurrenciesTypeGetMutipleHistoricalCrossRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMutipleHistoricalCrossRates(array('Symbols'=>$_XiCurrenciesTypeGetMutipleHistoricalCrossRates->getSymbols(),'AsOfDate'=>$_XiCurrenciesTypeGetMutipleHistoricalCrossRates->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAverageHistoricalCrossRates
	 * Meta informations :
	 * 	- documentation : This operation returns an array average daily historical cross-rates for a period.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetAverageHistoricalCrossRates::getSymbols()
	 * @uses XiCurrenciesTypeGetAverageHistoricalCrossRates::getStartDate()
	 * @uses XiCurrenciesTypeGetAverageHistoricalCrossRates::getEndDate()
	 * @param XiCurrenciesTypeGetAverageHistoricalCrossRates GetAverageHistoricalCrossRates
	 * @return XiCurrenciesTypeGetAverageHistoricalCrossRatesResponse
	 */
	public function GetAverageHistoricalCrossRates(XiCurrenciesTypeGetAverageHistoricalCrossRates $_XiCurrenciesTypeGetAverageHistoricalCrossRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAverageHistoricalCrossRates(array('Symbols'=>$_XiCurrenciesTypeGetAverageHistoricalCrossRates->getSymbols(),'StartDate'=>$_XiCurrenciesTypeGetAverageHistoricalCrossRates->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetAverageHistoricalCrossRates->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAverageHistoricalCrossRate
	 * Meta informations :
	 * 	- documentation : This operation returns an average daily historical cross-rates for a period.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetAverageHistoricalCrossRate::getSymbol()
	 * @uses XiCurrenciesTypeGetAverageHistoricalCrossRate::getStartDate()
	 * @uses XiCurrenciesTypeGetAverageHistoricalCrossRate::getEndDate()
	 * @param XiCurrenciesTypeGetAverageHistoricalCrossRate GetAverageHistoricalCrossRate
	 * @return XiCurrenciesTypeGetAverageHistoricalCrossRateResponse
	 */
	public function GetAverageHistoricalCrossRate(XiCurrenciesTypeGetAverageHistoricalCrossRate $_XiCurrenciesTypeGetAverageHistoricalCrossRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAverageHistoricalCrossRate(array('Symbol'=>$_XiCurrenciesTypeGetAverageHistoricalCrossRate->getSymbol(),'StartDate'=>$_XiCurrenciesTypeGetAverageHistoricalCrossRate->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetAverageHistoricalCrossRate->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMonthlyCrossRatesRange
	 * Meta informations :
	 * 	- documentation : This operation returns a complete range of stock quotes for a currency pair.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange::getStartDate()
	 * @uses XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange::getEndDate()
	 * @param XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange GetHistoricalMonthlyCrossRatesRange
	 * @return XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRangeResponse
	 */
	public function GetHistoricalMonthlyCrossRatesRange(XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange $_XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMonthlyCrossRatesRange(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange->getSymbol(),'StartDate'=>$_XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetHistoricalMonthlyCrossRatesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCrossRateChange
	 * Meta informations :
	 * 	- documentation : This operation returns the changes in a cross-rates over the last 6 months.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCrossRateChange::getSymbol()
	 * @param XiCurrenciesTypeGetCrossRateChange GetCrossRateChange
	 * @return XiCurrenciesTypeGetCrossRateChangeResponse
	 */
	public function GetCrossRateChange(XiCurrenciesTypeGetCrossRateChange $_XiCurrenciesTypeGetCrossRateChange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCrossRateChange(array('Symbol'=>$_XiCurrenciesTypeGetCrossRateChange->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a custom currency chart for a date range.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getSymbol()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getPeriodType()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getStartDate()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getEndDate()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getStyle()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getWidth()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getHeight()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustom::getDesign()
	 * @param XiCurrenciesTypeGetCurrencyChartCustom GetCurrencyChartCustom
	 * @return XiCurrenciesTypeGetCurrencyChartCustomResponse
	 */
	public function GetCurrencyChartCustom(XiCurrenciesTypeGetCurrencyChartCustom $_XiCurrenciesTypeGetCurrencyChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyChartCustom(array('Symbol'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getSymbol(),'PeriodType'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getPeriodType(),'StartDate'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getEndDate(),'Style'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getStyle(),'Width'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getWidth(),'Height'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getHeight(),'Design'=>$_XiCurrenciesTypeGetCurrencyChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom currency chart for a date range.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getSymbol()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getPeriodType()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getStartDate()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getEndDate()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getStyle()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getWidth()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getHeight()
	 * @uses XiCurrenciesTypeGetCurrencyChartCustomBinary::getDesign()
	 * @param XiCurrenciesTypeGetCurrencyChartCustomBinary GetCurrencyChartCustomBinary
	 * @return XiCurrenciesTypeGetCurrencyChartCustomBinaryResponse
	 */
	public function GetCurrencyChartCustomBinary(XiCurrenciesTypeGetCurrencyChartCustomBinary $_XiCurrenciesTypeGetCurrencyChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyChartCustomBinary(array('Symbol'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getSymbol(),'PeriodType'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getPeriodType(),'StartDate'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getEndDate(),'Style'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getStyle(),'Width'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getWidth(),'Height'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getHeight(),'Design'=>$_XiCurrenciesTypeGetCurrencyChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyChart
	 * Meta informations :
	 * 	- documentation : Draw a historical currency chart for a date range.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getSymbol()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getPeriodType()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getStartDate()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getEndDate()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getStyle()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getWidth()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getHeight()
	 * @uses XiCurrenciesTypeGetCurrencyChart::getPreset()
	 * @param XiCurrenciesTypeGetCurrencyChart GetCurrencyChart
	 * @return XiCurrenciesTypeGetCurrencyChartResponse
	 */
	public function GetCurrencyChart(XiCurrenciesTypeGetCurrencyChart $_XiCurrenciesTypeGetCurrencyChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyChart(array('Symbol'=>$_XiCurrenciesTypeGetCurrencyChart->getSymbol(),'PeriodType'=>$_XiCurrenciesTypeGetCurrencyChart->getPeriodType(),'StartDate'=>$_XiCurrenciesTypeGetCurrencyChart->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetCurrencyChart->getEndDate(),'Style'=>$_XiCurrenciesTypeGetCurrencyChart->getStyle(),'Width'=>$_XiCurrenciesTypeGetCurrencyChart->getWidth(),'Height'=>$_XiCurrenciesTypeGetCurrencyChart->getHeight(),'Preset'=>$_XiCurrenciesTypeGetCurrencyChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyChartBinary
	 * Meta informations :
	 * 	- documentation : Draw a historical currency chart for a date range in binary format.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getSymbol()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getPeriodType()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getStartDate()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getEndDate()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getStyle()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getWidth()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getHeight()
	 * @uses XiCurrenciesTypeGetCurrencyChartBinary::getPreset()
	 * @param XiCurrenciesTypeGetCurrencyChartBinary GetCurrencyChartBinary
	 * @return XiCurrenciesTypeGetCurrencyChartBinaryResponse
	 */
	public function GetCurrencyChartBinary(XiCurrenciesTypeGetCurrencyChartBinary $_XiCurrenciesTypeGetCurrencyChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyChartBinary(array('Symbol'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getSymbol(),'PeriodType'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getPeriodType(),'StartDate'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getStartDate(),'EndDate'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getEndDate(),'Style'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getStyle(),'Width'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getWidth(),'Height'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getHeight(),'Preset'=>$_XiCurrenciesTypeGetCurrencyChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyIntradayChart
	 * Meta informations :
	 * 	- documentation : Draw a intraday currency chart for a time range
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getSymbol()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getStartTime()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getEndTime()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getTimeZone()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getStyle()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getWidth()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getHeight()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getPeriodType()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getTickPeriods()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChart::getPreset()
	 * @param XiCurrenciesTypeGetCurrencyIntradayChart GetCurrencyIntradayChart
	 * @return XiCurrenciesTypeGetCurrencyIntradayChartResponse
	 */
	public function GetCurrencyIntradayChart(XiCurrenciesTypeGetCurrencyIntradayChart $_XiCurrenciesTypeGetCurrencyIntradayChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyIntradayChart(array('Symbol'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getSymbol(),'StartTime'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getStartTime(),'EndTime'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getEndTime(),'TimeZone'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getTimeZone(),'Style'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getStyle(),'Width'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getWidth(),'Height'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getHeight(),'PeriodType'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getPeriodType(),'TickPeriods'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getTickPeriods(),'Preset'=>$_XiCurrenciesTypeGetCurrencyIntradayChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyIntradayChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a intraday currency chart for a time range in a binary format
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getSymbol()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getStartTime()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getEndTime()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getTimeZone()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getStyle()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getWidth()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getHeight()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getPeriodType()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getTickPeriods()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary::getDesign()
	 * @param XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary GetCurrencyIntradayChartCustomBinary
	 * @return XiCurrenciesTypeGetCurrencyIntradayChartCustomBinaryResponse
	 */
	public function GetCurrencyIntradayChartCustomBinary(XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary $_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyIntradayChartCustomBinary(array('Symbol'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getSymbol(),'StartTime'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getStartTime(),'EndTime'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getEndTime(),'TimeZone'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getTimeZone(),'Style'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getStyle(),'Width'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getWidth(),'Height'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getHeight(),'PeriodType'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getPeriodType(),'TickPeriods'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getTickPeriods(),'Design'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrencyIntradayChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a intraday currency chart for a time range in a binary format
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getSymbol()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getStartTime()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getEndTime()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getTimeZone()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getStyle()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getWidth()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getHeight()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getPeriodType()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getTickPeriods()
	 * @uses XiCurrenciesTypeGetCurrencyIntradayChartCustom::getDesign()
	 * @param XiCurrenciesTypeGetCurrencyIntradayChartCustom GetCurrencyIntradayChartCustom
	 * @return XiCurrenciesTypeGetCurrencyIntradayChartCustomResponse
	 */
	public function GetCurrencyIntradayChartCustom(XiCurrenciesTypeGetCurrencyIntradayChartCustom $_XiCurrenciesTypeGetCurrencyIntradayChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrencyIntradayChartCustom(array('Symbol'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getSymbol(),'StartTime'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getStartTime(),'EndTime'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getEndTime(),'TimeZone'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getTimeZone(),'Style'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getStyle(),'Width'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getWidth(),'Height'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getHeight(),'PeriodType'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getPeriodType(),'TickPeriods'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getTickPeriods(),'Design'=>$_XiCurrenciesTypeGetCurrencyIntradayChartCustom->getDesign())));
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
	 * 	- documentation : Returns the default design class for the currency Chart.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @param XiCurrenciesTypeGetChartDesign GetChartDesign
	 * @return XiCurrenciesTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiCurrenciesTypeGetChartDesign $_XiCurrenciesTypeGetChartDesign)
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
	 * Method to call GetTick
	 * Meta informations :
	 * 	- documentation : Returns a tick for a currency pair as of a specific time in the day.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetTick::getSymbol()
	 * @uses XiCurrenciesTypeGetTick::getTime()
	 * @param XiCurrenciesTypeGetTick GetTick
	 * @return XiCurrenciesTypeGetTickResponse
	 */
	public function GetTick(XiCurrenciesTypeGetTick $_XiCurrenciesTypeGetTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTick(array('Symbol'=>$_XiCurrenciesTypeGetTick->getSymbol(),'Time'=>$_XiCurrenciesTypeGetTick->getTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTicks
	 * Meta informations :
	 * 	- documentation : Returns a range of ticks for a currency pair.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetTicks::getSymbol()
	 * @uses XiCurrenciesTypeGetTicks::getStartTime()
	 * @uses XiCurrenciesTypeGetTicks::getEndTime()
	 * @uses XiCurrenciesTypeGetTicks::getTickPrecision()
	 * @uses XiCurrenciesTypeGetTicks::getTickPeriods()
	 * @param XiCurrenciesTypeGetTicks GetTicks
	 * @return XiCurrenciesTypeGetTicksResponse
	 */
	public function GetTicks(XiCurrenciesTypeGetTicks $_XiCurrenciesTypeGetTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTicks(array('Symbol'=>$_XiCurrenciesTypeGetTicks->getSymbol(),'StartTime'=>$_XiCurrenciesTypeGetTicks->getStartTime(),'EndTime'=>$_XiCurrenciesTypeGetTicks->getEndTime(),'TickPrecision'=>$_XiCurrenciesTypeGetTicks->getTickPrecision(),'TickPeriods'=>$_XiCurrenciesTypeGetTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalTicks
	 * Meta informations :
	 * 	- documentation : Returns a range of ticks for a currency pair.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalTicks::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalTicks::getStartTime()
	 * @uses XiCurrenciesTypeGetHistoricalTicks::getEndTime()
	 * @uses XiCurrenciesTypeGetHistoricalTicks::getAsOfDate()
	 * @uses XiCurrenciesTypeGetHistoricalTicks::getTickPrecision()
	 * @uses XiCurrenciesTypeGetHistoricalTicks::getTickPeriods()
	 * @param XiCurrenciesTypeGetHistoricalTicks GetHistoricalTicks
	 * @return XiCurrenciesTypeGetHistoricalTicksResponse
	 */
	public function GetHistoricalTicks(XiCurrenciesTypeGetHistoricalTicks $_XiCurrenciesTypeGetHistoricalTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTicks(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalTicks->getSymbol(),'StartTime'=>$_XiCurrenciesTypeGetHistoricalTicks->getStartTime(),'EndTime'=>$_XiCurrenciesTypeGetHistoricalTicks->getEndTime(),'AsOfDate'=>$_XiCurrenciesTypeGetHistoricalTicks->getAsOfDate(),'TickPrecision'=>$_XiCurrenciesTypeGetHistoricalTicks->getTickPrecision(),'TickPeriods'=>$_XiCurrenciesTypeGetHistoricalTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalHighLow
	 * Meta informations :
	 * 	- documentation : Returns the high and the low ticks for a historical time range.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetHistoricalHighLow::getSymbol()
	 * @uses XiCurrenciesTypeGetHistoricalHighLow::getStartDateTime()
	 * @uses XiCurrenciesTypeGetHistoricalHighLow::getEndDateTime()
	 * @param XiCurrenciesTypeGetHistoricalHighLow GetHistoricalHighLow
	 * @return XiCurrenciesTypeGetHistoricalHighLowResponse
	 */
	public function GetHistoricalHighLow(XiCurrenciesTypeGetHistoricalHighLow $_XiCurrenciesTypeGetHistoricalHighLow)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalHighLow(array('Symbol'=>$_XiCurrenciesTypeGetHistoricalHighLow->getSymbol(),'StartDateTime'=>$_XiCurrenciesTypeGetHistoricalHighLow->getStartDateTime(),'EndDateTime'=>$_XiCurrenciesTypeGetHistoricalHighLow->getEndDateTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayHighLow
	 * Meta informations :
	 * 	- documentation : Returns the high and the low ticks for today.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeGetIntradayHighLow::getSymbol()
	 * @uses XiCurrenciesTypeGetIntradayHighLow::getStartDateTime()
	 * @uses XiCurrenciesTypeGetIntradayHighLow::getEndDateTime()
	 * @param XiCurrenciesTypeGetIntradayHighLow GetIntradayHighLow
	 * @return XiCurrenciesTypeGetIntradayHighLowResponse
	 */
	public function GetIntradayHighLow(XiCurrenciesTypeGetIntradayHighLow $_XiCurrenciesTypeGetIntradayHighLow)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayHighLow(array('Symbol'=>$_XiCurrenciesTypeGetIntradayHighLow->getSymbol(),'StartDateTime'=>$_XiCurrenciesTypeGetIntradayHighLow->getStartDateTime(),'EndDateTime'=>$_XiCurrenciesTypeGetIntradayHighLow->getEndDateTime())));
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
	 * @return XiCurrenciesTypeGetIntradayHighLowResponse
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