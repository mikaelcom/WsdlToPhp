<?php
/**
 * Class file for XiHousingServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiHousingServiceGet
 * @date 08/07/2012
 */
class XiHousingServiceGet extends XiHousingWsdlClass
{
	/**
	 * Method to call GetHousingSales
	 * Meta informations :
	 * 	- documentation : Get housing sales data by region
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @uses XiHousingTypeGetHousingSales::getCategory()
	 * @uses XiHousingTypeGetHousingSales::getArea()
	 * @uses XiHousingTypeGetHousingSales::getStartDate()
	 * @uses XiHousingTypeGetHousingSales::getEndDate()
	 * @uses XiHousingTypeGetHousingSales::getPeriod()
	 * @param XiHousingTypeGetHousingSales GetHousingSales
	 * @return XiHousingTypeGetHousingSalesResponse
	 */
	public function GetHousingSales(XiHousingTypeGetHousingSales $_XiHousingTypeGetHousingSales)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHousingSales(array('Category'=>$_XiHousingTypeGetHousingSales->getCategory(),'Area'=>$_XiHousingTypeGetHousingSales->getArea(),'StartDate'=>$_XiHousingTypeGetHousingSales->getStartDate(),'EndDate'=>$_XiHousingTypeGetHousingSales->getEndDate(),'Period'=>$_XiHousingTypeGetHousingSales->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHousingSalesByState
	 * Meta informations :
	 * 	- documentation : Get housing sales data by state
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @uses XiHousingTypeGetHousingSalesByState::getCategory()
	 * @uses XiHousingTypeGetHousingSalesByState::getArea()
	 * @uses XiHousingTypeGetHousingSalesByState::getStartDate()
	 * @uses XiHousingTypeGetHousingSalesByState::getEndDate()
	 * @uses XiHousingTypeGetHousingSalesByState::getPeriod()
	 * @param XiHousingTypeGetHousingSalesByState GetHousingSalesByState
	 * @return XiHousingTypeGetHousingSalesByStateResponse
	 */
	public function GetHousingSalesByState(XiHousingTypeGetHousingSalesByState $_XiHousingTypeGetHousingSalesByState)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHousingSalesByState(array('Category'=>$_XiHousingTypeGetHousingSalesByState->getCategory(),'Area'=>$_XiHousingTypeGetHousingSalesByState->getArea(),'StartDate'=>$_XiHousingTypeGetHousingSalesByState->getStartDate(),'EndDate'=>$_XiHousingTypeGetHousingSalesByState->getEndDate(),'Period'=>$_XiHousingTypeGetHousingSalesByState->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHousingPrices
	 * Meta informations :
	 * 	- documentation : Get housing prices data by region
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @uses XiHousingTypeGetHousingPrices::getCategory()
	 * @uses XiHousingTypeGetHousingPrices::getArea()
	 * @uses XiHousingTypeGetHousingPrices::getStartDate()
	 * @uses XiHousingTypeGetHousingPrices::getEndDate()
	 * @uses XiHousingTypeGetHousingPrices::getPeriod()
	 * @param XiHousingTypeGetHousingPrices GetHousingPrices
	 * @return XiHousingTypeGetHousingPricesResponse
	 */
	public function GetHousingPrices(XiHousingTypeGetHousingPrices $_XiHousingTypeGetHousingPrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHousingPrices(array('Category'=>$_XiHousingTypeGetHousingPrices->getCategory(),'Area'=>$_XiHousingTypeGetHousingPrices->getArea(),'StartDate'=>$_XiHousingTypeGetHousingPrices->getStartDate(),'EndDate'=>$_XiHousingTypeGetHousingPrices->getEndDate(),'Period'=>$_XiHousingTypeGetHousingPrices->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHousingPricesByMetroArea
	 * Meta informations :
	 * 	- documentation : Get housing prices data records by metropolitian statistical areas
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @uses XiHousingTypeGetHousingPricesByMetroArea::getCategory()
	 * @uses XiHousingTypeGetHousingPricesByMetroArea::getArea()
	 * @uses XiHousingTypeGetHousingPricesByMetroArea::getStartDate()
	 * @uses XiHousingTypeGetHousingPricesByMetroArea::getEndDate()
	 * @uses XiHousingTypeGetHousingPricesByMetroArea::getPeriod()
	 * @param XiHousingTypeGetHousingPricesByMetroArea GetHousingPricesByMetroArea
	 * @return XiHousingTypeGetHousingPricesByMetroAreaResponse
	 */
	public function GetHousingPricesByMetroArea(XiHousingTypeGetHousingPricesByMetroArea $_XiHousingTypeGetHousingPricesByMetroArea)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHousingPricesByMetroArea(array('Category'=>$_XiHousingTypeGetHousingPricesByMetroArea->getCategory(),'Area'=>$_XiHousingTypeGetHousingPricesByMetroArea->getArea(),'StartDate'=>$_XiHousingTypeGetHousingPricesByMetroArea->getStartDate(),'EndDate'=>$_XiHousingTypeGetHousingPricesByMetroArea->getEndDate(),'Period'=>$_XiHousingTypeGetHousingPricesByMetroArea->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalIndicators
	 * Meta informations :
	 * 	- documentation : Get housing indicator data by region
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @uses XiHousingTypeGetHistoricalIndicators::getCategory()
	 * @uses XiHousingTypeGetHistoricalIndicators::getArea()
	 * @uses XiHousingTypeGetHistoricalIndicators::getStartDate()
	 * @uses XiHousingTypeGetHistoricalIndicators::getEndDate()
	 * @uses XiHousingTypeGetHistoricalIndicators::getPeriod()
	 * @param XiHousingTypeGetHistoricalIndicators GetHistoricalIndicators
	 * @return XiHousingTypeGetHistoricalIndicatorsResponse
	 */
	public function GetHistoricalIndicators(XiHousingTypeGetHistoricalIndicators $_XiHousingTypeGetHistoricalIndicators)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalIndicators(array('Category'=>$_XiHousingTypeGetHistoricalIndicators->getCategory(),'Area'=>$_XiHousingTypeGetHistoricalIndicators->getArea(),'StartDate'=>$_XiHousingTypeGetHistoricalIndicators->getStartDate(),'EndDate'=>$_XiHousingTypeGetHistoricalIndicators->getEndDate(),'Period'=>$_XiHousingTypeGetHistoricalIndicators->getPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHousingIndicators
	 * Meta informations :
	 * 	- documentation : Get indicators about the housing market.
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @param XiHousingTypeGetHousingIndicators GetHousingIndicators
	 * @return XiHousingTypeGetHousingIndicatorsResponse
	 */
	public function GetHousingIndicators(XiHousingTypeGetHousingIndicators $_XiHousingTypeGetHousingIndicators)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHousingIndicators(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetYearlyPermits
	 * Meta informations :
	 * 	- documentation : Get previous years housing permits per region and state.
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @uses XiHousingTypeGetYearlyPermits::getFromYear()
	 * @uses XiHousingTypeGetYearlyPermits::getToYear()
	 * @uses XiHousingTypeGetYearlyPermits::getOption()
	 * @uses XiHousingTypeGetYearlyPermits::getArea()
	 * @uses XiHousingTypeGetYearlyPermits::getIncludeSubAreas()
	 * @param XiHousingTypeGetYearlyPermits GetYearlyPermits
	 * @return XiHousingTypeGetYearlyPermitsResponse
	 */
	public function GetYearlyPermits(XiHousingTypeGetYearlyPermits $_XiHousingTypeGetYearlyPermits)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYearlyPermits(array('FromYear'=>$_XiHousingTypeGetYearlyPermits->getFromYear(),'ToYear'=>$_XiHousingTypeGetYearlyPermits->getToYear(),'Option'=>$_XiHousingTypeGetYearlyPermits->getOption(),'Area'=>$_XiHousingTypeGetYearlyPermits->getArea(),'IncludeSubAreas'=>$_XiHousingTypeGetYearlyPermits->getIncludeSubAreas())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMonthlyPermits
	 * Meta informations :
	 * 	- documentation : Get current year permit permits per region and state.
	 * @uses XiHousingWsdlClass::getSoapClient()
	 * @uses XiHousingWsdlClass::setResult()
	 * @uses XiHousingWsdlClass::getResult()
	 * @uses XiHousingWsdlClass::saveLastError()
	 * @uses XiHousingTypeGetMonthlyPermits::getFromDate()
	 * @uses XiHousingTypeGetMonthlyPermits::getToDate()
	 * @uses XiHousingTypeGetMonthlyPermits::getOption()
	 * @uses XiHousingTypeGetMonthlyPermits::getArea()
	 * @uses XiHousingTypeGetMonthlyPermits::getIncludeSubAreas()
	 * @param XiHousingTypeGetMonthlyPermits GetMonthlyPermits
	 * @return XiHousingTypeGetMonthlyPermitsResponse
	 */
	public function GetMonthlyPermits(XiHousingTypeGetMonthlyPermits $_XiHousingTypeGetMonthlyPermits)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMonthlyPermits(array('FromDate'=>$_XiHousingTypeGetMonthlyPermits->getFromDate(),'ToDate'=>$_XiHousingTypeGetMonthlyPermits->getToDate(),'Option'=>$_XiHousingTypeGetMonthlyPermits->getOption(),'Area'=>$_XiHousingTypeGetMonthlyPermits->getArea(),'IncludeSubAreas'=>$_XiHousingTypeGetMonthlyPermits->getIncludeSubAreas())));
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
	 * @return XiHousingTypeGetMonthlyPermitsResponse
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