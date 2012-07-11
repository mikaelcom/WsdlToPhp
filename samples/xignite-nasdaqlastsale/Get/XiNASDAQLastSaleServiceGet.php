<?php
/**
 * Class file for XiNASDAQLastSaleServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleServiceGet
 * @date 08/07/2012
 */
class XiNASDAQLastSaleServiceGet extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * Method to call GetLastSale
	 * Meta informations :
	 * 	- documentation : Returns real time stock quote for a given stock ticker
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSale::getSymbol()
	 * @param XiNASDAQLastSaleTypeGetLastSale GetLastSale
	 * @return XiNASDAQLastSaleTypeGetLastSaleResponse
	 */
	public function GetLastSale(XiNASDAQLastSaleTypeGetLastSale $_XiNASDAQLastSaleTypeGetLastSale)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSale(array('Symbol'=>$_XiNASDAQLastSaleTypeGetLastSale->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSales
	 * Meta informations :
	 * 	- documentation : Returns a collection of real time stock quotes for a comma-separated list of stock quotes.
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSales::getSymbols()
	 * @param XiNASDAQLastSaleTypeGetLastSales GetLastSales
	 * @return XiNASDAQLastSaleTypeGetLastSalesResponse
	 */
	public function GetLastSales(XiNASDAQLastSaleTypeGetLastSales $_XiNASDAQLastSaleTypeGetLastSales)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSales(array('Symbols'=>$_XiNASDAQLastSaleTypeGetLastSales->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSaleByIdentifier
	 * Meta informations :
	 * 	- documentation : Returns a real-time quote for a security based on the last trade execution.
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleByIdentifier::getIdentifier()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleByIdentifier::getIdentifierType()
	 * @param XiNASDAQLastSaleTypeGetLastSaleByIdentifier GetLastSaleByIdentifier
	 * @return XiNASDAQLastSaleTypeGetLastSaleByIdentifierResponse
	 */
	public function GetLastSaleByIdentifier(XiNASDAQLastSaleTypeGetLastSaleByIdentifier $_XiNASDAQLastSaleTypeGetLastSaleByIdentifier)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleByIdentifier(array('Identifier'=>$_XiNASDAQLastSaleTypeGetLastSaleByIdentifier->getIdentifier(),'IdentifierType'=>$_XiNASDAQLastSaleTypeGetLastSaleByIdentifier->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSaleChart
	 * Meta informations :
	 * 	- documentation : Returns a standard real-time chart for a security based on the last trade execution.
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChart::getSymbol()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChart::getAdditionalSymbols()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChart::getStartTime()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChart::getEndTime()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChart::getStyle()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChart::getWidth()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChart::getHeight()
	 * @param XiNASDAQLastSaleTypeGetLastSaleChart GetLastSaleChart
	 * @return XiNASDAQLastSaleTypeGetLastSaleChartResponse
	 */
	public function GetLastSaleChart(XiNASDAQLastSaleTypeGetLastSaleChart $_XiNASDAQLastSaleTypeGetLastSaleChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleChart(array('Symbol'=>$_XiNASDAQLastSaleTypeGetLastSaleChart->getSymbol(),'AdditionalSymbols'=>$_XiNASDAQLastSaleTypeGetLastSaleChart->getAdditionalSymbols(),'StartTime'=>$_XiNASDAQLastSaleTypeGetLastSaleChart->getStartTime(),'EndTime'=>$_XiNASDAQLastSaleTypeGetLastSaleChart->getEndTime(),'Style'=>$_XiNASDAQLastSaleTypeGetLastSaleChart->getStyle(),'Width'=>$_XiNASDAQLastSaleTypeGetLastSaleChart->getWidth(),'Height'=>$_XiNASDAQLastSaleTypeGetLastSaleChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSaleChartPreset
	 * Meta informations :
	 * 	- documentation : Returns a real-time intraday chart using a preset chart format for a security based on the last trade execution.
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getSymbol()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getAdditionalSymbols()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getStartTime()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getEndTime()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getStyle()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getWidth()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getHeight()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartPreset::getPreset()
	 * @param XiNASDAQLastSaleTypeGetLastSaleChartPreset GetLastSaleChartPreset
	 * @return XiNASDAQLastSaleTypeGetLastSaleChartPresetResponse
	 */
	public function GetLastSaleChartPreset(XiNASDAQLastSaleTypeGetLastSaleChartPreset $_XiNASDAQLastSaleTypeGetLastSaleChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleChartPreset(array('Symbol'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getSymbol(),'AdditionalSymbols'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getAdditionalSymbols(),'StartTime'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getStartTime(),'EndTime'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getEndTime(),'Style'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getStyle(),'Width'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getWidth(),'Height'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getHeight(),'Preset'=>$_XiNASDAQLastSaleTypeGetLastSaleChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSaleChartCustom
	 * Meta informations :
	 * 	- documentation : Returns a customized real-time chart for a security based on the last trade execution.
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getSymbol()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getAdditionalSymbols()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getStartTime()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getEndTime()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getStyle()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getWidth()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getHeight()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleChartCustom::getDesign()
	 * @param XiNASDAQLastSaleTypeGetLastSaleChartCustom GetLastSaleChartCustom
	 * @return XiNASDAQLastSaleTypeGetLastSaleChartCustomResponse
	 */
	public function GetLastSaleChartCustom(XiNASDAQLastSaleTypeGetLastSaleChartCustom $_XiNASDAQLastSaleTypeGetLastSaleChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleChartCustom(array('Symbol'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getSymbol(),'AdditionalSymbols'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getAdditionalSymbols(),'StartTime'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getStartTime(),'EndTime'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getEndTime(),'Style'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getStyle(),'Width'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getWidth(),'Height'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getHeight(),'Design'=>$_XiNASDAQLastSaleTypeGetLastSaleChartCustom->getDesign())));
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
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @param XiNASDAQLastSaleTypeGetChartDesign GetChartDesign
	 * @return XiNASDAQLastSaleTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiNASDAQLastSaleTypeGetChartDesign $_XiNASDAQLastSaleTypeGetChartDesign)
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
	 * Method to call GetLastSaleWithFallback
	 * Meta informations :
	 * 	- documentation : Returns real time stock quote for a given stock ticker
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleWithFallback::getSymbol()
	 * @param XiNASDAQLastSaleTypeGetLastSaleWithFallback GetLastSaleWithFallback
	 * @return XiNASDAQLastSaleTypeGetLastSaleWithFallbackResponse
	 */
	public function GetLastSaleWithFallback(XiNASDAQLastSaleTypeGetLastSaleWithFallback $_XiNASDAQLastSaleTypeGetLastSaleWithFallback)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleWithFallback(array('Symbol'=>$_XiNASDAQLastSaleTypeGetLastSaleWithFallback->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSaleByIdentifierWithFallback
	 * Meta informations :
	 * 	- documentation : Returns a real-time quote for a security based on the last trade execution.
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallback::getIdentifier()
	 * @uses XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallback::getIdentifierType()
	 * @param XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallback GetLastSaleByIdentifierWithFallback
	 * @return XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallbackResponse
	 */
	public function GetLastSaleByIdentifierWithFallback(XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallback $_XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallback)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSaleByIdentifierWithFallback(array('Identifier'=>$_XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallback->getIdentifier(),'IdentifierType'=>$_XiNASDAQLastSaleTypeGetLastSaleByIdentifierWithFallback->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSalesWithFallback
	 * Meta informations :
	 * 	- documentation : Returns a collection of real time stock quotes for a comma-separated list of stock quotes.
	 * @uses XiNASDAQLastSaleWsdlClass::getSoapClient()
	 * @uses XiNASDAQLastSaleWsdlClass::setResult()
	 * @uses XiNASDAQLastSaleWsdlClass::getResult()
	 * @uses XiNASDAQLastSaleWsdlClass::saveLastError()
	 * @uses XiNASDAQLastSaleTypeGetLastSalesWithFallback::getSymbols()
	 * @param XiNASDAQLastSaleTypeGetLastSalesWithFallback GetLastSalesWithFallback
	 * @return XiNASDAQLastSaleTypeGetLastSalesWithFallbackResponse
	 */
	public function GetLastSalesWithFallback(XiNASDAQLastSaleTypeGetLastSalesWithFallback $_XiNASDAQLastSaleTypeGetLastSalesWithFallback)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSalesWithFallback(array('Symbols'=>$_XiNASDAQLastSaleTypeGetLastSalesWithFallback->getSymbols())));
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
	 * @return XiNASDAQLastSaleTypeGetLastSalesWithFallbackResponse
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