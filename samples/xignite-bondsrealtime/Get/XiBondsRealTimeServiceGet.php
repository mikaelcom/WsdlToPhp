<?php
/**
 * Class file for XiBondsRealTimeServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeServiceGet
 * @date 08/07/2012
 */
class XiBondsRealTimeServiceGet extends XiBondsRealTimeWsdlClass
{
	/**
	 * Method to call GetPriceComposite
	 * Meta informations :
	 * 	- documentation : Returns price data composite including last sale price, yield and daily and yearly Open, High, Low prices for a specific bond reported by price source selected in the input. Return against this operation counts as three hits.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetPriceComposite::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetPriceComposite::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetPriceComposite::getPriceSource()
	 * @param XiBondsRealTimeTypeGetPriceComposite GetPriceComposite
	 * @return XiBondsRealTimeTypeGetPriceCompositeResponse
	 */
	public function GetPriceComposite(XiBondsRealTimeTypeGetPriceComposite $_XiBondsRealTimeTypeGetPriceComposite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPriceComposite(array('Identifier'=>$_XiBondsRealTimeTypeGetPriceComposite->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetPriceComposite->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetPriceComposite->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSale
	 * Meta informations :
	 * 	- documentation : Returns Last Sale price for a specific bond as reported by the price source selected in the input. Request against this operation counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetLastSale::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetLastSale::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetLastSale::getPriceSource()
	 * @param XiBondsRealTimeTypeGetLastSale GetLastSale
	 * @return XiBondsRealTimeTypeGetLastSaleResponse
	 */
	public function GetLastSale(XiBondsRealTimeTypeGetLastSale $_XiBondsRealTimeTypeGetLastSale)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSale(array('Identifier'=>$_XiBondsRealTimeTypeGetLastSale->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetLastSale->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetLastSale->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDailyOpenHighLowClosePrice
	 * Meta informations :
	 * 	- documentation : Returns daily Open, High, Low, Close (OHLC) prices for a specific bond reported by the price source selected in the input. Daily OHLC data is provided for the most recent date for which data is provided by the price source. Request against this operation counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice::getPriceSource()
	 * @param XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePrice
	 * @return XiBondsRealTimeTypeGetDailyOpenHighLowClosePriceResponse
	 */
	public function GetDailyOpenHighLowClosePrice(XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice $_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDailyOpenHighLowClosePrice(array('Identifier'=>$_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetYearlyHighLowPrice
	 * Meta informations :
	 * 	- documentation : Returns yearly high, low prices for a specific bond reported by the price source selected in the input. Request against this operation counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetYearlyHighLowPrice::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetYearlyHighLowPrice::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetYearlyHighLowPrice::getPriceSource()
	 * @param XiBondsRealTimeTypeGetYearlyHighLowPrice GetYearlyHighLowPrice
	 * @return XiBondsRealTimeTypeGetYearlyHighLowPriceResponse
	 */
	public function GetYearlyHighLowPrice(XiBondsRealTimeTypeGetYearlyHighLowPrice $_XiBondsRealTimeTypeGetYearlyHighLowPrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYearlyHighLowPrice(array('Identifier'=>$_XiBondsRealTimeTypeGetYearlyHighLowPrice->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetYearlyHighLowPrice->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetYearlyHighLowPrice->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetYield
	 * Meta informations :
	 * 	- documentation : Returns Yield to maturity for a specific bond reported by the price source selected in the input. Request against this operation counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetYield::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetYield::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetYield::getPriceSource()
	 * @param XiBondsRealTimeTypeGetYield GetYield
	 * @return XiBondsRealTimeTypeGetYieldResponse
	 */
	public function GetYield(XiBondsRealTimeTypeGetYield $_XiBondsRealTimeTypeGetYield)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYield(array('Identifier'=>$_XiBondsRealTimeTypeGetYield->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetYield->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetYield->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAccruedInterest
	 * Meta informations :
	 * 	- documentation : Returns Accrued Interest for a specific bond reported by the price source selected in the input. Request against this operation counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetAccruedInterest::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetAccruedInterest::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetAccruedInterest::getPriceSource()
	 * @param XiBondsRealTimeTypeGetAccruedInterest GetAccruedInterest
	 * @return XiBondsRealTimeTypeGetAccruedInterestResponse
	 */
	public function GetAccruedInterest(XiBondsRealTimeTypeGetAccruedInterest $_XiBondsRealTimeTypeGetAccruedInterest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccruedInterest(array('Identifier'=>$_XiBondsRealTimeTypeGetAccruedInterest->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetAccruedInterest->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetAccruedInterest->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDurationAndConvexity
	 * Meta informations :
	 * 	- documentation : Returns Duration and Convexity for a specific bond reported by the price source selected in the input. Request against this operation counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetDurationAndConvexity::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetDurationAndConvexity::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetDurationAndConvexity::getPriceSource()
	 * @param XiBondsRealTimeTypeGetDurationAndConvexity GetDurationAndConvexity
	 * @return XiBondsRealTimeTypeGetDurationAndConvexityResponse
	 */
	public function GetDurationAndConvexity(XiBondsRealTimeTypeGetDurationAndConvexity $_XiBondsRealTimeTypeGetDurationAndConvexity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDurationAndConvexity(array('Identifier'=>$_XiBondsRealTimeTypeGetDurationAndConvexity->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetDurationAndConvexity->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetDurationAndConvexity->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBondCalculation
	 * Meta informations :
	 * 	- documentation : Returns Price, Yield, Accrued Interest and other bond analytics data for a specific bond reported by the price source selected in the input. Request against this operation counts as four hits.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetBondCalculation::getIdentifier()
	 * @uses XiBondsRealTimeTypeGetBondCalculation::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetBondCalculation::getPriceSource()
	 * @param XiBondsRealTimeTypeGetBondCalculation GetBondCalculation
	 * @return XiBondsRealTimeTypeGetBondCalculationResponse
	 */
	public function GetBondCalculation(XiBondsRealTimeTypeGetBondCalculation $_XiBondsRealTimeTypeGetBondCalculation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBondCalculation(array('Identifier'=>$_XiBondsRealTimeTypeGetBondCalculation->getIdentifier(),'IdentifierType'=>$_XiBondsRealTimeTypeGetBondCalculation->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetBondCalculation->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPriceComposites
	 * Meta informations :
	 * 	- documentation : Returns price data composite including last sale price, yield and daily and yearly Open, High, Low prices for the list of bonds specified in the input. Each PriceComposite object returned in the output counts as three hits.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetPriceComposites::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetPriceComposites::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetPriceComposites::getPriceSource()
	 * @param XiBondsRealTimeTypeGetPriceComposites GetPriceComposites
	 * @return XiBondsRealTimeTypeGetPriceCompositesResponse
	 */
	public function GetPriceComposites(XiBondsRealTimeTypeGetPriceComposites $_XiBondsRealTimeTypeGetPriceComposites)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPriceComposites(array('Identifiers'=>$_XiBondsRealTimeTypeGetPriceComposites->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetPriceComposites->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetPriceComposites->getPriceSource())));
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
	 * 	- documentation : Returns Last Sale price for the list of bonds specified in the input, as reported by the price source selected in the input. Each LastSale object in the result counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetLastSales::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetLastSales::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetLastSales::getPriceSource()
	 * @param XiBondsRealTimeTypeGetLastSales GetLastSales
	 * @return XiBondsRealTimeTypeGetLastSalesResponse
	 */
	public function GetLastSales(XiBondsRealTimeTypeGetLastSales $_XiBondsRealTimeTypeGetLastSales)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSales(array('Identifiers'=>$_XiBondsRealTimeTypeGetLastSales->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetLastSales->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetLastSales->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDailyOpenHighLowClosePrices
	 * Meta informations :
	 * 	- documentation : Returns daily Open, High, Low, Close (OHLC) prices for the list of bonds specified in the input. Daily OHLC data is provided for the most recent date for which data is provided by the price source. Each DailyOpenHighLowClosePrice object returned counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices::getPriceSource()
	 * @param XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices GetDailyOpenHighLowClosePrices
	 * @return XiBondsRealTimeTypeGetDailyOpenHighLowClosePricesResponse
	 */
	public function GetDailyOpenHighLowClosePrices(XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices $_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDailyOpenHighLowClosePrices(array('Identifiers'=>$_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetDailyOpenHighLowClosePrices->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetYearlyHighLowPrices
	 * Meta informations :
	 * 	- documentation : Returns yearly high, low prices for the list of bonds specified in the input, as reported by the price source selected in the input. Each YearlyHighLowPrice object returned counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetYearlyHighLowPrices::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetYearlyHighLowPrices::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetYearlyHighLowPrices::getPriceSource()
	 * @param XiBondsRealTimeTypeGetYearlyHighLowPrices GetYearlyHighLowPrices
	 * @return XiBondsRealTimeTypeGetYearlyHighLowPricesResponse
	 */
	public function GetYearlyHighLowPrices(XiBondsRealTimeTypeGetYearlyHighLowPrices $_XiBondsRealTimeTypeGetYearlyHighLowPrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYearlyHighLowPrices(array('Identifiers'=>$_XiBondsRealTimeTypeGetYearlyHighLowPrices->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetYearlyHighLowPrices->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetYearlyHighLowPrices->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetYields
	 * Meta informations :
	 * 	- documentation : Returns Yield to maturity for the list of bonds specified in the input, as reported by the price source selected in the input. Each Yields object returned counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetYields::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetYields::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetYields::getPriceSource()
	 * @param XiBondsRealTimeTypeGetYields GetYields
	 * @return XiBondsRealTimeTypeGetYieldsResponse
	 */
	public function GetYields(XiBondsRealTimeTypeGetYields $_XiBondsRealTimeTypeGetYields)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYields(array('Identifiers'=>$_XiBondsRealTimeTypeGetYields->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetYields->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetYields->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAccruedInterests
	 * Meta informations :
	 * 	- documentation : Returns Accrued Interest for the list of bonds specified in the input. Each AccruedInterest object in the result counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetAccruedInterests::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetAccruedInterests::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetAccruedInterests::getPriceSource()
	 * @param XiBondsRealTimeTypeGetAccruedInterests GetAccruedInterests
	 * @return XiBondsRealTimeTypeGetAccruedInterestsResponse
	 */
	public function GetAccruedInterests(XiBondsRealTimeTypeGetAccruedInterests $_XiBondsRealTimeTypeGetAccruedInterests)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccruedInterests(array('Identifiers'=>$_XiBondsRealTimeTypeGetAccruedInterests->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetAccruedInterests->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetAccruedInterests->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDurationAndConvexities
	 * Meta informations :
	 * 	- documentation : Returns Duration and Convexity for a list of bonds provided in the input. Each DurationAndConvexity object in the result counts as one hit.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetDurationAndConvexities::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetDurationAndConvexities::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetDurationAndConvexities::getPriceSource()
	 * @param XiBondsRealTimeTypeGetDurationAndConvexities GetDurationAndConvexities
	 * @return XiBondsRealTimeTypeGetDurationAndConvexitiesResponse
	 */
	public function GetDurationAndConvexities(XiBondsRealTimeTypeGetDurationAndConvexities $_XiBondsRealTimeTypeGetDurationAndConvexities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDurationAndConvexities(array('Identifiers'=>$_XiBondsRealTimeTypeGetDurationAndConvexities->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetDurationAndConvexities->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetDurationAndConvexities->getPriceSource())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBondCalculations
	 * Meta informations :
	 * 	- documentation : Returns Price, Yield, Accrued Interest and other bond analytics data for a list of bonds provided in the input. Each BondCalculations object in the result counts as four hits.
	 * @uses XiBondsRealTimeWsdlClass::getSoapClient()
	 * @uses XiBondsRealTimeWsdlClass::setResult()
	 * @uses XiBondsRealTimeWsdlClass::getResult()
	 * @uses XiBondsRealTimeWsdlClass::saveLastError()
	 * @uses XiBondsRealTimeTypeGetBondCalculations::getIdentifiers()
	 * @uses XiBondsRealTimeTypeGetBondCalculations::getIdentifierType()
	 * @uses XiBondsRealTimeTypeGetBondCalculations::getPriceSource()
	 * @param XiBondsRealTimeTypeGetBondCalculations GetBondCalculations
	 * @return XiBondsRealTimeTypeGetBondCalculationsResponse
	 */
	public function GetBondCalculations(XiBondsRealTimeTypeGetBondCalculations $_XiBondsRealTimeTypeGetBondCalculations)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBondCalculations(array('Identifiers'=>$_XiBondsRealTimeTypeGetBondCalculations->getIdentifiers(),'IdentifierType'=>$_XiBondsRealTimeTypeGetBondCalculations->getIdentifierType(),'PriceSource'=>$_XiBondsRealTimeTypeGetBondCalculations->getPriceSource())));
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
	 * @return XiBondsRealTimeTypeGetBondCalculationsResponse
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