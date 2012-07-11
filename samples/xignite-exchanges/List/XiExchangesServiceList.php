<?php
/**
 * Class file for XiExchangesServiceList
 * @date 08/07/2012
 */
/**
 * Class XiExchangesServiceList
 * @date 08/07/2012
 */
class XiExchangesServiceList extends XiExchangesWsdlClass
{
	/**
	 * Method to call ListHolidays
	 * @uses XiExchangesWsdlClass::getSoapClient()
	 * @uses XiExchangesWsdlClass::setResult()
	 * @uses XiExchangesWsdlClass::getResult()
	 * @uses XiExchangesWsdlClass::saveLastError()
	 * @uses XiExchangesTypeListHolidays::getExchange()
	 * @uses XiExchangesTypeListHolidays::getForYear()
	 * @param XiExchangesTypeListHolidays ListHolidays
	 * @return XiExchangesTypeListHolidaysResponse
	 */
	public function ListHolidays(XiExchangesTypeListHolidays $_XiExchangesTypeListHolidays)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListHolidays(array('Exchange'=>$_XiExchangesTypeListHolidays->getExchange(),'ForYear'=>$_XiExchangesTypeListHolidays->getForYear())));
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
	 * @return XiExchangesTypeListHolidaysResponse
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