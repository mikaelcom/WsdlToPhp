<?php
/**
 * Class file for SOCurrencyExchangeServiceConvert
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeServiceConvert
 * @date 08/07/2012
 */
class SOCurrencyExchangeServiceConvert extends SOCurrencyExchangeWsdlClass
{
	/**
	 * Method to call ConvertCurrency
	 * Meta informations :
	 * 	- documentation : Gives the converted amount of currency.
	 * @uses SOCurrencyExchangeWsdlClass::getSoapClient()
	 * @uses SOCurrencyExchangeWsdlClass::setResult()
	 * @uses SOCurrencyExchangeWsdlClass::getResult()
	 * @uses SOCurrencyExchangeWsdlClass::saveLastError()
	 * @uses SOCurrencyExchangeTypeConvertCurrency::getAmount()
	 * @uses SOCurrencyExchangeTypeConvertCurrency::getConvertFromCurrency()
	 * @uses SOCurrencyExchangeTypeConvertCurrency::getConvertToCurrency()
	 * @uses SOCurrencyExchangeTypeConvertCurrency::getLicenseKey()
	 * @param SOCurrencyExchangeTypeConvertCurrency ConvertCurrency
	 * @return SOCurrencyExchangeTypeConvertCurrencyResponse
	 */
	public function ConvertCurrency(SOCurrencyExchangeTypeConvertCurrency $_SOCurrencyExchangeTypeConvertCurrency)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConvertCurrency(array('Amount'=>$_SOCurrencyExchangeTypeConvertCurrency->getAmount(),'ConvertFromCurrency'=>$_SOCurrencyExchangeTypeConvertCurrency->getConvertFromCurrency(),'ConvertToCurrency'=>$_SOCurrencyExchangeTypeConvertCurrency->getConvertToCurrency(),'LicenseKey'=>$_SOCurrencyExchangeTypeConvertCurrency->getLicenseKey())));
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
	 * @return SOCurrencyExchangeTypeConvertCurrencyResponse
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