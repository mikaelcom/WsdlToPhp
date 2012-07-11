<?php
/**
 * Class file for XiBondsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiBondsServiceGet
 * @date 08/07/2012
 */
class XiBondsServiceGet extends XiBondsWsdlClass
{
	/**
	 * Method to call GetPriceComposite
	 * Meta informations :
	 * 	- documentation : Returns price data composite including last sale price, yield and daily and yearly Open, High, Low prices for a specific bond reported by price source selected in the input. Return against this operation counts as three hits.
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetPriceComposite::getIdentifier()
	 * @uses XiBondsTypeGetPriceComposite::getIdentifierType()
	 * @uses XiBondsTypeGetPriceComposite::getPriceSource()
	 * @param XiBondsTypeGetPriceComposite GetPriceComposite
	 * @return XiBondsTypeGetPriceCompositeResponse
	 */
	public function GetPriceComposite(XiBondsTypeGetPriceComposite $_XiBondsTypeGetPriceComposite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPriceComposite(array('Identifier'=>$_XiBondsTypeGetPriceComposite->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetPriceComposite->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetPriceComposite->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetLastSale::getIdentifier()
	 * @uses XiBondsTypeGetLastSale::getIdentifierType()
	 * @uses XiBondsTypeGetLastSale::getPriceSource()
	 * @param XiBondsTypeGetLastSale GetLastSale
	 * @return XiBondsTypeGetLastSaleResponse
	 */
	public function GetLastSale(XiBondsTypeGetLastSale $_XiBondsTypeGetLastSale)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSale(array('Identifier'=>$_XiBondsTypeGetLastSale->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetLastSale->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetLastSale->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetDailyOpenHighLowClosePrice::getIdentifier()
	 * @uses XiBondsTypeGetDailyOpenHighLowClosePrice::getIdentifierType()
	 * @uses XiBondsTypeGetDailyOpenHighLowClosePrice::getPriceSource()
	 * @param XiBondsTypeGetDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePrice
	 * @return XiBondsTypeGetDailyOpenHighLowClosePriceResponse
	 */
	public function GetDailyOpenHighLowClosePrice(XiBondsTypeGetDailyOpenHighLowClosePrice $_XiBondsTypeGetDailyOpenHighLowClosePrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDailyOpenHighLowClosePrice(array('Identifier'=>$_XiBondsTypeGetDailyOpenHighLowClosePrice->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetDailyOpenHighLowClosePrice->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetDailyOpenHighLowClosePrice->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetYearlyHighLowPrice::getIdentifier()
	 * @uses XiBondsTypeGetYearlyHighLowPrice::getIdentifierType()
	 * @uses XiBondsTypeGetYearlyHighLowPrice::getPriceSource()
	 * @param XiBondsTypeGetYearlyHighLowPrice GetYearlyHighLowPrice
	 * @return XiBondsTypeGetYearlyHighLowPriceResponse
	 */
	public function GetYearlyHighLowPrice(XiBondsTypeGetYearlyHighLowPrice $_XiBondsTypeGetYearlyHighLowPrice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYearlyHighLowPrice(array('Identifier'=>$_XiBondsTypeGetYearlyHighLowPrice->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetYearlyHighLowPrice->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetYearlyHighLowPrice->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetYield::getIdentifier()
	 * @uses XiBondsTypeGetYield::getIdentifierType()
	 * @uses XiBondsTypeGetYield::getPriceSource()
	 * @param XiBondsTypeGetYield GetYield
	 * @return XiBondsTypeGetYieldResponse
	 */
	public function GetYield(XiBondsTypeGetYield $_XiBondsTypeGetYield)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYield(array('Identifier'=>$_XiBondsTypeGetYield->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetYield->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetYield->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetAccruedInterest::getIdentifier()
	 * @uses XiBondsTypeGetAccruedInterest::getIdentifierType()
	 * @uses XiBondsTypeGetAccruedInterest::getPriceSource()
	 * @param XiBondsTypeGetAccruedInterest GetAccruedInterest
	 * @return XiBondsTypeGetAccruedInterestResponse
	 */
	public function GetAccruedInterest(XiBondsTypeGetAccruedInterest $_XiBondsTypeGetAccruedInterest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccruedInterest(array('Identifier'=>$_XiBondsTypeGetAccruedInterest->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetAccruedInterest->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetAccruedInterest->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetDurationAndConvexity::getIdentifier()
	 * @uses XiBondsTypeGetDurationAndConvexity::getIdentifierType()
	 * @uses XiBondsTypeGetDurationAndConvexity::getPriceSource()
	 * @param XiBondsTypeGetDurationAndConvexity GetDurationAndConvexity
	 * @return XiBondsTypeGetDurationAndConvexityResponse
	 */
	public function GetDurationAndConvexity(XiBondsTypeGetDurationAndConvexity $_XiBondsTypeGetDurationAndConvexity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDurationAndConvexity(array('Identifier'=>$_XiBondsTypeGetDurationAndConvexity->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetDurationAndConvexity->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetDurationAndConvexity->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetBondCalculation::getIdentifier()
	 * @uses XiBondsTypeGetBondCalculation::getIdentifierType()
	 * @uses XiBondsTypeGetBondCalculation::getPriceSource()
	 * @param XiBondsTypeGetBondCalculation GetBondCalculation
	 * @return XiBondsTypeGetBondCalculationResponse
	 */
	public function GetBondCalculation(XiBondsTypeGetBondCalculation $_XiBondsTypeGetBondCalculation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBondCalculation(array('Identifier'=>$_XiBondsTypeGetBondCalculation->getIdentifier(),'IdentifierType'=>$_XiBondsTypeGetBondCalculation->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetBondCalculation->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetPriceComposites::getIdentifiers()
	 * @uses XiBondsTypeGetPriceComposites::getIdentifierType()
	 * @uses XiBondsTypeGetPriceComposites::getPriceSource()
	 * @param XiBondsTypeGetPriceComposites GetPriceComposites
	 * @return XiBondsTypeGetPriceCompositesResponse
	 */
	public function GetPriceComposites(XiBondsTypeGetPriceComposites $_XiBondsTypeGetPriceComposites)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPriceComposites(array('Identifiers'=>$_XiBondsTypeGetPriceComposites->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetPriceComposites->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetPriceComposites->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetLastSales::getIdentifiers()
	 * @uses XiBondsTypeGetLastSales::getIdentifierType()
	 * @uses XiBondsTypeGetLastSales::getPriceSource()
	 * @param XiBondsTypeGetLastSales GetLastSales
	 * @return XiBondsTypeGetLastSalesResponse
	 */
	public function GetLastSales(XiBondsTypeGetLastSales $_XiBondsTypeGetLastSales)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSales(array('Identifiers'=>$_XiBondsTypeGetLastSales->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetLastSales->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetLastSales->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetDailyOpenHighLowClosePrices::getIdentifiers()
	 * @uses XiBondsTypeGetDailyOpenHighLowClosePrices::getIdentifierType()
	 * @uses XiBondsTypeGetDailyOpenHighLowClosePrices::getPriceSource()
	 * @param XiBondsTypeGetDailyOpenHighLowClosePrices GetDailyOpenHighLowClosePrices
	 * @return XiBondsTypeGetDailyOpenHighLowClosePricesResponse
	 */
	public function GetDailyOpenHighLowClosePrices(XiBondsTypeGetDailyOpenHighLowClosePrices $_XiBondsTypeGetDailyOpenHighLowClosePrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDailyOpenHighLowClosePrices(array('Identifiers'=>$_XiBondsTypeGetDailyOpenHighLowClosePrices->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetDailyOpenHighLowClosePrices->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetDailyOpenHighLowClosePrices->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetYearlyHighLowPrices::getIdentifiers()
	 * @uses XiBondsTypeGetYearlyHighLowPrices::getIdentifierType()
	 * @uses XiBondsTypeGetYearlyHighLowPrices::getPriceSource()
	 * @param XiBondsTypeGetYearlyHighLowPrices GetYearlyHighLowPrices
	 * @return XiBondsTypeGetYearlyHighLowPricesResponse
	 */
	public function GetYearlyHighLowPrices(XiBondsTypeGetYearlyHighLowPrices $_XiBondsTypeGetYearlyHighLowPrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYearlyHighLowPrices(array('Identifiers'=>$_XiBondsTypeGetYearlyHighLowPrices->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetYearlyHighLowPrices->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetYearlyHighLowPrices->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetYields::getIdentifiers()
	 * @uses XiBondsTypeGetYields::getIdentifierType()
	 * @uses XiBondsTypeGetYields::getPriceSource()
	 * @param XiBondsTypeGetYields GetYields
	 * @return XiBondsTypeGetYieldsResponse
	 */
	public function GetYields(XiBondsTypeGetYields $_XiBondsTypeGetYields)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYields(array('Identifiers'=>$_XiBondsTypeGetYields->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetYields->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetYields->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetAccruedInterests::getIdentifiers()
	 * @uses XiBondsTypeGetAccruedInterests::getIdentifierType()
	 * @uses XiBondsTypeGetAccruedInterests::getPriceSource()
	 * @param XiBondsTypeGetAccruedInterests GetAccruedInterests
	 * @return XiBondsTypeGetAccruedInterestsResponse
	 */
	public function GetAccruedInterests(XiBondsTypeGetAccruedInterests $_XiBondsTypeGetAccruedInterests)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccruedInterests(array('Identifiers'=>$_XiBondsTypeGetAccruedInterests->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetAccruedInterests->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetAccruedInterests->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetDurationAndConvexities::getIdentifiers()
	 * @uses XiBondsTypeGetDurationAndConvexities::getIdentifierType()
	 * @uses XiBondsTypeGetDurationAndConvexities::getPriceSource()
	 * @param XiBondsTypeGetDurationAndConvexities GetDurationAndConvexities
	 * @return XiBondsTypeGetDurationAndConvexitiesResponse
	 */
	public function GetDurationAndConvexities(XiBondsTypeGetDurationAndConvexities $_XiBondsTypeGetDurationAndConvexities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDurationAndConvexities(array('Identifiers'=>$_XiBondsTypeGetDurationAndConvexities->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetDurationAndConvexities->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetDurationAndConvexities->getPriceSource())));
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
	 * @uses XiBondsWsdlClass::getSoapClient()
	 * @uses XiBondsWsdlClass::setResult()
	 * @uses XiBondsWsdlClass::getResult()
	 * @uses XiBondsWsdlClass::saveLastError()
	 * @uses XiBondsTypeGetBondCalculations::getIdentifiers()
	 * @uses XiBondsTypeGetBondCalculations::getIdentifierType()
	 * @uses XiBondsTypeGetBondCalculations::getPriceSource()
	 * @param XiBondsTypeGetBondCalculations GetBondCalculations
	 * @return XiBondsTypeGetBondCalculationsResponse
	 */
	public function GetBondCalculations(XiBondsTypeGetBondCalculations $_XiBondsTypeGetBondCalculations)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBondCalculations(array('Identifiers'=>$_XiBondsTypeGetBondCalculations->getIdentifiers(),'IdentifierType'=>$_XiBondsTypeGetBondCalculations->getIdentifierType(),'PriceSource'=>$_XiBondsTypeGetBondCalculations->getPriceSource())));
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
	 * @return XiBondsTypeGetBondCalculationsResponse
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