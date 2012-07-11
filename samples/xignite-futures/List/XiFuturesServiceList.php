<?php
/**
 * Class file for XiFuturesServiceList
 * @date 08/07/2012
 */
/**
 * Class XiFuturesServiceList
 * @date 08/07/2012
 */
class XiFuturesServiceList extends XiFuturesWsdlClass
{
	/**
	 * Method to call ListExchanges
	 * Meta informations :
	 * 	- documentation : List commmodities future exchanges and indicates which ones are supported.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @param XiFuturesTypeListExchanges ListExchanges
	 * @return XiFuturesTypeListExchangesResponse
	 */
	public function ListExchanges(XiFuturesTypeListExchanges $_XiFuturesTypeListExchanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListExchanges(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListFutureCategories
	 * Meta informations :
	 * 	- documentation : List commmodities future categories.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @param XiFuturesTypeListFutureCategories ListFutureCategories
	 * @return XiFuturesTypeListFutureCategoriesResponse
	 */
	public function ListFutureCategories(XiFuturesTypeListFutureCategories $_XiFuturesTypeListFutureCategories)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFutureCategories(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListSwaps
	 * Meta informations :
	 * 	- documentation : List all commodity swaps and the exchange on which they are traded.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @param XiFuturesTypeListSwaps ListSwaps
	 * @return XiFuturesTypeListSwapsResponse
	 */
	public function ListSwaps(XiFuturesTypeListSwaps $_XiFuturesTypeListSwaps)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListSwaps(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListFutures
	 * Meta informations :
	 * 	- documentation : List all commodity futures and the exchange on which they are traded.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @param XiFuturesTypeListFutures ListFutures
	 * @return XiFuturesTypeListFuturesResponse
	 */
	public function ListFutures(XiFuturesTypeListFutures $_XiFuturesTypeListFutures)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFutures(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListFrontMonthContracts
	 * Meta informations :
	 * 	- documentation : List all commodity future Front Month Contracts.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @param XiFuturesTypeListFrontMonthContracts ListFrontMonthContracts
	 * @return XiFuturesTypeListFrontMonthContractsResponse
	 */
	public function ListFrontMonthContracts(XiFuturesTypeListFrontMonthContracts $_XiFuturesTypeListFrontMonthContracts)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFrontMonthContracts(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListFuturesByCategory
	 * Meta informations :
	 * 	- documentation : List futures information by byfuture category.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeListFuturesByCategory::getCategory()
	 * @param XiFuturesTypeListFuturesByCategory ListFuturesByCategory
	 * @return XiFuturesTypeListFuturesByCategoryResponse
	 */
	public function ListFuturesByCategory(XiFuturesTypeListFuturesByCategory $_XiFuturesTypeListFuturesByCategory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFuturesByCategory(array('Category'=>$_XiFuturesTypeListFuturesByCategory->getCategory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListFuturesByExchange
	 * Meta informations :
	 * 	- documentation : List futures information by exchange.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeListFuturesByExchange::getExchange()
	 * @param XiFuturesTypeListFuturesByExchange ListFuturesByExchange
	 * @return XiFuturesTypeListFuturesByExchangeResponse
	 */
	public function ListFuturesByExchange(XiFuturesTypeListFuturesByExchange $_XiFuturesTypeListFuturesByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFuturesByExchange(array('Exchange'=>$_XiFuturesTypeListFuturesByExchange->getExchange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListSwapsByExchange
	 * Meta informations :
	 * 	- documentation : List swaps information by exchange.
	 * @uses XiFuturesWsdlClass::getSoapClient()
	 * @uses XiFuturesWsdlClass::setResult()
	 * @uses XiFuturesWsdlClass::getResult()
	 * @uses XiFuturesWsdlClass::saveLastError()
	 * @uses XiFuturesTypeListSwapsByExchange::getExchange()
	 * @param XiFuturesTypeListSwapsByExchange ListSwapsByExchange
	 * @return XiFuturesTypeListSwapsByExchangeResponse
	 */
	public function ListSwapsByExchange(XiFuturesTypeListSwapsByExchange $_XiFuturesTypeListSwapsByExchange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListSwapsByExchange(array('Exchange'=>$_XiFuturesTypeListSwapsByExchange->getExchange())));
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
	 * @return XiFuturesTypeListSwapsByExchangeResponse
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