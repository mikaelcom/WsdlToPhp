<?php
/**
 * Class file for XiMoneyMarketsTypeGetSwaption
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetSwaption
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetSwaption extends XiMoneyMarketsWsdlClass
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
	 * Constructor
	 * @param XiMoneyMarketsTypeSwaptionTypes FirstType
	 * @param XiMoneyMarketsTypeSwaptionTypes SecondType
	 * @param XiMoneyMarketsTypeSwapCurrencyTypes Currency
	 * @return XiMoneyMarketsTypeGetSwaption
	 */
	public function __construct($_FirstType,$_SecondType,$_Currency)
	{
		parent::__construct(array('FirstType'=>$_FirstType,'SecondType'=>$_SecondType,'Currency'=>$_Currency));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>