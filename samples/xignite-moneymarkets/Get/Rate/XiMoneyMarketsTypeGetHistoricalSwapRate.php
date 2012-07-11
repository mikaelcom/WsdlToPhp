<?php
/**
 * Class file for XiMoneyMarketsTypeGetHistoricalSwapRate
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetHistoricalSwapRate
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetHistoricalSwapRate extends XiMoneyMarketsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwapRateTypes
	 */
	public $Type;
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
	 * @param XiMoneyMarketsTypeSwapRateTypes Type
	 * @param XiMoneyMarketsTypeSwapCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiMoneyMarketsTypeGetHistoricalSwapRate
	 */
	public function __construct($_Type,$_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param SwapRateTypes Type
	 * @return SwapRateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMoneyMarketsTypeSwapRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMoneyMarketsTypeSwapRateTypes
	 */
	public function getType()
	{
		return $this->Type;
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