<?php
/**
 * Class file for RFGeoIPTypeGeoLocation
 * @date 15/08/2012
 */
/**
 * Class RFGeoIPTypeGeoLocation
 * @date 15/08/2012
 */
class RFGeoIPTypeGeoLocation extends RFGeoIPWsdlClass
{
	/**
	 * The Registry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Registry;
	/**
	 * The Assigned
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Assigned;
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The ISOCountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ISOCountryCode;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Country;
	/**
	 * Constructor
	 * @param string Registry
	 * @param string Assigned
	 * @param string CountryCode
	 * @param string ISOCountryCode
	 * @param string Country
	 * @return RFGeoIPTypeGeoLocation
	 */
	public function __construct($_Registry = null,$_Assigned = null,$_CountryCode = null,$_ISOCountryCode = null,$_Country = null)
	{
		parent::__construct(array('Registry'=>$_Registry,'Assigned'=>$_Assigned,'CountryCode'=>$_CountryCode,'ISOCountryCode'=>$_ISOCountryCode,'Country'=>$_Country));
	}
	/**
	 * Set Registry
	 * @param string Registry
	 * @return string
	 */
	public function setRegistry($_Registry)
	{
		return ($this->Registry = $_Registry);
	}
	/**
	 * Get Registry
	 * @return string
	 */
	public function getRegistry()
	{
		return $this->Registry;
	}
	/**
	 * Set Assigned
	 * @param string Assigned
	 * @return string
	 */
	public function setAssigned($_Assigned)
	{
		return ($this->Assigned = $_Assigned);
	}
	/**
	 * Get Assigned
	 * @return string
	 */
	public function getAssigned()
	{
		return $this->Assigned;
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
	 * Set ISOCountryCode
	 * @param string ISOCountryCode
	 * @return string
	 */
	public function setISOCountryCode($_ISOCountryCode)
	{
		return ($this->ISOCountryCode = $_ISOCountryCode);
	}
	/**
	 * Get ISOCountryCode
	 * @return string
	 */
	public function getISOCountryCode()
	{
		return $this->ISOCountryCode;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>