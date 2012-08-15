<?php
/**
 * Class file for RFUSAZipCodeTypePostalCode
 * @date 15/08/2012
 */
/**
 * Class RFUSAZipCodeTypePostalCode
 * @date 15/08/2012
 */
class RFUSAZipCodeTypePostalCode extends RFUSAZipCodeWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The PostCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PostCode;
	/**
	 * The PlaceName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PlaceName;
	/**
	 * The AdministrationNameFirst
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AdministrationNameFirst;
	/**
	 * The AdministrationCodeFirst
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AdministrationCodeFirst;
	/**
	 * The AdministrationNameSecond
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AdministrationNameSecond;
	/**
	 * The AdministrationCodeFirstSecond
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AdministrationCodeFirstSecond;
	/**
	 * The AdministrationNameThird
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AdministrationNameThird;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Longitude;
	/**
	 * Constructor
	 * @param string CountryCode
	 * @param string PostCode
	 * @param string PlaceName
	 * @param string AdministrationNameFirst
	 * @param string AdministrationCodeFirst
	 * @param string AdministrationNameSecond
	 * @param string AdministrationCodeFirstSecond
	 * @param string AdministrationNameThird
	 * @param string Latitude
	 * @param string Longitude
	 * @return RFUSAZipCodeTypePostalCode
	 */
	public function __construct($_CountryCode = null,$_PostCode = null,$_PlaceName = null,$_AdministrationNameFirst = null,$_AdministrationCodeFirst = null,$_AdministrationNameSecond = null,$_AdministrationCodeFirstSecond = null,$_AdministrationNameThird = null,$_Latitude = null,$_Longitude = null)
	{
		parent::__construct(array('CountryCode'=>$_CountryCode,'PostCode'=>$_PostCode,'PlaceName'=>$_PlaceName,'AdministrationNameFirst'=>$_AdministrationNameFirst,'AdministrationCodeFirst'=>$_AdministrationCodeFirst,'AdministrationNameSecond'=>$_AdministrationNameSecond,'AdministrationCodeFirstSecond'=>$_AdministrationCodeFirstSecond,'AdministrationNameThird'=>$_AdministrationNameThird,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude));
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
	 * Set PostCode
	 * @param string PostCode
	 * @return string
	 */
	public function setPostCode($_PostCode)
	{
		return ($this->PostCode = $_PostCode);
	}
	/**
	 * Get PostCode
	 * @return string
	 */
	public function getPostCode()
	{
		return $this->PostCode;
	}
	/**
	 * Set PlaceName
	 * @param string PlaceName
	 * @return string
	 */
	public function setPlaceName($_PlaceName)
	{
		return ($this->PlaceName = $_PlaceName);
	}
	/**
	 * Get PlaceName
	 * @return string
	 */
	public function getPlaceName()
	{
		return $this->PlaceName;
	}
	/**
	 * Set AdministrationNameFirst
	 * @param string AdministrationNameFirst
	 * @return string
	 */
	public function setAdministrationNameFirst($_AdministrationNameFirst)
	{
		return ($this->AdministrationNameFirst = $_AdministrationNameFirst);
	}
	/**
	 * Get AdministrationNameFirst
	 * @return string
	 */
	public function getAdministrationNameFirst()
	{
		return $this->AdministrationNameFirst;
	}
	/**
	 * Set AdministrationCodeFirst
	 * @param string AdministrationCodeFirst
	 * @return string
	 */
	public function setAdministrationCodeFirst($_AdministrationCodeFirst)
	{
		return ($this->AdministrationCodeFirst = $_AdministrationCodeFirst);
	}
	/**
	 * Get AdministrationCodeFirst
	 * @return string
	 */
	public function getAdministrationCodeFirst()
	{
		return $this->AdministrationCodeFirst;
	}
	/**
	 * Set AdministrationNameSecond
	 * @param string AdministrationNameSecond
	 * @return string
	 */
	public function setAdministrationNameSecond($_AdministrationNameSecond)
	{
		return ($this->AdministrationNameSecond = $_AdministrationNameSecond);
	}
	/**
	 * Get AdministrationNameSecond
	 * @return string
	 */
	public function getAdministrationNameSecond()
	{
		return $this->AdministrationNameSecond;
	}
	/**
	 * Set AdministrationCodeFirstSecond
	 * @param string AdministrationCodeFirstSecond
	 * @return string
	 */
	public function setAdministrationCodeFirstSecond($_AdministrationCodeFirstSecond)
	{
		return ($this->AdministrationCodeFirstSecond = $_AdministrationCodeFirstSecond);
	}
	/**
	 * Get AdministrationCodeFirstSecond
	 * @return string
	 */
	public function getAdministrationCodeFirstSecond()
	{
		return $this->AdministrationCodeFirstSecond;
	}
	/**
	 * Set AdministrationNameThird
	 * @param string AdministrationNameThird
	 * @return string
	 */
	public function setAdministrationNameThird($_AdministrationNameThird)
	{
		return ($this->AdministrationNameThird = $_AdministrationNameThird);
	}
	/**
	 * Get AdministrationNameThird
	 * @return string
	 */
	public function getAdministrationNameThird()
	{
		return $this->AdministrationNameThird;
	}
	/**
	 * Set Latitude
	 * @param string Latitude
	 * @return string
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return string
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param string Longitude
	 * @return string
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return string
	 */
	public function getLongitude()
	{
		return $this->Longitude;
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