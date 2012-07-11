<?php
/**
 * Class file for XiGlobalHistoricalServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalServiceGet
 * @date 08/07/2012
 */
class XiGlobalHistoricalServiceGet extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Method to call GetGlobalLastClosingPrice
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a security.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalLastClosingPrice::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalLastClosingPrice::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalLastClosingPrice::getAdjustmentMethod()
	 * @param XiGlobalHistoricalTypeGetGlobalLastClosingPrice GetGlobalLastClosingPrice
	 * @return XiGlobalHistoricalTypeGetGlobalLastClosingPriceResponse
	 */
	public function GetGlobalLastClosingPrice(XiGlobalHistoricalTypeGetGlobalLastClosingPrice $_XiGlobalHistoricalTypeGetGlobalLastClosingPrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalLastClosingPrice(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalLastClosingPrice->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalLastClosingPrice->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalLastClosingPrice->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalLastClosingPrices
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of securities.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalLastClosingPrices::getIdentifiers()
	 * @uses XiGlobalHistoricalTypeGetGlobalLastClosingPrices::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalLastClosingPrices::getAdjustmentMethod()
	 * @param XiGlobalHistoricalTypeGetGlobalLastClosingPrices GetGlobalLastClosingPrices
	 * @return XiGlobalHistoricalTypeGetGlobalLastClosingPricesResponse
	 */
	public function GetGlobalLastClosingPrices(XiGlobalHistoricalTypeGetGlobalLastClosingPrices $_XiGlobalHistoricalTypeGetGlobalLastClosingPrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalLastClosingPrices(array('Identifiers'=>$_XiGlobalHistoricalTypeGetGlobalLastClosingPrices->getIdentifiers(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalLastClosingPrices->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalLastClosingPrices->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalQuote
	 * Meta informations :
	 * 	- documentation : Returns a quote as of a historical date. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuote::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuote::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuote::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuote::getAsOfDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalQuote GetGlobalHistoricalQuote
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuoteResponse
	 */
	public function GetGlobalHistoricalQuote(XiGlobalHistoricalTypeGetGlobalHistoricalQuote $_XiGlobalHistoricalTypeGetGlobalHistoricalQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalQuote(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuote->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuote->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuote->getAdjustmentMethod(),'AsOfDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuote->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEndOfDayQuote
	 * Meta informations :
	 * 	- documentation : Returns a quote as of a historical date. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuote::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuote::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuote::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuote::getEndOfDayPriceMethod()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuote::getAsOfDate()
	 * @param XiGlobalHistoricalTypeGetEndOfDayQuote GetEndOfDayQuote
	 * @return XiGlobalHistoricalTypeGetEndOfDayQuoteResponse
	 */
	public function GetEndOfDayQuote(XiGlobalHistoricalTypeGetEndOfDayQuote $_XiGlobalHistoricalTypeGetEndOfDayQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEndOfDayQuote(array('Identifier'=>$_XiGlobalHistoricalTypeGetEndOfDayQuote->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetEndOfDayQuote->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetEndOfDayQuote->getAdjustmentMethod(),'EndOfDayPriceMethod'=>$_XiGlobalHistoricalTypeGetEndOfDayQuote->getEndOfDayPriceMethod(),'AsOfDate'=>$_XiGlobalHistoricalTypeGetEndOfDayQuote->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEndOfDayQuotes
	 * Meta informations :
	 * 	- documentation : Returns a quote as of a historical date. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuotes::getIdentifiers()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuotes::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuotes::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuotes::getEndOfDayPriceMethod()
	 * @uses XiGlobalHistoricalTypeGetEndOfDayQuotes::getAsOfDate()
	 * @param XiGlobalHistoricalTypeGetEndOfDayQuotes GetEndOfDayQuotes
	 * @return XiGlobalHistoricalTypeGetEndOfDayQuotesResponse
	 */
	public function GetEndOfDayQuotes(XiGlobalHistoricalTypeGetEndOfDayQuotes $_XiGlobalHistoricalTypeGetEndOfDayQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEndOfDayQuotes(array('Identifiers'=>$_XiGlobalHistoricalTypeGetEndOfDayQuotes->getIdentifiers(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetEndOfDayQuotes->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetEndOfDayQuotes->getAdjustmentMethod(),'EndOfDayPriceMethod'=>$_XiGlobalHistoricalTypeGetEndOfDayQuotes->getEndOfDayPriceMethod(),'AsOfDate'=>$_XiGlobalHistoricalTypeGetEndOfDayQuotes->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalQuotes
	 * Meta informations :
	 * 	- documentation : Returns quotes as of a historical date. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotes::getIdentifiers()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotes::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotes::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotes::getAsOfDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalQuotes GetGlobalHistoricalQuotes
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesResponse
	 */
	public function GetGlobalHistoricalQuotes(XiGlobalHistoricalTypeGetGlobalHistoricalQuotes $_XiGlobalHistoricalTypeGetGlobalHistoricalQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalQuotes(array('Identifiers'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotes->getIdentifiers(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotes->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotes->getAdjustmentMethod(),'AsOfDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotes->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalQuotesAsOf
	 * Meta informations :
	 * 	- documentation : This operation returns a range of quotes for a security.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf::getEndDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf::getPeriodType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf::getPeriods()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf GetGlobalHistoricalQuotesAsOf
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOfResponse
	 */
	public function GetGlobalHistoricalQuotesAsOf(XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf $_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalQuotesAsOf(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf->getAdjustmentMethod(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf->getEndDate(),'PeriodType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf->getPeriodType(),'Periods'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesAsOf->getPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalQuotesRange
	 * Meta informations :
	 * 	- documentation : This operation returns a complete range of stock quotes for a given equity. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange::getEndDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange GetGlobalHistoricalQuotesRange
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeResponse
	 */
	public function GetGlobalHistoricalQuotesRange(XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange $_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalQuotesRange(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange->getAdjustmentMethod(),'StartDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalQuotesRangeExtended
	 * Meta informations :
	 * 	- documentation : This operation returns a complete range of global historical quotes extended for a given equity. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended::getEndDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended GetGlobalHistoricalQuotesRangeExtended
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtendedResponse
	 */
	public function GetGlobalHistoricalQuotesRangeExtended(XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended $_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalQuotesRangeExtended(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended->getAdjustmentMethod(),'StartDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuotesRangeExtended->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalWeeklyQuotesRange
	 * Meta informations :
	 * 	- documentation : Returns a range of weekly Global Historical quotes for a security. For more information, go to http://www.xignite.com/
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange::getEndDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange GetGlobalHistoricalWeeklyQuotesRange
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeResponse
	 */
	public function GetGlobalHistoricalWeeklyQuotesRange(XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange $_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalWeeklyQuotesRange(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange->getAdjustmentMethod(),'StartDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalWeeklyQuotesRangeExtended
	 * Meta informations :
	 * 	- documentation : Returns a range of weekly Global Historical quotes extended for a security. For more information, go to http://www.xignite.com/
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended::getEndDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended GetGlobalHistoricalWeeklyQuotesRangeExtended
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtendedResponse
	 */
	public function GetGlobalHistoricalWeeklyQuotesRangeExtended(XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended $_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalWeeklyQuotesRangeExtended(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended->getAdjustmentMethod(),'StartDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalWeeklyQuotesRangeExtended->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalQuarterlyQuotesRange
	 * Meta informations :
	 * 	- documentation : Returns a range of quarterly Global Historical quotes for a security. For more information, go to http://www.xignite.com/
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange::getEndDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange GetGlobalHistoricalQuarterlyQuotesRange
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRangeResponse
	 */
	public function GetGlobalHistoricalQuarterlyQuotesRange(XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange $_XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalQuarterlyQuotesRange(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange->getAdjustmentMethod(),'StartDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalQuarterlyQuotesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalStatistics
	 * Meta informations :
	 * 	- documentation : Returns Global Historical statistics for a security. For more information, go to http://www.xignite.com/
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalStatistics::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalStatistics::getIdentifierType()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalStatistics GetGlobalHistoricalStatistics
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalStatisticsResponse
	 */
	public function GetGlobalHistoricalStatistics(XiGlobalHistoricalTypeGetGlobalHistoricalStatistics $_XiGlobalHistoricalTypeGetGlobalHistoricalStatistics)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalStatistics(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalStatistics->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalStatistics->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalMonthlyQuotesRange
	 * Meta informations :
	 * 	- documentation : This operation returns a range of monthly quotes for an equity based on the specified date range. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange::getEndDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange GetGlobalHistoricalMonthlyQuotesRange
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeResponse
	 */
	public function GetGlobalHistoricalMonthlyQuotesRange(XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange $_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalMonthlyQuotesRange(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange->getAdjustmentMethod(),'StartDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetGlobalHistoricalMonthlyQuotesRangeExtended
	 * Meta informations :
	 * 	- documentation : This operation returns a range of monthly quotes extended for an equity based on the specified date range. This includes the adjusted price as specified.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended::getAdjustmentMethod()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended::getEndDate()
	 * @param XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended GetGlobalHistoricalMonthlyQuotesRangeExtended
	 * @return XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtendedResponse
	 */
	public function GetGlobalHistoricalMonthlyQuotesRangeExtended(XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended $_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetGlobalHistoricalMonthlyQuotesRangeExtended(array('Identifier'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended->getIdentifierType(),'AdjustmentMethod'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended->getAdjustmentMethod(),'StartDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetGlobalHistoricalMonthlyQuotesRangeExtended->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopMoversByExchange
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top moving equities for the requested exchange.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetTopMoversByExchange::getAsOfDate()
	 * @uses XiGlobalHistoricalTypeGetTopMoversByExchange::getCount()
	 * @uses XiGlobalHistoricalTypeGetTopMoversByExchange::getExchange()
	 * @param XiGlobalHistoricalTypeGetTopMoversByExchange GetTopMoversByExchange
	 * @return XiGlobalHistoricalTypeGetTopMoversByExchangeResponse
	 */
	public function GetTopMoversByExchange(XiGlobalHistoricalTypeGetTopMoversByExchange $_XiGlobalHistoricalTypeGetTopMoversByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopMoversByExchange(array('AsOfDate'=>$_XiGlobalHistoricalTypeGetTopMoversByExchange->getAsOfDate(),'Count'=>$_XiGlobalHistoricalTypeGetTopMoversByExchange->getCount(),'Exchange'=>$_XiGlobalHistoricalTypeGetTopMoversByExchange->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopGainersByExchange
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top gaining equities for the requested exchange.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetTopGainersByExchange::getAsOfDate()
	 * @uses XiGlobalHistoricalTypeGetTopGainersByExchange::getCount()
	 * @uses XiGlobalHistoricalTypeGetTopGainersByExchange::getExchange()
	 * @param XiGlobalHistoricalTypeGetTopGainersByExchange GetTopGainersByExchange
	 * @return XiGlobalHistoricalTypeGetTopGainersByExchangeResponse
	 */
	public function GetTopGainersByExchange(XiGlobalHistoricalTypeGetTopGainersByExchange $_XiGlobalHistoricalTypeGetTopGainersByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopGainersByExchange(array('AsOfDate'=>$_XiGlobalHistoricalTypeGetTopGainersByExchange->getAsOfDate(),'Count'=>$_XiGlobalHistoricalTypeGetTopGainersByExchange->getCount(),'Exchange'=>$_XiGlobalHistoricalTypeGetTopGainersByExchange->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopLosersByExchange
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top losing equities for the requested exchange.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetTopLosersByExchange::getAsOfDate()
	 * @uses XiGlobalHistoricalTypeGetTopLosersByExchange::getCount()
	 * @uses XiGlobalHistoricalTypeGetTopLosersByExchange::getExchange()
	 * @param XiGlobalHistoricalTypeGetTopLosersByExchange GetTopLosersByExchange
	 * @return XiGlobalHistoricalTypeGetTopLosersByExchangeResponse
	 */
	public function GetTopLosersByExchange(XiGlobalHistoricalTypeGetTopLosersByExchange $_XiGlobalHistoricalTypeGetTopLosersByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopLosersByExchange(array('AsOfDate'=>$_XiGlobalHistoricalTypeGetTopLosersByExchange->getAsOfDate(),'Count'=>$_XiGlobalHistoricalTypeGetTopLosersByExchange->getCount(),'Exchange'=>$_XiGlobalHistoricalTypeGetTopLosersByExchange->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllSplitsByExchange
	 * Meta informations :
	 * 	- documentation : Get all splits for a date range in the specified exchange.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetAllSplitsByExchange::getExchange()
	 * @uses XiGlobalHistoricalTypeGetAllSplitsByExchange::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetAllSplitsByExchange::getEndDate()
	 * @param XiGlobalHistoricalTypeGetAllSplitsByExchange GetAllSplitsByExchange
	 * @return XiGlobalHistoricalTypeGetAllSplitsByExchangeResponse
	 */
	public function GetAllSplitsByExchange(XiGlobalHistoricalTypeGetAllSplitsByExchange $_XiGlobalHistoricalTypeGetAllSplitsByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllSplitsByExchange(array('Exchange'=>$_XiGlobalHistoricalTypeGetAllSplitsByExchange->getExchange(),'StartDate'=>$_XiGlobalHistoricalTypeGetAllSplitsByExchange->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetAllSplitsByExchange->getEndDate())));
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
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetSplitRatio::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetSplitRatio::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetSplitRatio::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetSplitRatio::getEndDate()
	 * @param XiGlobalHistoricalTypeGetSplitRatio GetSplitRatio
	 * @return XiGlobalHistoricalTypeGetSplitRatioResponse
	 */
	public function GetSplitRatio(XiGlobalHistoricalTypeGetSplitRatio $_XiGlobalHistoricalTypeGetSplitRatio)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSplitRatio(array('Identifier'=>$_XiGlobalHistoricalTypeGetSplitRatio->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetSplitRatio->getIdentifierType(),'StartDate'=>$_XiGlobalHistoricalTypeGetSplitRatio->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetSplitRatio->getEndDate())));
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
	 * 	- documentation : Get split history for a stock for a date range.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetSplitHistory::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetSplitHistory::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetSplitHistory::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetSplitHistory::getEndDate()
	 * @param XiGlobalHistoricalTypeGetSplitHistory GetSplitHistory
	 * @return XiGlobalHistoricalTypeGetSplitHistoryResponse
	 */
	public function GetSplitHistory(XiGlobalHistoricalTypeGetSplitHistory $_XiGlobalHistoricalTypeGetSplitHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSplitHistory(array('Identifier'=>$_XiGlobalHistoricalTypeGetSplitHistory->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetSplitHistory->getIdentifierType(),'StartDate'=>$_XiGlobalHistoricalTypeGetSplitHistory->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetSplitHistory->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllCashDividendsByExchange
	 * Meta informations :
	 * 	- documentation : Get all cash dividends for a date range in the specified exchange.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetAllCashDividendsByExchange::getExchange()
	 * @uses XiGlobalHistoricalTypeGetAllCashDividendsByExchange::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetAllCashDividendsByExchange::getEndDate()
	 * @param XiGlobalHistoricalTypeGetAllCashDividendsByExchange GetAllCashDividendsByExchange
	 * @return XiGlobalHistoricalTypeGetAllCashDividendsByExchangeResponse
	 */
	public function GetAllCashDividendsByExchange(XiGlobalHistoricalTypeGetAllCashDividendsByExchange $_XiGlobalHistoricalTypeGetAllCashDividendsByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllCashDividendsByExchange(array('Exchange'=>$_XiGlobalHistoricalTypeGetAllCashDividendsByExchange->getExchange(),'StartDate'=>$_XiGlobalHistoricalTypeGetAllCashDividendsByExchange->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetAllCashDividendsByExchange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCashDividendTotal
	 * Meta informations :
	 * 	- documentation : Return the cumulative cash dividend total for a security between two dates.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetCashDividendTotal::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetCashDividendTotal::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetCashDividendTotal::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetCashDividendTotal::getEndDate()
	 * @param XiGlobalHistoricalTypeGetCashDividendTotal GetCashDividendTotal
	 * @return XiGlobalHistoricalTypeGetCashDividendTotalResponse
	 */
	public function GetCashDividendTotal(XiGlobalHistoricalTypeGetCashDividendTotal $_XiGlobalHistoricalTypeGetCashDividendTotal)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCashDividendTotal(array('Identifier'=>$_XiGlobalHistoricalTypeGetCashDividendTotal->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetCashDividendTotal->getIdentifierType(),'StartDate'=>$_XiGlobalHistoricalTypeGetCashDividendTotal->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetCashDividendTotal->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCashDividendHistory
	 * Meta informations :
	 * 	- documentation : Get cash dividend history for a stock for a date range.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetCashDividendHistory::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetCashDividendHistory::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetCashDividendHistory::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetCashDividendHistory::getEndDate()
	 * @param XiGlobalHistoricalTypeGetCashDividendHistory GetCashDividendHistory
	 * @return XiGlobalHistoricalTypeGetCashDividendHistoryResponse
	 */
	public function GetCashDividendHistory(XiGlobalHistoricalTypeGetCashDividendHistory $_XiGlobalHistoricalTypeGetCashDividendHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCashDividendHistory(array('Identifier'=>$_XiGlobalHistoricalTypeGetCashDividendHistory->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetCashDividendHistory->getIdentifierType(),'StartDate'=>$_XiGlobalHistoricalTypeGetCashDividendHistory->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetCashDividendHistory->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllCorporateActionsByExchange
	 * Meta informations :
	 * 	- documentation : Get all corporate actions for a date range in the specified exchange.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetAllCorporateActionsByExchange::getExchange()
	 * @uses XiGlobalHistoricalTypeGetAllCorporateActionsByExchange::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetAllCorporateActionsByExchange::getEndDate()
	 * @param XiGlobalHistoricalTypeGetAllCorporateActionsByExchange GetAllCorporateActionsByExchange
	 * @return XiGlobalHistoricalTypeGetAllCorporateActionsByExchangeResponse
	 */
	public function GetAllCorporateActionsByExchange(XiGlobalHistoricalTypeGetAllCorporateActionsByExchange $_XiGlobalHistoricalTypeGetAllCorporateActionsByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllCorporateActionsByExchange(array('Exchange'=>$_XiGlobalHistoricalTypeGetAllCorporateActionsByExchange->getExchange(),'StartDate'=>$_XiGlobalHistoricalTypeGetAllCorporateActionsByExchange->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetAllCorporateActionsByExchange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCorporateActionHistory
	 * Meta informations :
	 * 	- documentation : Get the corporate action history for a stock for a date range.
	 * @uses XiGlobalHistoricalWsdlClass::getSoapClient()
	 * @uses XiGlobalHistoricalWsdlClass::setResult()
	 * @uses XiGlobalHistoricalWsdlClass::getResult()
	 * @uses XiGlobalHistoricalWsdlClass::saveLastError()
	 * @uses XiGlobalHistoricalTypeGetCorporateActionHistory::getIdentifier()
	 * @uses XiGlobalHistoricalTypeGetCorporateActionHistory::getIdentifierType()
	 * @uses XiGlobalHistoricalTypeGetCorporateActionHistory::getStartDate()
	 * @uses XiGlobalHistoricalTypeGetCorporateActionHistory::getEndDate()
	 * @param XiGlobalHistoricalTypeGetCorporateActionHistory GetCorporateActionHistory
	 * @return XiGlobalHistoricalTypeGetCorporateActionHistoryResponse
	 */
	public function GetCorporateActionHistory(XiGlobalHistoricalTypeGetCorporateActionHistory $_XiGlobalHistoricalTypeGetCorporateActionHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCorporateActionHistory(array('Identifier'=>$_XiGlobalHistoricalTypeGetCorporateActionHistory->getIdentifier(),'IdentifierType'=>$_XiGlobalHistoricalTypeGetCorporateActionHistory->getIdentifierType(),'StartDate'=>$_XiGlobalHistoricalTypeGetCorporateActionHistory->getStartDate(),'EndDate'=>$_XiGlobalHistoricalTypeGetCorporateActionHistory->getEndDate())));
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
	 * @return XiGlobalHistoricalTypeGetCorporateActionHistoryResponse
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