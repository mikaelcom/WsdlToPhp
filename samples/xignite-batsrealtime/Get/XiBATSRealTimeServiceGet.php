<?php
/**
 * Class file for XiBATSRealTimeServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeServiceGet
 * @date 08/07/2012
 */
class XiBATSRealTimeServiceGet extends XiBATSRealTimeWsdlClass
{
	/**
	 * Method to call GetRealQuote
	 * Meta informations :
	 * 	- documentation : Returns real time stock quote for a given stock ticker
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeGetRealQuote::getSymbol()
	 * @param XiBATSRealTimeTypeGetRealQuote GetRealQuote
	 * @return XiBATSRealTimeTypeGetRealQuoteResponse
	 */
	public function GetRealQuote(XiBATSRealTimeTypeGetRealQuote $_XiBATSRealTimeTypeGetRealQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealQuote(array('Symbol'=>$_XiBATSRealTimeTypeGetRealQuote->getSymbol())));
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
	 * 	- documentation : Returns a collection of real time stock quotes for a comma-separated list of stock quotes.
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeGetRealQuotes::getSymbols()
	 * @param XiBATSRealTimeTypeGetRealQuotes GetRealQuotes
	 * @return XiBATSRealTimeTypeGetRealQuotesResponse
	 */
	public function GetRealQuotes(XiBATSRealTimeTypeGetRealQuotes $_XiBATSRealTimeTypeGetRealQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealQuotes(array('Symbols'=>$_XiBATSRealTimeTypeGetRealQuotes->getSymbols())));
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
	 * 	- documentation : Returns a single tick for a specific time.
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeGetTick::getSymbol()
	 * @uses XiBATSRealTimeTypeGetTick::getTime()
	 * @param XiBATSRealTimeTypeGetTick GetTick
	 * @return XiBATSRealTimeTypeGetTickResponse
	 */
	public function GetTick(XiBATSRealTimeTypeGetTick $_XiBATSRealTimeTypeGetTick)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTick(array('Symbol'=>$_XiBATSRealTimeTypeGetTick->getSymbol(),'Time'=>$_XiBATSRealTimeTypeGetTick->getTime())));
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
	 * 	- documentation : Returns a set of tick-by-tick quotes for a stock and a time range during the trading day.
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeGetTicks::getSymbol()
	 * @uses XiBATSRealTimeTypeGetTicks::getStartTime()
	 * @uses XiBATSRealTimeTypeGetTicks::getEndTime()
	 * @uses XiBATSRealTimeTypeGetTicks::getTickPrecision()
	 * @uses XiBATSRealTimeTypeGetTicks::getTickPeriods()
	 * @param XiBATSRealTimeTypeGetTicks GetTicks
	 * @return XiBATSRealTimeTypeGetTicksResponse
	 */
	public function GetTicks(XiBATSRealTimeTypeGetTicks $_XiBATSRealTimeTypeGetTicks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTicks(array('Symbol'=>$_XiBATSRealTimeTypeGetTicks->getSymbol(),'StartTime'=>$_XiBATSRealTimeTypeGetTicks->getStartTime(),'EndTime'=>$_XiBATSRealTimeTypeGetTicks->getEndTime(),'TickPrecision'=>$_XiBATSRealTimeTypeGetTicks->getTickPrecision(),'TickPeriods'=>$_XiBATSRealTimeTypeGetTicks->getTickPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChart
	 * Meta informations :
	 * 	- documentation : Returns a standard real-time chart for a security based on the trade execution.
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeGetChart::getSymbol()
	 * @uses XiBATSRealTimeTypeGetChart::getAdditionalSymbols()
	 * @uses XiBATSRealTimeTypeGetChart::getStartTime()
	 * @uses XiBATSRealTimeTypeGetChart::getEndTime()
	 * @uses XiBATSRealTimeTypeGetChart::getStyle()
	 * @uses XiBATSRealTimeTypeGetChart::getWidth()
	 * @uses XiBATSRealTimeTypeGetChart::getHeight()
	 * @param XiBATSRealTimeTypeGetChart GetChart
	 * @return XiBATSRealTimeTypeGetChartResponse
	 */
	public function GetChart(XiBATSRealTimeTypeGetChart $_XiBATSRealTimeTypeGetChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChart(array('Symbol'=>$_XiBATSRealTimeTypeGetChart->getSymbol(),'AdditionalSymbols'=>$_XiBATSRealTimeTypeGetChart->getAdditionalSymbols(),'StartTime'=>$_XiBATSRealTimeTypeGetChart->getStartTime(),'EndTime'=>$_XiBATSRealTimeTypeGetChart->getEndTime(),'Style'=>$_XiBATSRealTimeTypeGetChart->getStyle(),'Width'=>$_XiBATSRealTimeTypeGetChart->getWidth(),'Height'=>$_XiBATSRealTimeTypeGetChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartPreset
	 * Meta informations :
	 * 	- documentation : Returns a real-time intraday chart using a preset chart format for a security based on the last trade execution.
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getSymbol()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getAdditionalSymbols()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getStartTime()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getEndTime()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getStyle()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getWidth()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getHeight()
	 * @uses XiBATSRealTimeTypeGetChartPreset::getPreset()
	 * @param XiBATSRealTimeTypeGetChartPreset GetChartPreset
	 * @return XiBATSRealTimeTypeGetChartPresetResponse
	 */
	public function GetChartPreset(XiBATSRealTimeTypeGetChartPreset $_XiBATSRealTimeTypeGetChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartPreset(array('Symbol'=>$_XiBATSRealTimeTypeGetChartPreset->getSymbol(),'AdditionalSymbols'=>$_XiBATSRealTimeTypeGetChartPreset->getAdditionalSymbols(),'StartTime'=>$_XiBATSRealTimeTypeGetChartPreset->getStartTime(),'EndTime'=>$_XiBATSRealTimeTypeGetChartPreset->getEndTime(),'Style'=>$_XiBATSRealTimeTypeGetChartPreset->getStyle(),'Width'=>$_XiBATSRealTimeTypeGetChartPreset->getWidth(),'Height'=>$_XiBATSRealTimeTypeGetChartPreset->getHeight(),'Preset'=>$_XiBATSRealTimeTypeGetChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartCustom
	 * Meta informations :
	 * 	- documentation : Returns a customized real-time chart for a security based on the last trade execution.
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getSymbol()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getAdditionalSymbols()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getStartTime()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getEndTime()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getStyle()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getWidth()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getHeight()
	 * @uses XiBATSRealTimeTypeGetChartCustom::getDesign()
	 * @param XiBATSRealTimeTypeGetChartCustom GetChartCustom
	 * @return XiBATSRealTimeTypeGetChartCustomResponse
	 */
	public function GetChartCustom(XiBATSRealTimeTypeGetChartCustom $_XiBATSRealTimeTypeGetChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartCustom(array('Symbol'=>$_XiBATSRealTimeTypeGetChartCustom->getSymbol(),'AdditionalSymbols'=>$_XiBATSRealTimeTypeGetChartCustom->getAdditionalSymbols(),'StartTime'=>$_XiBATSRealTimeTypeGetChartCustom->getStartTime(),'EndTime'=>$_XiBATSRealTimeTypeGetChartCustom->getEndTime(),'Style'=>$_XiBATSRealTimeTypeGetChartCustom->getStyle(),'Width'=>$_XiBATSRealTimeTypeGetChartCustom->getWidth(),'Height'=>$_XiBATSRealTimeTypeGetChartCustom->getHeight(),'Design'=>$_XiBATSRealTimeTypeGetChartCustom->getDesign())));
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
	 * 	- documentation : Returns the default Design specification for the standard chart.
	 * @uses XiBATSRealTimeWsdlClass::getSoapClient()
	 * @uses XiBATSRealTimeWsdlClass::setResult()
	 * @uses XiBATSRealTimeWsdlClass::getResult()
	 * @uses XiBATSRealTimeWsdlClass::saveLastError()
	 * @param XiBATSRealTimeTypeGetChartDesign GetChartDesign
	 * @return XiBATSRealTimeTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiBATSRealTimeTypeGetChartDesign $_XiBATSRealTimeTypeGetChartDesign)
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
	 * Method returning the result content
	 *
	 * @return XiBATSRealTimeTypeGetChartDesignResponse
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