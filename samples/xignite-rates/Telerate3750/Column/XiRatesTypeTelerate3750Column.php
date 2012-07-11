<?php
/**
 * Class file for XiRatesTypeTelerate3750Column
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeTelerate3750Column
 * @date 08/07/2012
 */
class XiRatesTypeTelerate3750Column extends XiRatesTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The CurrencyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLIBORCurrencyTypes
	 */
	public $CurrencyType;
	/**
	 * The Rates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfLIBORRate
	 */
	public $Rates;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param XiRatesTypeLIBORCurrencyTypes CurrencyType
	 * @param XiRatesTypeArrayOfLIBORRate Rates
	 * @return XiRatesTypeTelerate3750Column
	 */
	public function __construct($_AsOfDate = null,$_CurrencyType,$_Rates = null)
	{
		XiRatesWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'CurrencyType'=>$_CurrencyType,'Rates'=>new XiRatesTypeArrayOfLIBORRate($_Rates)));
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
	 * Set CurrencyType
	 * @param LIBORCurrencyTypes CurrencyType
	 * @return LIBORCurrencyTypes
	 */
	public function setCurrencyType($_CurrencyType)
	{
		return ($this->CurrencyType = XiRatesTypeLIBORCurrencyTypes::valueIsValid($_CurrencyType)?$_CurrencyType:null);
	}
	/**
	 * Get CurrencyType
	 * @return XiRatesTypeLIBORCurrencyTypes
	 */
	public function getCurrencyType()
	{
		return $this->CurrencyType;
	}
	/**
	 * Set Rates
	 * @param ArrayOfLIBORRate Rates
	 * @return ArrayOfLIBORRate
	 */
	public function setRates($_Rates)
	{
		return ($this->Rates = $_Rates);
	}
	/**
	 * Get Rates
	 * @return XiRatesTypeArrayOfLIBORRate
	 */
	public function getRates()
	{
		return $this->Rates;
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