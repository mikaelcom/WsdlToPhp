<?php
/**
 * Class file for SOGeoCoderCanadaTypePostalCodeInfo
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaTypePostalCodeInfo
 * @date 06/07/2012
 */
class SOGeoCoderCanadaTypePostalCodeInfo extends SOGeoCoderCanadaWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderCanadaTypeErr
	 */
	public $Error;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Longitude;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The DST
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DST;
	/**
	 * The AreaCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AreaCode;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The CityPopulation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CityPopulation;
	/**
	 * The Province
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Province;
	/**
	 * The ProvinceAbbreviation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProvinceAbbreviation;
	/**
	 * The DMA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DMA;
	/**
	 * Constructor
	 * @param SOGeoCoderCanadaTypeErr Error
	 * @param string Latitude
	 * @param string Longitude
	 * @param string PostalCode
	 * @param string TimeZone
	 * @param string DST
	 * @param string AreaCode
	 * @param string City
	 * @param string CityPopulation
	 * @param string Province
	 * @param string ProvinceAbbreviation
	 * @param string DMA
	 * @return SOGeoCoderCanadaTypePostalCodeInfo
	 */
	public function __construct($_Error = null,$_Latitude = null,$_Longitude = null,$_PostalCode = null,$_TimeZone = null,$_DST = null,$_AreaCode = null,$_City = null,$_CityPopulation = null,$_Province = null,$_ProvinceAbbreviation = null,$_DMA = null)
	{
		parent::__construct(array('Error'=>$_Error,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'PostalCode'=>$_PostalCode,'TimeZone'=>$_TimeZone,'DST'=>$_DST,'AreaCode'=>$_AreaCode,'City'=>$_City,'CityPopulation'=>$_CityPopulation,'Province'=>$_Province,'ProvinceAbbreviation'=>$_ProvinceAbbreviation,'DMA'=>$_DMA));
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
	 * @return SOGeoCoderCanadaTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
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
	 * Set DST
	 * @param string DST
	 * @return string
	 */
	public function setDST($_DST)
	{
		return ($this->DST = $_DST);
	}
	/**
	 * Get DST
	 * @return string
	 */
	public function getDST()
	{
		return $this->DST;
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
	 * Set CityPopulation
	 * @param string CityPopulation
	 * @return string
	 */
	public function setCityPopulation($_CityPopulation)
	{
		return ($this->CityPopulation = $_CityPopulation);
	}
	/**
	 * Get CityPopulation
	 * @return string
	 */
	public function getCityPopulation()
	{
		return $this->CityPopulation;
	}
	/**
	 * Set Province
	 * @param string Province
	 * @return string
	 */
	public function setProvince($_Province)
	{
		return ($this->Province = $_Province);
	}
	/**
	 * Get Province
	 * @return string
	 */
	public function getProvince()
	{
		return $this->Province;
	}
	/**
	 * Set ProvinceAbbreviation
	 * @param string ProvinceAbbreviation
	 * @return string
	 */
	public function setProvinceAbbreviation($_ProvinceAbbreviation)
	{
		return ($this->ProvinceAbbreviation = $_ProvinceAbbreviation);
	}
	/**
	 * Get ProvinceAbbreviation
	 * @return string
	 */
	public function getProvinceAbbreviation()
	{
		return $this->ProvinceAbbreviation;
	}
	/**
	 * Set DMA
	 * @param string DMA
	 * @return string
	 */
	public function setDMA($_DMA)
	{
		return ($this->DMA = $_DMA);
	}
	/**
	 * Get DMA
	 * @return string
	 */
	public function getDMA()
	{
		return $this->DMA;
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