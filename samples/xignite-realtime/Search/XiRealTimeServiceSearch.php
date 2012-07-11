<?php
/**
 * Class file for XiRealTimeServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeServiceSearch
 * @date 08/07/2012
 */
class XiRealTimeServiceSearch extends XiRealTimeWsdlClass
{
	/**
	 * Method to call SearchByMarketCap
	 * Meta informations :
	 * 	- documentation : Deprecated
	 * @uses XiRealTimeWsdlClass::getSoapClient()
	 * @uses XiRealTimeWsdlClass::setResult()
	 * @uses XiRealTimeWsdlClass::getResult()
	 * @uses XiRealTimeWsdlClass::saveLastError()
	 * @uses XiRealTimeTypeSearchByMarketCap::getExchange()
	 * @uses XiRealTimeTypeSearchByMarketCap::getPercentChange()
	 * @uses XiRealTimeTypeSearchByMarketCap::getMinimumMarketCap()
	 * @uses XiRealTimeTypeSearchByMarketCap::getMaximumMarketCap()
	 * @param XiRealTimeTypeSearchByMarketCap SearchByMarketCap
	 * @return XiRealTimeTypeSearchByMarketCapResponse
	 */
	public function SearchByMarketCap(XiRealTimeTypeSearchByMarketCap $_XiRealTimeTypeSearchByMarketCap)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchByMarketCap(array('Exchange'=>$_XiRealTimeTypeSearchByMarketCap->getExchange(),'PercentChange'=>$_XiRealTimeTypeSearchByMarketCap->getPercentChange(),'MinimumMarketCap'=>$_XiRealTimeTypeSearchByMarketCap->getMinimumMarketCap(),'MaximumMarketCap'=>$_XiRealTimeTypeSearchByMarketCap->getMaximumMarketCap())));
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
	 * @return XiRealTimeTypeSearchByMarketCapResponse
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