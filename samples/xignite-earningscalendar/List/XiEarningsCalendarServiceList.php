<?php
/**
 * Class file for XiEarningsCalendarServiceList
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarServiceList
 * @date 08/07/2012
 */
class XiEarningsCalendarServiceList extends XiEarningsCalendarWsdlClass
{
	/**
	 * Method to call ListCompanies
	 * Meta informations :
	 * 	- documentation : Returns the list of companies covered by the service.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeListCompanies::getExchange()
	 * @uses XiEarningsCalendarTypeListCompanies::getStartSymbol()
	 * @uses XiEarningsCalendarTypeListCompanies::getEndSymbol()
	 * @param XiEarningsCalendarTypeListCompanies ListCompanies
	 * @return XiEarningsCalendarTypeListCompaniesResponse
	 */
	public function ListCompanies(XiEarningsCalendarTypeListCompanies $_XiEarningsCalendarTypeListCompanies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListCompanies(array('Exchange'=>$_XiEarningsCalendarTypeListCompanies->getExchange(),'StartSymbol'=>$_XiEarningsCalendarTypeListCompanies->getStartSymbol(),'EndSymbol'=>$_XiEarningsCalendarTypeListCompanies->getEndSymbol())));
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
	 * @return XiEarningsCalendarTypeListCompaniesResponse
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