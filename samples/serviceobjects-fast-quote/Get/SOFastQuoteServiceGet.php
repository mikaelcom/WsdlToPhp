<?php
/**
 * Class file for SOFastQuoteServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteServiceGet
 * @date 08/07/2012
 */
class SOFastQuoteServiceGet extends SOFastQuoteWsdlClass
{
	/**
	 * Method to call GetStockInfo
	 * Meta informations :
	 * 	- documentation : Returns stock information for a given stock ticker.<br/>NYSE and AMEX quotes are delayed by at least 20 minutes.<br/>All other quotes are delayed by at least 15 minutes.
	 * @uses SOFastQuoteWsdlClass::getSoapClient()
	 * @uses SOFastQuoteWsdlClass::setResult()
	 * @uses SOFastQuoteWsdlClass::getResult()
	 * @uses SOFastQuoteWsdlClass::saveLastError()
	 * @uses SOFastQuoteTypeGetStockInfo::getTicker()
	 * @uses SOFastQuoteTypeGetStockInfo::getLicenseKey()
	 * @param SOFastQuoteTypeGetStockInfo GetStockInfo
	 * @return SOFastQuoteTypeGetStockInfoResponse
	 */
	public function GetStockInfo(SOFastQuoteTypeGetStockInfo $_SOFastQuoteTypeGetStockInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStockInfo(array('Ticker'=>$_SOFastQuoteTypeGetStockInfo->getTicker(),'LicenseKey'=>$_SOFastQuoteTypeGetStockInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOTCStockInfo
	 * Meta informations :
	 * 	- documentation : Returns OTC Bulleting Board Market stock information.<br/>Quotes are delayed by at least 15 minutes.
	 * @uses SOFastQuoteWsdlClass::getSoapClient()
	 * @uses SOFastQuoteWsdlClass::setResult()
	 * @uses SOFastQuoteWsdlClass::getResult()
	 * @uses SOFastQuoteWsdlClass::saveLastError()
	 * @uses SOFastQuoteTypeGetOTCStockInfo::getTicker()
	 * @uses SOFastQuoteTypeGetOTCStockInfo::getLicenseKey()
	 * @param SOFastQuoteTypeGetOTCStockInfo GetOTCStockInfo
	 * @return SOFastQuoteTypeGetOTCStockInfoResponse
	 */
	public function GetOTCStockInfo(SOFastQuoteTypeGetOTCStockInfo $_SOFastQuoteTypeGetOTCStockInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOTCStockInfo(array('Ticker'=>$_SOFastQuoteTypeGetOTCStockInfo->getTicker(),'LicenseKey'=>$_SOFastQuoteTypeGetOTCStockInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetInternationalStockInfo
	 * Meta informations :
	 * 	- documentation : Returns international stock information.<br/>Quotes are delayed by at least 15 minutes.<br/><!--<br/>Currently supports the following tickers:<br/>London:BNZL<br/>Berlin:BNZL<br/>EC:BNZL<br/>Stuttgart:BNZL<br/>American:YHOO<br/>BuenossAires:YHOO<br/>Bremen:YHOO<br/>Cincinnati:YHOO<br/>Dusseldorf:YHOO<br/>Xetra:YHOO<br/>Frankfurt:YHOO<br/>Hamburg:YHOO<br/>Hanover:YHOO<br/>Lima:YHOO<br/>Munich:YHOO<br/>Chicago:YHOO<br/>-->
	 * @uses SOFastQuoteWsdlClass::getSoapClient()
	 * @uses SOFastQuoteWsdlClass::setResult()
	 * @uses SOFastQuoteWsdlClass::getResult()
	 * @uses SOFastQuoteWsdlClass::saveLastError()
	 * @uses SOFastQuoteTypeGetInternationalStockInfo::getTicker()
	 * @uses SOFastQuoteTypeGetInternationalStockInfo::getLicenseKey()
	 * @param SOFastQuoteTypeGetInternationalStockInfo GetInternationalStockInfo
	 * @return SOFastQuoteTypeGetInternationalStockInfoResponse
	 */
	public function GetInternationalStockInfo(SOFastQuoteTypeGetInternationalStockInfo $_SOFastQuoteTypeGetInternationalStockInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetInternationalStockInfo(array('Ticker'=>$_SOFastQuoteTypeGetInternationalStockInfo->getTicker(),'LicenseKey'=>$_SOFastQuoteTypeGetInternationalStockInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIndexInfo
	 * Meta informations :
	 * 	- documentation : Returns index information.<br/>Quotes are delayed by at least 15 minutes.<br/><!--<br/>Currently supports the following tickers:<br/>London:BNZL<br/>Berlin:BNZL<br/>EC:BNZL<br/>Stuttgart:BNZL<br/>American:YHOO<br/>BuenossAires:YHOO<br/>Bremen:YHOO<br/>Cincinnati:YHOO<br/>Dusseldorf:YHOO<br/>Xetra:YHOO<br/>Frankfurt:YHOO<br/>Hamburg:YHOO<br/>Hanover:YHOO<br/>Lima:YHOO<br/>Munich:YHOO<br/>Chicago:YHOO<br/>-->
	 * @uses SOFastQuoteWsdlClass::getSoapClient()
	 * @uses SOFastQuoteWsdlClass::setResult()
	 * @uses SOFastQuoteWsdlClass::getResult()
	 * @uses SOFastQuoteWsdlClass::saveLastError()
	 * @uses SOFastQuoteTypeGetIndexInfo::getTicker()
	 * @uses SOFastQuoteTypeGetIndexInfo::getLicenseKey()
	 * @param SOFastQuoteTypeGetIndexInfo GetIndexInfo
	 * @return SOFastQuoteTypeGetIndexInfoResponse
	 */
	public function GetIndexInfo(SOFastQuoteTypeGetIndexInfo $_SOFastQuoteTypeGetIndexInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIndexInfo(array('Ticker'=>$_SOFastQuoteTypeGetIndexInfo->getTicker(),'LicenseKey'=>$_SOFastQuoteTypeGetIndexInfo->getLicenseKey())));
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
	 * @return SOFastQuoteTypeGetIndexInfoResponse
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