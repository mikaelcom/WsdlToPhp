<?php
/**
 * Class file for EccGeoIPCtryTypeIPCountry
 * @date 03/07/2012
 */
/**
 * Class EccGeoIPCtryTypeIPCountry
 * @date 03/07/2012
 */
class EccGeoIPCtryTypeIPCountry extends EccGeoIPCtryWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The CountryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryName;
	/**
	 * Constructor
	 * @param string CountryCode
	 * @param string CountryName
	 * @return EccGeoIPCtryTypeIPCountry
	 */
	public function __construct($_CountryCode = null,$_CountryName = null)
	{
		parent::__construct(array('CountryCode'=>$_CountryCode,'CountryName'=>$_CountryName));
	}
	/**
	 * Set CountryCode
	 * @param string CountryCode
	 * @return string
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = $_CountryCode);
	}
	/**
	 * Get CountryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>