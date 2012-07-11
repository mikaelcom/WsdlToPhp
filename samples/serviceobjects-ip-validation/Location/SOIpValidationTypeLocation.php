<?php
/**
 * Class file for SOIpValidationTypeLocation
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationTypeLocation
 * @date 08/07/2012
 */
class SOIpValidationTypeLocation extends SOIpValidationWsdlClass
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
	 * The IsPublicProxy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsPublicProxy;
	/**
	 * The Network
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Network;
	/**
	 * Constructor
	 * @param SOIpValidationTypeErr Error
	 * @param string City
	 * @param string Region
	 * @param string Country
	 * @param double Longitude
	 * @param double Latitude
	 * @param int Certainty
	 * @param string IsProxy
	 * @param string IsPublicProxy
	 * @param string Network
	 * @return SOIpValidationTypeLocation
	 */
	public function __construct($_Error = null,$_City = null,$_Region = null,$_Country = null,$_Longitude,$_Latitude,$_Certainty,$_IsProxy = null,$_IsPublicProxy = null,$_Network = null)
	{
		parent::__construct(array('Error'=>$_Error,'City'=>$_City,'Region'=>$_Region,'Country'=>$_Country,'Longitude'=>$_Longitude,'Latitude'=>$_Latitude,'Certainty'=>$_Certainty,'IsProxy'=>$_IsProxy,'IsPublicProxy'=>$_IsPublicProxy,'Network'=>$_Network));
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
	 * Set IsPublicProxy
	 * @param string IsPublicProxy
	 * @return string
	 */
	public function setIsPublicProxy($_IsPublicProxy)
	{
		return ($this->IsPublicProxy = $_IsPublicProxy);
	}
	/**
	 * Get IsPublicProxy
	 * @return string
	 */
	public function getIsPublicProxy()
	{
		return $this->IsPublicProxy;
	}
	/**
	 * Set Network
	 * @param string Network
	 * @return string
	 */
	public function setNetwork($_Network)
	{
		return ($this->Network = $_Network);
	}
	/**
	 * Get Network
	 * @return string
	 */
	public function getNetwork()
	{
		return $this->Network;
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