<?php
/**
 * Class file for XiMoneyMarketsTypeGetHistoricalSwaption
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetHistoricalSwaption
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetHistoricalSwaption extends XiMoneyMarketsWsdlClass
{
	/**
	 * The FirstType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwaptionTypes
	 */
	public $FirstType;
	/**
	 * The SecondType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwaptionTypes
	 */
	public $SecondType;
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
	 * @param XiMoneyMarketsTypeSwaptionTypes FirstType
	 * @param XiMoneyMarketsTypeSwaptionTypes SecondType
	 * @param XiMoneyMarketsTypeSwapCurrencyTypes Currency
	 * @param string AsOfDate
	 * @return XiMoneyMarketsTypeGetHistoricalSwaption
	 */
	public function __construct($_FirstType,$_SecondType,$_Currency,$_AsOfDate = null)
	{
		parent::__construct(array('FirstType'=>$_FirstType,'SecondType'=>$_SecondType,'Currency'=>$_Currency,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set FirstType
	 * @param SwaptionTypes FirstType
	 * @return SwaptionTypes
	 */
	public function setFirstType($_FirstType)
	{
		return ($this->FirstType = XiMoneyMarketsTypeSwaptionTypes::valueIsValid($_FirstType)?$_FirstType:null);
	}
	/**
	 * Get FirstType
	 * @return XiMoneyMarketsTypeSwaptionTypes
	 */
	public function getFirstType()
	{
		return $this->FirstType;
	}
	/**
	 * Set SecondType
	 * @param SwaptionTypes SecondType
	 * @return SwaptionTypes
	 */
	public function setSecondType($_SecondType)
	{
		return ($this->SecondType = XiMoneyMarketsTypeSwaptionTypes::valueIsValid($_SecondType)?$_SecondType:null);
	}
	/**
	 * Get SecondType
	 * @return XiMoneyMarketsTypeSwaptionTypes
	 */
	public function getSecondType()
	{
		return $this->SecondType;
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