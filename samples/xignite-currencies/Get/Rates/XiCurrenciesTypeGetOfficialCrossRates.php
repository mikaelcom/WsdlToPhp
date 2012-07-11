<?php
/**
 * Class file for XiCurrenciesTypeGetOfficialCrossRates
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetOfficialCrossRates
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetOfficialCrossRates extends XiCurrenciesWsdlClass
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
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
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
	 * @param string Symbols
	 * @param string AsOfDate
	 * @return XiCurrenciesTypeGetOfficialCrossRates
	 */
	public function __construct($_CountryType,$_Symbols = null,$_AsOfDate = null)
	{
		parent::__construct(array('CountryType'=>$_CountryType,'Symbols'=>$_Symbols,'AsOfDate'=>$_AsOfDate));
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
	 * Set Symbols
	 * @param string Symbols
	 * @return string
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return string
	 */
	public function getSymbols()
	{
		return $this->Symbols;
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