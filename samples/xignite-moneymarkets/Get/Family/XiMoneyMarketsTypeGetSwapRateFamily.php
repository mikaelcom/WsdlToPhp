<?php
/**
 * Class file for XiMoneyMarketsTypeGetSwapRateFamily
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetSwapRateFamily
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetSwapRateFamily extends XiMoneyMarketsWsdlClass
{
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwapCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwapCurrencyTypes Currency
	 * @return XiMoneyMarketsTypeGetSwapRateFamily
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
		return ($this->Currency = XiMoneyMarketsTypeSwapCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMoneyMarketsTypeSwapCurrencyTypes
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