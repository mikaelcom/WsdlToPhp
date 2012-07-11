<?php
/**
 * Class file for SOIpValidationTypeCountryLocation
 * @date 08/07/2012
 */
/**
 * Class SOIpValidationTypeCountryLocation
 * @date 08/07/2012
 */
class SOIpValidationTypeCountryLocation extends SOIpValidationWsdlClass
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
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Cntry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Cntry;
	/**
	 * The Ctry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Ctry;
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
	 * The IsPublicProxy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsPublicProxy;
	/**
	 * Constructor
	 * @param SOIpValidationTypeErr Error
	 * @param string Country
	 * @param string Cntry
	 * @param string Ctry
	 * @param double Latitude
	 * @param double Longitude
	 * @param string IsPublicProxy
	 * @return SOIpValidationTypeCountryLocation
	 */
	public function __construct($_Error = null,$_Country = null,$_Cntry = null,$_Ctry = null,$_Latitude,$_Longitude,$_IsPublicProxy = null)
	{
		parent::__construct(array('Error'=>$_Error,'Country'=>$_Country,'Cntry'=>$_Cntry,'Ctry'=>$_Ctry,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'IsPublicProxy'=>$_IsPublicProxy));
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
	 * Set Cntry
	 * @param string Cntry
	 * @return string
	 */
	public function setCntry($_Cntry)
	{
		return ($this->Cntry = $_Cntry);
	}
	/**
	 * Get Cntry
	 * @return string
	 */
	public function getCntry()
	{
		return $this->Cntry;
	}
	/**
	 * Set Ctry
	 * @param string Ctry
	 * @return string
	 */
	public function setCtry($_Ctry)
	{
		return ($this->Ctry = $_Ctry);
	}
	/**
	 * Get Ctry
	 * @return string
	 */
	public function getCtry()
	{
		return $this->Ctry;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>