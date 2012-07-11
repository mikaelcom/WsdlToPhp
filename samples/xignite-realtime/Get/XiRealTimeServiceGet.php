<?php
/**
 * Class file for XiRealTimeServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeServiceGet
 * @date 08/07/2012
 */
class XiRealTimeServiceGet extends XiRealTimeWsdlClass
{
	/**
	 * Method to call GetHistoricalTicksAsOfDate
	 * Meta informations :
	 * 	- documentation : Returns a historical range of ticks for a security.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetHistoricalTicksAsOfDate::getExchange()
	 * @uses XiRealTimeTypeGetHistoricalTicksAsOfDate::getSymbol()
	 * @uses XiRealTimeTypeGetHistoricalTicksAsOfDate::getAsOfDate()
	 * @uses XiRealTimeTypeGetHistoricalTicksAsOfDate::getStartTime()
	 * @uses XiRealTimeTypeGetHistoricalTicksAsOfDate::getEndTime()
	 * @uses XiRealTimeTypeGetHistoricalTicksAsOfDate::getTickPrecision()
	 * @uses XiRealTimeTypeGetHistoricalTicksAsOfDate::getTickPeriods()
	 * @param XiRealTimeTypeGetHistoricalTicksAsOfDate GetHistoricalTicksAsOfDate
	 * @return XiRealTimeTypeGetHistoricalTicksAsOfDateResponse
	 */
	public function GetHistoricalTicksAsOfDate(XiRealTimeTypeGetHistoricalTicksAsOfDate $_XiRealTimeTypeGetHistoricalTicksAsOfDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTicksAsOfDate(array('Exchange'=>$_XiRealTimeTypeGetHistoricalTicksAsOfDate->getExchange(),'Symbol'=>$_XiRealTimeTypeGetHistoricalTicksAsOfDate->getSymbol(),'AsOfDate'=>$_XiRealTimeTypeGetHistoricalTicksAsOfDate->getAsOfDate(),'StartTime'=>$_XiRealTimeTypeGetHistoricalTicksAsOfDate->getStartTime(),'EndTime'=>$_XiRealTimeTypeGetHistoricalTicksAsOfDate->getEndTime(),'TickPrecision'=>$_XiRealTimeTypeGetHistoricalTicksAsOfDate->getTickPrecision(),'TickPeriods'=>$_XiRealTimeTypeGetHistoricalTicksAsOfDate->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealChartPreset
	 * Meta informations :
	 * 	- documentation : Draws a real-time intraday chart using a preset chart format.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealChartPreset::getExchange()
	 * @uses XiRealTimeTypeGetRealChartPreset::getSymbol()
	 * @uses XiRealTimeTypeGetRealChartPreset::getAdditionalSymbols()
	 * @uses XiRealTimeTypeGetRealChartPreset::getStartTime()
	 * @uses XiRealTimeTypeGetRealChartPreset::getEndTime()
	 * @uses XiRealTimeTypeGetRealChartPreset::getStyle()
	 * @uses XiRealTimeTypeGetRealChartPreset::getWidth()
	 * @uses XiRealTimeTypeGetRealChartPreset::getHeight()
	 * @uses XiRealTimeTypeGetRealChartPreset::getPreset()
	 * @param XiRealTimeTypeGetRealChartPreset GetRealChartPreset
	 * @return XiRealTimeTypeGetRealChartPresetResponse
	 */
	public function GetRealChartPreset(XiRealTimeTypeGetRealChartPreset $_XiRealTimeTypeGetRealChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealChartPreset(array('Exchange'=>$_XiRealTimeTypeGetRealChartPreset->getExchange(),'Symbol'=>$_XiRealTimeTypeGetRealChartPreset->getSymbol(),'AdditionalSymbols'=>$_XiRealTimeTypeGetRealChartPreset->getAdditionalSymbols(),'StartTime'=>$_XiRealTimeTypeGetRealChartPreset->getStartTime(),'EndTime'=>$_XiRealTimeTypeGetRealChartPreset->getEndTime(),'Style'=>$_XiRealTimeTypeGetRealChartPreset->getStyle(),'Width'=>$_XiRealTimeTypeGetRealChartPreset->getWidth(),'Height'=>$_XiRealTimeTypeGetRealChartPreset->getHeight(),'Preset'=>$_XiRealTimeTypeGetRealChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealChart
	 * Meta informations :
	 * 	- documentation : Get a standard IntraDay price chart for a security.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealChart::getExchange()
	 * @uses XiRealTimeTypeGetRealChart::getSymbol()
	 * @uses XiRealTimeTypeGetRealChart::getAdditionalSymbols()
	 * @uses XiRealTimeTypeGetRealChart::getStartTime()
	 * @uses XiRealTimeTypeGetRealChart::getEndTime()
	 * @uses XiRealTimeTypeGetRealChart::getStyle()
	 * @uses XiRealTimeTypeGetRealChart::getWidth()
	 * @uses XiRealTimeTypeGetRealChart::getHeight()
	 * @param XiRealTimeTypeGetRealChart GetRealChart
	 * @return XiRealTimeTypeGetRealChartResponse
	 */
	public function GetRealChart(XiRealTimeTypeGetRealChart $_XiRealTimeTypeGetRealChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealChart(array('Exchange'=>$_XiRealTimeTypeGetRealChart->getExchange(),'Symbol'=>$_XiRealTimeTypeGetRealChart->getSymbol(),'AdditionalSymbols'=>$_XiRealTimeTypeGetRealChart->getAdditionalSymbols(),'StartTime'=>$_XiRealTimeTypeGetRealChart->getStartTime(),'EndTime'=>$_XiRealTimeTypeGetRealChart->getEndTime(),'Style'=>$_XiRealTimeTypeGetRealChart->getStyle(),'Width'=>$_XiRealTimeTypeGetRealChart->getWidth(),'Height'=>$_XiRealTimeTypeGetRealChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom IntraDay price chart for a security.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealChartCustom::getExchange()
	 * @uses XiRealTimeTypeGetRealChartCustom::getSymbol()
	 * @uses XiRealTimeTypeGetRealChartCustom::getAdditionalSymbols()
	 * @uses XiRealTimeTypeGetRealChartCustom::getStartTime()
	 * @uses XiRealTimeTypeGetRealChartCustom::getEndTime()
	 * @uses XiRealTimeTypeGetRealChartCustom::getStyle()
	 * @uses XiRealTimeTypeGetRealChartCustom::getWidth()
	 * @uses XiRealTimeTypeGetRealChartCustom::getHeight()
	 * @uses XiRealTimeTypeGetRealChartCustom::getDesign()
	 * @param XiRealTimeTypeGetRealChartCustom GetRealChartCustom
	 * @return XiRealTimeTypeGetRealChartCustomResponse
	 */
	public function GetRealChartCustom(XiRealTimeTypeGetRealChartCustom $_XiRealTimeTypeGetRealChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealChartCustom(array('Exchange'=>$_XiRealTimeTypeGetRealChartCustom->getExchange(),'Symbol'=>$_XiRealTimeTypeGetRealChartCustom->getSymbol(),'AdditionalSymbols'=>$_XiRealTimeTypeGetRealChartCustom->getAdditionalSymbols(),'StartTime'=>$_XiRealTimeTypeGetRealChartCustom->getStartTime(),'EndTime'=>$_XiRealTimeTypeGetRealChartCustom->getEndTime(),'Style'=>$_XiRealTimeTypeGetRealChartCustom->getStyle(),'Width'=>$_XiRealTimeTypeGetRealChartCustom->getWidth(),'Height'=>$_XiRealTimeTypeGetRealChartCustom->getHeight(),'Design'=>$_XiRealTimeTypeGetRealChartCustom->getDesign())));
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
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @param XiRealTimeTypeGetChartDesign GetChartDesign
	 * @return XiRealTimeTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiRealTimeTypeGetChartDesign $_XiRealTimeTypeGetChartDesign)
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
	 * Method to call GetRealQuote
	 * Meta informations :
	 * 	- documentation : Returns a real-time quote for a security.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealQuote::getExchange()
	 * @uses XiRealTimeTypeGetRealQuote::getSymbol()
	 * @uses XiRealTimeTypeGetRealQuote::getIncludeBidAsk()
	 * @param XiRealTimeTypeGetRealQuote GetRealQuote
	 * @return XiRealTimeTypeGetRealQuoteResponse
	 */
	public function GetRealQuote(XiRealTimeTypeGetRealQuote $_XiRealTimeTypeGetRealQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealQuote(array('Exchange'=>$_XiRealTimeTypeGetRealQuote->getExchange(),'Symbol'=>$_XiRealTimeTypeGetRealQuote->getSymbol(),'IncludeBidAsk'=>$_XiRealTimeTypeGetRealQuote->getIncludeBidAsk())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealQuoteByIdentifier
	 * Meta informations :
	 * 	- documentation : Returns a real-time quote for a security.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealQuoteByIdentifier::getIdentifier()
	 * @uses XiRealTimeTypeGetRealQuoteByIdentifier::getIdentifierType()
	 * @param XiRealTimeTypeGetRealQuoteByIdentifier GetRealQuoteByIdentifier
	 * @return XiRealTimeTypeGetRealQuoteByIdentifierResponse
	 */
	public function GetRealQuoteByIdentifier(XiRealTimeTypeGetRealQuoteByIdentifier $_XiRealTimeTypeGetRealQuoteByIdentifier)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealQuoteByIdentifier(array('Identifier'=>$_XiRealTimeTypeGetRealQuoteByIdentifier->getIdentifier(),'IdentifierType'=>$_XiRealTimeTypeGetRealQuoteByIdentifier->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedRealQuote
	 * Meta informations :
	 * 	- documentation : Returns an extended real-time quote for a security.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetExtendedRealQuote::getExchange()
	 * @uses XiRealTimeTypeGetExtendedRealQuote::getSymbol()
	 * @param XiRealTimeTypeGetExtendedRealQuote GetExtendedRealQuote
	 * @return XiRealTimeTypeGetExtendedRealQuoteResponse
	 */
	public function GetExtendedRealQuote(XiRealTimeTypeGetExtendedRealQuote $_XiRealTimeTypeGetExtendedRealQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedRealQuote(array('Exchange'=>$_XiRealTimeTypeGetExtendedRealQuote->getExchange(),'Symbol'=>$_XiRealTimeTypeGetExtendedRealQuote->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealQuotes
	 * Meta informations :
	 * 	- documentation : Returns real-time quote for multiple securities.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealQuotes::getExchange()
	 * @uses XiRealTimeTypeGetRealQuotes::getSymbols()
	 * @uses XiRealTimeTypeGetRealQuotes::getIncludeBidAsk()
	 * @param XiRealTimeTypeGetRealQuotes GetRealQuotes
	 * @return XiRealTimeTypeGetRealQuotesResponse
	 */
	public function GetRealQuotes(XiRealTimeTypeGetRealQuotes $_XiRealTimeTypeGetRealQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealQuotes(array('Exchange'=>$_XiRealTimeTypeGetRealQuotes->getExchange(),'Symbols'=>$_XiRealTimeTypeGetRealQuotes->getSymbols(),'IncludeBidAsk'=>$_XiRealTimeTypeGetRealQuotes->getIncludeBidAsk())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedRealQuotes
	 * Meta informations :
	 * 	- documentation : Returns extended real-time quotes for multiple securities.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetExtendedRealQuotes::getExchange()
	 * @uses XiRealTimeTypeGetExtendedRealQuotes::getSymbols()
	 * @param XiRealTimeTypeGetExtendedRealQuotes GetExtendedRealQuotes
	 * @return XiRealTimeTypeGetExtendedRealQuotesResponse
	 */
	public function GetExtendedRealQuotes(XiRealTimeTypeGetExtendedRealQuotes $_XiRealTimeTypeGetExtendedRealQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedRealQuotes(array('Exchange'=>$_XiRealTimeTypeGetExtendedRealQuotes->getExchange(),'Symbols'=>$_XiRealTimeTypeGetExtendedRealQuotes->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealQuotesTicker
	 * Meta informations :
	 * 	- documentation : Returns real-time quote for multiple securities as a ticker tape.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealQuotesTicker::getSymbols()
	 * @param XiRealTimeTypeGetRealQuotesTicker GetRealQuotesTicker
	 * @return XiRealTimeTypeGetRealQuotesTickerResponse
	 */
	public function GetRealQuotesTicker(XiRealTimeTypeGetRealQuotesTicker $_XiRealTimeTypeGetRealQuotesTicker)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealQuotesTicker(array('Symbols'=>$_XiRealTimeTypeGetRealQuotesTicker->getSymbols())));
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
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetTick::getExchange()
	 * @uses XiRealTimeTypeGetTick::getSymbol()
	 * @uses XiRealTimeTypeGetTick::getTime()
	 * @param XiRealTimeTypeGetTick GetTick
	 * @return XiRealTimeTypeGetTickResponse
	 */
	public function GetTick(XiRealTimeTypeGetTick $_XiRealTimeTypeGetTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTick(array('Exchange'=>$_XiRealTimeTypeGetTick->getExchange(),'Symbol'=>$_XiRealTimeTypeGetTick->getSymbol(),'Time'=>$_XiRealTimeTypeGetTick->getTime())));
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
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetTicks::getExchange()
	 * @uses XiRealTimeTypeGetTicks::getSymbol()
	 * @uses XiRealTimeTypeGetTicks::getStartTime()
	 * @uses XiRealTimeTypeGetTicks::getEndTime()
	 * @uses XiRealTimeTypeGetTicks::getTickPrecision()
	 * @uses XiRealTimeTypeGetTicks::getTickPeriods()
	 * @param XiRealTimeTypeGetTicks GetTicks
	 * @return XiRealTimeTypeGetTicksResponse
	 */
	public function GetTicks(XiRealTimeTypeGetTicks $_XiRealTimeTypeGetTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTicks(array('Exchange'=>$_XiRealTimeTypeGetTicks->getExchange(),'Symbol'=>$_XiRealTimeTypeGetTicks->getSymbol(),'StartTime'=>$_XiRealTimeTypeGetTicks->getStartTime(),'EndTime'=>$_XiRealTimeTypeGetTicks->getEndTime(),'TickPrecision'=>$_XiRealTimeTypeGetTicks->getTickPrecision(),'TickPeriods'=>$_XiRealTimeTypeGetTicks->getTickPeriods())));
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
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetTickCollections::getExchange()
	 * @uses XiRealTimeTypeGetTickCollections::getSymbols()
	 * @uses XiRealTimeTypeGetTickCollections::getStartTime()
	 * @uses XiRealTimeTypeGetTickCollections::getEndTime()
	 * @uses XiRealTimeTypeGetTickCollections::getTickPrecision()
	 * @uses XiRealTimeTypeGetTickCollections::getTickPeriods()
	 * @param XiRealTimeTypeGetTickCollections GetTickCollections
	 * @return XiRealTimeTypeGetTickCollectionsResponse
	 */
	public function GetTickCollections(XiRealTimeTypeGetTickCollections $_XiRealTimeTypeGetTickCollections)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTickCollections(array('Exchange'=>$_XiRealTimeTypeGetTickCollections->getExchange(),'Symbols'=>$_XiRealTimeTypeGetTickCollections->getSymbols(),'StartTime'=>$_XiRealTimeTypeGetTickCollections->getStartTime(),'EndTime'=>$_XiRealTimeTypeGetTickCollections->getEndTime(),'TickPrecision'=>$_XiRealTimeTypeGetTickCollections->getTickPrecision(),'TickPeriods'=>$_XiRealTimeTypeGetTickCollections->getTickPeriods())));
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
	 * 	- documentation : Deprecated
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetHistoricalTicks::getExchange()
	 * @uses XiRealTimeTypeGetHistoricalTicks::getSymbol()
	 * @uses XiRealTimeTypeGetHistoricalTicks::getHistoricalPeriod()
	 * @uses XiRealTimeTypeGetHistoricalTicks::getStartTime()
	 * @uses XiRealTimeTypeGetHistoricalTicks::getEndTime()
	 * @uses XiRealTimeTypeGetHistoricalTicks::getTickPrecision()
	 * @uses XiRealTimeTypeGetHistoricalTicks::getTickPeriods()
	 * @param XiRealTimeTypeGetHistoricalTicks GetHistoricalTicks
	 * @return XiRealTimeTypeGetHistoricalTicksResponse
	 */
	public function GetHistoricalTicks(XiRealTimeTypeGetHistoricalTicks $_XiRealTimeTypeGetHistoricalTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalTicks(array('Exchange'=>$_XiRealTimeTypeGetHistoricalTicks->getExchange(),'Symbol'=>$_XiRealTimeTypeGetHistoricalTicks->getSymbol(),'HistoricalPeriod'=>$_XiRealTimeTypeGetHistoricalTicks->getHistoricalPeriod(),'StartTime'=>$_XiRealTimeTypeGetHistoricalTicks->getStartTime(),'EndTime'=>$_XiRealTimeTypeGetHistoricalTicks->getEndTime(),'TickPrecision'=>$_XiRealTimeTypeGetHistoricalTicks->getTickPrecision(),'TickPeriods'=>$_XiRealTimeTypeGetHistoricalTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBook
	 * Meta informations :
	 * 	- documentation : Deprecated
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetBook::getExchange()
	 * @uses XiRealTimeTypeGetBook::getSymbol()
	 * @uses XiRealTimeTypeGetBook::getMaximumOrders()
	 * @param XiRealTimeTypeGetBook GetBook
	 * @return XiRealTimeTypeGetBookResponse
	 */
	public function GetBook(XiRealTimeTypeGetBook $_XiRealTimeTypeGetBook)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBook(array('Exchange'=>$_XiRealTimeTypeGetBook->getExchange(),'Symbol'=>$_XiRealTimeTypeGetBook->getSymbol(),'MaximumOrders'=>$_XiRealTimeTypeGetBook->getMaximumOrders())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBookDetails
	 * Meta informations :
	 * 	- documentation : Deprecated
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetBookDetails::getExchange()
	 * @uses XiRealTimeTypeGetBookDetails::getSymbol()
	 * @uses XiRealTimeTypeGetBookDetails::getMaximumOrders()
	 * @param XiRealTimeTypeGetBookDetails GetBookDetails
	 * @return XiRealTimeTypeGetBookDetailsResponse
	 */
	public function GetBookDetails(XiRealTimeTypeGetBookDetails $_XiRealTimeTypeGetBookDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBookDetails(array('Exchange'=>$_XiRealTimeTypeGetBookDetails->getExchange(),'Symbol'=>$_XiRealTimeTypeGetBookDetails->getSymbol(),'MaximumOrders'=>$_XiRealTimeTypeGetBookDetails->getMaximumOrders())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTopMovers
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top moving securities.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealTopMovers::getExchange()
	 * @uses XiRealTimeTypeGetRealTopMovers::getCount()
	 * @param XiRealTimeTypeGetRealTopMovers GetRealTopMovers
	 * @return XiRealTimeTypeGetRealTopMoversResponse
	 */
	public function GetRealTopMovers(XiRealTimeTypeGetRealTopMovers $_XiRealTimeTypeGetRealTopMovers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTopMovers(array('Exchange'=>$_XiRealTimeTypeGetRealTopMovers->getExchange(),'Count'=>$_XiRealTimeTypeGetRealTopMovers->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTopGainers
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top gaining securities for the day.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealTopGainers::getExchange()
	 * @uses XiRealTimeTypeGetRealTopGainers::getCount()
	 * @param XiRealTimeTypeGetRealTopGainers GetRealTopGainers
	 * @return XiRealTimeTypeGetRealTopGainersResponse
	 */
	public function GetRealTopGainers(XiRealTimeTypeGetRealTopGainers $_XiRealTimeTypeGetRealTopGainers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTopGainers(array('Exchange'=>$_XiRealTimeTypeGetRealTopGainers->getExchange(),'Count'=>$_XiRealTimeTypeGetRealTopGainers->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTopLosers
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top losing securities for the day.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealTopLosers::getExchange()
	 * @uses XiRealTimeTypeGetRealTopLosers::getCount()
	 * @param XiRealTimeTypeGetRealTopLosers GetRealTopLosers
	 * @return XiRealTimeTypeGetRealTopLosersResponse
	 */
	public function GetRealTopLosers(XiRealTimeTypeGetRealTopLosers $_XiRealTimeTypeGetRealTopLosers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTopLosers(array('Exchange'=>$_XiRealTimeTypeGetRealTopLosers->getExchange(),'Count'=>$_XiRealTimeTypeGetRealTopLosers->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTop
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top gaining, loosing, and moving equities from NYSE, NASDAQ and AMEX.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetRealTop::getExchange()
	 * @uses XiRealTimeTypeGetRealTop::getCount()
	 * @param XiRealTimeTypeGetRealTop GetRealTop
	 * @return XiRealTimeTypeGetRealTopResponse
	 */
	public function GetRealTop(XiRealTimeTypeGetRealTop $_XiRealTimeTypeGetRealTop)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTop(array('Exchange'=>$_XiRealTimeTypeGetRealTop->getExchange(),'Count'=>$_XiRealTimeTypeGetRealTop->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeTime
	 * Meta informations :
	 * 	- documentation : Returns the last posted time at the exchange.
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeGetExchangeTime::getExchange()
	 * @param XiRealTimeTypeGetExchangeTime GetExchangeTime
	 * @return XiRealTimeTypeGetExchangeTimeResponse
	 */
	public function GetExchangeTime(XiRealTimeTypeGetExchangeTime $_XiRealTimeTypeGetExchangeTime)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeTime(array('Exchange'=>$_XiRealTimeTypeGetExchangeTime->getExchange())));
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
	 * @return XiRealTimeTypeGetExchangeTimeResponse
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