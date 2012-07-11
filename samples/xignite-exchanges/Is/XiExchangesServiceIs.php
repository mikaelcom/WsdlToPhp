<?php
/**
 * Class file for XiExchangesServiceIs
 * @date 08/07/2012
 */
/**
 * Class XiExchangesServiceIs
 * @date 08/07/2012
 */
class XiExchangesServiceIs extends XiExchangesWsdlClass
{
	/**
	 * Method to call IsExchangeHoliday
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeIsExchangeHoliday::getExchange()
	 * @uses XiExchangesTypeIsExchangeHoliday::getForDate()
	 * @param XiExchangesTypeIsExchangeHoliday IsExchangeHoliday
	 * @return XiExchangesTypeIsExchangeHolidayResponse
	 */
	public function IsExchangeHoliday(XiExchangesTypeIsExchangeHoliday $_XiExchangesTypeIsExchangeHoliday)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsExchangeHoliday(array('Exchange'=>$_XiExchangesTypeIsExchangeHoliday->getExchange(),'ForDate'=>$_XiExchangesTypeIsExchangeHoliday->getForDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call IsExchangeOpen
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeIsExchangeOpen::getExchange()
	 * @param XiExchangesTypeIsExchangeOpen IsExchangeOpen
	 * @return XiExchangesTypeIsExchangeOpenResponse
	 */
	public function IsExchangeOpen(XiExchangesTypeIsExchangeOpen $_XiExchangesTypeIsExchangeOpen)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsExchangeOpen(array('Exchange'=>$_XiExchangesTypeIsExchangeOpen->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call IsExchangeOpenOnDate
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeIsExchangeOpenOnDate::getExchange()
	 * @uses XiExchangesTypeIsExchangeOpenOnDate::getOnDate()
	 * @param XiExchangesTypeIsExchangeOpenOnDate IsExchangeOpenOnDate
	 * @return XiExchangesTypeIsExchangeOpenOnDateResponse
	 */
	public function IsExchangeOpenOnDate(XiExchangesTypeIsExchangeOpenOnDate $_XiExchangesTypeIsExchangeOpenOnDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsExchangeOpenOnDate(array('Exchange'=>$_XiExchangesTypeIsExchangeOpenOnDate->getExchange(),'OnDate'=>$_XiExchangesTypeIsExchangeOpenOnDate->getOnDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call IsValidExchange
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeIsValidExchange::getExchange()
	 * @param XiExchangesTypeIsValidExchange IsValidExchange
	 * @return XiExchangesTypeIsValidExchangeResponse
	 */
	public function IsValidExchange(XiExchangesTypeIsValidExchange $_XiExchangesTypeIsValidExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsValidExchange(array('Exchange'=>$_XiExchangesTypeIsValidExchange->getExchange())));
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
	 * @return XiExchangesTypeIsValidExchangeResponse
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