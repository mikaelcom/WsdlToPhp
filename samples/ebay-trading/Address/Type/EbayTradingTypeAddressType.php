<?php
/**
 * Class file for EbayTradingTypeAddressType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddressType
 * Documentation : Contains the data for an eBay user's address. This is the base type for a number of user addresses, including seller payment address, buyer shipping address and buyer and seller registration address.
 * @date 04/07/2012
 */
class EbayTradingTypeAddressType extends EbayTradingWsdlClass
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
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The country code of the user.<br> <br> If not provided as input for GetCart or SetCart, eBay uses the country associated with the SiteID in effect when the call is made.<br> <br> Also applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $Country;
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
	 * The PhoneCountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Standard ISO code for the country of the user's primay telephone phone number. For Classifed Ad format listings, this code is used to look up the country's international calling prefix. Both the ISO code and country phone prefix are stored with listings of this type. This field applies to Classified Ad format listings only.
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $PhoneCountryCode;
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
	 * The Phone2CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Standard ISO code for the country of a user's secondary telephone phone number. For Classifed Ad format listings, this code is used to look up the country's international calling prefix. Both the ISO code and country phone prefix are stored with listings of this type. This field applies to Classified Ad format listings only.
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $Phone2CountryCode;
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
	 * 	- documentation : User's postal code.<br> <br> If not provided as input for GetCart or SetCart, eBay uses the country associated with the SiteID in effect when the call is made.<br> <br> Also applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The AddressID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID for a user's address in the eBay database. This value can help prevent the need to store an address multiple times across multiple orders. The ID changes if a user changes their address.
	 * @var string
	 */
	public $AddressID;
	/**
	 * The AddressOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The realm to which the address belongs (e.g. eBay vs PayPal). For GetOrders, applies only to Half.com.
	 * @var EbayTradingTypeAddressOwnerCodeType
	 */
	public $AddressOwner;
	/**
	 * The AddressStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : PayPal address status. Not applicable to Half.com.
	 * @var EbayTradingTypeAddressStatusCodeType
	 */
	public $AddressStatus;
	/**
	 * The ExternalAddressID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID assigned to the address by the address owner, e.g. by the PayPal system. Currently, the ExternalAddressID only applies for a customer address in the PayPal system. The ID changes if a user changes their address. Also see the AddressOwner field. The ExternalAddressID value also is applicable to Half.com (for GetOrders).
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
	 * The AddressRecordType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the nature of the address (e.g., residential or business). Not applicable to Half.com.
	 * @var EbayTradingTypeAddressRecordTypeCodeType
	 */
	public $AddressRecordType;
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
	 * The Phone2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Secondary Phone number of the lead. Not returned if information is unavailable.
	 * @var string
	 */
	public $Phone2;
	/**
	 * The AddressUsage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This tag tells whether current address is a default shipping address or one of the shipping addresses in address book.
	 * @var EbayTradingTypeAddressUsageCodeType
	 */
	public $AddressUsage;
	/**
	 * The ReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Uniquely identifies an order shipped using the Global Exchange program. This value is generated by eBay when the order is completed. The international shipping provider uses the ReferenceID as the primary reference when processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider. <br/><br/> Example: "Reference #1234567890123456" <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var string
	 */
	public $ReferenceID;
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
	 * @param EbayTradingTypeCountryCodeType Country
	 * @param string CountryName
	 * @param string Phone
	 * @param EbayTradingTypeCountryCodeType PhoneCountryCode
	 * @param string PhoneCountryPrefix
	 * @param string PhoneAreaOrCityCode
	 * @param string PhoneLocalNumber
	 * @param EbayTradingTypeCountryCodeType Phone2CountryCode
	 * @param string Phone2CountryPrefix
	 * @param string Phone2AreaOrCityCode
	 * @param string Phone2LocalNumber
	 * @param string PostalCode
	 * @param string AddressID
	 * @param EbayTradingTypeAddressOwnerCodeType AddressOwner
	 * @param EbayTradingTypeAddressStatusCodeType AddressStatus
	 * @param string ExternalAddressID
	 * @param string InternationalName
	 * @param string InternationalStateAndCity
	 * @param string InternationalStreet
	 * @param string CompanyName
	 * @param EbayTradingTypeAddressRecordTypeCodeType AddressRecordType
	 * @param string FirstName
	 * @param string LastName
	 * @param string Phone2
	 * @param EbayTradingTypeAddressUsageCodeType AddressUsage
	 * @param string ReferenceID
	 * @param DOMDocument any
	 * @return EbayTradingTypeAddressType
	 */
	public function __construct($_Name = null,$_Street = null,$_Street1 = null,$_Street2 = null,$_CityName = null,$_County = null,$_StateOrProvince = null,$_Country = null,$_CountryName = null,$_Phone = null,$_PhoneCountryCode = null,$_PhoneCountryPrefix = null,$_PhoneAreaOrCityCode = null,$_PhoneLocalNumber = null,$_Phone2CountryCode = null,$_Phone2CountryPrefix = null,$_Phone2AreaOrCityCode = null,$_Phone2LocalNumber = null,$_PostalCode = null,$_AddressID = null,$_AddressOwner = null,$_AddressStatus = null,$_ExternalAddressID = null,$_InternationalName = null,$_InternationalStateAndCity = null,$_InternationalStreet = null,$_CompanyName = null,$_AddressRecordType = null,$_FirstName = null,$_LastName = null,$_Phone2 = null,$_AddressUsage = null,$_ReferenceID = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'Street'=>$_Street,'Street1'=>$_Street1,'Street2'=>$_Street2,'CityName'=>$_CityName,'County'=>$_County,'StateOrProvince'=>$_StateOrProvince,'Country'=>$_Country,'CountryName'=>$_CountryName,'Phone'=>$_Phone,'PhoneCountryCode'=>$_PhoneCountryCode,'PhoneCountryPrefix'=>$_PhoneCountryPrefix,'PhoneAreaOrCityCode'=>$_PhoneAreaOrCityCode,'PhoneLocalNumber'=>$_PhoneLocalNumber,'Phone2CountryCode'=>$_Phone2CountryCode,'Phone2CountryPrefix'=>$_Phone2CountryPrefix,'Phone2AreaOrCityCode'=>$_Phone2AreaOrCityCode,'Phone2LocalNumber'=>$_Phone2LocalNumber,'PostalCode'=>$_PostalCode,'AddressID'=>$_AddressID,'AddressOwner'=>$_AddressOwner,'AddressStatus'=>$_AddressStatus,'ExternalAddressID'=>$_ExternalAddressID,'InternationalName'=>$_InternationalName,'InternationalStateAndCity'=>$_InternationalStateAndCity,'InternationalStreet'=>$_InternationalStreet,'CompanyName'=>$_CompanyName,'AddressRecordType'=>$_AddressRecordType,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'Phone2'=>$_Phone2,'AddressUsage'=>$_AddressUsage,'ReferenceID'=>$_ReferenceID,'any'=>$_any));
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
	 * Set Country
	 * @param CountryCodeType Country
	 * @return CountryCodeType
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = EbayTradingTypeCountryCodeType::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getCountry()
	{
		return $this->Country;
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
	 * Set PhoneCountryCode
	 * @param CountryCodeType PhoneCountryCode
	 * @return CountryCodeType
	 */
	public function setPhoneCountryCode($_PhoneCountryCode)
	{
		return ($this->PhoneCountryCode = EbayTradingTypeCountryCodeType::valueIsValid($_PhoneCountryCode)?$_PhoneCountryCode:null);
	}
	/**
	 * Get PhoneCountryCode
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getPhoneCountryCode()
	{
		return $this->PhoneCountryCode;
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
	 * Set Phone2CountryCode
	 * @param CountryCodeType Phone2CountryCode
	 * @return CountryCodeType
	 */
	public function setPhone2CountryCode($_Phone2CountryCode)
	{
		return ($this->Phone2CountryCode = EbayTradingTypeCountryCodeType::valueIsValid($_Phone2CountryCode)?$_Phone2CountryCode:null);
	}
	/**
	 * Get Phone2CountryCode
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getPhone2CountryCode()
	{
		return $this->Phone2CountryCode;
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
	 * Set AddressOwner
	 * @param AddressOwnerCodeType AddressOwner
	 * @return AddressOwnerCodeType
	 */
	public function setAddressOwner($_AddressOwner)
	{
		return ($this->AddressOwner = EbayTradingTypeAddressOwnerCodeType::valueIsValid($_AddressOwner)?$_AddressOwner:null);
	}
	/**
	 * Get AddressOwner
	 * @return EbayTradingTypeAddressOwnerCodeType
	 */
	public function getAddressOwner()
	{
		return $this->AddressOwner;
	}
	/**
	 * Set AddressStatus
	 * @param AddressStatusCodeType AddressStatus
	 * @return AddressStatusCodeType
	 */
	public function setAddressStatus($_AddressStatus)
	{
		return ($this->AddressStatus = EbayTradingTypeAddressStatusCodeType::valueIsValid($_AddressStatus)?$_AddressStatus:null);
	}
	/**
	 * Get AddressStatus
	 * @return EbayTradingTypeAddressStatusCodeType
	 */
	public function getAddressStatus()
	{
		return $this->AddressStatus;
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
	 * Set AddressRecordType
	 * @param AddressRecordTypeCodeType AddressRecordType
	 * @return AddressRecordTypeCodeType
	 */
	public function setAddressRecordType($_AddressRecordType)
	{
		return ($this->AddressRecordType = EbayTradingTypeAddressRecordTypeCodeType::valueIsValid($_AddressRecordType)?$_AddressRecordType:null);
	}
	/**
	 * Get AddressRecordType
	 * @return EbayTradingTypeAddressRecordTypeCodeType
	 */
	public function getAddressRecordType()
	{
		return $this->AddressRecordType;
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
	 * Set Phone2
	 * @param string Phone2
	 * @return string
	 */
	public function setPhone2($_Phone2)
	{
		return ($this->Phone2 = $_Phone2);
	}
	/**
	 * Get Phone2
	 * @return string
	 */
	public function getPhone2()
	{
		return $this->Phone2;
	}
	/**
	 * Set AddressUsage
	 * @param AddressUsageCodeType AddressUsage
	 * @return AddressUsageCodeType
	 */
	public function setAddressUsage($_AddressUsage)
	{
		return ($this->AddressUsage = EbayTradingTypeAddressUsageCodeType::valueIsValid($_AddressUsage)?$_AddressUsage:null);
	}
	/**
	 * Get AddressUsage
	 * @return EbayTradingTypeAddressUsageCodeType
	 */
	public function getAddressUsage()
	{
		return $this->AddressUsage;
	}
	/**
	 * Set ReferenceID
	 * @param string ReferenceID
	 * @return string
	 */
	public function setReferenceID($_ReferenceID)
	{
		return ($this->ReferenceID = $_ReferenceID);
	}
	/**
	 * Get ReferenceID
	 * @return string
	 */
	public function getReferenceID()
	{
		return $this->ReferenceID;
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