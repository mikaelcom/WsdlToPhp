<?php
/**
 * Class file for SOCurrencyExchangeTypeCountryCurrencyResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeCountryCurrencyResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeCountryCurrencyResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The CountryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryName;
	/**
	 * The CountryISO2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryISO2;
	/**
	 * The CountryISO3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryISO3;
	/**
	 * The CurrencyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CurrencyName;
	/**
	 * The CurrencySymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CurrencySymbol;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string CountryName
	 * @param string CountryISO2
	 * @param string CountryISO3
	 * @param string CurrencyName
	 * @param string CurrencySymbol
	 * @param string Error
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function __construct($_CountryName = null,$_CountryISO2 = null,$_CountryISO3 = null,$_CurrencyName = null,$_CurrencySymbol = null,$_Error = null)
	{
		parent::__construct(array('CountryName'=>$_CountryName,'CountryISO2'=>$_CountryISO2,'CountryISO3'=>$_CountryISO3,'CurrencyName'=>$_CurrencyName,'CurrencySymbol'=>$_CurrencySymbol,'Error'=>$_Error));
	}
	/**
	 * Set CountryName
	 * @param string CountryName
	 * @return string
	 */
	public function setCountryName($_CountryName)
	{
		return ($this->CountryName = $_CountryName);
	}
	/**
	 * Get CountryName
	 * @return string
	 */
	public function getCountryName()
	{
		return $this->CountryName;
	}
	/**
	 * Set CountryISO2
	 * @param string CountryISO2
	 * @return string
	 */
	public function setCountryISO2($_CountryISO2)
	{
		return ($this->CountryISO2 = $_CountryISO2);
	}
	/**
	 * Get CountryISO2
	 * @return string
	 */
	public function getCountryISO2()
	{
		return $this->CountryISO2;
	}
	/**
	 * Set CountryISO3
	 * @param string CountryISO3
	 * @return string
	 */
	public function setCountryISO3($_CountryISO3)
	{
		return ($this->CountryISO3 = $_CountryISO3);
	}
	/**
	 * Get CountryISO3
	 * @return string
	 */
	public function getCountryISO3()
	{
		return $this->CountryISO3;
	}
	/**
	 * Set CurrencyName
	 * @param string CurrencyName
	 * @return string
	 */
	public function setCurrencyName($_CurrencyName)
	{
		return ($this->CurrencyName = $_CurrencyName);
	}
	/**
	 * Get CurrencyName
	 * @return string
	 */
	public function getCurrencyName()
	{
		return $this->CurrencyName;
	}
	/**
	 * Set CurrencySymbol
	 * @param string CurrencySymbol
	 * @return string
	 */
	public function setCurrencySymbol($_CurrencySymbol)
	{
		return ($this->CurrencySymbol = $_CurrencySymbol);
	}
	/**
	 * Get CurrencySymbol
	 * @return string
	 */
	public function getCurrencySymbol()
	{
		return $this->CurrencySymbol;
	}
	/**
	 * Set Error
	 * @param string Error
	 * @return string
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return string
	 */
	public function getError()
	{
		return $this->Error;
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