<?php
/**
 * Class file for SOIpValidationTypeIP
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationTypeIP
 * @date 08/07/2012
 */
class SOIpValidationTypeIP extends SOIpValidationWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOIpValidationTypeErr
	 */
	public $Error;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The Region
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Region;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The CountryISO3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryISO3;
	/**
	 * The CountryISO2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryISO2;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Longitude;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Latitude;
	/**
	 * The Certainty
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Certainty;
	/**
	 * The IsProxy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsProxy;
	/**
	 * The ProxyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProxyType;
	/**
	 * The ISP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ISP;
	/**
	 * The NetblockOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NetblockOwner;
	/**
	 * The Debug
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Debug;
	/**
	 * Constructor
	 * @param SOIpValidationTypeErr Error
	 * @param string City
	 * @param string Region
	 * @param string Country
	 * @param string CountryISO3
	 * @param string CountryISO2
	 * @param double Longitude
	 * @param double Latitude
	 * @param int Certainty
	 * @param string IsProxy
	 * @param string ProxyType
	 * @param string ISP
	 * @param string NetblockOwner
	 * @param string Debug
	 * @return SOIpValidationTypeIP
	 */
	public function __construct($_Error = null,$_City = null,$_Region = null,$_Country = null,$_CountryISO3 = null,$_CountryISO2 = null,$_Longitude,$_Latitude,$_Certainty,$_IsProxy = null,$_ProxyType = null,$_ISP = null,$_NetblockOwner = null,$_Debug = null)
	{
		parent::__construct(array('Error'=>$_Error,'City'=>$_City,'Region'=>$_Region,'Country'=>$_Country,'CountryISO3'=>$_CountryISO3,'CountryISO2'=>$_CountryISO2,'Longitude'=>$_Longitude,'Latitude'=>$_Latitude,'Certainty'=>$_Certainty,'IsProxy'=>$_IsProxy,'ProxyType'=>$_ProxyType,'ISP'=>$_ISP,'NetblockOwner'=>$_NetblockOwner,'Debug'=>$_Debug));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOIpValidationTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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
	 * Set Region
	 * @param string Region
	 * @return string
	 */
	public function setRegion($_Region)
	{
		return ($this->Region = $_Region);
	}
	/**
	 * Get Region
	 * @return string
	 */
	public function getRegion()
	{
		return $this->Region;
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
	 * Set Certainty
	 * @param int Certainty
	 * @return int
	 */
	public function setCertainty($_Certainty)
	{
		return ($this->Certainty = $_Certainty);
	}
	/**
	 * Get Certainty
	 * @return int
	 */
	public function getCertainty()
	{
		return $this->Certainty;
	}
	/**
	 * Set IsProxy
	 * @param string IsProxy
	 * @return string
	 */
	public function setIsProxy($_IsProxy)
	{
		return ($this->IsProxy = $_IsProxy);
	}
	/**
	 * Get IsProxy
	 * @return string
	 */
	public function getIsProxy()
	{
		return $this->IsProxy;
	}
	/**
	 * Set ProxyType
	 * @param string ProxyType
	 * @return string
	 */
	public function setProxyType($_ProxyType)
	{
		return ($this->ProxyType = $_ProxyType);
	}
	/**
	 * Get ProxyType
	 * @return string
	 */
	public function getProxyType()
	{
		return $this->ProxyType;
	}
	/**
	 * Set ISP
	 * @param string ISP
	 * @return string
	 */
	public function setISP($_ISP)
	{
		return ($this->ISP = $_ISP);
	}
	/**
	 * Get ISP
	 * @return string
	 */
	public function getISP()
	{
		return $this->ISP;
	}
	/**
	 * Set NetblockOwner
	 * @param string NetblockOwner
	 * @return string
	 */
	public function setNetblockOwner($_NetblockOwner)
	{
		return ($this->NetblockOwner = $_NetblockOwner);
	}
	/**
	 * Get NetblockOwner
	 * @return string
	 */
	public function getNetblockOwner()
	{
		return $this->NetblockOwner;
	}
	/**
	 * Set Debug
	 * @param string Debug
	 * @return string
	 */
	public function setDebug($_Debug)
	{
		return ($this->Debug = $_Debug);
	}
	/**
	 * Get Debug
	 * @return string
	 */
	public function getDebug()
	{
		return $this->Debug;
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