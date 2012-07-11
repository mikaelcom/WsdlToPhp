<?php
/**
 * Class file for SOCurrencyExchangeTypeCurrencyConversionResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeCurrencyConversionResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeCurrencyConversionResponse extends SOCurrencyExchangeWsdlClass
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
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Amount;
	/**
	 * The ConvertedAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ConvertedAmount;
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
	 * @param string Amount
	 * @param double ConvertedAmount
	 * @param string Error
	 * @return SOCurrencyExchangeTypeCurrencyConversionResponse
	 */
	public function __construct($_ConvertFromCurrency = null,$_ConvertToCurrency = null,$_Amount = null,$_ConvertedAmount,$_Error = null)
	{
		parent::__construct(array('ConvertFromCurrency'=>$_ConvertFromCurrency,'ConvertToCurrency'=>$_ConvertToCurrency,'Amount'=>$_Amount,'ConvertedAmount'=>$_ConvertedAmount,'Error'=>$_Error));
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
	 * Set Amount
	 * @param string Amount
	 * @return string
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return string
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set ConvertedAmount
	 * @param double ConvertedAmount
	 * @return double
	 */
	public function setConvertedAmount($_ConvertedAmount)
	{
		return ($this->ConvertedAmount = $_ConvertedAmount);
	}
	/**
	 * Get ConvertedAmount
	 * @return double
	 */
	public function getConvertedAmount()
	{
		return $this->ConvertedAmount;
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