<?php
/**
 * Class file for BingTypePhonebookResult
 * @date 02/07/2012
 */
/**
 * Class BingTypePhonebookResult
 * @date 02/07/2012
 */
class BingTypePhonebookResult extends BingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The Business
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Business;
	/**
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumber;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The StateOrProvince
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateOrProvince;
	/**
	 * The CountryOrRegion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryOrRegion;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Longitude;
	/**
	 * The UniqueId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UniqueId;
	/**
	 * The BusinessUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessUrl;
	/**
	 * The UserRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $UserRating;
	/**
	 * The ReviewCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $ReviewCount;
	/**
	 * The DisplayUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DisplayUrl;
	/**
	 * Constructor
	 * @param string Title
	 * @param string Url
	 * @param string Business
	 * @param string PhoneNumber
	 * @param string Address
	 * @param string City
	 * @param string StateOrProvince
	 * @param string CountryOrRegion
	 * @param string PostalCode
	 * @param double Latitude
	 * @param double Longitude
	 * @param string UniqueId
	 * @param string BusinessUrl
	 * @param double UserRating
	 * @param unsignedInt ReviewCount
	 * @param string DisplayUrl
	 * @return BingTypePhonebookResult
	 */
	public function __construct($_Title = null,$_Url = null,$_Business = null,$_PhoneNumber = null,$_Address = null,$_City = null,$_StateOrProvince = null,$_CountryOrRegion = null,$_PostalCode = null,$_Latitude = null,$_Longitude = null,$_UniqueId = null,$_BusinessUrl = null,$_UserRating = null,$_ReviewCount = null,$_DisplayUrl = null)
	{
		parent::__construct(array('Title'=>$_Title,'Url'=>$_Url,'Business'=>$_Business,'PhoneNumber'=>$_PhoneNumber,'Address'=>$_Address,'City'=>$_City,'StateOrProvince'=>$_StateOrProvince,'CountryOrRegion'=>$_CountryOrRegion,'PostalCode'=>$_PostalCode,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'UniqueId'=>$_UniqueId,'BusinessUrl'=>$_BusinessUrl,'UserRating'=>$_UserRating,'ReviewCount'=>$_ReviewCount,'DisplayUrl'=>$_DisplayUrl));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set Business
	 * @param string Business
	 * @return string
	 */
	public function setBusiness($_Business)
	{
		return ($this->Business = $_Business);
	}
	/**
	 * Get Business
	 * @return string
	 */
	public function getBusiness()
	{
		return $this->Business;
	}
	/**
	 * Set PhoneNumber
	 * @param string PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}
	/**
	 * Set Address
	 * @param string Address
	 * @return string
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->Address;
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
	 * Set StateOrProvince
	 * @param string StateOrProvince
	 * @return string
	 */
	public function setStateOrProvince($_StateOrProvince)
	{
		return ($this->StateOrProvince = $_StateOrProvince);
	}
	/**
	 * Get StateOrProvince
	 * @return string
	 */
	public function getStateOrProvince()
	{
		return $this->StateOrProvince;
	}
	/**
	 * Set CountryOrRegion
	 * @param string CountryOrRegion
	 * @return string
	 */
	public function setCountryOrRegion($_CountryOrRegion)
	{
		return ($this->CountryOrRegion = $_CountryOrRegion);
	}
	/**
	 * Get CountryOrRegion
	 * @return string
	 */
	public function getCountryOrRegion()
	{
		return $this->CountryOrRegion;
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
	 * Set UniqueId
	 * @param string UniqueId
	 * @return string
	 */
	public function setUniqueId($_UniqueId)
	{
		return ($this->UniqueId = $_UniqueId);
	}
	/**
	 * Get UniqueId
	 * @return string
	 */
	public function getUniqueId()
	{
		return $this->UniqueId;
	}
	/**
	 * Set BusinessUrl
	 * @param string BusinessUrl
	 * @return string
	 */
	public function setBusinessUrl($_BusinessUrl)
	{
		return ($this->BusinessUrl = $_BusinessUrl);
	}
	/**
	 * Get BusinessUrl
	 * @return string
	 */
	public function getBusinessUrl()
	{
		return $this->BusinessUrl;
	}
	/**
	 * Set UserRating
	 * @param double UserRating
	 * @return double
	 */
	public function setUserRating($_UserRating)
	{
		return ($this->UserRating = $_UserRating);
	}
	/**
	 * Get UserRating
	 * @return double
	 */
	public function getUserRating()
	{
		return $this->UserRating;
	}
	/**
	 * Set ReviewCount
	 * @param unsignedInt ReviewCount
	 * @return unsignedInt
	 */
	public function setReviewCount($_ReviewCount)
	{
		return ($this->ReviewCount = $_ReviewCount);
	}
	/**
	 * Get ReviewCount
	 * @return unsignedInt
	 */
	public function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * Set DisplayUrl
	 * @param string DisplayUrl
	 * @return string
	 */
	public function setDisplayUrl($_DisplayUrl)
	{
		return ($this->DisplayUrl = $_DisplayUrl);
	}
	/**
	 * Get DisplayUrl
	 * @return string
	 */
	public function getDisplayUrl()
	{
		return $this->DisplayUrl;
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