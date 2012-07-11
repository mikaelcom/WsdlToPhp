<?php
/**
 * Class file for XiRatesTypeGetRateSymbol
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateSymbol
 * @date 08/07/2012
 */
class XiRatesTypeGetRateSymbol extends XiRatesWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $RateType;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTypes RateType
	 * @param XiRatesTypeLIBORCurrencyTypes Currency
	 * @return XiRatesTypeGetRateSymbol
	 */
	public function __construct($_RateType,$_Currency)
	{
		parent::__construct(array('RateType'=>$_RateType,'Currency'=>$_Currency));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>