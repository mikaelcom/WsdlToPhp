<?php
/**
 * Class file for XiCurrenciesTypeGetOfficialCrossRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetOfficialCrossRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetOfficialCrossRate extends XiCurrenciesWsdlClass
{
	/**
	 * The CountryType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCountryTypes
	 */
	public $CountryType;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrencies
	 */
	public $Symbol;
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
	 * @param XiCurrenciesTypeCountryTypes CountryType
	 * @param XiCurrenciesTypeCurrencies Symbol
	 * @param string AsOfDate
	 * @return XiCurrenciesTypeGetOfficialCrossRate
	 */
	public function __construct($_CountryType,$_Symbol,$_AsOfDate = null)
	{
		parent::__construct(array('CountryType'=>$_CountryType,'Symbol'=>$_Symbol,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set CountryType
	 * @param CountryTypes CountryType
	 * @return CountryTypes
	 */
	public function setCountryType($_CountryType)
	{
		return ($this->CountryType = XiCurrenciesTypeCountryTypes::valueIsValid($_CountryType)?$_CountryType:null);
	}
	/**
	 * Get CountryType
	 * @return XiCurrenciesTypeCountryTypes
	 */
	public function getCountryType()
	{
		return $this->CountryType;
	}
	/**
	 * Set Symbol
	 * @param Currencies Symbol
	 * @return Currencies
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = XiCurrenciesTypeCurrencies::valueIsValid($_Symbol)?$_Symbol:null);
	}
	/**
	 * Get Symbol
	 * @return XiCurrenciesTypeCurrencies
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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