<?php
/**
 * Class file for XiHistoricalServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalServiceGet
 * @date 08/07/2012
 */
class XiHistoricalServiceGet extends XiHistoricalWsdlClass
{
	/**
	 * Method to call GetHistoricalQuoteAdjusted
	 * Meta informations :
	 * 	- documentation : Returns a quote as of a historical date. This includes split and dividends adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuoteAdjusted::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuoteAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuoteAdjusted::getAsOfDate()
	 * @uses XiHistoricalTypeGetHistoricalQuoteAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetHistoricalQuoteAdjusted GetHistoricalQuoteAdjusted
	 * @return XiHistoricalTypeGetHistoricalQuoteAdjustedResponse
	 */
	public function GetHistoricalQuoteAdjusted(XiHistoricalTypeGetHistoricalQuoteAdjusted $_XiHistoricalTypeGetHistoricalQuoteAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuoteAdjusted(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuoteAdjusted->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuoteAdjusted->getIdentifierType(),'AsOfDate'=>$_XiHistoricalTypeGetHistoricalQuoteAdjusted->getAsOfDate(),'AdjustmentMethod'=>$_XiHistoricalTypeGetHistoricalQuoteAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuotesAdjusted
	 * Meta informations :
	 * 	- documentation : Returns a quote as of a historical date. This includes split and dividends adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAdjusted::getIdentifiers()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAdjusted::getAsOfDate()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetHistoricalQuotesAdjusted GetHistoricalQuotesAdjusted
	 * @return XiHistoricalTypeGetHistoricalQuotesAdjustedResponse
	 */
	public function GetHistoricalQuotesAdjusted(XiHistoricalTypeGetHistoricalQuotesAdjusted $_XiHistoricalTypeGetHistoricalQuotesAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuotesAdjusted(array('Identifiers'=>$_XiHistoricalTypeGetHistoricalQuotesAdjusted->getIdentifiers(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuotesAdjusted->getIdentifierType(),'AsOfDate'=>$_XiHistoricalTypeGetHistoricalQuotesAdjusted->getAsOfDate(),'AdjustmentMethod'=>$_XiHistoricalTypeGetHistoricalQuotesAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMonthlyQuotesRangeAdjusted
	 * Meta informations :
	 * 	- documentation : This operation returns end of month quotes for a US equity. This includes split and dividends adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted::getEndDate()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted GetHistoricalMonthlyQuotesRangeAdjusted
	 * @return XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjustedResponse
	 */
	public function GetHistoricalMonthlyQuotesRangeAdjusted(XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted $_XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMonthlyQuotesRangeAdjusted(array('Identifier'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted->getEndDate(),'AdjustmentMethod'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRangeAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuotesAsOfAdjusted
	 * Meta informations :
	 * 	- documentation : This operation returns a range of quotes for a security. This includes split and dividends adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted::getEndDate()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted::getPeriodType()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted::getPeriods()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted GetHistoricalQuotesAsOfAdjusted
	 * @return XiHistoricalTypeGetHistoricalQuotesAsOfAdjustedResponse
	 */
	public function GetHistoricalQuotesAsOfAdjusted(XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted $_XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuotesAsOfAdjusted(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted->getIdentifierType(),'EndDate'=>$_XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted->getEndDate(),'PeriodType'=>$_XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted->getPeriodType(),'Periods'=>$_XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted->getPeriods(),'AdjustmentMethod'=>$_XiHistoricalTypeGetHistoricalQuotesAsOfAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuotesRangeAdjusted
	 * Meta informations :
	 * 	- documentation : This operation returns a complete range of stock quotes for a US equity. This includes and dividends adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRangeAdjusted::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRangeAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRangeAdjusted::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRangeAdjusted::getEndDate()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRangeAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetHistoricalQuotesRangeAdjusted GetHistoricalQuotesRangeAdjusted
	 * @return XiHistoricalTypeGetHistoricalQuotesRangeAdjustedResponse
	 */
	public function GetHistoricalQuotesRangeAdjusted(XiHistoricalTypeGetHistoricalQuotesRangeAdjusted $_XiHistoricalTypeGetHistoricalQuotesRangeAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuotesRangeAdjusted(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuotesRangeAdjusted->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuotesRangeAdjusted->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalQuotesRangeAdjusted->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalQuotesRangeAdjusted->getEndDate(),'AdjustmentMethod'=>$_XiHistoricalTypeGetHistoricalQuotesRangeAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalWeeklyQuotesRangeAdjusted
	 * Meta informations :
	 * 	- documentation : This operation returns end of week quotes for a US equity. This includes split and dividends adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted::getEndDate()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted GetHistoricalWeeklyQuotesRangeAdjusted
	 * @return XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjustedResponse
	 */
	public function GetHistoricalWeeklyQuotesRangeAdjusted(XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted $_XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalWeeklyQuotesRangeAdjusted(array('Identifier'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted->getEndDate(),'AdjustmentMethod'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRangeAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuarterlyQuotesRangeAdjusted
	 * Meta informations :
	 * 	- documentation : This operation returns end of quarter quotes for a US equity. This includes split and dividends adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted::getEndDate()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted GetHistoricalQuarterlyQuotesRangeAdjusted
	 * @return XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjustedResponse
	 */
	public function GetHistoricalQuarterlyQuotesRangeAdjusted(XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted $_XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuarterlyQuotesRangeAdjusted(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted->getEndDate(),'AdjustmentMethod'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingPrice
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a security.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetLastClosingPrice::getIdentifier()
	 * @uses XiHistoricalTypeGetLastClosingPrice::getIdentifierType()
	 * @param XiHistoricalTypeGetLastClosingPrice GetLastClosingPrice
	 * @return XiHistoricalTypeGetLastClosingPriceResponse
	 */
	public function GetLastClosingPrice(XiHistoricalTypeGetLastClosingPrice $_XiHistoricalTypeGetLastClosingPrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingPrice(array('Identifier'=>$_XiHistoricalTypeGetLastClosingPrice->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetLastClosingPrice->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingPriceAdjusted
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a security. This include the splits and dividends adjusted price
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetLastClosingPriceAdjusted::getIdentifier()
	 * @uses XiHistoricalTypeGetLastClosingPriceAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetLastClosingPriceAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetLastClosingPriceAdjusted GetLastClosingPriceAdjusted
	 * @return XiHistoricalTypeGetLastClosingPriceAdjustedResponse
	 */
	public function GetLastClosingPriceAdjusted(XiHistoricalTypeGetLastClosingPriceAdjusted $_XiHistoricalTypeGetLastClosingPriceAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingPriceAdjusted(array('Identifier'=>$_XiHistoricalTypeGetLastClosingPriceAdjusted->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetLastClosingPriceAdjusted->getIdentifierType(),'AdjustmentMethod'=>$_XiHistoricalTypeGetLastClosingPriceAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingPrices
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of securities.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetLastClosingPrices::getIdentifiers()
	 * @uses XiHistoricalTypeGetLastClosingPrices::getIdentifierType()
	 * @param XiHistoricalTypeGetLastClosingPrices GetLastClosingPrices
	 * @return XiHistoricalTypeGetLastClosingPricesResponse
	 */
	public function GetLastClosingPrices(XiHistoricalTypeGetLastClosingPrices $_XiHistoricalTypeGetLastClosingPrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingPrices(array('Identifiers'=>$_XiHistoricalTypeGetLastClosingPrices->getIdentifiers(),'IdentifierType'=>$_XiHistoricalTypeGetLastClosingPrices->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingPricesAdjusted
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of securities.This include the splits and dividends adjusted price
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetLastClosingPricesAdjusted::getIdentifiers()
	 * @uses XiHistoricalTypeGetLastClosingPricesAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetLastClosingPricesAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetLastClosingPricesAdjusted GetLastClosingPricesAdjusted
	 * @return XiHistoricalTypeGetLastClosingPricesAdjustedResponse
	 */
	public function GetLastClosingPricesAdjusted(XiHistoricalTypeGetLastClosingPricesAdjusted $_XiHistoricalTypeGetLastClosingPricesAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingPricesAdjusted(array('Identifiers'=>$_XiHistoricalTypeGetLastClosingPricesAdjusted->getIdentifiers(),'IdentifierType'=>$_XiHistoricalTypeGetLastClosingPricesAdjusted->getIdentifierType(),'AdjustmentMethod'=>$_XiHistoricalTypeGetLastClosingPricesAdjusted->getAdjustmentMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingPricesOrdered
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of securities.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetLastClosingPricesOrdered::getIdentifiers()
	 * @uses XiHistoricalTypeGetLastClosingPricesOrdered::getIdentifierType()
	 * @param XiHistoricalTypeGetLastClosingPricesOrdered GetLastClosingPricesOrdered
	 * @return XiHistoricalTypeGetLastClosingPricesOrderedResponse
	 */
	public function GetLastClosingPricesOrdered(XiHistoricalTypeGetLastClosingPricesOrdered $_XiHistoricalTypeGetLastClosingPricesOrdered)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingPricesOrdered(array('Identifiers'=>$_XiHistoricalTypeGetLastClosingPricesOrdered->getIdentifiers(),'IdentifierType'=>$_XiHistoricalTypeGetLastClosingPricesOrdered->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingPricesOrderedAdjusted
	 * Meta informations :
	 * 	- documentation : Returns last closing price for a collection of securities.This include the splits and dividends adjusted price
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetLastClosingPricesOrderedAdjusted::getIdentifiers()
	 * @uses XiHistoricalTypeGetLastClosingPricesOrderedAdjusted::getIdentifierType()
	 * @uses XiHistoricalTypeGetLastClosingPricesOrderedAdjusted::getAdjustmentMethod()
	 * @param XiHistoricalTypeGetLastClosingPricesOrderedAdjusted GetLastClosingPricesOrderedAdjusted
	 * @return XiHistoricalTypeGetLastClosingPricesOrderedAdjustedResponse
	 */
	public function GetLastClosingPricesOrderedAdjusted(XiHistoricalTypeGetLastClosingPricesOrderedAdjusted $_XiHistoricalTypeGetLastClosingPricesOrderedAdjusted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingPricesOrderedAdjusted(array('Identifiers'=>$_XiHistoricalTypeGetLastClosingPricesOrderedAdjusted->getIdentifiers(),'IdentifierType'=>$_XiHistoricalTypeGetLastClosingPricesOrderedAdjusted->getIdentifierType(),'AdjustmentMethod'=>$_XiHistoricalTypeGetLastClosingPricesOrderedAdjusted->getAdjustmentMethod())));
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
	 * 	- documentation : Returns a historical high low for a time range.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalHighLow::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalHighLow::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalHighLow::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalHighLow::getEndDate()
	 * @param XiHistoricalTypeGetHistoricalHighLow GetHistoricalHighLow
	 * @return XiHistoricalTypeGetHistoricalHighLowResponse
	 */
	public function GetHistoricalHighLow(XiHistoricalTypeGetHistoricalHighLow $_XiHistoricalTypeGetHistoricalHighLow)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalHighLow(array('Identifier'=>$_XiHistoricalTypeGetHistoricalHighLow->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalHighLow->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalHighLow->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalHighLow->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuote
	 * Meta informations :
	 * 	- documentation : Returns a quote as of a historical date. This includes split adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuote::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuote::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuote::getAsOfDate()
	 * @param XiHistoricalTypeGetHistoricalQuote GetHistoricalQuote
	 * @return XiHistoricalTypeGetHistoricalQuoteResponse
	 */
	public function GetHistoricalQuote(XiHistoricalTypeGetHistoricalQuote $_XiHistoricalTypeGetHistoricalQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuote(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuote->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuote->getIdentifierType(),'AsOfDate'=>$_XiHistoricalTypeGetHistoricalQuote->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuotes
	 * Meta informations :
	 * 	- documentation : Returns a quote as of a historical date. This includes split adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuotes::getIdentifiers()
	 * @uses XiHistoricalTypeGetHistoricalQuotes::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuotes::getAsOfDate()
	 * @param XiHistoricalTypeGetHistoricalQuotes GetHistoricalQuotes
	 * @return XiHistoricalTypeGetHistoricalQuotesResponse
	 */
	public function GetHistoricalQuotes(XiHistoricalTypeGetHistoricalQuotes $_XiHistoricalTypeGetHistoricalQuotes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuotes(array('Identifiers'=>$_XiHistoricalTypeGetHistoricalQuotes->getIdentifiers(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuotes->getIdentifierType(),'AsOfDate'=>$_XiHistoricalTypeGetHistoricalQuotes->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuotesAsOf
	 * Meta informations :
	 * 	- documentation : This operation returns a range of quotes for a security.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOf::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOf::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOf::getEndDate()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOf::getPeriodType()
	 * @uses XiHistoricalTypeGetHistoricalQuotesAsOf::getPeriods()
	 * @param XiHistoricalTypeGetHistoricalQuotesAsOf GetHistoricalQuotesAsOf
	 * @return XiHistoricalTypeGetHistoricalQuotesAsOfResponse
	 */
	public function GetHistoricalQuotesAsOf(XiHistoricalTypeGetHistoricalQuotesAsOf $_XiHistoricalTypeGetHistoricalQuotesAsOf)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuotesAsOf(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuotesAsOf->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuotesAsOf->getIdentifierType(),'EndDate'=>$_XiHistoricalTypeGetHistoricalQuotesAsOf->getEndDate(),'PeriodType'=>$_XiHistoricalTypeGetHistoricalQuotesAsOf->getPeriodType(),'Periods'=>$_XiHistoricalTypeGetHistoricalQuotesAsOf->getPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuotesRange
	 * Meta informations :
	 * 	- documentation : This operation returns a complete range of stock quotes for a US equity. This includes split adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRange::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRange::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRange::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalQuotesRange::getEndDate()
	 * @param XiHistoricalTypeGetHistoricalQuotesRange GetHistoricalQuotesRange
	 * @return XiHistoricalTypeGetHistoricalQuotesRangeResponse
	 */
	public function GetHistoricalQuotesRange(XiHistoricalTypeGetHistoricalQuotesRange $_XiHistoricalTypeGetHistoricalQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuotesRange(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuotesRange->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuotesRange->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalQuotesRange->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalQuotesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMonthlyQuotesRange
	 * Meta informations :
	 * 	- documentation : This operation returns end of month quotes for a US equity. This includes split adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRange::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRange::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRange::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalMonthlyQuotesRange::getEndDate()
	 * @param XiHistoricalTypeGetHistoricalMonthlyQuotesRange GetHistoricalMonthlyQuotesRange
	 * @return XiHistoricalTypeGetHistoricalMonthlyQuotesRangeResponse
	 */
	public function GetHistoricalMonthlyQuotesRange(XiHistoricalTypeGetHistoricalMonthlyQuotesRange $_XiHistoricalTypeGetHistoricalMonthlyQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMonthlyQuotesRange(array('Identifier'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRange->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRange->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRange->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalMonthlyQuotesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalWeeklyQuotesRange
	 * Meta informations :
	 * 	- documentation : This operation returns end of week quotes for a US equity. This includes split adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRange::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRange::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRange::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalWeeklyQuotesRange::getEndDate()
	 * @param XiHistoricalTypeGetHistoricalWeeklyQuotesRange GetHistoricalWeeklyQuotesRange
	 * @return XiHistoricalTypeGetHistoricalWeeklyQuotesRangeResponse
	 */
	public function GetHistoricalWeeklyQuotesRange(XiHistoricalTypeGetHistoricalWeeklyQuotesRange $_XiHistoricalTypeGetHistoricalWeeklyQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalWeeklyQuotesRange(array('Identifier'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRange->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRange->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRange->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalWeeklyQuotesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalQuarterlyQuotesRange
	 * Meta informations :
	 * 	- documentation : This operation returns end of quarter quotes for a US equity. This includes split adjusted price.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRange::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRange::getIdentifierType()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRange::getStartDate()
	 * @uses XiHistoricalTypeGetHistoricalQuarterlyQuotesRange::getEndDate()
	 * @param XiHistoricalTypeGetHistoricalQuarterlyQuotesRange GetHistoricalQuarterlyQuotesRange
	 * @return XiHistoricalTypeGetHistoricalQuarterlyQuotesRangeResponse
	 */
	public function GetHistoricalQuarterlyQuotesRange(XiHistoricalTypeGetHistoricalQuarterlyQuotesRange $_XiHistoricalTypeGetHistoricalQuarterlyQuotesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalQuarterlyQuotesRange(array('Identifier'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRange->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRange->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRange->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetHistoricalQuarterlyQuotesRange->getEndDate())));
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
	 * 	- documentation : This operation returns quote information about the top moving equities from NYSE, NASDAQ and AMEX.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetTopMovers::getAsOfDate()
	 * @uses XiHistoricalTypeGetTopMovers::getCount()
	 * @param XiHistoricalTypeGetTopMovers GetTopMovers
	 * @return XiHistoricalTypeGetTopMoversResponse
	 */
	public function GetTopMovers(XiHistoricalTypeGetTopMovers $_XiHistoricalTypeGetTopMovers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopMovers(array('AsOfDate'=>$_XiHistoricalTypeGetTopMovers->getAsOfDate(),'Count'=>$_XiHistoricalTypeGetTopMovers->getCount())));
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
	 * 	- documentation : This operation returns quote information about the top moving equities from NYSE, NASDAQ and AMEX.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetTopMoversByExchange::getAsOfDate()
	 * @uses XiHistoricalTypeGetTopMoversByExchange::getCount()
	 * @uses XiHistoricalTypeGetTopMoversByExchange::getExchange()
	 * @param XiHistoricalTypeGetTopMoversByExchange GetTopMoversByExchange
	 * @return XiHistoricalTypeGetTopMoversByExchangeResponse
	 */
	public function GetTopMoversByExchange(XiHistoricalTypeGetTopMoversByExchange $_XiHistoricalTypeGetTopMoversByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopMoversByExchange(array('AsOfDate'=>$_XiHistoricalTypeGetTopMoversByExchange->getAsOfDate(),'Count'=>$_XiHistoricalTypeGetTopMoversByExchange->getCount(),'Exchange'=>$_XiHistoricalTypeGetTopMoversByExchange->getExchange())));
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
	 * 	- documentation : This operation returns quote information about the top gaining equities from NYSE, NASDAQ and AMEX.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetTopGainers::getAsOfDate()
	 * @uses XiHistoricalTypeGetTopGainers::getCount()
	 * @param XiHistoricalTypeGetTopGainers GetTopGainers
	 * @return XiHistoricalTypeGetTopGainersResponse
	 */
	public function GetTopGainers(XiHistoricalTypeGetTopGainers $_XiHistoricalTypeGetTopGainers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopGainers(array('AsOfDate'=>$_XiHistoricalTypeGetTopGainers->getAsOfDate(),'Count'=>$_XiHistoricalTypeGetTopGainers->getCount())));
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
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetTopLosers::getAsOfDate()
	 * @uses XiHistoricalTypeGetTopLosers::getCount()
	 * @param XiHistoricalTypeGetTopLosers GetTopLosers
	 * @return XiHistoricalTypeGetTopLosersResponse
	 */
	public function GetTopLosers(XiHistoricalTypeGetTopLosers $_XiHistoricalTypeGetTopLosers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopLosers(array('AsOfDate'=>$_XiHistoricalTypeGetTopLosers->getAsOfDate(),'Count'=>$_XiHistoricalTypeGetTopLosers->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopMoversByMarketCapitalization
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top moving equities filtered by market capitalization from NYSE, NASDAQ and AMEX.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetTopMoversByMarketCapitalization::getAsOfDate()
	 * @uses XiHistoricalTypeGetTopMoversByMarketCapitalization::getLowCapitalization()
	 * @uses XiHistoricalTypeGetTopMoversByMarketCapitalization::getHighCapitalization()
	 * @uses XiHistoricalTypeGetTopMoversByMarketCapitalization::getCount()
	 * @param XiHistoricalTypeGetTopMoversByMarketCapitalization GetTopMoversByMarketCapitalization
	 * @return XiHistoricalTypeGetTopMoversByMarketCapitalizationResponse
	 */
	public function GetTopMoversByMarketCapitalization(XiHistoricalTypeGetTopMoversByMarketCapitalization $_XiHistoricalTypeGetTopMoversByMarketCapitalization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopMoversByMarketCapitalization(array('AsOfDate'=>$_XiHistoricalTypeGetTopMoversByMarketCapitalization->getAsOfDate(),'LowCapitalization'=>$_XiHistoricalTypeGetTopMoversByMarketCapitalization->getLowCapitalization(),'HighCapitalization'=>$_XiHistoricalTypeGetTopMoversByMarketCapitalization->getHighCapitalization(),'Count'=>$_XiHistoricalTypeGetTopMoversByMarketCapitalization->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopGainersByMarketCapitalization
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top gaining equities filtered by market capitalization from NYSE, NASDAQ and AMEX.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetTopGainersByMarketCapitalization::getAsOfDate()
	 * @uses XiHistoricalTypeGetTopGainersByMarketCapitalization::getLowCapitalization()
	 * @uses XiHistoricalTypeGetTopGainersByMarketCapitalization::getHighCapitalization()
	 * @uses XiHistoricalTypeGetTopGainersByMarketCapitalization::getCount()
	 * @param XiHistoricalTypeGetTopGainersByMarketCapitalization GetTopGainersByMarketCapitalization
	 * @return XiHistoricalTypeGetTopGainersByMarketCapitalizationResponse
	 */
	public function GetTopGainersByMarketCapitalization(XiHistoricalTypeGetTopGainersByMarketCapitalization $_XiHistoricalTypeGetTopGainersByMarketCapitalization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopGainersByMarketCapitalization(array('AsOfDate'=>$_XiHistoricalTypeGetTopGainersByMarketCapitalization->getAsOfDate(),'LowCapitalization'=>$_XiHistoricalTypeGetTopGainersByMarketCapitalization->getLowCapitalization(),'HighCapitalization'=>$_XiHistoricalTypeGetTopGainersByMarketCapitalization->getHighCapitalization(),'Count'=>$_XiHistoricalTypeGetTopGainersByMarketCapitalization->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopLosersByMarketCapitalization
	 * Meta informations :
	 * 	- documentation : This operation returns quote information about the top losing equities filtered by market capitalization from NYSE, NASDAQ and AMEX.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetTopLosersByMarketCapitalization::getAsOfDate()
	 * @uses XiHistoricalTypeGetTopLosersByMarketCapitalization::getLowCapitalization()
	 * @uses XiHistoricalTypeGetTopLosersByMarketCapitalization::getHighCapitalization()
	 * @uses XiHistoricalTypeGetTopLosersByMarketCapitalization::getCount()
	 * @param XiHistoricalTypeGetTopLosersByMarketCapitalization GetTopLosersByMarketCapitalization
	 * @return XiHistoricalTypeGetTopLosersByMarketCapitalizationResponse
	 */
	public function GetTopLosersByMarketCapitalization(XiHistoricalTypeGetTopLosersByMarketCapitalization $_XiHistoricalTypeGetTopLosersByMarketCapitalization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopLosersByMarketCapitalization(array('AsOfDate'=>$_XiHistoricalTypeGetTopLosersByMarketCapitalization->getAsOfDate(),'LowCapitalization'=>$_XiHistoricalTypeGetTopLosersByMarketCapitalization->getLowCapitalization(),'HighCapitalization'=>$_XiHistoricalTypeGetTopLosersByMarketCapitalization->getHighCapitalization(),'Count'=>$_XiHistoricalTypeGetTopLosersByMarketCapitalization->getCount())));
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
	 * 	- documentation : Get dividend history for a stock.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetDividendHistory::getIdentifier()
	 * @uses XiHistoricalTypeGetDividendHistory::getIdentifierType()
	 * @param XiHistoricalTypeGetDividendHistory GetDividendHistory
	 * @return XiHistoricalTypeGetDividendHistoryResponse
	 */
	public function GetDividendHistory(XiHistoricalTypeGetDividendHistory $_XiHistoricalTypeGetDividendHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDividendHistory(array('Identifier'=>$_XiHistoricalTypeGetDividendHistory->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetDividendHistory->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDividendHistoryRange
	 * Meta informations :
	 * 	- documentation : Get dividend history for a stock.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetDividendHistoryRange::getIdentifier()
	 * @uses XiHistoricalTypeGetDividendHistoryRange::getIdentifierType()
	 * @uses XiHistoricalTypeGetDividendHistoryRange::getStartDate()
	 * @uses XiHistoricalTypeGetDividendHistoryRange::getEndDate()
	 * @param XiHistoricalTypeGetDividendHistoryRange GetDividendHistoryRange
	 * @return XiHistoricalTypeGetDividendHistoryRangeResponse
	 */
	public function GetDividendHistoryRange(XiHistoricalTypeGetDividendHistoryRange $_XiHistoricalTypeGetDividendHistoryRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDividendHistoryRange(array('Identifier'=>$_XiHistoricalTypeGetDividendHistoryRange->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetDividendHistoryRange->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetDividendHistoryRange->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetDividendHistoryRange->getEndDate())));
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
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetExtendedDividendHistory::getIdentifier()
	 * @uses XiHistoricalTypeGetExtendedDividendHistory::getIdentifierType()
	 * @param XiHistoricalTypeGetExtendedDividendHistory GetExtendedDividendHistory
	 * @return XiHistoricalTypeGetExtendedDividendHistoryResponse
	 */
	public function GetExtendedDividendHistory(XiHistoricalTypeGetExtendedDividendHistory $_XiHistoricalTypeGetExtendedDividendHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedDividendHistory(array('Identifier'=>$_XiHistoricalTypeGetExtendedDividendHistory->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetExtendedDividendHistory->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedDividendHistoryRange
	 * Meta informations :
	 * 	- documentation : Get extended dividend history range for a stock.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetExtendedDividendHistoryRange::getIdentifier()
	 * @uses XiHistoricalTypeGetExtendedDividendHistoryRange::getIdentifierType()
	 * @uses XiHistoricalTypeGetExtendedDividendHistoryRange::getQueryBy()
	 * @uses XiHistoricalTypeGetExtendedDividendHistoryRange::getStartDate()
	 * @uses XiHistoricalTypeGetExtendedDividendHistoryRange::getEndDate()
	 * @param XiHistoricalTypeGetExtendedDividendHistoryRange GetExtendedDividendHistoryRange
	 * @return XiHistoricalTypeGetExtendedDividendHistoryRangeResponse
	 */
	public function GetExtendedDividendHistoryRange(XiHistoricalTypeGetExtendedDividendHistoryRange $_XiHistoricalTypeGetExtendedDividendHistoryRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedDividendHistoryRange(array('Identifier'=>$_XiHistoricalTypeGetExtendedDividendHistoryRange->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetExtendedDividendHistoryRange->getIdentifierType(),'QueryBy'=>$_XiHistoricalTypeGetExtendedDividendHistoryRange->getQueryBy(),'StartDate'=>$_XiHistoricalTypeGetExtendedDividendHistoryRange->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetExtendedDividendHistoryRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCompleteDividendHistoryRange
	 * Meta informations :
	 * 	- documentation : Get extended dividend history range for a stock.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetCompleteDividendHistoryRange::getIdentifier()
	 * @uses XiHistoricalTypeGetCompleteDividendHistoryRange::getIdentifierType()
	 * @uses XiHistoricalTypeGetCompleteDividendHistoryRange::getStartDate()
	 * @uses XiHistoricalTypeGetCompleteDividendHistoryRange::getEndDate()
	 * @param XiHistoricalTypeGetCompleteDividendHistoryRange GetCompleteDividendHistoryRange
	 * @return XiHistoricalTypeGetCompleteDividendHistoryRangeResponse
	 */
	public function GetCompleteDividendHistoryRange(XiHistoricalTypeGetCompleteDividendHistoryRange $_XiHistoricalTypeGetCompleteDividendHistoryRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCompleteDividendHistoryRange(array('Identifier'=>$_XiHistoricalTypeGetCompleteDividendHistoryRange->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetCompleteDividendHistoryRange->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetCompleteDividendHistoryRange->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetCompleteDividendHistoryRange->getEndDate())));
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
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetSplitHistory::getIdentifier()
	 * @uses XiHistoricalTypeGetSplitHistory::getIdentifierType()
	 * @uses XiHistoricalTypeGetSplitHistory::getStartDate()
	 * @uses XiHistoricalTypeGetSplitHistory::getEndDate()
	 * @param XiHistoricalTypeGetSplitHistory GetSplitHistory
	 * @return XiHistoricalTypeGetSplitHistoryResponse
	 */
	public function GetSplitHistory(XiHistoricalTypeGetSplitHistory $_XiHistoricalTypeGetSplitHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSplitHistory(array('Identifier'=>$_XiHistoricalTypeGetSplitHistory->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetSplitHistory->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetSplitHistory->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetSplitHistory->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllSplits
	 * Meta informations :
	 * 	- documentation : Get all splits for a date range.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetAllSplits::getStartDate()
	 * @uses XiHistoricalTypeGetAllSplits::getEndDate()
	 * @param XiHistoricalTypeGetAllSplits GetAllSplits
	 * @return XiHistoricalTypeGetAllSplitsResponse
	 */
	public function GetAllSplits(XiHistoricalTypeGetAllSplits $_XiHistoricalTypeGetAllSplits)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllSplits(array('StartDate'=>$_XiHistoricalTypeGetAllSplits->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetAllSplits->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllExtendedDividends
	 * Meta informations :
	 * 	- documentation : Get all extended dividend for a date range.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetAllExtendedDividends::getStartDate()
	 * @uses XiHistoricalTypeGetAllExtendedDividends::getEndDate()
	 * @param XiHistoricalTypeGetAllExtendedDividends GetAllExtendedDividends
	 * @return XiHistoricalTypeGetAllExtendedDividendsResponse
	 */
	public function GetAllExtendedDividends(XiHistoricalTypeGetAllExtendedDividends $_XiHistoricalTypeGetAllExtendedDividends)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllExtendedDividends(array('StartDate'=>$_XiHistoricalTypeGetAllExtendedDividends->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetAllExtendedDividends->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllDividends
	 * Meta informations :
	 * 	- documentation : Get all splits for a date range.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetAllDividends::getStartDate()
	 * @uses XiHistoricalTypeGetAllDividends::getEndDate()
	 * @param XiHistoricalTypeGetAllDividends GetAllDividends
	 * @return XiHistoricalTypeGetAllDividendsResponse
	 */
	public function GetAllDividends(XiHistoricalTypeGetAllDividends $_XiHistoricalTypeGetAllDividends)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllDividends(array('StartDate'=>$_XiHistoricalTypeGetAllDividends->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetAllDividends->getEndDate())));
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
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetSplitRatio::getIdentifier()
	 * @uses XiHistoricalTypeGetSplitRatio::getIdentifierType()
	 * @uses XiHistoricalTypeGetSplitRatio::getStartDate()
	 * @uses XiHistoricalTypeGetSplitRatio::getEndDate()
	 * @param XiHistoricalTypeGetSplitRatio GetSplitRatio
	 * @return XiHistoricalTypeGetSplitRatioResponse
	 */
	public function GetSplitRatio(XiHistoricalTypeGetSplitRatio $_XiHistoricalTypeGetSplitRatio)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSplitRatio(array('Identifier'=>$_XiHistoricalTypeGetSplitRatio->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetSplitRatio->getIdentifierType(),'StartDate'=>$_XiHistoricalTypeGetSplitRatio->getStartDate(),'EndDate'=>$_XiHistoricalTypeGetSplitRatio->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSymbols
	 * Meta informations :
	 * 	- documentation : Returns a list of symbols available in the historical database.
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @param XiHistoricalTypeGetSymbols GetSymbols
	 * @return XiHistoricalTypeGetSymbolsResponse
	 */
	public function GetSymbols(XiHistoricalTypeGetSymbols $_XiHistoricalTypeGetSymbols)
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
	 * Method to call GetAdvancesAndDeclines
	 * Meta informations :
	 * 	- documentation : Returns numbers of advancing and declining stocks by price and volume across exchanges. For more information, go to http://www.xignite.com/
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetAdvancesAndDeclines::getAsOfDate()
	 * @param XiHistoricalTypeGetAdvancesAndDeclines GetAdvancesAndDeclines
	 * @return XiHistoricalTypeGetAdvancesAndDeclinesResponse
	 */
	public function GetAdvancesAndDeclines(XiHistoricalTypeGetAdvancesAndDeclines $_XiHistoricalTypeGetAdvancesAndDeclines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAdvancesAndDeclines(array('AsOfDate'=>$_XiHistoricalTypeGetAdvancesAndDeclines->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalStatistics
	 * Meta informations :
	 * 	- documentation : Returns Historical statistics for a security. For more information, go to http://www.xignite.com/
	 * @uses XiHistoricalWsdlClass::getSoapClient()
	 * @uses XiHistoricalWsdlClass::setResult()
	 * @uses XiHistoricalWsdlClass::getResult()
	 * @uses XiHistoricalWsdlClass::saveLastError()
	 * @uses XiHistoricalTypeGetHistoricalStatistics::getIdentifier()
	 * @uses XiHistoricalTypeGetHistoricalStatistics::getIdentifierType()
	 * @param XiHistoricalTypeGetHistoricalStatistics GetHistoricalStatistics
	 * @return XiHistoricalTypeGetHistoricalStatisticsResponse
	 */
	public function GetHistoricalStatistics(XiHistoricalTypeGetHistoricalStatistics $_XiHistoricalTypeGetHistoricalStatistics)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalStatistics(array('Identifier'=>$_XiHistoricalTypeGetHistoricalStatistics->getIdentifier(),'IdentifierType'=>$_XiHistoricalTypeGetHistoricalStatistics->getIdentifierType())));
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
	 * @return XiHistoricalTypeGetHistoricalStatisticsResponse
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