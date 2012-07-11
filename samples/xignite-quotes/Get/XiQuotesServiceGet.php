<?php
/**
 * Class file for XiQuotesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiQuotesServiceGet
 * @date 08/07/2012
 */
class XiQuotesServiceGet extends XiQuotesWsdlClass
{
	/**
	 * Method to call GetQuickQuotes
	 * Meta informations :
	 * 	- documentation : Returns a short (last, change, volume) 15/20 minutes delayed quote for a list of US Domestic equities.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetQuickQuotes::getSymbol()
	 * @param XiQuotesTypeGetQuickQuotes GetQuickQuotes
	 * @return XiQuotesTypeGetQuickQuotesResponse
	 */
	public function GetQuickQuotes(XiQuotesTypeGetQuickQuotes $_XiQuotesTypeGetQuickQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetQuickQuotes(array('Symbol'=>$_XiQuotesTypeGetQuickQuotes->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSingleQuote
	 * Meta informations :
	 * 	- documentation : Returns a 15/20 minutes delayed quote for a single Domestic equities.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetSingleQuote::getSymbol()
	 * @param XiQuotesTypeGetSingleQuote GetSingleQuote
	 * @return XiQuotesTypeGetSingleQuoteResponse
	 */
	public function GetSingleQuote(XiQuotesTypeGetSingleQuote $_XiQuotesTypeGetSingleQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSingleQuote(array('Symbol'=>$_XiQuotesTypeGetSingleQuote->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetQuotes
	 * Meta informations :
	 * 	- documentation : Returns a 15/20 minutes delayed quote for a list of US Domestic equities.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetQuotes::getSymbol()
	 * @param XiQuotesTypeGetQuotes GetQuotes
	 * @return XiQuotesTypeGetQuotesResponse
	 */
	public function GetQuotes(XiQuotesTypeGetQuotes $_XiQuotesTypeGetQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetQuotes(array('Symbol'=>$_XiQuotesTypeGetQuotes->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetQuotesByIdentifiers
	 * Meta informations :
	 * 	- documentation : Returns a list of quotes for the given identifiers and identifier type.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetQuotesByIdentifiers::getIdentifiers()
	 * @uses XiQuotesTypeGetQuotesByIdentifiers::getIdentifierType()
	 * @param XiQuotesTypeGetQuotesByIdentifiers GetQuotesByIdentifiers
	 * @return XiQuotesTypeGetQuotesByIdentifiersResponse
	 */
	public function GetQuotesByIdentifiers(XiQuotesTypeGetQuotesByIdentifiers $_XiQuotesTypeGetQuotesByIdentifiers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetQuotesByIdentifiers(array('Identifiers'=>$_XiQuotesTypeGetQuotesByIdentifiers->getIdentifiers(),'IdentifierType'=>$_XiQuotesTypeGetQuotesByIdentifiers->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetQuote
	 * Meta informations :
	 * 	- documentation : Returns an extended (quotes, news, fundamentals) 15/20 minutes delayed quote for a US Domestic equity.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetQuote::getSymbol()
	 * @param XiQuotesTypeGetQuote GetQuote
	 * @return XiQuotesTypeGetQuoteResponse
	 */
	public function GetQuote(XiQuotesTypeGetQuote $_XiQuotesTypeGetQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetQuote(array('Symbol'=>$_XiQuotesTypeGetQuote->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopMovers
	 * Meta informations :
	 * 	- documentation : Returns quote information about the top moving equities from NYSE, NASDAQ and AMEX.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetTopMovers GetTopMovers
	 * @return XiQuotesTypeGetTopMoversResponse
	 */
	public function GetTopMovers(XiQuotesTypeGetTopMovers $_XiQuotesTypeGetTopMovers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopMovers(array()));
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
	 * 	- documentation : Returns quote information about the top gaining equities from NYSE, NASDAQ and AMEX.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetTopGainers GetTopGainers
	 * @return XiQuotesTypeGetTopGainersResponse
	 */
	public function GetTopGainers(XiQuotesTypeGetTopGainers $_XiQuotesTypeGetTopGainers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopGainers(array()));
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
	 * 	- documentation : Returns quote information about the top losing equities from NYSE, NASDAQ and AMEX.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetTopLosers GetTopLosers
	 * @return XiQuotesTypeGetTopLosersResponse
	 */
	public function GetTopLosers(XiQuotesTypeGetTopLosers $_XiQuotesTypeGetTopLosers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopLosers(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTop
	 * Meta informations :
	 * 	- documentation : Returns quote information about the top gaining, losing, and moving equities from NYSE, NASDAQ and AMEX.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetTop GetTop
	 * @return XiQuotesTypeGetTopResponse
	 */
	public function GetTop(XiQuotesTypeGetTop $_XiQuotesTypeGetTop)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTop(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopsByExchange
	 * Meta informations :
	 * 	- documentation : Returns quote information about the top gaining, loosing, and moving equities by exchange.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetTopsByExchange::getTopType()
	 * @uses XiQuotesTypeGetTopsByExchange::getExchange()
	 * @param XiQuotesTypeGetTopsByExchange GetTopsByExchange
	 * @return XiQuotesTypeGetTopsByExchangeResponse
	 */
	public function GetTopsByExchange(XiQuotesTypeGetTopsByExchange $_XiQuotesTypeGetTopsByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopsByExchange(array('TopType'=>$_XiQuotesTypeGetTopsByExchange->getTopType(),'Exchange'=>$_XiQuotesTypeGetTopsByExchange->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMarketSummary
	 * Meta informations :
	 * 	- documentation : Returns the current market level for the Dow, Nasdaq and S&amp;P indices as well as the NYSE and NASDAQ volumes and the 10 Year Bond index.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetMarketSummary GetMarketSummary
	 * @return XiQuotesTypeGetMarketSummaryResponse
	 */
	public function GetMarketSummary(XiQuotesTypeGetMarketSummary $_XiQuotesTypeGetMarketSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMarketSummary(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIndices
	 * Meta informations :
	 * 	- documentation : Returns last value, change, percent change and category information for a collection of US market indices including Dow Jones Averages, NYSE, AMEX, NASDAQ, Standard &amp; Poor's, Commodities, Treasuries and other U.S. Indices.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetIndices GetIndices
	 * @return XiQuotesTypeGetIndicesResponse
	 */
	public function GetIndices(XiQuotesTypeGetIndices $_XiQuotesTypeGetIndices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIndices(array()));
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
	 * 	- documentation : Returns a tick for a security as of a specific time in the day.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetTick::getSymbol()
	 * @uses XiQuotesTypeGetTick::getTime()
	 * @param XiQuotesTypeGetTick GetTick
	 * @return XiQuotesTypeGetTickResponse
	 */
	public function GetTick(XiQuotesTypeGetTick $_XiQuotesTypeGetTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTick(array('Symbol'=>$_XiQuotesTypeGetTick->getSymbol(),'Time'=>$_XiQuotesTypeGetTick->getTime())));
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
	 * 	- documentation : Returns a range of ticks for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetTicks::getSymbol()
	 * @uses XiQuotesTypeGetTicks::getStartTime()
	 * @uses XiQuotesTypeGetTicks::getEndTime()
	 * @uses XiQuotesTypeGetTicks::getTickPrecision()
	 * @uses XiQuotesTypeGetTicks::getTickPeriods()
	 * @param XiQuotesTypeGetTicks GetTicks
	 * @return XiQuotesTypeGetTicksResponse
	 */
	public function GetTicks(XiQuotesTypeGetTicks $_XiQuotesTypeGetTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTicks(array('Symbol'=>$_XiQuotesTypeGetTicks->getSymbol(),'StartTime'=>$_XiQuotesTypeGetTicks->getStartTime(),'EndTime'=>$_XiQuotesTypeGetTicks->getEndTime(),'TickPrecision'=>$_XiQuotesTypeGetTicks->getTickPrecision(),'TickPeriods'=>$_XiQuotesTypeGetTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetClosingTicks
	 * Meta informations :
	 * 	- documentation : Returns a range of ticks for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetClosingTicks::getSymbol()
	 * @uses XiQuotesTypeGetClosingTicks::getStartTime()
	 * @uses XiQuotesTypeGetClosingTicks::getEndTime()
	 * @uses XiQuotesTypeGetClosingTicks::getTickPrecision()
	 * @uses XiQuotesTypeGetClosingTicks::getTickPeriods()
	 * @param XiQuotesTypeGetClosingTicks GetClosingTicks
	 * @return XiQuotesTypeGetClosingTicksResponse
	 */
	public function GetClosingTicks(XiQuotesTypeGetClosingTicks $_XiQuotesTypeGetClosingTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetClosingTicks(array('Symbol'=>$_XiQuotesTypeGetClosingTicks->getSymbol(),'StartTime'=>$_XiQuotesTypeGetClosingTicks->getStartTime(),'EndTime'=>$_XiQuotesTypeGetClosingTicks->getEndTime(),'TickPrecision'=>$_XiQuotesTypeGetClosingTicks->getTickPrecision(),'TickPeriods'=>$_XiQuotesTypeGetClosingTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetClosingTicksAsOfDate
	 * Meta informations :
	 * 	- documentation : Returns a range of ticks for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetClosingTicksAsOfDate::getSymbol()
	 * @uses XiQuotesTypeGetClosingTicksAsOfDate::getAsOfDate()
	 * @uses XiQuotesTypeGetClosingTicksAsOfDate::getStartTime()
	 * @uses XiQuotesTypeGetClosingTicksAsOfDate::getEndTime()
	 * @uses XiQuotesTypeGetClosingTicksAsOfDate::getTickPrecision()
	 * @uses XiQuotesTypeGetClosingTicksAsOfDate::getTickPeriods()
	 * @param XiQuotesTypeGetClosingTicksAsOfDate GetClosingTicksAsOfDate
	 * @return XiQuotesTypeGetClosingTicksAsOfDateResponse
	 */
	public function GetClosingTicksAsOfDate(XiQuotesTypeGetClosingTicksAsOfDate $_XiQuotesTypeGetClosingTicksAsOfDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetClosingTicksAsOfDate(array('Symbol'=>$_XiQuotesTypeGetClosingTicksAsOfDate->getSymbol(),'AsOfDate'=>$_XiQuotesTypeGetClosingTicksAsOfDate->getAsOfDate(),'StartTime'=>$_XiQuotesTypeGetClosingTicksAsOfDate->getStartTime(),'EndTime'=>$_XiQuotesTypeGetClosingTicksAsOfDate->getEndTime(),'TickPrecision'=>$_XiQuotesTypeGetClosingTicksAsOfDate->getTickPrecision(),'TickPeriods'=>$_XiQuotesTypeGetClosingTicksAsOfDate->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTickHistogram
	 * Meta informations :
	 * 	- documentation : Returns a histogram for a range of ticks for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetTickHistogram::getSymbol()
	 * @uses XiQuotesTypeGetTickHistogram::getStartTime()
	 * @uses XiQuotesTypeGetTickHistogram::getEndTime()
	 * @param XiQuotesTypeGetTickHistogram GetTickHistogram
	 * @return XiQuotesTypeGetTickHistogramResponse
	 */
	public function GetTickHistogram(XiQuotesTypeGetTickHistogram $_XiQuotesTypeGetTickHistogram)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTickHistogram(array('Symbol'=>$_XiQuotesTypeGetTickHistogram->getSymbol(),'StartTime'=>$_XiQuotesTypeGetTickHistogram->getStartTime(),'EndTime'=>$_XiQuotesTypeGetTickHistogram->getEndTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalTickHistogram
	 * Meta informations :
	 * 	- documentation : Returns a histogram for a range of ticks for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetHistoricalTickHistogram::getSymbol()
	 * @uses XiQuotesTypeGetHistoricalTickHistogram::getAsOfDate()
	 * @uses XiQuotesTypeGetHistoricalTickHistogram::getStartTime()
	 * @uses XiQuotesTypeGetHistoricalTickHistogram::getEndTime()
	 * @param XiQuotesTypeGetHistoricalTickHistogram GetHistoricalTickHistogram
	 * @return XiQuotesTypeGetHistoricalTickHistogramResponse
	 */
	public function GetHistoricalTickHistogram(XiQuotesTypeGetHistoricalTickHistogram $_XiQuotesTypeGetHistoricalTickHistogram)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTickHistogram(array('Symbol'=>$_XiQuotesTypeGetHistoricalTickHistogram->getSymbol(),'AsOfDate'=>$_XiQuotesTypeGetHistoricalTickHistogram->getAsOfDate(),'StartTime'=>$_XiQuotesTypeGetHistoricalTickHistogram->getStartTime(),'EndTime'=>$_XiQuotesTypeGetHistoricalTickHistogram->getEndTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTickCollections
	 * Meta informations :
	 * 	- documentation : Returns a range of ticks for multiple security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetTickCollections::getSymbols()
	 * @uses XiQuotesTypeGetTickCollections::getStartTime()
	 * @uses XiQuotesTypeGetTickCollections::getEndTime()
	 * @uses XiQuotesTypeGetTickCollections::getTickPrecision()
	 * @uses XiQuotesTypeGetTickCollections::getTickPeriods()
	 * @param XiQuotesTypeGetTickCollections GetTickCollections
	 * @return XiQuotesTypeGetTickCollectionsResponse
	 */
	public function GetTickCollections(XiQuotesTypeGetTickCollections $_XiQuotesTypeGetTickCollections)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTickCollections(array('Symbols'=>$_XiQuotesTypeGetTickCollections->getSymbols(),'StartTime'=>$_XiQuotesTypeGetTickCollections->getStartTime(),'EndTime'=>$_XiQuotesTypeGetTickCollections->getEndTime(),'TickPrecision'=>$_XiQuotesTypeGetTickCollections->getTickPrecision(),'TickPeriods'=>$_XiQuotesTypeGetTickCollections->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalTicksAsOfDate
	 * Meta informations :
	 * 	- documentation : Returns a historical range of ticks for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetHistoricalTicksAsOfDate::getSymbol()
	 * @uses XiQuotesTypeGetHistoricalTicksAsOfDate::getAsOfDate()
	 * @uses XiQuotesTypeGetHistoricalTicksAsOfDate::getStartTime()
	 * @uses XiQuotesTypeGetHistoricalTicksAsOfDate::getEndTime()
	 * @uses XiQuotesTypeGetHistoricalTicksAsOfDate::getTickPrecision()
	 * @uses XiQuotesTypeGetHistoricalTicksAsOfDate::getTickPeriods()
	 * @param XiQuotesTypeGetHistoricalTicksAsOfDate GetHistoricalTicksAsOfDate
	 * @return XiQuotesTypeGetHistoricalTicksAsOfDateResponse
	 */
	public function GetHistoricalTicksAsOfDate(XiQuotesTypeGetHistoricalTicksAsOfDate $_XiQuotesTypeGetHistoricalTicksAsOfDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTicksAsOfDate(array('Symbol'=>$_XiQuotesTypeGetHistoricalTicksAsOfDate->getSymbol(),'AsOfDate'=>$_XiQuotesTypeGetHistoricalTicksAsOfDate->getAsOfDate(),'StartTime'=>$_XiQuotesTypeGetHistoricalTicksAsOfDate->getStartTime(),'EndTime'=>$_XiQuotesTypeGetHistoricalTicksAsOfDate->getEndTime(),'TickPrecision'=>$_XiQuotesTypeGetHistoricalTicksAsOfDate->getTickPrecision(),'TickPeriods'=>$_XiQuotesTypeGetHistoricalTicksAsOfDate->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMarketChart
	 * Meta informations :
	 * 	- documentation : Get a market chart. Returned string is HTML code pointing to the proper image.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetMarketChart GetMarketChart
	 * @return XiQuotesTypeGetMarketChartResponse
	 */
	public function GetMarketChart(XiQuotesTypeGetMarketChart $_XiQuotesTypeGetMarketChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMarketChart(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedChart
	 * Meta informations :
	 * 	- documentation : Get a standard IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedChart::getSymbol()
	 * @uses XiQuotesTypeGetDelayedChart::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedChart::getStartTime()
	 * @uses XiQuotesTypeGetDelayedChart::getEndTime()
	 * @uses XiQuotesTypeGetDelayedChart::getStyle()
	 * @uses XiQuotesTypeGetDelayedChart::getWidth()
	 * @uses XiQuotesTypeGetDelayedChart::getHeight()
	 * @param XiQuotesTypeGetDelayedChart GetDelayedChart
	 * @return XiQuotesTypeGetDelayedChartResponse
	 */
	public function GetDelayedChart(XiQuotesTypeGetDelayedChart $_XiQuotesTypeGetDelayedChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedChart(array('Symbol'=>$_XiQuotesTypeGetDelayedChart->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedChart->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedChart->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedChart->getEndTime(),'Style'=>$_XiQuotesTypeGetDelayedChart->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedChart->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedBinaryChart
	 * Meta informations :
	 * 	- documentation : Get a standard IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedBinaryChart::getSymbol()
	 * @uses XiQuotesTypeGetDelayedBinaryChart::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedBinaryChart::getStartTime()
	 * @uses XiQuotesTypeGetDelayedBinaryChart::getEndTime()
	 * @uses XiQuotesTypeGetDelayedBinaryChart::getStyle()
	 * @uses XiQuotesTypeGetDelayedBinaryChart::getWidth()
	 * @uses XiQuotesTypeGetDelayedBinaryChart::getHeight()
	 * @param XiQuotesTypeGetDelayedBinaryChart GetDelayedBinaryChart
	 * @return XiQuotesTypeGetDelayedBinaryChartResponse
	 */
	public function GetDelayedBinaryChart(XiQuotesTypeGetDelayedBinaryChart $_XiQuotesTypeGetDelayedBinaryChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedBinaryChart(array('Symbol'=>$_XiQuotesTypeGetDelayedBinaryChart->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedBinaryChart->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedBinaryChart->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedBinaryChart->getEndTime(),'Style'=>$_XiQuotesTypeGetDelayedBinaryChart->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedBinaryChart->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedBinaryChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedChartPreset
	 * Meta informations :
	 * 	- documentation : Get a standard IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getSymbol()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getStartTime()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getEndTime()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getStyle()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getWidth()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getHeight()
	 * @uses XiQuotesTypeGetDelayedChartPreset::getPreset()
	 * @param XiQuotesTypeGetDelayedChartPreset GetDelayedChartPreset
	 * @return XiQuotesTypeGetDelayedChartPresetResponse
	 */
	public function GetDelayedChartPreset(XiQuotesTypeGetDelayedChartPreset $_XiQuotesTypeGetDelayedChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedChartPreset(array('Symbol'=>$_XiQuotesTypeGetDelayedChartPreset->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedChartPreset->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedChartPreset->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedChartPreset->getEndTime(),'Style'=>$_XiQuotesTypeGetDelayedChartPreset->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedChartPreset->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedChartPreset->getHeight(),'Preset'=>$_XiQuotesTypeGetDelayedChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getSymbol()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getStartTime()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getEndTime()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getStyle()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getWidth()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getHeight()
	 * @uses XiQuotesTypeGetDelayedChartCustom::getDesign()
	 * @param XiQuotesTypeGetDelayedChartCustom GetDelayedChartCustom
	 * @return XiQuotesTypeGetDelayedChartCustomResponse
	 */
	public function GetDelayedChartCustom(XiQuotesTypeGetDelayedChartCustom $_XiQuotesTypeGetDelayedChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedChartCustom(array('Symbol'=>$_XiQuotesTypeGetDelayedChartCustom->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedChartCustom->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedChartCustom->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedChartCustom->getEndTime(),'Style'=>$_XiQuotesTypeGetDelayedChartCustom->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedChartCustom->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedChartCustom->getHeight(),'Design'=>$_XiQuotesTypeGetDelayedChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedChartAsOfDate
	 * Meta informations :
	 * 	- documentation : Get a standard hisotircal IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getSymbol()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getStartTime()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getEndTime()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getAsOfDate()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getStyle()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getWidth()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDate::getHeight()
	 * @param XiQuotesTypeGetDelayedChartAsOfDate GetDelayedChartAsOfDate
	 * @return XiQuotesTypeGetDelayedChartAsOfDateResponse
	 */
	public function GetDelayedChartAsOfDate(XiQuotesTypeGetDelayedChartAsOfDate $_XiQuotesTypeGetDelayedChartAsOfDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedChartAsOfDate(array('Symbol'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getEndTime(),'AsOfDate'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getAsOfDate(),'Style'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedChartAsOfDate->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedBinaryChartAsOfDate
	 * Meta informations :
	 * 	- documentation : Get a standard hisotircal IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getSymbol()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getStartTime()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getEndTime()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getAsOfDate()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getStyle()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getWidth()
	 * @uses XiQuotesTypeGetDelayedBinaryChartAsOfDate::getHeight()
	 * @param XiQuotesTypeGetDelayedBinaryChartAsOfDate GetDelayedBinaryChartAsOfDate
	 * @return XiQuotesTypeGetDelayedBinaryChartAsOfDateResponse
	 */
	public function GetDelayedBinaryChartAsOfDate(XiQuotesTypeGetDelayedBinaryChartAsOfDate $_XiQuotesTypeGetDelayedBinaryChartAsOfDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedBinaryChartAsOfDate(array('Symbol'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getEndTime(),'AsOfDate'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getAsOfDate(),'Style'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedBinaryChartAsOfDate->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedChartAsOfDatePreset
	 * Meta informations :
	 * 	- documentation : Get a standard hisotircal IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getSymbol()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getStartTime()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getEndTime()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getAsOfDate()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getStyle()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getWidth()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getHeight()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDatePreset::getPreset()
	 * @param XiQuotesTypeGetDelayedChartAsOfDatePreset GetDelayedChartAsOfDatePreset
	 * @return XiQuotesTypeGetDelayedChartAsOfDatePresetResponse
	 */
	public function GetDelayedChartAsOfDatePreset(XiQuotesTypeGetDelayedChartAsOfDatePreset $_XiQuotesTypeGetDelayedChartAsOfDatePreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedChartAsOfDatePreset(array('Symbol'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getEndTime(),'AsOfDate'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getAsOfDate(),'Style'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getHeight(),'Preset'=>$_XiQuotesTypeGetDelayedChartAsOfDatePreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedChartAsOfDateCustom
	 * Meta informations :
	 * 	- documentation : Get a custom hisotircal IntraDay price chart for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getSymbol()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getAdditionalSymbols()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getStartTime()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getEndTime()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getAsOfDate()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getStyle()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getWidth()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getHeight()
	 * @uses XiQuotesTypeGetDelayedChartAsOfDateCustom::getDesign()
	 * @param XiQuotesTypeGetDelayedChartAsOfDateCustom GetDelayedChartAsOfDateCustom
	 * @return XiQuotesTypeGetDelayedChartAsOfDateCustomResponse
	 */
	public function GetDelayedChartAsOfDateCustom(XiQuotesTypeGetDelayedChartAsOfDateCustom $_XiQuotesTypeGetDelayedChartAsOfDateCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedChartAsOfDateCustom(array('Symbol'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getSymbol(),'AdditionalSymbols'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getAdditionalSymbols(),'StartTime'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getStartTime(),'EndTime'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getEndTime(),'AsOfDate'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getAsOfDate(),'Style'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getStyle(),'Width'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getWidth(),'Height'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getHeight(),'Design'=>$_XiQuotesTypeGetDelayedChartAsOfDateCustom->getDesign())));
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
	 * 	- documentation : Returns the default settings for the Real Time Chart.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetChartDesign GetChartDesign
	 * @return XiQuotesTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiQuotesTypeGetChartDesign $_XiQuotesTypeGetChartDesign)
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
	 * Method to call GetHistoricalTicks
	 * Meta informations :
	 * 	- documentation : Returns a historical range of ticks for a security.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetHistoricalTicks::getSymbol()
	 * @uses XiQuotesTypeGetHistoricalTicks::getHistoricalPeriod()
	 * @uses XiQuotesTypeGetHistoricalTicks::getStartTime()
	 * @uses XiQuotesTypeGetHistoricalTicks::getEndTime()
	 * @uses XiQuotesTypeGetHistoricalTicks::getTickPrecision()
	 * @uses XiQuotesTypeGetHistoricalTicks::getTickPeriods()
	 * @param XiQuotesTypeGetHistoricalTicks GetHistoricalTicks
	 * @return XiQuotesTypeGetHistoricalTicksResponse
	 */
	public function GetHistoricalTicks(XiQuotesTypeGetHistoricalTicks $_XiQuotesTypeGetHistoricalTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTicks(array('Symbol'=>$_XiQuotesTypeGetHistoricalTicks->getSymbol(),'HistoricalPeriod'=>$_XiQuotesTypeGetHistoricalTicks->getHistoricalPeriod(),'StartTime'=>$_XiQuotesTypeGetHistoricalTicks->getStartTime(),'EndTime'=>$_XiQuotesTypeGetHistoricalTicks->getEndTime(),'TickPrecision'=>$_XiQuotesTypeGetHistoricalTicks->getTickPrecision(),'TickPeriods'=>$_XiQuotesTypeGetHistoricalTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundQuote
	 * Meta informations :
	 * 	- documentation : Returns an extended quote for a US mutual fund.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @uses XiQuotesTypeGetFundQuote::getSymbol()
	 * @param XiQuotesTypeGetFundQuote GetFundQuote
	 * @return XiQuotesTypeGetFundQuoteResponse
	 */
	public function GetFundQuote(XiQuotesTypeGetFundQuote $_XiQuotesTypeGetFundQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundQuote(array('Symbol'=>$_XiQuotesTypeGetFundQuote->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMissingTickRanges
	 * Meta informations :
	 * 	- documentation : Returns a range of missing ticks for the day.
	 * @uses XiQuotesWsdlClass::getSoapClient()
	 * @uses XiQuotesWsdlClass::setResult()
	 * @uses XiQuotesWsdlClass::getResult()
	 * @uses XiQuotesWsdlClass::saveLastError()
	 * @param XiQuotesTypeGetMissingTickRanges GetMissingTickRanges
	 * @return XiQuotesTypeGetMissingTickRangesResponse
	 */
	public function GetMissingTickRanges(XiQuotesTypeGetMissingTickRanges $_XiQuotesTypeGetMissingTickRanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMissingTickRanges(array()));
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
	 * @return XiQuotesTypeGetMissingTickRangesResponse
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