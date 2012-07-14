<?php
/**
 * Class file for PayPalTypeAddressType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAddressType
 * @date 14/07/2012
 */
class PayPalTypeAddressType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Person's name associated with this address. Character length and limitations: 32 single-byte alphanumeric characters
	 * @var string
	 */
	public $Name;
	/**
	 * The Street1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : First street address. Character length and limitations: 300 single-byte alphanumeric characters
	 * @var string
	 */
	public $Street1;
	/**
	 * The Street2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Second street address. Character length and limitations: 300 single-byte alphanumeric characters
	 * @var string
	 */
	public $Street2;
	/**
	 * The CityName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of city. Character length and limitations: 120 single-byte alphanumeric characters
	 * @var string
	 */
	public $CityName;
	/**
	 * The StateOrProvince
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : State or province. Character length and limitations: 120 single-byte alphanumeric characters For Canada and the USA, StateOrProvince must be the standard 2-character abbreviation of a state or province. Canadian Provinces Alberta AB British_Columbia BC Manitoba MB New_Brunswick NB Newfoundland NF Northwest_Territories NT Nova_Scotia NS Nunavut NU Ontario ON Prince_Edward_Island PE Quebec QC Saskatchewan SK Yukon YK United States Alabama AL Alaska AK American_Samoa AS Arizona AZ Arkansas AR California CA Colorado CO Connecticut CT Delaware DE District_Of_Columbia DC Federated_States_Of_Micronesia FM Florida FL Georgia GA Guam GU Hawaii HI Idaho ID Illinois IL Indiana IN Iowa IA Kansas KS Kentucky KY Louisiana LA Maine ME Marshall_Islands MH Maryland MD Massachusetts MA Michigan MI Minnesota MN Mississippi MS Missouri MO Montana MT Nebraska NE Nevada NV New_Hampshire NH New_Jersey NJ New_Mexico NM New_York NY North_Carolina NC North_Dakota ND Northern_Mariana_Islands MP Ohio OH Oklahoma OK Oregon OR Palau PW Pennsylvania PA Puerto_Rico PR Rhode_Island RI South_Carolina SC South_Dakota SD Tennessee TN Texas TX Utah UT Vermont VT Virgin_Islands VI Virginia VA Washington WA West_Virginia WV Wisconsin WI Wyoming WY Armed_Forces_Americas AA Armed_Forces AE Armed_Forces_Pacific AP
	 * @var string
	 */
	public $StateOrProvince;
	/**
	 * The Country
	 * @var PayPalTypeCountryCodeType
	 */
	public $Country;
	/**
	 * The CountryName
	 * @var string
	 */
	public $CountryName;
	/**
	 * The Phone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Telephone number associated with this address
	 * @var string
	 */
	public $Phone;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The AddressID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile, or UpdateRecurringPaymentsProfile.
	 * @var string
	 */
	public $AddressID;
	/**
	 * The AddressOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * @var PayPalTypeAddressOwnerCodeType
	 */
	public $AddressOwner;
	/**
	 * The ExternalAddressID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * @var string
	 */
	public $ExternalAddressID;
	/**
	 * The InternationalName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. Seller's international name that is associated with the payment address.
	 * @var string
	 */
	public $InternationalName;
	/**
	 * The InternationalStateAndCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. International state and city for the seller's payment address.
	 * @var string
	 */
	public $InternationalStateAndCity;
	/**
	 * The InternationalStreet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. Seller's international street address that is associated with the payment address.
	 * @var string
	 */
	public $InternationalStreet;
	/**
	 * The AddressStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status of the address on file with PayPal. IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
	 * @var PayPalTypeAddressStatusCodeType
	 */
	public $AddressStatus;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Street1
	 * @param string Street2
	 * @param string CityName
	 * @param string StateOrProvince
	 * @param PayPalTypeCountryCodeType Country
	 * @param string CountryName
	 * @param string Phone
	 * @param string PostalCode
	 * @param string AddressID
	 * @param PayPalTypeAddressOwnerCodeType AddressOwner
	 * @param string ExternalAddressID
	 * @param string InternationalName
	 * @param string InternationalStateAndCity
	 * @param string InternationalStreet
	 * @param PayPalTypeAddressStatusCodeType AddressStatus
	 * @return PayPalTypeAddressType
	 */
	public function __construct($_Name = null,$_Street1 = null,$_Street2 = null,$_CityName = null,$_StateOrProvince = null,$_Country = null,$_CountryName = null,$_Phone = null,$_PostalCode = null,$_AddressID = null,$_AddressOwner = null,$_ExternalAddressID = null,$_InternationalName = null,$_InternationalStateAndCity = null,$_InternationalStreet = null,$_AddressStatus = null)
	{
		parent::__construct(array('Name'=>$_Name,'Street1'=>$_Street1,'Street2'=>$_Street2,'CityName'=>$_CityName,'StateOrProvince'=>$_StateOrProvince,'Country'=>$_Country,'CountryName'=>$_CountryName,'Phone'=>$_Phone,'PostalCode'=>$_PostalCode,'AddressID'=>$_AddressID,'AddressOwner'=>$_AddressOwner,'ExternalAddressID'=>$_ExternalAddressID,'InternationalName'=>$_InternationalName,'InternationalStateAndCity'=>$_InternationalStateAndCity,'InternationalStreet'=>$_InternationalStreet,'AddressStatus'=>$_AddressStatus));
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
		return ($this->Country = PayPalTypeCountryCodeType::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return PayPalTypeCountryCodeType
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
		return ($this->AddressOwner = PayPalTypeAddressOwnerCodeType::valueIsValid($_AddressOwner)?$_AddressOwner:null);
	}
	/**
	 * Get AddressOwner
	 * @return PayPalTypeAddressOwnerCodeType
	 */
	public function getAddressOwner()
	{
		return $this->AddressOwner;
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
	 * Set AddressStatus
	 * @param AddressStatusCodeType AddressStatus
	 * @return AddressStatusCodeType
	 */
	public function setAddressStatus($_AddressStatus)
	{
		return ($this->AddressStatus = PayPalTypeAddressStatusCodeType::valueIsValid($_AddressStatus)?$_AddressStatus:null);
	}
	/**
	 * Get AddressStatus
	 * @return PayPalTypeAddressStatusCodeType
	 */
	public function getAddressStatus()
	{
		return $this->AddressStatus;
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