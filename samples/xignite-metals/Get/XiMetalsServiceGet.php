<?php
/**
 * Class file for XiMetalsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiMetalsServiceGet
 * @date 08/07/2012
 */
class XiMetalsServiceGet extends XiMetalsWsdlClass
{
	/**
	 * Method to call GetLastLondonFixing
	 * Meta informations :
	 * 	- documentation : Returns last London Fixings.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastLondonFixing::getType()
	 * @uses XiMetalsTypeGetLastLondonFixing::getCurrency()
	 * @param XiMetalsTypeGetLastLondonFixing GetLastLondonFixing
	 * @return XiMetalsTypeGetLastLondonFixingResponse
	 */
	public function GetLastLondonFixing(XiMetalsTypeGetLastLondonFixing $_XiMetalsTypeGetLastLondonFixing)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastLondonFixing(array('Type'=>$_XiMetalsTypeGetLastLondonFixing->getType(),'Currency'=>$_XiMetalsTypeGetLastLondonFixing->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastLondonFixings
	 * Meta informations :
	 * 	- documentation : Returns all last London Fixings.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastLondonFixings::getCurrency()
	 * @param XiMetalsTypeGetLastLondonFixings GetLastLondonFixings
	 * @return XiMetalsTypeGetLastLondonFixingsResponse
	 */
	public function GetLastLondonFixings(XiMetalsTypeGetLastLondonFixings $_XiMetalsTypeGetLastLondonFixings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastLondonFixings(array('Currency'=>$_XiMetalsTypeGetLastLondonFixings->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalLondonFixing
	 * Meta informations :
	 * 	- documentation : Returns a historical London Fixings.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalLondonFixing::getType()
	 * @uses XiMetalsTypeGetHistoricalLondonFixing::getPeriodType()
	 * @uses XiMetalsTypeGetHistoricalLondonFixing::getCurrency()
	 * @uses XiMetalsTypeGetHistoricalLondonFixing::getAsOfDate()
	 * @param XiMetalsTypeGetHistoricalLondonFixing GetHistoricalLondonFixing
	 * @return XiMetalsTypeGetHistoricalLondonFixingResponse
	 */
	public function GetHistoricalLondonFixing(XiMetalsTypeGetHistoricalLondonFixing $_XiMetalsTypeGetHistoricalLondonFixing)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalLondonFixing(array('Type'=>$_XiMetalsTypeGetHistoricalLondonFixing->getType(),'PeriodType'=>$_XiMetalsTypeGetHistoricalLondonFixing->getPeriodType(),'Currency'=>$_XiMetalsTypeGetHistoricalLondonFixing->getCurrency(),'AsOfDate'=>$_XiMetalsTypeGetHistoricalLondonFixing->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalLondonFixingRange
	 * Meta informations :
	 * 	- documentation : Returns a historical London Fixing range.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalLondonFixingRange::getType()
	 * @uses XiMetalsTypeGetHistoricalLondonFixingRange::getPeriodType()
	 * @uses XiMetalsTypeGetHistoricalLondonFixingRange::getCurrency()
	 * @uses XiMetalsTypeGetHistoricalLondonFixingRange::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalLondonFixingRange::getEndDate()
	 * @param XiMetalsTypeGetHistoricalLondonFixingRange GetHistoricalLondonFixingRange
	 * @return XiMetalsTypeGetHistoricalLondonFixingRangeResponse
	 */
	public function GetHistoricalLondonFixingRange(XiMetalsTypeGetHistoricalLondonFixingRange $_XiMetalsTypeGetHistoricalLondonFixingRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalLondonFixingRange(array('Type'=>$_XiMetalsTypeGetHistoricalLondonFixingRange->getType(),'PeriodType'=>$_XiMetalsTypeGetHistoricalLondonFixingRange->getPeriodType(),'Currency'=>$_XiMetalsTypeGetHistoricalLondonFixingRange->getCurrency(),'StartDate'=>$_XiMetalsTypeGetHistoricalLondonFixingRange->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalLondonFixingRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSpotMarketSummary
	 * Meta informations :
	 * 	- documentation : Returns market summary for a metal.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetSpotMarketSummary::getType()
	 * @param XiMetalsTypeGetSpotMarketSummary GetSpotMarketSummary
	 * @return XiMetalsTypeGetSpotMarketSummaryResponse
	 */
	public function GetSpotMarketSummary(XiMetalsTypeGetSpotMarketSummary $_XiMetalsTypeGetSpotMarketSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSpotMarketSummary(array('Type'=>$_XiMetalsTypeGetSpotMarketSummary->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastBasePrice
	 * Meta informations :
	 * 	- documentation : Returns base prices for some metals.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastBasePrice::getType()
	 * @param XiMetalsTypeGetLastBasePrice GetLastBasePrice
	 * @return XiMetalsTypeGetLastBasePriceResponse
	 */
	public function GetLastBasePrice(XiMetalsTypeGetLastBasePrice $_XiMetalsTypeGetLastBasePrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastBasePrice(array('Type'=>$_XiMetalsTypeGetLastBasePrice->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastRealTimeMetalQuote
	 * Meta informations :
	 * 	- documentation : Returns the most current real-time quote fo a supported metal.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuote::getType()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuote::getCurrency()
	 * @param XiMetalsTypeGetLastRealTimeMetalQuote GetLastRealTimeMetalQuote
	 * @return XiMetalsTypeGetLastRealTimeMetalQuoteResponse
	 */
	public function GetLastRealTimeMetalQuote(XiMetalsTypeGetLastRealTimeMetalQuote $_XiMetalsTypeGetLastRealTimeMetalQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastRealTimeMetalQuote(array('Type'=>$_XiMetalsTypeGetLastRealTimeMetalQuote->getType(),'Currency'=>$_XiMetalsTypeGetLastRealTimeMetalQuote->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastRealTimeExtendedMetalQuote
	 * Meta informations :
	 * 	- documentation : Returns the most current real-time quote fo a supported metal.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastRealTimeExtendedMetalQuote::getType()
	 * @uses XiMetalsTypeGetLastRealTimeExtendedMetalQuote::getCurrency()
	 * @param XiMetalsTypeGetLastRealTimeExtendedMetalQuote GetLastRealTimeExtendedMetalQuote
	 * @return XiMetalsTypeGetLastRealTimeExtendedMetalQuoteResponse
	 */
	public function GetLastRealTimeExtendedMetalQuote(XiMetalsTypeGetLastRealTimeExtendedMetalQuote $_XiMetalsTypeGetLastRealTimeExtendedMetalQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastRealTimeExtendedMetalQuote(array('Type'=>$_XiMetalsTypeGetLastRealTimeExtendedMetalQuote->getType(),'Currency'=>$_XiMetalsTypeGetLastRealTimeExtendedMetalQuote->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeMetalQuote
	 * Meta informations :
	 * 	- documentation : Returns a real-time quote for a supported metal or coin.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetRealTimeMetalQuote::getType()
	 * @uses XiMetalsTypeGetRealTimeMetalQuote::getCurrency()
	 * @param XiMetalsTypeGetRealTimeMetalQuote GetRealTimeMetalQuote
	 * @return XiMetalsTypeGetRealTimeMetalQuoteResponse
	 */
	public function GetRealTimeMetalQuote(XiMetalsTypeGetRealTimeMetalQuote $_XiMetalsTypeGetRealTimeMetalQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeMetalQuote(array('Type'=>$_XiMetalsTypeGetRealTimeMetalQuote->getType(),'Currency'=>$_XiMetalsTypeGetRealTimeMetalQuote->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeMetalQuotes
	 * Meta informations :
	 * 	- documentation : Returns multiple real-time quotes for supported metals or coins.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetRealTimeMetalQuotes::getTypes()
	 * @uses XiMetalsTypeGetRealTimeMetalQuotes::getCurrency()
	 * @param XiMetalsTypeGetRealTimeMetalQuotes GetRealTimeMetalQuotes
	 * @return XiMetalsTypeGetRealTimeMetalQuotesResponse
	 */
	public function GetRealTimeMetalQuotes(XiMetalsTypeGetRealTimeMetalQuotes $_XiMetalsTypeGetRealTimeMetalQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeMetalQuotes(array('Types'=>$_XiMetalsTypeGetRealTimeMetalQuotes->getTypes(),'Currency'=>$_XiMetalsTypeGetRealTimeMetalQuotes->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastRealTimeMetalQuotes
	 * Meta informations :
	 * 	- documentation : Returns multiple real-time quotes for supported metals or coins.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuotes::getTypes()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuotes::getCurrency()
	 * @param XiMetalsTypeGetLastRealTimeMetalQuotes GetLastRealTimeMetalQuotes
	 * @return XiMetalsTypeGetLastRealTimeMetalQuotesResponse
	 */
	public function GetLastRealTimeMetalQuotes(XiMetalsTypeGetLastRealTimeMetalQuotes $_XiMetalsTypeGetLastRealTimeMetalQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastRealTimeMetalQuotes(array('Types'=>$_XiMetalsTypeGetLastRealTimeMetalQuotes->getTypes(),'Currency'=>$_XiMetalsTypeGetLastRealTimeMetalQuotes->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastRealTimeMetalQuoteGMT
	 * Meta informations :
	 * 	- documentation : Returns a real-time metal quote as of GMT time.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuoteGMT::getType()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuoteGMT::getCurrency()
	 * @param XiMetalsTypeGetLastRealTimeMetalQuoteGMT GetLastRealTimeMetalQuoteGMT
	 * @return XiMetalsTypeGetLastRealTimeMetalQuoteGMTResponse
	 */
	public function GetLastRealTimeMetalQuoteGMT(XiMetalsTypeGetLastRealTimeMetalQuoteGMT $_XiMetalsTypeGetLastRealTimeMetalQuoteGMT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastRealTimeMetalQuoteGMT(array('Type'=>$_XiMetalsTypeGetLastRealTimeMetalQuoteGMT->getType(),'Currency'=>$_XiMetalsTypeGetLastRealTimeMetalQuoteGMT->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastRealTimeMetalQuotesGMT
	 * Meta informations :
	 * 	- documentation : Returns multiple real-time quotes for supported metals or coins.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuotesGMT::getTypes()
	 * @uses XiMetalsTypeGetLastRealTimeMetalQuotesGMT::getCurrency()
	 * @param XiMetalsTypeGetLastRealTimeMetalQuotesGMT GetLastRealTimeMetalQuotesGMT
	 * @return XiMetalsTypeGetLastRealTimeMetalQuotesGMTResponse
	 */
	public function GetLastRealTimeMetalQuotesGMT(XiMetalsTypeGetLastRealTimeMetalQuotesGMT $_XiMetalsTypeGetLastRealTimeMetalQuotesGMT)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastRealTimeMetalQuotesGMT(array('Types'=>$_XiMetalsTypeGetLastRealTimeMetalQuotesGMT->getTypes(),'Currency'=>$_XiMetalsTypeGetLastRealTimeMetalQuotesGMT->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSpotPrice
	 * Meta informations :
	 * 	- documentation : Returns a spot metal rate as of a historical date.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalSpotPrice::getType()
	 * @uses XiMetalsTypeGetHistoricalSpotPrice::getCurrency()
	 * @uses XiMetalsTypeGetHistoricalSpotPrice::getAsOfDate()
	 * @param XiMetalsTypeGetHistoricalSpotPrice GetHistoricalSpotPrice
	 * @return XiMetalsTypeGetHistoricalSpotPriceResponse
	 */
	public function GetHistoricalSpotPrice(XiMetalsTypeGetHistoricalSpotPrice $_XiMetalsTypeGetHistoricalSpotPrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSpotPrice(array('Type'=>$_XiMetalsTypeGetHistoricalSpotPrice->getType(),'Currency'=>$_XiMetalsTypeGetHistoricalSpotPrice->getCurrency(),'AsOfDate'=>$_XiMetalsTypeGetHistoricalSpotPrice->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSpotPrices
	 * Meta informations :
	 * 	- documentation : Returns multiple spot metal rates as of a historical date.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalSpotPrices::getTypes()
	 * @uses XiMetalsTypeGetHistoricalSpotPrices::getCurrency()
	 * @uses XiMetalsTypeGetHistoricalSpotPrices::getAsOfDate()
	 * @param XiMetalsTypeGetHistoricalSpotPrices GetHistoricalSpotPrices
	 * @return XiMetalsTypeGetHistoricalSpotPricesResponse
	 */
	public function GetHistoricalSpotPrices(XiMetalsTypeGetHistoricalSpotPrices $_XiMetalsTypeGetHistoricalSpotPrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSpotPrices(array('Types'=>$_XiMetalsTypeGetHistoricalSpotPrices->getTypes(),'Currency'=>$_XiMetalsTypeGetHistoricalSpotPrices->getCurrency(),'AsOfDate'=>$_XiMetalsTypeGetHistoricalSpotPrices->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSpotPriceRange
	 * Meta informations :
	 * 	- documentation : This operation returns a range of spot metal rates for a currency pair.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRange::getType()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRange::getCurrency()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRange::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRange::getEndDate()
	 * @param XiMetalsTypeGetHistoricalSpotPriceRange GetHistoricalSpotPriceRange
	 * @return XiMetalsTypeGetHistoricalSpotPriceRangeResponse
	 */
	public function GetHistoricalSpotPriceRange(XiMetalsTypeGetHistoricalSpotPriceRange $_XiMetalsTypeGetHistoricalSpotPriceRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSpotPriceRange(array('Type'=>$_XiMetalsTypeGetHistoricalSpotPriceRange->getType(),'Currency'=>$_XiMetalsTypeGetHistoricalSpotPriceRange->getCurrency(),'StartDate'=>$_XiMetalsTypeGetHistoricalSpotPriceRange->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalSpotPriceRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSpotPriceRangeInForeignCurrency
	 * Meta informations :
	 * 	- documentation : This operation returns a range of spot metal rates for a currency pair.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency::getType()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency::getCurrency()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency::getEndDate()
	 * @param XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency GetHistoricalSpotPriceRangeInForeignCurrency
	 * @return XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrencyResponse
	 */
	public function GetHistoricalSpotPriceRangeInForeignCurrency(XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency $_XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSpotPriceRangeInForeignCurrency(array('Type'=>$_XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency->getType(),'Currency'=>$_XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency->getCurrency(),'StartDate'=>$_XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalSpotPriceRangeInForeignCurrency->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a custom spot metal chart for a date range.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getType()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getCurrency()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getStartDate()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getEndDate()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getStyle()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getWidth()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getHeight()
	 * @uses XiMetalsTypeGetMetalSpotChartCustom::getDesign()
	 * @param XiMetalsTypeGetMetalSpotChartCustom GetMetalSpotChartCustom
	 * @return XiMetalsTypeGetMetalSpotChartCustomResponse
	 */
	public function GetMetalSpotChartCustom(XiMetalsTypeGetMetalSpotChartCustom $_XiMetalsTypeGetMetalSpotChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotChartCustom(array('Type'=>$_XiMetalsTypeGetMetalSpotChartCustom->getType(),'Currency'=>$_XiMetalsTypeGetMetalSpotChartCustom->getCurrency(),'StartDate'=>$_XiMetalsTypeGetMetalSpotChartCustom->getStartDate(),'EndDate'=>$_XiMetalsTypeGetMetalSpotChartCustom->getEndDate(),'Style'=>$_XiMetalsTypeGetMetalSpotChartCustom->getStyle(),'Width'=>$_XiMetalsTypeGetMetalSpotChartCustom->getWidth(),'Height'=>$_XiMetalsTypeGetMetalSpotChartCustom->getHeight(),'Design'=>$_XiMetalsTypeGetMetalSpotChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom spot metal chart for a date range.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getType()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getCurrency()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getStartDate()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getEndDate()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getStyle()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getWidth()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getHeight()
	 * @uses XiMetalsTypeGetMetalSpotChartCustomBinary::getDesign()
	 * @param XiMetalsTypeGetMetalSpotChartCustomBinary GetMetalSpotChartCustomBinary
	 * @return XiMetalsTypeGetMetalSpotChartCustomBinaryResponse
	 */
	public function GetMetalSpotChartCustomBinary(XiMetalsTypeGetMetalSpotChartCustomBinary $_XiMetalsTypeGetMetalSpotChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotChartCustomBinary(array('Type'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getType(),'Currency'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getCurrency(),'StartDate'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getStartDate(),'EndDate'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getEndDate(),'Style'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getStyle(),'Width'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getWidth(),'Height'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getHeight(),'Design'=>$_XiMetalsTypeGetMetalSpotChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotChart
	 * Meta informations :
	 * 	- documentation : Draw a historical spot metal chart for a date range.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetMetalSpotChart::getType()
	 * @uses XiMetalsTypeGetMetalSpotChart::getCurrency()
	 * @uses XiMetalsTypeGetMetalSpotChart::getStartDate()
	 * @uses XiMetalsTypeGetMetalSpotChart::getEndDate()
	 * @uses XiMetalsTypeGetMetalSpotChart::getStyle()
	 * @uses XiMetalsTypeGetMetalSpotChart::getWidth()
	 * @uses XiMetalsTypeGetMetalSpotChart::getHeight()
	 * @uses XiMetalsTypeGetMetalSpotChart::getPreset()
	 * @param XiMetalsTypeGetMetalSpotChart GetMetalSpotChart
	 * @return XiMetalsTypeGetMetalSpotChartResponse
	 */
	public function GetMetalSpotChart(XiMetalsTypeGetMetalSpotChart $_XiMetalsTypeGetMetalSpotChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotChart(array('Type'=>$_XiMetalsTypeGetMetalSpotChart->getType(),'Currency'=>$_XiMetalsTypeGetMetalSpotChart->getCurrency(),'StartDate'=>$_XiMetalsTypeGetMetalSpotChart->getStartDate(),'EndDate'=>$_XiMetalsTypeGetMetalSpotChart->getEndDate(),'Style'=>$_XiMetalsTypeGetMetalSpotChart->getStyle(),'Width'=>$_XiMetalsTypeGetMetalSpotChart->getWidth(),'Height'=>$_XiMetalsTypeGetMetalSpotChart->getHeight(),'Preset'=>$_XiMetalsTypeGetMetalSpotChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotChartBinary
	 * Meta informations :
	 * 	- documentation : Draw a historical spot metal chart for a date range in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getType()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getCurrency()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getStartDate()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getEndDate()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getStyle()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getWidth()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getHeight()
	 * @uses XiMetalsTypeGetMetalSpotChartBinary::getPreset()
	 * @param XiMetalsTypeGetMetalSpotChartBinary GetMetalSpotChartBinary
	 * @return XiMetalsTypeGetMetalSpotChartBinaryResponse
	 */
	public function GetMetalSpotChartBinary(XiMetalsTypeGetMetalSpotChartBinary $_XiMetalsTypeGetMetalSpotChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotChartBinary(array('Type'=>$_XiMetalsTypeGetMetalSpotChartBinary->getType(),'Currency'=>$_XiMetalsTypeGetMetalSpotChartBinary->getCurrency(),'StartDate'=>$_XiMetalsTypeGetMetalSpotChartBinary->getStartDate(),'EndDate'=>$_XiMetalsTypeGetMetalSpotChartBinary->getEndDate(),'Style'=>$_XiMetalsTypeGetMetalSpotChartBinary->getStyle(),'Width'=>$_XiMetalsTypeGetMetalSpotChartBinary->getWidth(),'Height'=>$_XiMetalsTypeGetMetalSpotChartBinary->getHeight(),'Preset'=>$_XiMetalsTypeGetMetalSpotChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotIntradayChart
	 * Meta informations :
	 * 	- documentation : Draw a intraday spot metal chart for a time range
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getType()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getCurrency()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getStartTime()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getEndTime()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getTimeZone()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getStyle()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getWidth()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getHeight()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getPeriodType()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getTickPeriods()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChart::getPreset()
	 * @param XiMetalsTypeGetMetalSpotIntradayChart GetMetalSpotIntradayChart
	 * @return XiMetalsTypeGetMetalSpotIntradayChartResponse
	 */
	public function GetMetalSpotIntradayChart(XiMetalsTypeGetMetalSpotIntradayChart $_XiMetalsTypeGetMetalSpotIntradayChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotIntradayChart(array('Type'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getType(),'Currency'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getCurrency(),'StartTime'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getStartTime(),'EndTime'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getEndTime(),'TimeZone'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getTimeZone(),'Style'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getStyle(),'Width'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getWidth(),'Height'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getHeight(),'PeriodType'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getPeriodType(),'TickPeriods'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getTickPeriods(),'Preset'=>$_XiMetalsTypeGetMetalSpotIntradayChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotIntradayChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a intraday spot metal chart for a time range in a binary format
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getType()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getCurrency()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getStartTime()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getEndTime()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getTimeZone()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getStyle()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getWidth()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getHeight()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getPeriodType()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getTickPeriods()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustomBinary::getDesign()
	 * @param XiMetalsTypeGetMetalSpotIntradayChartCustomBinary GetMetalSpotIntradayChartCustomBinary
	 * @return XiMetalsTypeGetMetalSpotIntradayChartCustomBinaryResponse
	 */
	public function GetMetalSpotIntradayChartCustomBinary(XiMetalsTypeGetMetalSpotIntradayChartCustomBinary $_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotIntradayChartCustomBinary(array('Type'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getType(),'Currency'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getCurrency(),'StartTime'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getStartTime(),'EndTime'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getEndTime(),'TimeZone'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getTimeZone(),'Style'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getStyle(),'Width'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getWidth(),'Height'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getHeight(),'PeriodType'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getPeriodType(),'TickPeriods'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getTickPeriods(),'Design'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotIntradayChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a intraday spot metal chart for a time range
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getType()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getCurrency()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getStartTime()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getEndTime()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getTimeZone()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getStyle()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getWidth()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getHeight()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getPeriodType()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getTickPeriods()
	 * @uses XiMetalsTypeGetMetalSpotIntradayChartCustom::getDesign()
	 * @param XiMetalsTypeGetMetalSpotIntradayChartCustom GetMetalSpotIntradayChartCustom
	 * @return XiMetalsTypeGetMetalSpotIntradayChartCustomResponse
	 */
	public function GetMetalSpotIntradayChartCustom(XiMetalsTypeGetMetalSpotIntradayChartCustom $_XiMetalsTypeGetMetalSpotIntradayChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotIntradayChartCustom(array('Type'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getType(),'Currency'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getCurrency(),'StartTime'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getStartTime(),'EndTime'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getEndTime(),'TimeZone'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getTimeZone(),'Style'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getStyle(),'Width'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getWidth(),'Height'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getHeight(),'PeriodType'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getPeriodType(),'TickPeriods'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getTickPeriods(),'Design'=>$_XiMetalsTypeGetMetalSpotIntradayChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMetalSpotChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default design class for the spot metal Chart.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @param XiMetalsTypeGetMetalSpotChartDesign GetMetalSpotChartDesign
	 * @return XiMetalsTypeGetMetalSpotChartDesignResponse
	 */
	public function GetMetalSpotChartDesign(XiMetalsTypeGetMetalSpotChartDesign $_XiMetalsTypeGetMetalSpotChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMetalSpotChartDesign(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLondonFixingChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a historical spot metal chart for a date range in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getType()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getPeriodType()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getCurrency()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getStartDate()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getEndDate()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getStyle()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getWidth()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getHeight()
	 * @uses XiMetalsTypeGetLondonFixingChartCustom::getDesign()
	 * @param XiMetalsTypeGetLondonFixingChartCustom GetLondonFixingChartCustom
	 * @return XiMetalsTypeGetLondonFixingChartCustomResponse
	 */
	public function GetLondonFixingChartCustom(XiMetalsTypeGetLondonFixingChartCustom $_XiMetalsTypeGetLondonFixingChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLondonFixingChartCustom(array('Type'=>$_XiMetalsTypeGetLondonFixingChartCustom->getType(),'PeriodType'=>$_XiMetalsTypeGetLondonFixingChartCustom->getPeriodType(),'Currency'=>$_XiMetalsTypeGetLondonFixingChartCustom->getCurrency(),'StartDate'=>$_XiMetalsTypeGetLondonFixingChartCustom->getStartDate(),'EndDate'=>$_XiMetalsTypeGetLondonFixingChartCustom->getEndDate(),'Style'=>$_XiMetalsTypeGetLondonFixingChartCustom->getStyle(),'Width'=>$_XiMetalsTypeGetLondonFixingChartCustom->getWidth(),'Height'=>$_XiMetalsTypeGetLondonFixingChartCustom->getHeight(),'Design'=>$_XiMetalsTypeGetLondonFixingChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLondonFixingChart
	 * Meta informations :
	 * 	- documentation : Draw a historical spot metal chart for a date range in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLondonFixingChart::getType()
	 * @uses XiMetalsTypeGetLondonFixingChart::getPeriodType()
	 * @uses XiMetalsTypeGetLondonFixingChart::getCurrency()
	 * @uses XiMetalsTypeGetLondonFixingChart::getStartDate()
	 * @uses XiMetalsTypeGetLondonFixingChart::getEndDate()
	 * @uses XiMetalsTypeGetLondonFixingChart::getStyle()
	 * @uses XiMetalsTypeGetLondonFixingChart::getWidth()
	 * @uses XiMetalsTypeGetLondonFixingChart::getHeight()
	 * @param XiMetalsTypeGetLondonFixingChart GetLondonFixingChart
	 * @return XiMetalsTypeGetLondonFixingChartResponse
	 */
	public function GetLondonFixingChart(XiMetalsTypeGetLondonFixingChart $_XiMetalsTypeGetLondonFixingChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLondonFixingChart(array('Type'=>$_XiMetalsTypeGetLondonFixingChart->getType(),'PeriodType'=>$_XiMetalsTypeGetLondonFixingChart->getPeriodType(),'Currency'=>$_XiMetalsTypeGetLondonFixingChart->getCurrency(),'StartDate'=>$_XiMetalsTypeGetLondonFixingChart->getStartDate(),'EndDate'=>$_XiMetalsTypeGetLondonFixingChart->getEndDate(),'Style'=>$_XiMetalsTypeGetLondonFixingChart->getStyle(),'Width'=>$_XiMetalsTypeGetLondonFixingChart->getWidth(),'Height'=>$_XiMetalsTypeGetLondonFixingChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLondonFixingChartPreset
	 * Meta informations :
	 * 	- documentation : Draw a historical spot metal chart for a date range in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getType()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getPeriodType()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getCurrency()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getStartDate()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getEndDate()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getStyle()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getWidth()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getHeight()
	 * @uses XiMetalsTypeGetLondonFixingChartPreset::getPreset()
	 * @param XiMetalsTypeGetLondonFixingChartPreset GetLondonFixingChartPreset
	 * @return XiMetalsTypeGetLondonFixingChartPresetResponse
	 */
	public function GetLondonFixingChartPreset(XiMetalsTypeGetLondonFixingChartPreset $_XiMetalsTypeGetLondonFixingChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLondonFixingChartPreset(array('Type'=>$_XiMetalsTypeGetLondonFixingChartPreset->getType(),'PeriodType'=>$_XiMetalsTypeGetLondonFixingChartPreset->getPeriodType(),'Currency'=>$_XiMetalsTypeGetLondonFixingChartPreset->getCurrency(),'StartDate'=>$_XiMetalsTypeGetLondonFixingChartPreset->getStartDate(),'EndDate'=>$_XiMetalsTypeGetLondonFixingChartPreset->getEndDate(),'Style'=>$_XiMetalsTypeGetLondonFixingChartPreset->getStyle(),'Width'=>$_XiMetalsTypeGetLondonFixingChartPreset->getWidth(),'Height'=>$_XiMetalsTypeGetLondonFixingChartPreset->getHeight(),'Preset'=>$_XiMetalsTypeGetLondonFixingChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedMetalFuture
	 * Meta informations :
	 * 	- documentation : Returns a 30 minute delayed quote for a metal future contract.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetDelayedMetalFuture::getType()
	 * @param XiMetalsTypeGetDelayedMetalFuture GetDelayedMetalFuture
	 * @return XiMetalsTypeGetDelayedMetalFutureResponse
	 */
	public function GetDelayedMetalFuture(XiMetalsTypeGetDelayedMetalFuture $_XiMetalsTypeGetDelayedMetalFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedMetalFuture(array('Type'=>$_XiMetalsTypeGetDelayedMetalFuture->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllDelayedMetalFutures
	 * Meta informations :
	 * 	- documentation : Returns 30 minute delayed quotes for all contracts for a metal commodity.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetAllDelayedMetalFutures::getType()
	 * @param XiMetalsTypeGetAllDelayedMetalFutures GetAllDelayedMetalFutures
	 * @return XiMetalsTypeGetAllDelayedMetalFuturesResponse
	 */
	public function GetAllDelayedMetalFutures(XiMetalsTypeGetAllDelayedMetalFutures $_XiMetalsTypeGetAllDelayedMetalFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllDelayedMetalFutures(array('Type'=>$_XiMetalsTypeGetAllDelayedMetalFutures->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMetalFuture
	 * Meta informations :
	 * 	- documentation : Returns a historical quote for a metal future contract.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalMetalFuture::getType()
	 * @uses XiMetalsTypeGetHistoricalMetalFuture::getAsOfDate()
	 * @param XiMetalsTypeGetHistoricalMetalFuture GetHistoricalMetalFuture
	 * @return XiMetalsTypeGetHistoricalMetalFutureResponse
	 */
	public function GetHistoricalMetalFuture(XiMetalsTypeGetHistoricalMetalFuture $_XiMetalsTypeGetHistoricalMetalFuture)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMetalFuture(array('Type'=>$_XiMetalsTypeGetHistoricalMetalFuture->getType(),'AsOfDate'=>$_XiMetalsTypeGetHistoricalMetalFuture->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMetalFutureRange
	 * Meta informations :
	 * 	- documentation : Returns a historical range of quotes for a metal future contract.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureRange::getType()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureRange::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureRange::getEndDate()
	 * @param XiMetalsTypeGetHistoricalMetalFutureRange GetHistoricalMetalFutureRange
	 * @return XiMetalsTypeGetHistoricalMetalFutureRangeResponse
	 */
	public function GetHistoricalMetalFutureRange(XiMetalsTypeGetHistoricalMetalFutureRange $_XiMetalsTypeGetHistoricalMetalFutureRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMetalFutureRange(array('Type'=>$_XiMetalsTypeGetHistoricalMetalFutureRange->getType(),'StartDate'=>$_XiMetalsTypeGetHistoricalMetalFutureRange->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalMetalFutureRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayMetalFutureChart
	 * Meta informations :
	 * 	- documentation : Get a standard intraday price chart for a metal future contract.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChart::getType()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChart::getStartTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChart::getEndTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChart::getStyle()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChart::getWidth()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChart::getHeight()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChart::getPreset()
	 * @param XiMetalsTypeGetIntradayMetalFutureChart GetIntradayMetalFutureChart
	 * @return XiMetalsTypeGetIntradayMetalFutureChartResponse
	 */
	public function GetIntradayMetalFutureChart(XiMetalsTypeGetIntradayMetalFutureChart $_XiMetalsTypeGetIntradayMetalFutureChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayMetalFutureChart(array('Type'=>$_XiMetalsTypeGetIntradayMetalFutureChart->getType(),'StartTime'=>$_XiMetalsTypeGetIntradayMetalFutureChart->getStartTime(),'EndTime'=>$_XiMetalsTypeGetIntradayMetalFutureChart->getEndTime(),'Style'=>$_XiMetalsTypeGetIntradayMetalFutureChart->getStyle(),'Width'=>$_XiMetalsTypeGetIntradayMetalFutureChart->getWidth(),'Height'=>$_XiMetalsTypeGetIntradayMetalFutureChart->getHeight(),'Preset'=>$_XiMetalsTypeGetIntradayMetalFutureChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayMetalFutureChartBinary
	 * Meta informations :
	 * 	- documentation : Get a standard intraday price chart for a metal future contract in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartBinary::getType()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartBinary::getStartTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartBinary::getEndTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartBinary::getStyle()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartBinary::getWidth()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartBinary::getHeight()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartBinary::getPreset()
	 * @param XiMetalsTypeGetIntradayMetalFutureChartBinary GetIntradayMetalFutureChartBinary
	 * @return XiMetalsTypeGetIntradayMetalFutureChartBinaryResponse
	 */
	public function GetIntradayMetalFutureChartBinary(XiMetalsTypeGetIntradayMetalFutureChartBinary $_XiMetalsTypeGetIntradayMetalFutureChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayMetalFutureChartBinary(array('Type'=>$_XiMetalsTypeGetIntradayMetalFutureChartBinary->getType(),'StartTime'=>$_XiMetalsTypeGetIntradayMetalFutureChartBinary->getStartTime(),'EndTime'=>$_XiMetalsTypeGetIntradayMetalFutureChartBinary->getEndTime(),'Style'=>$_XiMetalsTypeGetIntradayMetalFutureChartBinary->getStyle(),'Width'=>$_XiMetalsTypeGetIntradayMetalFutureChartBinary->getWidth(),'Height'=>$_XiMetalsTypeGetIntradayMetalFutureChartBinary->getHeight(),'Preset'=>$_XiMetalsTypeGetIntradayMetalFutureChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayMetalFutureChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom intraday price chart for a metal future contract.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustom::getType()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustom::getStartTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustom::getEndTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustom::getStyle()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustom::getWidth()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustom::getHeight()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustom::getDesign()
	 * @param XiMetalsTypeGetIntradayMetalFutureChartCustom GetIntradayMetalFutureChartCustom
	 * @return XiMetalsTypeGetIntradayMetalFutureChartCustomResponse
	 */
	public function GetIntradayMetalFutureChartCustom(XiMetalsTypeGetIntradayMetalFutureChartCustom $_XiMetalsTypeGetIntradayMetalFutureChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayMetalFutureChartCustom(array('Type'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustom->getType(),'StartTime'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustom->getStartTime(),'EndTime'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustom->getEndTime(),'Style'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustom->getStyle(),'Width'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustom->getWidth(),'Height'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustom->getHeight(),'Design'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayMetalFutureChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Get a custom intraday price chart for a metal future contract in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustomBinary::getType()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustomBinary::getStartTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustomBinary::getEndTime()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustomBinary::getStyle()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustomBinary::getWidth()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustomBinary::getHeight()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartCustomBinary::getDesign()
	 * @param XiMetalsTypeGetIntradayMetalFutureChartCustomBinary GetIntradayMetalFutureChartCustomBinary
	 * @return XiMetalsTypeGetIntradayMetalFutureChartCustomBinaryResponse
	 */
	public function GetIntradayMetalFutureChartCustomBinary(XiMetalsTypeGetIntradayMetalFutureChartCustomBinary $_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayMetalFutureChartCustomBinary(array('Type'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary->getType(),'StartTime'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary->getStartTime(),'EndTime'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary->getEndTime(),'Style'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary->getStyle(),'Width'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary->getWidth(),'Height'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary->getHeight(),'Design'=>$_XiMetalsTypeGetIntradayMetalFutureChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMetalFutureChart
	 * Meta informations :
	 * 	- documentation : Get a standard historical price chart for a metal future.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChart::getType()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChart::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChart::getEndDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChart::getStyle()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChart::getWidth()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChart::getHeight()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChart::getPreset()
	 * @param XiMetalsTypeGetHistoricalMetalFutureChart GetHistoricalMetalFutureChart
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartResponse
	 */
	public function GetHistoricalMetalFutureChart(XiMetalsTypeGetHistoricalMetalFutureChart $_XiMetalsTypeGetHistoricalMetalFutureChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMetalFutureChart(array('Type'=>$_XiMetalsTypeGetHistoricalMetalFutureChart->getType(),'StartDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChart->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChart->getEndDate(),'Style'=>$_XiMetalsTypeGetHistoricalMetalFutureChart->getStyle(),'Width'=>$_XiMetalsTypeGetHistoricalMetalFutureChart->getWidth(),'Height'=>$_XiMetalsTypeGetHistoricalMetalFutureChart->getHeight(),'Preset'=>$_XiMetalsTypeGetHistoricalMetalFutureChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMetalFutureChartBinary
	 * Meta informations :
	 * 	- documentation : Get a standard historical price chart for a metal future in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartBinary::getType()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartBinary::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartBinary::getEndDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartBinary::getStyle()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartBinary::getWidth()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartBinary::getHeight()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartBinary::getPreset()
	 * @param XiMetalsTypeGetHistoricalMetalFutureChartBinary GetHistoricalMetalFutureChartBinary
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartBinaryResponse
	 */
	public function GetHistoricalMetalFutureChartBinary(XiMetalsTypeGetHistoricalMetalFutureChartBinary $_XiMetalsTypeGetHistoricalMetalFutureChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMetalFutureChartBinary(array('Type'=>$_XiMetalsTypeGetHistoricalMetalFutureChartBinary->getType(),'StartDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChartBinary->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChartBinary->getEndDate(),'Style'=>$_XiMetalsTypeGetHistoricalMetalFutureChartBinary->getStyle(),'Width'=>$_XiMetalsTypeGetHistoricalMetalFutureChartBinary->getWidth(),'Height'=>$_XiMetalsTypeGetHistoricalMetalFutureChartBinary->getHeight(),'Preset'=>$_XiMetalsTypeGetHistoricalMetalFutureChartBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMetalFutureChartCustom
	 * Meta informations :
	 * 	- documentation : Get a custom historical chart for a metal future in binary format.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustom::getType()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustom::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustom::getEndDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustom::getStyle()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustom::getWidth()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustom::getHeight()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustom::getDesign()
	 * @param XiMetalsTypeGetHistoricalMetalFutureChartCustom GetHistoricalMetalFutureChartCustom
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartCustomResponse
	 */
	public function GetHistoricalMetalFutureChartCustom(XiMetalsTypeGetHistoricalMetalFutureChartCustom $_XiMetalsTypeGetHistoricalMetalFutureChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMetalFutureChartCustom(array('Type'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustom->getType(),'StartDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustom->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustom->getEndDate(),'Style'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustom->getStyle(),'Width'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustom->getWidth(),'Height'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustom->getHeight(),'Design'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMetalFutureChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical chart for a metalfuture.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary::getType()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary::getStartDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary::getEndDate()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary::getStyle()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary::getWidth()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary::getHeight()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary::getDesign()
	 * @param XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary GetHistoricalMetalFutureChartCustomBinary
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartCustomBinaryResponse
	 */
	public function GetHistoricalMetalFutureChartCustomBinary(XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary $_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMetalFutureChartCustomBinary(array('Type'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary->getType(),'StartDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary->getStartDate(),'EndDate'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary->getEndDate(),'Style'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary->getStyle(),'Width'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary->getWidth(),'Height'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary->getHeight(),'Design'=>$_XiMetalsTypeGetHistoricalMetalFutureChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayMetalFutureChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default settings for the intraday future chart.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetIntradayMetalFutureChartDesign::getPreset()
	 * @param XiMetalsTypeGetIntradayMetalFutureChartDesign GetIntradayMetalFutureChartDesign
	 * @return XiMetalsTypeGetIntradayMetalFutureChartDesignResponse
	 */
	public function GetIntradayMetalFutureChartDesign(XiMetalsTypeGetIntradayMetalFutureChartDesign $_XiMetalsTypeGetIntradayMetalFutureChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayMetalFutureChartDesign(array('Preset'=>$_XiMetalsTypeGetIntradayMetalFutureChartDesign->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMetalFutureChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default settings for the historical future chart.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetHistoricalMetalFutureChartDesign::getPreset()
	 * @param XiMetalsTypeGetHistoricalMetalFutureChartDesign GetHistoricalMetalFutureChartDesign
	 * @return XiMetalsTypeGetHistoricalMetalFutureChartDesignResponse
	 */
	public function GetHistoricalMetalFutureChartDesign(XiMetalsTypeGetHistoricalMetalFutureChartDesign $_XiMetalsTypeGetHistoricalMetalFutureChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMetalFutureChartDesign(array('Preset'=>$_XiMetalsTypeGetHistoricalMetalFutureChartDesign->getPreset())));
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
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetTick::getType()
	 * @uses XiMetalsTypeGetTick::getCurrency()
	 * @uses XiMetalsTypeGetTick::getTime()
	 * @param XiMetalsTypeGetTick GetTick
	 * @return XiMetalsTypeGetTickResponse
	 */
	public function GetTick(XiMetalsTypeGetTick $_XiMetalsTypeGetTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTick(array('Type'=>$_XiMetalsTypeGetTick->getType(),'Currency'=>$_XiMetalsTypeGetTick->getCurrency(),'Time'=>$_XiMetalsTypeGetTick->getTime())));
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
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetTicks::getType()
	 * @uses XiMetalsTypeGetTicks::getCurrency()
	 * @uses XiMetalsTypeGetTicks::getStartTime()
	 * @uses XiMetalsTypeGetTicks::getEndTime()
	 * @uses XiMetalsTypeGetTicks::getTickPrecision()
	 * @uses XiMetalsTypeGetTicks::getTickPeriods()
	 * @param XiMetalsTypeGetTicks GetTicks
	 * @return XiMetalsTypeGetTicksResponse
	 */
	public function GetTicks(XiMetalsTypeGetTicks $_XiMetalsTypeGetTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTicks(array('Type'=>$_XiMetalsTypeGetTicks->getType(),'Currency'=>$_XiMetalsTypeGetTicks->getCurrency(),'StartTime'=>$_XiMetalsTypeGetTicks->getStartTime(),'EndTime'=>$_XiMetalsTypeGetTicks->getEndTime(),'TickPrecision'=>$_XiMetalsTypeGetTicks->getTickPrecision(),'TickPeriods'=>$_XiMetalsTypeGetTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopIndustryHeadlines
	 * Meta informations :
	 * 	- documentation : Returns up to 20 industry headlines for the Precious Metals industry.
	 * @uses XiMetalsWsdlClass::getSoapClient()
	 * @uses XiMetalsWsdlClass::setResult()
	 * @uses XiMetalsWsdlClass::getResult()
	 * @uses XiMetalsWsdlClass::saveLastError()
	 * @uses XiMetalsTypeGetTopIndustryHeadlines::getCount()
	 * @param XiMetalsTypeGetTopIndustryHeadlines GetTopIndustryHeadlines
	 * @return XiMetalsTypeGetTopIndustryHeadlinesResponse
	 */
	public function GetTopIndustryHeadlines(XiMetalsTypeGetTopIndustryHeadlines $_XiMetalsTypeGetTopIndustryHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopIndustryHeadlines(array('Count'=>$_XiMetalsTypeGetTopIndustryHeadlines->getCount())));
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
	 * @return XiMetalsTypeGetTopIndustryHeadlinesResponse
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