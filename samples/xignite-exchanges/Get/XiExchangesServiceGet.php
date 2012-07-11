<?php
/**
 * Class file for XiExchangesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiExchangesServiceGet
 * @date 08/07/2012
 */
class XiExchangesServiceGet extends XiExchangesWsdlClass
{
	/**
	 * Method to call GetExchangeDate
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeDate::getExchange()
	 * @param XiExchangesTypeGetExchangeDate GetExchangeDate
	 * @return XiExchangesTypeGetExchangeDateResponse
	 */
	public function GetExchangeDate(XiExchangesTypeGetExchangeDate $_XiExchangesTypeGetExchangeDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeDate(array('Exchange'=>$_XiExchangesTypeGetExchangeDate->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeDay
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeDay::getExchange()
	 * @param XiExchangesTypeGetExchangeDay GetExchangeDay
	 * @return XiExchangesTypeGetExchangeDayResponse
	 */
	public function GetExchangeDay(XiExchangesTypeGetExchangeDay $_XiExchangesTypeGetExchangeDay)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeDay(array('Exchange'=>$_XiExchangesTypeGetExchangeDay->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeDayCount
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeDayCount::getExchange()
	 * @uses XiExchangesTypeGetExchangeDayCount::getStartDate()
	 * @uses XiExchangesTypeGetExchangeDayCount::getEndDate()
	 * @param XiExchangesTypeGetExchangeDayCount GetExchangeDayCount
	 * @return XiExchangesTypeGetExchangeDayCountResponse
	 */
	public function GetExchangeDayCount(XiExchangesTypeGetExchangeDayCount $_XiExchangesTypeGetExchangeDayCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeDayCount(array('Exchange'=>$_XiExchangesTypeGetExchangeDayCount->getExchange(),'StartDate'=>$_XiExchangesTypeGetExchangeDayCount->getStartDate(),'EndDate'=>$_XiExchangesTypeGetExchangeDayCount->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeTime
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeTime::getExchange()
	 * @param XiExchangesTypeGetExchangeTime GetExchangeTime
	 * @return XiExchangesTypeGetExchangeTimeResponse
	 */
	public function GetExchangeTime(XiExchangesTypeGetExchangeTime $_XiExchangesTypeGetExchangeTime)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeTime(array('Exchange'=>$_XiExchangesTypeGetExchangeTime->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchanges
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @param XiExchangesTypeGetExchanges GetExchanges
	 * @return XiExchangesTypeGetExchangesResponse
	 */
	public function GetExchanges(XiExchangesTypeGetExchanges $_XiExchangesTypeGetExchanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchanges(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNextExchangeDate
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetNextExchangeDate::getExchange()
	 * @uses XiExchangesTypeGetNextExchangeDate::getForDate()
	 * @param XiExchangesTypeGetNextExchangeDate GetNextExchangeDate
	 * @return XiExchangesTypeGetNextExchangeDateResponse
	 */
	public function GetNextExchangeDate(XiExchangesTypeGetNextExchangeDate $_XiExchangesTypeGetNextExchangeDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNextExchangeDate(array('Exchange'=>$_XiExchangesTypeGetNextExchangeDate->getExchange(),'ForDate'=>$_XiExchangesTypeGetNextExchangeDate->getForDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPriorExchangeDate
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetPriorExchangeDate::getExchange()
	 * @uses XiExchangesTypeGetPriorExchangeDate::getForDate()
	 * @param XiExchangesTypeGetPriorExchangeDate GetPriorExchangeDate
	 * @return XiExchangesTypeGetPriorExchangeDateResponse
	 */
	public function GetPriorExchangeDate(XiExchangesTypeGetPriorExchangeDate $_XiExchangesTypeGetPriorExchangeDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPriorExchangeDate(array('Exchange'=>$_XiExchangesTypeGetPriorExchangeDate->getExchange(),'ForDate'=>$_XiExchangesTypeGetPriorExchangeDate->getForDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSettlementDate
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetSettlementDate::getExchange()
	 * @uses XiExchangesTypeGetSettlementDate::getTradeDate()
	 * @param XiExchangesTypeGetSettlementDate GetSettlementDate
	 * @return XiExchangesTypeGetSettlementDateResponse
	 */
	public function GetSettlementDate(XiExchangesTypeGetSettlementDate $_XiExchangesTypeGetSettlementDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSettlementDate(array('Exchange'=>$_XiExchangesTypeGetSettlementDate->getExchange(),'TradeDate'=>$_XiExchangesTypeGetSettlementDate->getTradeDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeHolidays
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeHolidays::getExchange()
	 * @uses XiExchangesTypeGetExchangeHolidays::getStartDate()
	 * @uses XiExchangesTypeGetExchangeHolidays::getEndDate()
	 * @param XiExchangesTypeGetExchangeHolidays GetExchangeHolidays
	 * @return XiExchangesTypeGetExchangeHolidaysResponse
	 */
	public function GetExchangeHolidays(XiExchangesTypeGetExchangeHolidays $_XiExchangesTypeGetExchangeHolidays)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeHolidays(array('Exchange'=>$_XiExchangesTypeGetExchangeHolidays->getExchange(),'StartDate'=>$_XiExchangesTypeGetExchangeHolidays->getStartDate(),'EndDate'=>$_XiExchangesTypeGetExchangeHolidays->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeHours
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeHours::getExchange()
	 * @uses XiExchangesTypeGetExchangeHours::getAsOfDate()
	 * @param XiExchangesTypeGetExchangeHours GetExchangeHours
	 * @return XiExchangesTypeGetExchangeHoursResponse
	 */
	public function GetExchangeHours(XiExchangesTypeGetExchangeHours $_XiExchangesTypeGetExchangeHours)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeHours(array('Exchange'=>$_XiExchangesTypeGetExchangeHours->getExchange(),'AsOfDate'=>$_XiExchangesTypeGetExchangeHours->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeHoursRange
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeHoursRange::getExchange()
	 * @uses XiExchangesTypeGetExchangeHoursRange::getStartDate()
	 * @uses XiExchangesTypeGetExchangeHoursRange::getEndDate()
	 * @param XiExchangesTypeGetExchangeHoursRange GetExchangeHoursRange
	 * @return XiExchangesTypeGetExchangeHoursRangeResponse
	 */
	public function GetExchangeHoursRange(XiExchangesTypeGetExchangeHoursRange $_XiExchangesTypeGetExchangeHoursRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeHoursRange(array('Exchange'=>$_XiExchangesTypeGetExchangeHoursRange->getExchange(),'StartDate'=>$_XiExchangesTypeGetExchangeHoursRange->getStartDate(),'EndDate'=>$_XiExchangesTypeGetExchangeHoursRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeHoursUTC
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeHoursUTC::getExchange()
	 * @uses XiExchangesTypeGetExchangeHoursUTC::getAsOfDate()
	 * @param XiExchangesTypeGetExchangeHoursUTC GetExchangeHoursUTC
	 * @return XiExchangesTypeGetExchangeHoursUTCResponse
	 */
	public function GetExchangeHoursUTC(XiExchangesTypeGetExchangeHoursUTC $_XiExchangesTypeGetExchangeHoursUTC)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeHoursUTC(array('Exchange'=>$_XiExchangesTypeGetExchangeHoursUTC->getExchange(),'AsOfDate'=>$_XiExchangesTypeGetExchangeHoursUTC->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeHoursUTCRange
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeGetExchangeHoursUTCRange::getExchange()
	 * @uses XiExchangesTypeGetExchangeHoursUTCRange::getStartDate()
	 * @uses XiExchangesTypeGetExchangeHoursUTCRange::getEndDate()
	 * @param XiExchangesTypeGetExchangeHoursUTCRange GetExchangeHoursUTCRange
	 * @return XiExchangesTypeGetExchangeHoursUTCRangeResponse
	 */
	public function GetExchangeHoursUTCRange(XiExchangesTypeGetExchangeHoursUTCRange $_XiExchangesTypeGetExchangeHoursUTCRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeHoursUTCRange(array('Exchange'=>$_XiExchangesTypeGetExchangeHoursUTCRange->getExchange(),'StartDate'=>$_XiExchangesTypeGetExchangeHoursUTCRange->getStartDate(),'EndDate'=>$_XiExchangesTypeGetExchangeHoursUTCRange->getEndDate())));
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
	 * @return XiExchangesTypeGetExchangeHoursUTCRangeResponse
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