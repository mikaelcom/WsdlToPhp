<?php
/**
 * Class file for XiIndicesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiIndicesServiceGet
 * @date 08/07/2012
 */
class XiIndicesServiceGet extends XiIndicesWsdlClass
{
	/**
	 * Method to call GetMarketSummary
	 * Meta informations :
	 * 	- documentation : Returns the current market level for the Dow, Nasdaq and S&amp;P indices as well as the NYSE and NASDAQ volumes and the 10 Year Bond index.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @param XiIndicesTypeGetMarketSummary GetMarketSummary
	 * @return XiIndicesTypeGetMarketSummaryResponse
	 */
	public function GetMarketSummary(XiIndicesTypeGetMarketSummary $_XiIndicesTypeGetMarketSummary)
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
	 * Method to call GetExchangeSummary
	 * Meta informations :
	 * 	- documentation : Returns summary information about an exchange trading day.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetExchangeSummary::getExchange()
	 * @param XiIndicesTypeGetExchangeSummary GetExchangeSummary
	 * @return XiIndicesTypeGetExchangeSummaryResponse
	 */
	public function GetExchangeSummary(XiIndicesTypeGetExchangeSummary $_XiIndicesTypeGetExchangeSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeSummary(array('Exchange'=>$_XiIndicesTypeGetExchangeSummary->getExchange())));
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
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @param XiIndicesTypeGetIndices GetIndices
	 * @return XiIndicesTypeGetIndicesResponse
	 */
	public function GetIndices(XiIndicesTypeGetIndices $_XiIndicesTypeGetIndices)
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
	 * Method to call GetDelayedValue
	 * Meta informations :
	 * 	- documentation : Returns a delayed value for an index.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetDelayedValue::getIdentifier()
	 * @uses XiIndicesTypeGetDelayedValue::getIdentifierType()
	 * @param XiIndicesTypeGetDelayedValue GetDelayedValue
	 * @return XiIndicesTypeGetDelayedValueResponse
	 */
	public function GetDelayedValue(XiIndicesTypeGetDelayedValue $_XiIndicesTypeGetDelayedValue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedValue(array('Identifier'=>$_XiIndicesTypeGetDelayedValue->getIdentifier(),'IdentifierType'=>$_XiIndicesTypeGetDelayedValue->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedValues
	 * Meta informations :
	 * 	- documentation : Returns a delayed value for an index.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetDelayedValues::getIdentifiers()
	 * @uses XiIndicesTypeGetDelayedValues::getIdentifierType()
	 * @param XiIndicesTypeGetDelayedValues GetDelayedValues
	 * @return XiIndicesTypeGetDelayedValuesResponse
	 */
	public function GetDelayedValues(XiIndicesTypeGetDelayedValues $_XiIndicesTypeGetDelayedValues)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedValues(array('Identifiers'=>$_XiIndicesTypeGetDelayedValues->getIdentifiers(),'IdentifierType'=>$_XiIndicesTypeGetDelayedValues->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingValue
	 * Meta informations :
	 * 	- documentation : Returns last closing value for an index.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetLastClosingValue::getIdentifier()
	 * @uses XiIndicesTypeGetLastClosingValue::getIdentifierType()
	 * @param XiIndicesTypeGetLastClosingValue GetLastClosingValue
	 * @return XiIndicesTypeGetLastClosingValueResponse
	 */
	public function GetLastClosingValue(XiIndicesTypeGetLastClosingValue $_XiIndicesTypeGetLastClosingValue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingValue(array('Identifier'=>$_XiIndicesTypeGetLastClosingValue->getIdentifier(),'IdentifierType'=>$_XiIndicesTypeGetLastClosingValue->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastClosingValues
	 * Meta informations :
	 * 	- documentation : Returns last closing value for a collection of indices.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetLastClosingValues::getIdentifiers()
	 * @uses XiIndicesTypeGetLastClosingValues::getIdentifierType()
	 * @param XiIndicesTypeGetLastClosingValues GetLastClosingValues
	 * @return XiIndicesTypeGetLastClosingValuesResponse
	 */
	public function GetLastClosingValues(XiIndicesTypeGetLastClosingValues $_XiIndicesTypeGetLastClosingValues)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastClosingValues(array('Identifiers'=>$_XiIndicesTypeGetLastClosingValues->getIdentifiers(),'IdentifierType'=>$_XiIndicesTypeGetLastClosingValues->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalValue
	 * Meta informations :
	 * 	- documentation : Returns an index value as of a historical date.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetHistoricalValue::getIdentifier()
	 * @uses XiIndicesTypeGetHistoricalValue::getIdentifierType()
	 * @uses XiIndicesTypeGetHistoricalValue::getAsOfDate()
	 * @param XiIndicesTypeGetHistoricalValue GetHistoricalValue
	 * @return XiIndicesTypeGetHistoricalValueResponse
	 */
	public function GetHistoricalValue(XiIndicesTypeGetHistoricalValue $_XiIndicesTypeGetHistoricalValue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalValue(array('Identifier'=>$_XiIndicesTypeGetHistoricalValue->getIdentifier(),'IdentifierType'=>$_XiIndicesTypeGetHistoricalValue->getIdentifierType(),'AsOfDate'=>$_XiIndicesTypeGetHistoricalValue->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalValues
	 * Meta informations :
	 * 	- documentation : Returns a collection of index values as of a historical date.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetHistoricalValues::getIdentifiers()
	 * @uses XiIndicesTypeGetHistoricalValues::getIdentifierType()
	 * @uses XiIndicesTypeGetHistoricalValues::getAsOfDate()
	 * @param XiIndicesTypeGetHistoricalValues GetHistoricalValues
	 * @return XiIndicesTypeGetHistoricalValuesResponse
	 */
	public function GetHistoricalValues(XiIndicesTypeGetHistoricalValues $_XiIndicesTypeGetHistoricalValues)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalValues(array('Identifiers'=>$_XiIndicesTypeGetHistoricalValues->getIdentifiers(),'IdentifierType'=>$_XiIndicesTypeGetHistoricalValues->getIdentifierType(),'AsOfDate'=>$_XiIndicesTypeGetHistoricalValues->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalValuesAsOf
	 * Meta informations :
	 * 	- documentation : This operation returns a range of values for an index.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetHistoricalValuesAsOf::getIdentifier()
	 * @uses XiIndicesTypeGetHistoricalValuesAsOf::getIdentifierType()
	 * @uses XiIndicesTypeGetHistoricalValuesAsOf::getEndDate()
	 * @uses XiIndicesTypeGetHistoricalValuesAsOf::getPeriodType()
	 * @uses XiIndicesTypeGetHistoricalValuesAsOf::getPeriods()
	 * @param XiIndicesTypeGetHistoricalValuesAsOf GetHistoricalValuesAsOf
	 * @return XiIndicesTypeGetHistoricalValuesAsOfResponse
	 */
	public function GetHistoricalValuesAsOf(XiIndicesTypeGetHistoricalValuesAsOf $_XiIndicesTypeGetHistoricalValuesAsOf)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalValuesAsOf(array('Identifier'=>$_XiIndicesTypeGetHistoricalValuesAsOf->getIdentifier(),'IdentifierType'=>$_XiIndicesTypeGetHistoricalValuesAsOf->getIdentifierType(),'EndDate'=>$_XiIndicesTypeGetHistoricalValuesAsOf->getEndDate(),'PeriodType'=>$_XiIndicesTypeGetHistoricalValuesAsOf->getPeriodType(),'Periods'=>$_XiIndicesTypeGetHistoricalValuesAsOf->getPeriods())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalValuesRange
	 * Meta informations :
	 * 	- documentation : This operation returns a complete range of stock quotes for a US equity. This includes split and dividend adjusted price.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetHistoricalValuesRange::getIdentifier()
	 * @uses XiIndicesTypeGetHistoricalValuesRange::getIdentifierType()
	 * @uses XiIndicesTypeGetHistoricalValuesRange::getStartDate()
	 * @uses XiIndicesTypeGetHistoricalValuesRange::getEndDate()
	 * @param XiIndicesTypeGetHistoricalValuesRange GetHistoricalValuesRange
	 * @return XiIndicesTypeGetHistoricalValuesRangeResponse
	 */
	public function GetHistoricalValuesRange(XiIndicesTypeGetHistoricalValuesRange $_XiIndicesTypeGetHistoricalValuesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalValuesRange(array('Identifier'=>$_XiIndicesTypeGetHistoricalValuesRange->getIdentifier(),'IdentifierType'=>$_XiIndicesTypeGetHistoricalValuesRange->getIdentifierType(),'StartDate'=>$_XiIndicesTypeGetHistoricalValuesRange->getStartDate(),'EndDate'=>$_XiIndicesTypeGetHistoricalValuesRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIndexComponents
	 * Meta informations :
	 * 	- documentation : Returns the components, or the constituants of an index.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeGetIndexComponents::getIdentifier()
	 * @uses XiIndicesTypeGetIndexComponents::getIdentifierType()
	 * @param XiIndicesTypeGetIndexComponents GetIndexComponents
	 * @return XiIndicesTypeGetIndexComponentsResponse
	 */
	public function GetIndexComponents(XiIndicesTypeGetIndexComponents $_XiIndicesTypeGetIndexComponents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIndexComponents(array('Identifier'=>$_XiIndicesTypeGetIndexComponents->getIdentifier(),'IdentifierType'=>$_XiIndicesTypeGetIndexComponents->getIdentifierType())));
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
	 * @return XiIndicesTypeGetIndexComponentsResponse
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