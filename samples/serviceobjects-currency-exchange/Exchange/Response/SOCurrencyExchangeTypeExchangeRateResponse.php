<?php
/**
 * Class file for SOCurrencyExchangeTypeExchangeRateResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeExchangeRateResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeExchangeRateResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The ConvertFromCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvertFromCurrency;
	/**
	 * The ConvertToCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvertToCurrency;
	/**
	 * The ExchangeRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExchangeRate;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string ConvertFromCurrency
	 * @param string ConvertToCurrency
	 * @param double ExchangeRate
	 * @param string Error
	 * @return SOCurrencyExchangeTypeExchangeRateResponse
	 */
	public function __construct($_ConvertFromCurrency = null,$_ConvertToCurrency = null,$_ExchangeRate,$_Error = null)
	{
		parent::__construct(array('ConvertFromCurrency'=>$_ConvertFromCurrency,'ConvertToCurrency'=>$_ConvertToCurrency,'ExchangeRate'=>$_ExchangeRate,'Error'=>$_Error));
	}
	/**
	 * Set ConvertFromCurrency
	 * @param string ConvertFromCurrency
	 * @return string
	 */
	public function setConvertFromCurrency($_ConvertFromCurrency)
	{
		return ($this->ConvertFromCurrency = $_ConvertFromCurrency);
	}
	/**
	 * Get ConvertFromCurrency
	 * @return string
	 */
	public function getConvertFromCurrency()
	{
		return $this->ConvertFromCurrency;
	}
	/**
	 * Set ConvertToCurrency
	 * @param string ConvertToCurrency
	 * @return string
	 */
	public function setConvertToCurrency($_ConvertToCurrency)
	{
		return ($this->ConvertToCurrency = $_ConvertToCurrency);
	}
	/**
	 * Get ConvertToCurrency
	 * @return string
	 */
	public function getConvertToCurrency()
	{
		return $this->ConvertToCurrency;
	}
	/**
	 * Set ExchangeRate
	 * @param double ExchangeRate
	 * @return double
	 */
	public function setExchangeRate($_ExchangeRate)
	{
		return ($this->ExchangeRate = $_ExchangeRate);
	}
	/**
	 * Get ExchangeRate
	 * @return double
	 */
	public function getExchangeRate()
	{
		return $this->ExchangeRate;
	}
	/**
	 * Set Error
	 * @param string Error
	 * @return string
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return string
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>