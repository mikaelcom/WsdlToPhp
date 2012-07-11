<?php
/**
 * Class file for XiMoneyMarketsTypeGetHistoricalSwaptionFamily
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetHistoricalSwaptionFamily
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetHistoricalSwaptionFamily extends XiMoneyMarketsWsdlClass
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwapCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiMoneyMarketsTypeGetHistoricalSwaptionFamily
	 */
	public function __construct($_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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