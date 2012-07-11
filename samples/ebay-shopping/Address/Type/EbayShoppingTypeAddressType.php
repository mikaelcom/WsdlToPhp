<?php
/**
 * Class file for EbayShoppingTypeAddressType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeAddressType
 * Documentation : Contains the data for one user address. This is the base type for a number of user addresses, including seller payment address, buyer shipping address and buyer and seller registration address.
 * @date 05/07/2012
 */
class EbayShoppingTypeAddressType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User's name for the address. Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $Name;
	/**
	 * The Street
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A concatenation of Street1 and Street2, primarily for RegistrationAddress. Not applicable to Half.com.
	 * @var string
	 */
	public $Street;
	/**
	 * The Street1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Line 1 of the user's street address. Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $Street1;
	/**
	 * The Street2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Line 2 of the user's address (such as an apartment number). Returned if the user specified a second street value for their address. Also applicable to Half.com (for GetOrders).<br> In case of Item.SellerContactDetails, Street2 can be used to provide City, Address, State, and Zip code (if applicable).
	 * @var string
	 */
	public $Street2;
	/**
	 * The CityName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the user's city. Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $CityName;
	/**
	 * The County
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : County information for the user. This field applies to Classified Ad format listings and to the UK only. Not applicable to Half.com.
	 * @var string
	 */
	public $County;
	/**
	 * The StateOrProvince
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The region of the user's address. Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $StateOrProvince;
	/**
	 * The CountryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the user's country. Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $CountryName;
	/**
	 * The Phone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User's primary phone number. This may return a value of "Invalid Request" if you are not authorized to see the user's phone number. Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $Phone;
	/**
	 * The PhoneCountryPrefix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Country Prefix of the secondary phone number. This value is derived from inputs supplied for PhoneCountryCode. This field applies to Classified Ad format listings only.
	 * @var string
	 */
	public $PhoneCountryPrefix;
	/**
	 * The PhoneAreaOrCityCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Area or City Code of a user's primary phone number. This field applies to Classified Ad format listings only.
	 * @var string
	 */
	public $PhoneAreaOrCityCode;
	/**
	 * The PhoneLocalNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The local number portion of the user's primary phone number. This field applies to Classified Ad format listings only. <br> <b>Note:</b> The full primary phone number is constructed by combining PhoneLocalNumber with PhoneAreaOrCityCode and PhoneCountryPrefix. Starting with API release 497, the full phone number can be entered in PhoneLocalNumber. Refer to the release notes for additional information.
	 * @var string
	 */
	public $PhoneLocalNumber;
	/**
	 * The Phone2CountryPrefix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Country prefix of a user's secondary phone number. This value is derived from inputs supplied for Phone2CountryCode. This field applies to Classified Ad format listings only.
	 * @var string
	 */
	public $Phone2CountryPrefix;
	/**
	 * The Phone2AreaOrCityCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Area or City Code of a user's secondary phone number. This field applies to Classified Ad format listings only.
	 * @var string
	 */
	public $Phone2AreaOrCityCode;
	/**
	 * The Phone2LocalNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The local number portion of the user's secondary phone number. This field applies to Classified Ad format listings only. <br> <b>Note:</b> The full secondary phone number is constructed by combining Phone2LocalNumber with Phone2AreaOrCityCode and Phone2CountryPrefix. Starting with API release 497, the full phone number can be entered in Phone2LocalNumber. Refer to the release notes for additional information.
	 * @var string
	 */
	public $Phone2LocalNumber;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User's postal code. <br> <br> If not provided as input for GetCart or SetCart, eBay uses the country associated with the SiteID in effect when the call is made. <br> <br> Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The AddressID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID assigned to the address in the eBay database. For GetOrders, applies only to Half.com.
	 * @var string
	 */
	public $AddressID;
	/**
	 * The ExternalAddressID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID assigned to the address by the owner of the address (fitting only if the address is owned by PayPal; see AddressOwner). Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $ExternalAddressID;
	/**
	 * The InternationalName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller's international name that is associated with the payment address. Only applicable to SellerPaymentAddress. Not applicable to Half.com.
	 * @var string
	 */
	public $InternationalName;
	/**
	 * The InternationalStateAndCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : International state and city for the seller's payment address. Only applicable to SellerPaymentAddress. Not applicable to Half.com.
	 * @var string
	 */
	public $InternationalStateAndCity;
	/**
	 * The InternationalStreet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller's international street address that is associated with the payment address. Only applicable to SellerPaymentAddress. Not applicable to Half.com.
	 * @var string
	 */
	public $InternationalStreet;
	/**
	 * The CompanyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User's company name. Only returned if available. Not applicable to Half.com.
	 * @var string
	 */
	public $CompanyName;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the first name of the seller (in a business card format) if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the last name of the seller (in a business card format) if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $LastName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Street
	 * @param string Street1
	 * @param string Street2
	 * @param string CityName
	 * @param string County
	 * @param string StateOrProvince
	 * @param string CountryName
	 * @param string Phone
	 * @param string PhoneCountryPrefix
	 * @param string PhoneAreaOrCityCode
	 * @param string PhoneLocalNumber
	 * @param string Phone2CountryPrefix
	 * @param string Phone2AreaOrCityCode
	 * @param string Phone2LocalNumber
	 * @param string PostalCode
	 * @param string AddressID
	 * @param string ExternalAddressID
	 * @param string InternationalName
	 * @param string InternationalStateAndCity
	 * @param string InternationalStreet
	 * @param string CompanyName
	 * @param string FirstName
	 * @param string LastName
	 * @param DOMDocument any
	 * @return EbayShoppingTypeAddressType
	 */
	public function __construct($_Name = null,$_Street = null,$_Street1 = null,$_Street2 = null,$_CityName = null,$_County = null,$_StateOrProvince = null,$_CountryName = null,$_Phone = null,$_PhoneCountryPrefix = null,$_PhoneAreaOrCityCode = null,$_PhoneLocalNumber = null,$_Phone2CountryPrefix = null,$_Phone2AreaOrCityCode = null,$_Phone2LocalNumber = null,$_PostalCode = null,$_AddressID = null,$_ExternalAddressID = null,$_InternationalName = null,$_InternationalStateAndCity = null,$_InternationalStreet = null,$_CompanyName = null,$_FirstName = null,$_LastName = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'Street'=>$_Street,'Street1'=>$_Street1,'Street2'=>$_Street2,'CityName'=>$_CityName,'County'=>$_County,'StateOrProvince'=>$_StateOrProvince,'CountryName'=>$_CountryName,'Phone'=>$_Phone,'PhoneCountryPrefix'=>$_PhoneCountryPrefix,'PhoneAreaOrCityCode'=>$_PhoneAreaOrCityCode,'PhoneLocalNumber'=>$_PhoneLocalNumber,'Phone2CountryPrefix'=>$_Phone2CountryPrefix,'Phone2AreaOrCityCode'=>$_Phone2AreaOrCityCode,'Phone2LocalNumber'=>$_Phone2LocalNumber,'PostalCode'=>$_PostalCode,'AddressID'=>$_AddressID,'ExternalAddressID'=>$_ExternalAddressID,'InternationalName'=>$_InternationalName,'InternationalStateAndCity'=>$_InternationalStateAndCity,'InternationalStreet'=>$_InternationalStreet,'CompanyName'=>$_CompanyName,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Street
	 * @param string Street
	 * @return string
	 */
	public function setStreet($_Street)
	{
		return ($this->Street = $_Street);
	}
	/**
	 * Get Street
	 * @return string
	 */
	public function getStreet()
	{
		return $this->Street;
	}
	/**
	 * Set Street1
	 * @param string Street1
	 * @return string
	 */
	public function setStreet1($_Street1)
	{
		return ($this->Street1 = $_Street1);
	}
	/**
	 * Get Street1
	 * @return string
	 */
	public function getStreet1()
	{
		return $this->Street1;
	}
	/**
	 * Set Street2
	 * @param string Street2
	 * @return string
	 */
	public function setStreet2($_Street2)
	{
		return ($this->Street2 = $_Street2);
	}
	/**
	 * Get Street2
	 * @return string
	 */
	public function getStreet2()
	{
		return $this->Street2;
	}
	/**
	 * Set CityName
	 * @param string CityName
	 * @return string
	 */
	public function setCityName($_CityName)
	{
		return ($this->CityName = $_CityName);
	}
	/**
	 * Get CityName
	 * @return string
	 */
	public function getCityName()
	{
		return $this->CityName;
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
	 * Set Phone
	 * @param string Phone
	 * @return string
	 */
	public function setPhone($_Phone)
	{
		return ($this->Phone = $_Phone);
	}
	/**
	 * Get Phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->Phone;
	}
	/**
	 * Set PhoneCountryPrefix
	 * @param string PhoneCountryPrefix
	 * @return string
	 */
	public function setPhoneCountryPrefix($_PhoneCountryPrefix)
	{
		return ($this->PhoneCountryPrefix = $_PhoneCountryPrefix);
	}
	/**
	 * Get PhoneCountryPrefix
	 * @return string
	 */
	public function getPhoneCountryPrefix()
	{
		return $this->PhoneCountryPrefix;
	}
	/**
	 * Set PhoneAreaOrCityCode
	 * @param string PhoneAreaOrCityCode
	 * @return string
	 */
	public function setPhoneAreaOrCityCode($_PhoneAreaOrCityCode)
	{
		return ($this->PhoneAreaOrCityCode = $_PhoneAreaOrCityCode);
	}
	/**
	 * Get PhoneAreaOrCityCode
	 * @return string
	 */
	public function getPhoneAreaOrCityCode()
	{
		return $this->PhoneAreaOrCityCode;
	}
	/**
	 * Set PhoneLocalNumber
	 * @param string PhoneLocalNumber
	 * @return string
	 */
	public function setPhoneLocalNumber($_PhoneLocalNumber)
	{
		return ($this->PhoneLocalNumber = $_PhoneLocalNumber);
	}
	/**
	 * Get PhoneLocalNumber
	 * @return string
	 */
	public function getPhoneLocalNumber()
	{
		return $this->PhoneLocalNumber;
	}
	/**
	 * Set Phone2CountryPrefix
	 * @param string Phone2CountryPrefix
	 * @return string
	 */
	public function setPhone2CountryPrefix($_Phone2CountryPrefix)
	{
		return ($this->Phone2CountryPrefix = $_Phone2CountryPrefix);
	}
	/**
	 * Get Phone2CountryPrefix
	 * @return string
	 */
	public function getPhone2CountryPrefix()
	{
		return $this->Phone2CountryPrefix;
	}
	/**
	 * Set Phone2AreaOrCityCode
	 * @param string Phone2AreaOrCityCode
	 * @return string
	 */
	public function setPhone2AreaOrCityCode($_Phone2AreaOrCityCode)
	{
		return ($this->Phone2AreaOrCityCode = $_Phone2AreaOrCityCode);
	}
	/**
	 * Get Phone2AreaOrCityCode
	 * @return string
	 */
	public function getPhone2AreaOrCityCode()
	{
		return $this->Phone2AreaOrCityCode;
	}
	/**
	 * Set Phone2LocalNumber
	 * @param string Phone2LocalNumber
	 * @return string
	 */
	public function setPhone2LocalNumber($_Phone2LocalNumber)
	{
		return ($this->Phone2LocalNumber = $_Phone2LocalNumber);
	}
	/**
	 * Get Phone2LocalNumber
	 * @return string
	 */
	public function getPhone2LocalNumber()
	{
		return $this->Phone2LocalNumber;
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
	 * Set AddressID
	 * @param string AddressID
	 * @return string
	 */
	public function setAddressID($_AddressID)
	{
		return ($this->AddressID = $_AddressID);
	}
	/**
	 * Get AddressID
	 * @return string
	 */
	public function getAddressID()
	{
		return $this->AddressID;
	}
	/**
	 * Set ExternalAddressID
	 * @param string ExternalAddressID
	 * @return string
	 */
	public function setExternalAddressID($_ExternalAddressID)
	{
		return ($this->ExternalAddressID = $_ExternalAddressID);
	}
	/**
	 * Get ExternalAddressID
	 * @return string
	 */
	public function getExternalAddressID()
	{
		return $this->ExternalAddressID;
	}
	/**
	 * Set InternationalName
	 * @param string InternationalName
	 * @return string
	 */
	public function setInternationalName($_InternationalName)
	{
		return ($this->InternationalName = $_InternationalName);
	}
	/**
	 * Get InternationalName
	 * @return string
	 */
	public function getInternationalName()
	{
		return $this->InternationalName;
	}
	/**
	 * Set InternationalStateAndCity
	 * @param string InternationalStateAndCity
	 * @return string
	 */
	public function setInternationalStateAndCity($_InternationalStateAndCity)
	{
		return ($this->InternationalStateAndCity = $_InternationalStateAndCity);
	}
	/**
	 * Get InternationalStateAndCity
	 * @return string
	 */
	public function getInternationalStateAndCity()
	{
		return $this->InternationalStateAndCity;
	}
	/**
	 * Set InternationalStreet
	 * @param string InternationalStreet
	 * @return string
	 */
	public function setInternationalStreet($_InternationalStreet)
	{
		return ($this->InternationalStreet = $_InternationalStreet);
	}
	/**
	 * Get InternationalStreet
	 * @return string
	 */
	public function getInternationalStreet()
	{
		return $this->InternationalStreet;
	}
	/**
	 * Set CompanyName
	 * @param string CompanyName
	 * @return string
	 */
	public function setCompanyName($_CompanyName)
	{
		return ($this->CompanyName = $_CompanyName);
	}
	/**
	 * Get CompanyName
	 * @return string
	 */
	public function getCompanyName()
	{
		return $this->CompanyName;
	}
	/**
	 * Set FirstName
	 * @param string FirstName
	 * @return string
	 */
	public function setFirstName($_FirstName)
	{
		return ($this->FirstName = $_FirstName);
	}
	/**
	 * Get FirstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set LastName
	 * @param string LastName
	 * @return string
	 */
	public function setLastName($_LastName)
	{
		return ($this->LastName = $_LastName);
	}
	/**
	 * Get LastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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