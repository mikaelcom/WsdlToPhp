<?php
/**
 * Class file for CdyneIp2geoTypeIPInformation
 * @date 02/07/2012
 */
/**
 * Class CdyneIp2geoTypeIPInformation
 * @date 02/07/2012
 */
class CdyneIp2geoTypeIPInformation extends CdyneIp2geoWsdlClass
{
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The StateProvince
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateProvince;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Organization
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Organization;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Longitude;
	/**
	 * The AreaCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AreaCode;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The HasDaylightSavings
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $HasDaylightSavings;
	/**
	 * The Certainty
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var short
	 */
	public $Certainty;
	/**
	 * The RegionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RegionName;
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryCode;
	/**
	 * Constructor
	 * @param string City
	 * @param string StateProvince
	 * @param string Country
	 * @param string Organization
	 * @param double Latitude
	 * @param double Longitude
	 * @param string AreaCode
	 * @param string TimeZone
	 * @param boolean HasDaylightSavings
	 * @param short Certainty
	 * @param string RegionName
	 * @param string CountryCode
	 * @return CdyneIp2geoTypeIPInformation
	 */
	public function __construct($_City = null,$_StateProvince = null,$_Country = null,$_Organization = null,$_Latitude,$_Longitude,$_AreaCode = null,$_TimeZone = null,$_HasDaylightSavings,$_Certainty,$_RegionName = null,$_CountryCode = null)
	{
		parent::__construct(array('City'=>$_City,'StateProvince'=>$_StateProvince,'Country'=>$_Country,'Organization'=>$_Organization,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'AreaCode'=>$_AreaCode,'TimeZone'=>$_TimeZone,'HasDaylightSavings'=>$_HasDaylightSavings,'Certainty'=>$_Certainty,'RegionName'=>$_RegionName,'CountryCode'=>$_CountryCode));
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set StateProvince
	 * @param string StateProvince
	 * @return string
	 */
	public function setStateProvince($_StateProvince)
	{
		return ($this->StateProvince = $_StateProvince);
	}
	/**
	 * Get StateProvince
	 * @return string
	 */
	public function getStateProvince()
	{
		return $this->StateProvince;
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Organization
	 * @param string Organization
	 * @return string
	 */
	public function setOrganization($_Organization)
	{
		return ($this->Organization = $_Organization);
	}
	/**
	 * Get Organization
	 * @return string
	 */
	public function getOrganization()
	{
		return $this->Organization;
	}
	/**
	 * Set Latitude
	 * @param double Latitude
	 * @return double
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return double
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param double Longitude
	 * @return double
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return double
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set AreaCode
	 * @param string AreaCode
	 * @return string
	 */
	public function setAreaCode($_AreaCode)
	{
		return ($this->AreaCode = $_AreaCode);
	}
	/**
	 * Get AreaCode
	 * @return string
	 */
	public function getAreaCode()
	{
		return $this->AreaCode;
	}
	/**
	 * Set TimeZone
	 * @param string TimeZone
	 * @return string
	 */
	public function setTimeZone($_TimeZone)
	{
		return ($this->TimeZone = $_TimeZone);
	}
	/**
	 * Get TimeZone
	 * @return string
	 */
	public function getTimeZone()
	{
		return $this->TimeZone;
	}
	/**
	 * Set HasDaylightSavings
	 * @param boolean HasDaylightSavings
	 * @return boolean
	 */
	public function setHasDaylightSavings($_HasDaylightSavings)
	{
		return ($this->HasDaylightSavings = $_HasDaylightSavings);
	}
	/**
	 * Get HasDaylightSavings
	 * @return boolean
	 */
	public function getHasDaylightSavings()
	{
		return $this->HasDaylightSavings;
	}
	/**
	 * Set Certainty
	 * @param short Certainty
	 * @return short
	 */
	public function setCertainty($_Certainty)
	{
		return ($this->Certainty = $_Certainty);
	}
	/**
	 * Get Certainty
	 * @return short
	 */
	public function getCertainty()
	{
		return $this->Certainty;
	}
	/**
	 * Set RegionName
	 * @param string RegionName
	 * @return string
	 */
	public function setRegionName($_RegionName)
	{
		return ($this->RegionName = $_RegionName);
	}
	/**
	 * Get RegionName
	 * @return string
	 */
	public function getRegionName()
	{
		return $this->RegionName;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>