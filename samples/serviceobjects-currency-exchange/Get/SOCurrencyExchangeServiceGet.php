<?php
/**
 * Class file for SOCurrencyExchangeServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeServiceGet
 * @date 08/07/2012
 */
class SOCurrencyExchangeServiceGet extends SOCurrencyExchangeWsdlClass
{
	/**
	 * Method to call GetAllCurrencies
	 * Meta informations :
	 * 	- documentation : Gives a list of the supported currency symbols.
	 * @uses SOCurrencyExchangeWsdlClass::getSoapClient()
	 * @uses SOCurrencyExchangeWsdlClass::setResult()
	 * @uses SOCurrencyExchangeWsdlClass::getResult()
	 * @uses SOCurrencyExchangeWsdlClass::saveLastError()
	 * @uses SOCurrencyExchangeTypeGetAllCurrencies::getLicenseKey()
	 * @param SOCurrencyExchangeTypeGetAllCurrencies GetAllCurrencies
	 * @return SOCurrencyExchangeTypeGetAllCurrenciesResponse
	 */
	public function GetAllCurrencies(SOCurrencyExchangeTypeGetAllCurrencies $_SOCurrencyExchangeTypeGetAllCurrencies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllCurrencies(array('LicenseKey'=>$_SOCurrencyExchangeTypeGetAllCurrencies->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllCountryCurrencies
	 * Meta informations :
	 * 	- documentation : Gives a list of the supported currency symbols with their associated country information.
	 * @uses SOCurrencyExchangeWsdlClass::getSoapClient()
	 * @uses SOCurrencyExchangeWsdlClass::setResult()
	 * @uses SOCurrencyExchangeWsdlClass::getResult()
	 * @uses SOCurrencyExchangeWsdlClass::saveLastError()
	 * @uses SOCurrencyExchangeTypeGetAllCountryCurrencies::getLicenseKey()
	 * @param SOCurrencyExchangeTypeGetAllCountryCurrencies GetAllCountryCurrencies
	 * @return SOCurrencyExchangeTypeGetAllCountryCurrenciesResponse
	 */
	public function GetAllCountryCurrencies(SOCurrencyExchangeTypeGetAllCountryCurrencies $_SOCurrencyExchangeTypeGetAllCountryCurrencies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllCountryCurrencies(array('LicenseKey'=>$_SOCurrencyExchangeTypeGetAllCountryCurrencies->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExchangeRate
	 * Meta informations :
	 * 	- documentation : Gives the currency exchange rate between the two currencies.
	 * @uses SOCurrencyExchangeWsdlClass::getSoapClient()
	 * @uses SOCurrencyExchangeWsdlClass::setResult()
	 * @uses SOCurrencyExchangeWsdlClass::getResult()
	 * @uses SOCurrencyExchangeWsdlClass::saveLastError()
	 * @uses SOCurrencyExchangeTypeGetExchangeRate::getConvertFromCurrency()
	 * @uses SOCurrencyExchangeTypeGetExchangeRate::getConvertToCurrency()
	 * @uses SOCurrencyExchangeTypeGetExchangeRate::getLicenseKey()
	 * @param SOCurrencyExchangeTypeGetExchangeRate GetExchangeRate
	 * @return SOCurrencyExchangeTypeGetExchangeRateResponse
	 */
	public function GetExchangeRate(SOCurrencyExchangeTypeGetExchangeRate $_SOCurrencyExchangeTypeGetExchangeRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExchangeRate(array('ConvertFromCurrency'=>$_SOCurrencyExchangeTypeGetExchangeRate->getConvertFromCurrency(),'ConvertToCurrency'=>$_SOCurrencyExchangeTypeGetExchangeRate->getConvertToCurrency(),'LicenseKey'=>$_SOCurrencyExchangeTypeGetExchangeRate->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCountryCurrency
	 * Meta informations :
	 * 	- documentation : Input any country name, iso2 or iso3 to see that country's currency.
	 * @uses SOCurrencyExchangeWsdlClass::getSoapClient()
	 * @uses SOCurrencyExchangeWsdlClass::setResult()
	 * @uses SOCurrencyExchangeWsdlClass::getResult()
	 * @uses SOCurrencyExchangeWsdlClass::saveLastError()
	 * @uses SOCurrencyExchangeTypeGetCountryCurrency::getCountry()
	 * @uses SOCurrencyExchangeTypeGetCountryCurrency::getLicenseKey()
	 * @param SOCurrencyExchangeTypeGetCountryCurrency GetCountryCurrency
	 * @return SOCurrencyExchangeTypeGetCountryCurrencyResponse
	 */
	public function GetCountryCurrency(SOCurrencyExchangeTypeGetCountryCurrency $_SOCurrencyExchangeTypeGetCountryCurrency)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCountryCurrency(array('Country'=>$_SOCurrencyExchangeTypeGetCountryCurrency->getCountry(),'LicenseKey'=>$_SOCurrencyExchangeTypeGetCountryCurrency->getLicenseKey())));
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
	 * @return SOCurrencyExchangeTypeGetCountryCurrencyResponse
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