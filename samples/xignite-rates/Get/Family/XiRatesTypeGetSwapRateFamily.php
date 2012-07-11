<?php
/**
 * Class file for XiRatesTypeGetSwapRateFamily
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetSwapRateFamily
 * @date 08/07/2012
 */
class XiRatesTypeGetSwapRateFamily extends XiRatesWsdlClass
{
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSwapCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param XiRatesTypeSwapCurrencyTypes Currency
	 * @return XiRatesTypeGetSwapRateFamily
	 */
	public function __construct($_Currency)
	{
		parent::__construct(array('Currency'=>$_Currency));
	}
	/**
	 * Set Currency
	 * @param SwapCurrencyTypes Currency
	 * @return SwapCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiRatesTypeSwapCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeSwapCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
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