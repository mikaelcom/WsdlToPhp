<?php
/**
 * Class file for SOGeoCoderTypeZipCodeInfo
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeZipCodeInfo
 * @date 05/07/2012
 */
class SOGeoCoderTypeZipCodeInfo extends SOGeoCoderWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeErr
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
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The County
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $County;
	/**
	 * The AreaCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AreaCode;
	/**
	 * The CityAbbreviation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CityAbbreviation;
	/**
	 * The CityType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CityType;
	/**
	 * The CountyFIPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyFIPS;
	/**
	 * The StateFIPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateFIPS;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The DayLightSavings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DayLightSavings;
	/**
	 * The MSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MSA;
	/**
	 * The MD
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MD;
	/**
	 * The CBSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CBSA;
	/**
	 * The PMSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PMSA;
	/**
	 * The DMA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DMA;
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
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * The CityAlternativeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoCoderTypeArrayOfString
	 */
	public $CityAlternativeName;
	/**
	 * Constructor
	 * @param SOGeoCoderTypeErr Error
	 * @param string City
	 * @param string State
	 * @param string County
	 * @param string AreaCode
	 * @param string CityAbbreviation
	 * @param string CityType
	 * @param string CountyFIPS
	 * @param string StateFIPS
	 * @param string TimeZone
	 * @param string DayLightSavings
	 * @param string MSA
	 * @param string MD
	 * @param string CBSA
	 * @param string PMSA
	 * @param string DMA
	 * @param string Latitude
	 * @param string Longitude
	 * @param string Zip
	 * @param SOGeoCoderTypeArrayOfString CityAlternativeName
	 * @return SOGeoCoderTypeZipCodeInfo
	 */
	public function __construct($_Error = null,$_City = null,$_State = null,$_County = null,$_AreaCode = null,$_CityAbbreviation = null,$_CityType = null,$_CountyFIPS = null,$_StateFIPS = null,$_TimeZone = null,$_DayLightSavings = null,$_MSA = null,$_MD = null,$_CBSA = null,$_PMSA = null,$_DMA = null,$_Latitude = null,$_Longitude = null,$_Zip = null,$_CityAlternativeName = null)
	{
		parent::__construct(array('Error'=>$_Error,'City'=>$_City,'State'=>$_State,'County'=>$_County,'AreaCode'=>$_AreaCode,'CityAbbreviation'=>$_CityAbbreviation,'CityType'=>$_CityType,'CountyFIPS'=>$_CountyFIPS,'StateFIPS'=>$_StateFIPS,'TimeZone'=>$_TimeZone,'DayLightSavings'=>$_DayLightSavings,'MSA'=>$_MSA,'MD'=>$_MD,'CBSA'=>$_CBSA,'PMSA'=>$_PMSA,'DMA'=>$_DMA,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'Zip'=>$_Zip,'CityAlternativeName'=>new SOGeoCoderTypeArrayOfString($_CityAlternativeName)));
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
	 * @return SOGeoCoderTypeErr
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
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set County
	 * @param string County
	 * @return string
	 */
	public function setCounty($_County)
	{
		return ($this->County = $_County);
	}
	/**
	 * Get County
	 * @return string
	 */
	public function getCounty()
	{
		return $this->County;
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
	 * Set CityAbbreviation
	 * @param string CityAbbreviation
	 * @return string
	 */
	public function setCityAbbreviation($_CityAbbreviation)
	{
		return ($this->CityAbbreviation = $_CityAbbreviation);
	}
	/**
	 * Get CityAbbreviation
	 * @return string
	 */
	public function getCityAbbreviation()
	{
		return $this->CityAbbreviation;
	}
	/**
	 * Set CityType
	 * @param string CityType
	 * @return string
	 */
	public function setCityType($_CityType)
	{
		return ($this->CityType = $_CityType);
	}
	/**
	 * Get CityType
	 * @return string
	 */
	public function getCityType()
	{
		return $this->CityType;
	}
	/**
	 * Set CountyFIPS
	 * @param string CountyFIPS
	 * @return string
	 */
	public function setCountyFIPS($_CountyFIPS)
	{
		return ($this->CountyFIPS = $_CountyFIPS);
	}
	/**
	 * Get CountyFIPS
	 * @return string
	 */
	public function getCountyFIPS()
	{
		return $this->CountyFIPS;
	}
	/**
	 * Set StateFIPS
	 * @param string StateFIPS
	 * @return string
	 */
	public function setStateFIPS($_StateFIPS)
	{
		return ($this->StateFIPS = $_StateFIPS);
	}
	/**
	 * Get StateFIPS
	 * @return string
	 */
	public function getStateFIPS()
	{
		return $this->StateFIPS;
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
	 * Set DayLightSavings
	 * @param string DayLightSavings
	 * @return string
	 */
	public function setDayLightSavings($_DayLightSavings)
	{
		return ($this->DayLightSavings = $_DayLightSavings);
	}
	/**
	 * Get DayLightSavings
	 * @return string
	 */
	public function getDayLightSavings()
	{
		return $this->DayLightSavings;
	}
	/**
	 * Set MSA
	 * @param string MSA
	 * @return string
	 */
	public function setMSA($_MSA)
	{
		return ($this->MSA = $_MSA);
	}
	/**
	 * Get MSA
	 * @return string
	 */
	public function getMSA()
	{
		return $this->MSA;
	}
	/**
	 * Set MD
	 * @param string MD
	 * @return string
	 */
	public function setMD($_MD)
	{
		return ($this->MD = $_MD);
	}
	/**
	 * Get MD
	 * @return string
	 */
	public function getMD()
	{
		return $this->MD;
	}
	/**
	 * Set CBSA
	 * @param string CBSA
	 * @return string
	 */
	public function setCBSA($_CBSA)
	{
		return ($this->CBSA = $_CBSA);
	}
	/**
	 * Get CBSA
	 * @return string
	 */
	public function getCBSA()
	{
		return $this->CBSA;
	}
	/**
	 * Set PMSA
	 * @param string PMSA
	 * @return string
	 */
	public function setPMSA($_PMSA)
	{
		return ($this->PMSA = $_PMSA);
	}
	/**
	 * Get PMSA
	 * @return string
	 */
	public function getPMSA()
	{
		return $this->PMSA;
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
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Set CityAlternativeName
	 * @param ArrayOfString CityAlternativeName
	 * @return ArrayOfString
	 */
	public function setCityAlternativeName($_CityAlternativeName)
	{
		return ($this->CityAlternativeName = $_CityAlternativeName);
	}
	/**
	 * Get CityAlternativeName
	 * @return SOGeoCoderTypeArrayOfString
	 */
	public function getCityAlternativeName()
	{
		return $this->CityAlternativeName;
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