<?php
/**
 * Class file for XiCurrenciesServiceConvert
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesServiceConvert
 * @date 08/07/2012
 */
class XiCurrenciesServiceConvert extends XiCurrenciesWsdlClass
{
	/**
	 * Method to call ConvertRealTimeValue
	 * Meta informations :
	 * 	- documentation : Convert value from one currency to another in real-time.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeConvertRealTimeValue::getFrom()
	 * @uses XiCurrenciesTypeConvertRealTimeValue::getTo()
	 * @uses XiCurrenciesTypeConvertRealTimeValue::getAmount()
	 * @param XiCurrenciesTypeConvertRealTimeValue ConvertRealTimeValue
	 * @return XiCurrenciesTypeConvertRealTimeValueResponse
	 */
	public function ConvertRealTimeValue(XiCurrenciesTypeConvertRealTimeValue $_XiCurrenciesTypeConvertRealTimeValue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConvertRealTimeValue(array('From'=>$_XiCurrenciesTypeConvertRealTimeValue->getFrom(),'To'=>$_XiCurrenciesTypeConvertRealTimeValue->getTo(),'Amount'=>$_XiCurrenciesTypeConvertRealTimeValue->getAmount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ConvertHistoricalValue
	 * Meta informations :
	 * 	- documentation : Convert value from one currency to another as of a historical date.
	 * @uses XiCurrenciesWsdlClass::getSoapClient()
	 * @uses XiCurrenciesWsdlClass::setResult()
	 * @uses XiCurrenciesWsdlClass::getResult()
	 * @uses XiCurrenciesWsdlClass::saveLastError()
	 * @uses XiCurrenciesTypeConvertHistoricalValue::getFrom()
	 * @uses XiCurrenciesTypeConvertHistoricalValue::getTo()
	 * @uses XiCurrenciesTypeConvertHistoricalValue::getAsOfDate()
	 * @uses XiCurrenciesTypeConvertHistoricalValue::getAmount()
	 * @param XiCurrenciesTypeConvertHistoricalValue ConvertHistoricalValue
	 * @return XiCurrenciesTypeConvertHistoricalValueResponse
	 */
	public function ConvertHistoricalValue(XiCurrenciesTypeConvertHistoricalValue $_XiCurrenciesTypeConvertHistoricalValue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConvertHistoricalValue(array('From'=>$_XiCurrenciesTypeConvertHistoricalValue->getFrom(),'To'=>$_XiCurrenciesTypeConvertHistoricalValue->getTo(),'AsOfDate'=>$_XiCurrenciesTypeConvertHistoricalValue->getAsOfDate(),'Amount'=>$_XiCurrenciesTypeConvertHistoricalValue->getAmount())));
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
	 * @return XiCurrenciesTypeConvertHistoricalValueResponse
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