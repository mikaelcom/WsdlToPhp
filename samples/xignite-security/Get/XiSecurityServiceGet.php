<?php
/**
 * Class file for XiSecurityServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiSecurityServiceGet
 * @date 08/07/2012
 */
class XiSecurityServiceGet extends XiSecurityWsdlClass
{
	/**
	 * Method to call GetDividendHistory
	 * Meta informations :
	 * 	- documentation : Get dividend history for a stock.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetDividendHistory::getIdentifier()
	 * @uses XiSecurityTypeGetDividendHistory::getIdentifierType()
	 * @param XiSecurityTypeGetDividendHistory GetDividendHistory
	 * @return XiSecurityTypeGetDividendHistoryResponse
	 */
	public function GetDividendHistory(XiSecurityTypeGetDividendHistory $_XiSecurityTypeGetDividendHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDividendHistory(array('Identifier'=>$_XiSecurityTypeGetDividendHistory->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetDividendHistory->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDividendHistories
	 * Meta informations :
	 * 	- documentation : Get dividend histories for a set of stock.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetDividendHistories::getIdentifiers()
	 * @uses XiSecurityTypeGetDividendHistories::getIdentifierType()
	 * @param XiSecurityTypeGetDividendHistories GetDividendHistories
	 * @return XiSecurityTypeGetDividendHistoriesResponse
	 */
	public function GetDividendHistories(XiSecurityTypeGetDividendHistories $_XiSecurityTypeGetDividendHistories)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDividendHistories(array('Identifiers'=>$_XiSecurityTypeGetDividendHistories->getIdentifiers(),'IdentifierType'=>$_XiSecurityTypeGetDividendHistories->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedDividendHistory
	 * Meta informations :
	 * 	- documentation : Get extended dividend history for a stock.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetExtendedDividendHistory::getIdentifier()
	 * @uses XiSecurityTypeGetExtendedDividendHistory::getIdentifierType()
	 * @param XiSecurityTypeGetExtendedDividendHistory GetExtendedDividendHistory
	 * @return XiSecurityTypeGetExtendedDividendHistoryResponse
	 */
	public function GetExtendedDividendHistory(XiSecurityTypeGetExtendedDividendHistory $_XiSecurityTypeGetExtendedDividendHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedDividendHistory(array('Identifier'=>$_XiSecurityTypeGetExtendedDividendHistory->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetExtendedDividendHistory->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSplitHistory
	 * Meta informations :
	 * 	- documentation : Get split history for a stock.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetSplitHistory::getIdentifier()
	 * @uses XiSecurityTypeGetSplitHistory::getIdentifierType()
	 * @param XiSecurityTypeGetSplitHistory GetSplitHistory
	 * @return XiSecurityTypeGetSplitHistoryResponse
	 */
	public function GetSplitHistory(XiSecurityTypeGetSplitHistory $_XiSecurityTypeGetSplitHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSplitHistory(array('Identifier'=>$_XiSecurityTypeGetSplitHistory->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetSplitHistory->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSplitRatio
	 * Meta informations :
	 * 	- documentation : Return the cumulative split ratio for a security between two dates. For instance, if a security saw a 3:1 split and 2:1 split during the period, the split ratio 6 is returned. Returns 1 if no split occurred.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetSplitRatio::getIdentifier()
	 * @uses XiSecurityTypeGetSplitRatio::getIdentifierType()
	 * @uses XiSecurityTypeGetSplitRatio::getFromDate()
	 * @uses XiSecurityTypeGetSplitRatio::getToDate()
	 * @param XiSecurityTypeGetSplitRatio GetSplitRatio
	 * @return XiSecurityTypeGetSplitRatioResponse
	 */
	public function GetSplitRatio(XiSecurityTypeGetSplitRatio $_XiSecurityTypeGetSplitRatio)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSplitRatio(array('Identifier'=>$_XiSecurityTypeGetSplitRatio->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetSplitRatio->getIdentifierType(),'FromDate'=>$_XiSecurityTypeGetSplitRatio->getFromDate(),'ToDate'=>$_XiSecurityTypeGetSplitRatio->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCUSIPStock
	 * Meta informations :
	 * 	- documentation : Get a CUSIP for a stock based on its symbol.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetCUSIPStock::getSymbol()
	 * @param XiSecurityTypeGetCUSIPStock GetCUSIPStock
	 * @return XiSecurityTypeGetCUSIPStockResponse
	 */
	public function GetCUSIPStock(XiSecurityTypeGetCUSIPStock $_XiSecurityTypeGetCUSIPStock)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCUSIPStock(array('Symbol'=>$_XiSecurityTypeGetCUSIPStock->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCUSIPFund
	 * Meta informations :
	 * 	- documentation : Get a CUSIP for a mutual fund based on its symbol.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetCUSIPFund::getSymbol()
	 * @param XiSecurityTypeGetCUSIPFund GetCUSIPFund
	 * @return XiSecurityTypeGetCUSIPFundResponse
	 */
	public function GetCUSIPFund(XiSecurityTypeGetCUSIPFund $_XiSecurityTypeGetCUSIPFund)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCUSIPFund(array('Symbol'=>$_XiSecurityTypeGetCUSIPFund->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLargestDeclines
	 * Meta informations :
	 * 	- documentation : Get largest declines in stock price for a time period.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetLargestDeclines::getIdentifier()
	 * @uses XiSecurityTypeGetLargestDeclines::getIdentifierType()
	 * @uses XiSecurityTypeGetLargestDeclines::getAsOfDate()
	 * @uses XiSecurityTypeGetLargestDeclines::getYearsOfHistory()
	 * @param XiSecurityTypeGetLargestDeclines GetLargestDeclines
	 * @return XiSecurityTypeGetLargestDeclinesResponse
	 */
	public function GetLargestDeclines(XiSecurityTypeGetLargestDeclines $_XiSecurityTypeGetLargestDeclines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLargestDeclines(array('Identifier'=>$_XiSecurityTypeGetLargestDeclines->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetLargestDeclines->getIdentifierType(),'AsOfDate'=>$_XiSecurityTypeGetLargestDeclines->getAsOfDate(),'YearsOfHistory'=>$_XiSecurityTypeGetLargestDeclines->getYearsOfHistory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLargestCapDeclines
	 * Meta informations :
	 * 	- documentation : Get largest declines in market capitalization for a time period.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetLargestCapDeclines::getIdentifier()
	 * @uses XiSecurityTypeGetLargestCapDeclines::getIdentifierType()
	 * @uses XiSecurityTypeGetLargestCapDeclines::getAsOfDate()
	 * @uses XiSecurityTypeGetLargestCapDeclines::getYearsOfHistory()
	 * @uses XiSecurityTypeGetLargestCapDeclines::getExtractIfUnavailable()
	 * @param XiSecurityTypeGetLargestCapDeclines GetLargestCapDeclines
	 * @return XiSecurityTypeGetLargestCapDeclinesResponse
	 */
	public function GetLargestCapDeclines(XiSecurityTypeGetLargestCapDeclines $_XiSecurityTypeGetLargestCapDeclines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLargestCapDeclines(array('Identifier'=>$_XiSecurityTypeGetLargestCapDeclines->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetLargestCapDeclines->getIdentifierType(),'AsOfDate'=>$_XiSecurityTypeGetLargestCapDeclines->getAsOfDate(),'YearsOfHistory'=>$_XiSecurityTypeGetLargestCapDeclines->getYearsOfHistory(),'ExtractIfUnavailable'=>$_XiSecurityTypeGetLargestCapDeclines->getExtractIfUnavailable())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMonthlyMarketCapitalization
	 * Meta informations :
	 * 	- documentation : Get historical monthly market capitalization based on SEC filing for a security.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetHistoricalMonthlyMarketCapitalization::getIdentifier()
	 * @uses XiSecurityTypeGetHistoricalMonthlyMarketCapitalization::getIdentifierType()
	 * @uses XiSecurityTypeGetHistoricalMonthlyMarketCapitalization::getStartDate()
	 * @uses XiSecurityTypeGetHistoricalMonthlyMarketCapitalization::getEndDate()
	 * @uses XiSecurityTypeGetHistoricalMonthlyMarketCapitalization::getExtractIfUnavailable()
	 * @param XiSecurityTypeGetHistoricalMonthlyMarketCapitalization GetHistoricalMonthlyMarketCapitalization
	 * @return XiSecurityTypeGetHistoricalMonthlyMarketCapitalizationResponse
	 */
	public function GetHistoricalMonthlyMarketCapitalization(XiSecurityTypeGetHistoricalMonthlyMarketCapitalization $_XiSecurityTypeGetHistoricalMonthlyMarketCapitalization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMonthlyMarketCapitalization(array('Identifier'=>$_XiSecurityTypeGetHistoricalMonthlyMarketCapitalization->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetHistoricalMonthlyMarketCapitalization->getIdentifierType(),'StartDate'=>$_XiSecurityTypeGetHistoricalMonthlyMarketCapitalization->getStartDate(),'EndDate'=>$_XiSecurityTypeGetHistoricalMonthlyMarketCapitalization->getEndDate(),'ExtractIfUnavailable'=>$_XiSecurityTypeGetHistoricalMonthlyMarketCapitalization->getExtractIfUnavailable())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMarketCapitalization
	 * Meta informations :
	 * 	- documentation : Get historical market capitalization based on SEC filing for a security.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalization::getIdentifier()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalization::getIdentifierType()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalization::getStartDate()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalization::getEndDate()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalization::getExtractIfUnavailable()
	 * @param XiSecurityTypeGetHistoricalMarketCapitalization GetHistoricalMarketCapitalization
	 * @return XiSecurityTypeGetHistoricalMarketCapitalizationResponse
	 */
	public function GetHistoricalMarketCapitalization(XiSecurityTypeGetHistoricalMarketCapitalization $_XiSecurityTypeGetHistoricalMarketCapitalization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMarketCapitalization(array('Identifier'=>$_XiSecurityTypeGetHistoricalMarketCapitalization->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetHistoricalMarketCapitalization->getIdentifierType(),'StartDate'=>$_XiSecurityTypeGetHistoricalMarketCapitalization->getStartDate(),'EndDate'=>$_XiSecurityTypeGetHistoricalMarketCapitalization->getEndDate(),'ExtractIfUnavailable'=>$_XiSecurityTypeGetHistoricalMarketCapitalization->getExtractIfUnavailable())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMarketCapitalizationCustom
	 * Meta informations :
	 * 	- documentation : Get historical market capitalization based on SEC filing for a security.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalizationCustom::getIdentifier()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalizationCustom::getIdentifierType()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalizationCustom::getStartDate()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalizationCustom::getEndDate()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalizationCustom::getExtractIfUnavailable()
	 * @uses XiSecurityTypeGetHistoricalMarketCapitalizationCustom::getBackupOption()
	 * @param XiSecurityTypeGetHistoricalMarketCapitalizationCustom GetHistoricalMarketCapitalizationCustom
	 * @return XiSecurityTypeGetHistoricalMarketCapitalizationCustomResponse
	 */
	public function GetHistoricalMarketCapitalizationCustom(XiSecurityTypeGetHistoricalMarketCapitalizationCustom $_XiSecurityTypeGetHistoricalMarketCapitalizationCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMarketCapitalizationCustom(array('Identifier'=>$_XiSecurityTypeGetHistoricalMarketCapitalizationCustom->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetHistoricalMarketCapitalizationCustom->getIdentifierType(),'StartDate'=>$_XiSecurityTypeGetHistoricalMarketCapitalizationCustom->getStartDate(),'EndDate'=>$_XiSecurityTypeGetHistoricalMarketCapitalizationCustom->getEndDate(),'ExtractIfUnavailable'=>$_XiSecurityTypeGetHistoricalMarketCapitalizationCustom->getExtractIfUnavailable(),'BackupOption'=>$_XiSecurityTypeGetHistoricalMarketCapitalizationCustom->getBackupOption())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMarketCapitalization
	 * Meta informations :
	 * 	- documentation : Get historical market capitalization based on SEC filing for a security.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeGetMarketCapitalization::getIdentifier()
	 * @uses XiSecurityTypeGetMarketCapitalization::getIdentifierType()
	 * @uses XiSecurityTypeGetMarketCapitalization::getAsOfDate()
	 * @param XiSecurityTypeGetMarketCapitalization GetMarketCapitalization
	 * @return XiSecurityTypeGetMarketCapitalizationResponse
	 */
	public function GetMarketCapitalization(XiSecurityTypeGetMarketCapitalization $_XiSecurityTypeGetMarketCapitalization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMarketCapitalization(array('Identifier'=>$_XiSecurityTypeGetMarketCapitalization->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeGetMarketCapitalization->getIdentifierType(),'AsOfDate'=>$_XiSecurityTypeGetMarketCapitalization->getAsOfDate())));
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
	 * @return XiSecurityTypeGetMarketCapitalizationResponse
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