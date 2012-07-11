<?php
/**
 * Class file for XiVWAPServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiVWAPServiceGet
 * @date 08/07/2012
 */
class XiVWAPServiceGet extends XiVWAPWsdlClass
{
	/**
	 * Method to call GetHistoricalVWAP
	 * Meta informations :
	 * 	- documentation : Returns historical VWAP information for a date range
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetHistoricalVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetHistoricalVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetHistoricalVWAP::getHistoricalVWAPType()
	 * @uses XiVWAPTypeGetHistoricalVWAP::getStartDate()
	 * @uses XiVWAPTypeGetHistoricalVWAP::getEndDate()
	 * @param XiVWAPTypeGetHistoricalVWAP GetHistoricalVWAP
	 * @return XiVWAPTypeGetHistoricalVWAPResponse
	 */
	public function GetHistoricalVWAP(XiVWAPTypeGetHistoricalVWAP $_XiVWAPTypeGetHistoricalVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalVWAP(array('Identifier'=>$_XiVWAPTypeGetHistoricalVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetHistoricalVWAP->getIdentifierType(),'HistoricalVWAPType'=>$_XiVWAPTypeGetHistoricalVWAP->getHistoricalVWAPType(),'StartDate'=>$_XiVWAPTypeGetHistoricalVWAP->getStartDate(),'EndDate'=>$_XiVWAPTypeGetHistoricalVWAP->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalDailyVWAP
	 * Meta informations :
	 * 	- documentation : Returns historical daily VWAP information for a date range
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetHistoricalDailyVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetHistoricalDailyVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetHistoricalDailyVWAP::getStartDate()
	 * @uses XiVWAPTypeGetHistoricalDailyVWAP::getEndDate()
	 * @param XiVWAPTypeGetHistoricalDailyVWAP GetHistoricalDailyVWAP
	 * @return XiVWAPTypeGetHistoricalDailyVWAPResponse
	 */
	public function GetHistoricalDailyVWAP(XiVWAPTypeGetHistoricalDailyVWAP $_XiVWAPTypeGetHistoricalDailyVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalDailyVWAP(array('Identifier'=>$_XiVWAPTypeGetHistoricalDailyVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetHistoricalDailyVWAP->getIdentifierType(),'StartDate'=>$_XiVWAPTypeGetHistoricalDailyVWAP->getStartDate(),'EndDate'=>$_XiVWAPTypeGetHistoricalDailyVWAP->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMonthlyVWAP
	 * Meta informations :
	 * 	- documentation : Returns historical monthly VWAP information for a date range.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetHistoricalMonthlyVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetHistoricalMonthlyVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetHistoricalMonthlyVWAP::getStartDate()
	 * @uses XiVWAPTypeGetHistoricalMonthlyVWAP::getEndDate()
	 * @param XiVWAPTypeGetHistoricalMonthlyVWAP GetHistoricalMonthlyVWAP
	 * @return XiVWAPTypeGetHistoricalMonthlyVWAPResponse
	 */
	public function GetHistoricalMonthlyVWAP(XiVWAPTypeGetHistoricalMonthlyVWAP $_XiVWAPTypeGetHistoricalMonthlyVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMonthlyVWAP(array('Identifier'=>$_XiVWAPTypeGetHistoricalMonthlyVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetHistoricalMonthlyVWAP->getIdentifierType(),'StartDate'=>$_XiVWAPTypeGetHistoricalMonthlyVWAP->getStartDate(),'EndDate'=>$_XiVWAPTypeGetHistoricalMonthlyVWAP->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalWeeklyVWAP
	 * Meta informations :
	 * 	- documentation : Returns historical weekly VWAP information for a date range.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetHistoricalWeeklyVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetHistoricalWeeklyVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetHistoricalWeeklyVWAP::getStartDate()
	 * @uses XiVWAPTypeGetHistoricalWeeklyVWAP::getEndDate()
	 * @param XiVWAPTypeGetHistoricalWeeklyVWAP GetHistoricalWeeklyVWAP
	 * @return XiVWAPTypeGetHistoricalWeeklyVWAPResponse
	 */
	public function GetHistoricalWeeklyVWAP(XiVWAPTypeGetHistoricalWeeklyVWAP $_XiVWAPTypeGetHistoricalWeeklyVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalWeeklyVWAP(array('Identifier'=>$_XiVWAPTypeGetHistoricalWeeklyVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetHistoricalWeeklyVWAP->getIdentifierType(),'StartDate'=>$_XiVWAPTypeGetHistoricalWeeklyVWAP->getStartDate(),'EndDate'=>$_XiVWAPTypeGetHistoricalWeeklyVWAP->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalPeriodVWAP
	 * Meta informations :
	 * 	- documentation : Returns historical VWAP information for a date range.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetHistoricalPeriodVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetHistoricalPeriodVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetHistoricalPeriodVWAP::getStartDate()
	 * @uses XiVWAPTypeGetHistoricalPeriodVWAP::getEndDate()
	 * @param XiVWAPTypeGetHistoricalPeriodVWAP GetHistoricalPeriodVWAP
	 * @return XiVWAPTypeGetHistoricalPeriodVWAPResponse
	 */
	public function GetHistoricalPeriodVWAP(XiVWAPTypeGetHistoricalPeriodVWAP $_XiVWAPTypeGetHistoricalPeriodVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalPeriodVWAP(array('Identifier'=>$_XiVWAPTypeGetHistoricalPeriodVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetHistoricalPeriodVWAP->getIdentifierType(),'StartDate'=>$_XiVWAPTypeGetHistoricalPeriodVWAP->getStartDate(),'EndDate'=>$_XiVWAPTypeGetHistoricalPeriodVWAP->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIntradayVWAP
	 * Meta informations :
	 * 	- documentation : Returns an intraday VWAP for a security based on the trades performed in a time range.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetIntradayVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetIntradayVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetIntradayVWAP::getStartTime()
	 * @uses XiVWAPTypeGetIntradayVWAP::getEndTime()
	 * @param XiVWAPTypeGetIntradayVWAP GetIntradayVWAP
	 * @return XiVWAPTypeGetIntradayVWAPResponse
	 */
	public function GetIntradayVWAP(XiVWAPTypeGetIntradayVWAP $_XiVWAPTypeGetIntradayVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIntradayVWAP(array('Identifier'=>$_XiVWAPTypeGetIntradayVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetIntradayVWAP->getIdentifierType(),'StartTime'=>$_XiVWAPTypeGetIntradayVWAP->getStartTime(),'EndTime'=>$_XiVWAPTypeGetIntradayVWAP->getEndTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalIntradayVWAP
	 * Meta informations :
	 * 	- documentation : Returns a historical intraday VWAP for a security based on the trades performed in a time range.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetHistoricalIntradayVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetHistoricalIntradayVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetHistoricalIntradayVWAP::getAsOfDate()
	 * @uses XiVWAPTypeGetHistoricalIntradayVWAP::getStartTime()
	 * @uses XiVWAPTypeGetHistoricalIntradayVWAP::getEndTime()
	 * @param XiVWAPTypeGetHistoricalIntradayVWAP GetHistoricalIntradayVWAP
	 * @return XiVWAPTypeGetHistoricalIntradayVWAPResponse
	 */
	public function GetHistoricalIntradayVWAP(XiVWAPTypeGetHistoricalIntradayVWAP $_XiVWAPTypeGetHistoricalIntradayVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalIntradayVWAP(array('Identifier'=>$_XiVWAPTypeGetHistoricalIntradayVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetHistoricalIntradayVWAP->getIdentifierType(),'AsOfDate'=>$_XiVWAPTypeGetHistoricalIntradayVWAP->getAsOfDate(),'StartTime'=>$_XiVWAPTypeGetHistoricalIntradayVWAP->getStartTime(),'EndTime'=>$_XiVWAPTypeGetHistoricalIntradayVWAP->getEndTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCorporateIntradayVWAP
	 * Meta informations :
	 * 	- documentation : Returns a corporate intraday VWAP for a security based on the trades performed in a time range.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetCorporateIntradayVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetCorporateIntradayVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetCorporateIntradayVWAP::getStartTime()
	 * @uses XiVWAPTypeGetCorporateIntradayVWAP::getEndTime()
	 * @param XiVWAPTypeGetCorporateIntradayVWAP GetCorporateIntradayVWAP
	 * @return XiVWAPTypeGetCorporateIntradayVWAPResponse
	 */
	public function GetCorporateIntradayVWAP(XiVWAPTypeGetCorporateIntradayVWAP $_XiVWAPTypeGetCorporateIntradayVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCorporateIntradayVWAP(array('Identifier'=>$_XiVWAPTypeGetCorporateIntradayVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetCorporateIntradayVWAP->getIdentifierType(),'StartTime'=>$_XiVWAPTypeGetCorporateIntradayVWAP->getStartTime(),'EndTime'=>$_XiVWAPTypeGetCorporateIntradayVWAP->getEndTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCorporateHistoricalVWAP
	 * Meta informations :
	 * 	- documentation : Returns a corporate intraday VWAP for a security based on the trades performed in a time range.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetCorporateHistoricalVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetCorporateHistoricalVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetCorporateHistoricalVWAP::getAsOfDate()
	 * @uses XiVWAPTypeGetCorporateHistoricalVWAP::getStartTime()
	 * @uses XiVWAPTypeGetCorporateHistoricalVWAP::getEndTime()
	 * @param XiVWAPTypeGetCorporateHistoricalVWAP GetCorporateHistoricalVWAP
	 * @return XiVWAPTypeGetCorporateHistoricalVWAPResponse
	 */
	public function GetCorporateHistoricalVWAP(XiVWAPTypeGetCorporateHistoricalVWAP $_XiVWAPTypeGetCorporateHistoricalVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCorporateHistoricalVWAP(array('Identifier'=>$_XiVWAPTypeGetCorporateHistoricalVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetCorporateHistoricalVWAP->getIdentifierType(),'AsOfDate'=>$_XiVWAPTypeGetCorporateHistoricalVWAP->getAsOfDate(),'StartTime'=>$_XiVWAPTypeGetCorporateHistoricalVWAP->getStartTime(),'EndTime'=>$_XiVWAPTypeGetCorporateHistoricalVWAP->getEndTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDelayedVWAP
	 * Meta informations :
	 * 	- documentation : Returns an intraday VWAP for a security based on all trades for the day up to the 15/20 minutes delayed quote.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetDelayedVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetDelayedVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetDelayedVWAP::getIncludeBeforeMarket()
	 * @uses XiVWAPTypeGetDelayedVWAP::getIncludeAfterMarket()
	 * @param XiVWAPTypeGetDelayedVWAP GetDelayedVWAP
	 * @return XiVWAPTypeGetDelayedVWAPResponse
	 */
	public function GetDelayedVWAP(XiVWAPTypeGetDelayedVWAP $_XiVWAPTypeGetDelayedVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDelayedVWAP(array('Identifier'=>$_XiVWAPTypeGetDelayedVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetDelayedVWAP->getIdentifierType(),'IncludeBeforeMarket'=>$_XiVWAPTypeGetDelayedVWAP->getIncludeBeforeMarket(),'IncludeAfterMarket'=>$_XiVWAPTypeGetDelayedVWAP->getIncludeAfterMarket())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeVWAP
	 * Meta informations :
	 * 	- documentation : Returns a real-time VWAP for a security based on all INET trades.
	 * @uses XiVWAPWsdlClass::getSoapClient()
	 * @uses XiVWAPWsdlClass::setResult()
	 * @uses XiVWAPWsdlClass::getResult()
	 * @uses XiVWAPWsdlClass::saveLastError()
	 * @uses XiVWAPTypeGetRealTimeVWAP::getIdentifier()
	 * @uses XiVWAPTypeGetRealTimeVWAP::getIdentifierType()
	 * @uses XiVWAPTypeGetRealTimeVWAP::getIncludeBeforeMarket()
	 * @uses XiVWAPTypeGetRealTimeVWAP::getIncludeAfterMarket()
	 * @param XiVWAPTypeGetRealTimeVWAP GetRealTimeVWAP
	 * @return XiVWAPTypeGetRealTimeVWAPResponse
	 */
	public function GetRealTimeVWAP(XiVWAPTypeGetRealTimeVWAP $_XiVWAPTypeGetRealTimeVWAP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeVWAP(array('Identifier'=>$_XiVWAPTypeGetRealTimeVWAP->getIdentifier(),'IdentifierType'=>$_XiVWAPTypeGetRealTimeVWAP->getIdentifierType(),'IncludeBeforeMarket'=>$_XiVWAPTypeGetRealTimeVWAP->getIncludeBeforeMarket(),'IncludeAfterMarket'=>$_XiVWAPTypeGetRealTimeVWAP->getIncludeAfterMarket())));
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
	 * @return XiVWAPTypeGetRealTimeVWAPResponse
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