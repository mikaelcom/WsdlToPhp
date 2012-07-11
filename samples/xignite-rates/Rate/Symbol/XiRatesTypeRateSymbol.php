<?php
/**
 * Class file for XiRatesTypeRateSymbol
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeRateSymbol
 * @date 08/07/2012
 */
class XiRatesTypeRateSymbol extends XiRatesTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORCurrencyTypes
	 */
	public $Currency;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTypes Type
	 * @param XiRatesTypeLIBORCurrencyTypes Currency
	 * @param string Symbol
	 * @return XiRatesTypeRateSymbol
	 */
	public function __construct($_Type,$_Currency,$_Symbol = null)
	{
		XiRatesWsdlClass::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'Symbol'=>$_Symbol));
	}
	/**
	 * Set Type
	 * @param RateTypes Type
	 * @return RateTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeRateTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeRateTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param LIBORCurrencyTypes Currency
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiRatesTypeLIBORCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeLIBORCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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