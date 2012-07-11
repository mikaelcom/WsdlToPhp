<?php
/**
 * Class file for SOLeadEnhancementPlusTypeLead
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementPlusTypeLead
 * @date 06/07/2012
 */
class SOLeadEnhancementPlusTypeLead extends SOLeadEnhancementPlusTypeResultContainer
{
	/**
	 * The NameIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameIn;
	/**
	 * The EmailAddressIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddressIn;
	/**
	 * The PhoneNumberIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberIn;
	/**
	 * The Address1In
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address1In;
	/**
	 * The Address2In
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2In;
	/**
	 * The CityIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CityIn;
	/**
	 * The RegionIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RegionIn;
	/**
	 * The PostalCodeIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCodeIn;
	/**
	 * The CountryIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryIn;
	/**
	 * The IPAddressIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressIn;
	/**
	 * The FirstNameOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstNameOut;
	/**
	 * The MiddleNameOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MiddleNameOut;
	/**
	 * The LastNameOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastNameOut;
	/**
	 * The GenderOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GenderOut;
	/**
	 * The FirstNameFound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstNameFound;
	/**
	 * The LastNameFound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastNameFound;
	/**
	 * The NameNotesDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameNotesDesc;
	/**
	 * The NameNotesCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameNotesCode;
	/**
	 * The Address1Out
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address1Out;
	/**
	 * The Address2Out
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2Out;
	/**
	 * The CityOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CityOut;
	/**
	 * The CountyOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyOut;
	/**
	 * The RegionOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RegionOut;
	/**
	 * The PostalCodeOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCodeOut;
	/**
	 * The CountryOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryOut;
	/**
	 * The IsAddressDPV
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsAddressDPV;
	/**
	 * The IsAddressResidential
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsAddressResidential;
	/**
	 * The AddressNotesDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressNotesDesc;
	/**
	 * The AddressNotesCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressNotesCode;
	/**
	 * The AddressErrorDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressErrorDesc;
	/**
	 * The AddressErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressErrorCode;
	/**
	 * The PhoneNumberOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberOut;
	/**
	 * The CarrierName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CarrierName;
	/**
	 * The ExchangeCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExchangeCity;
	/**
	 * The ExchangeRegion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExchangeRegion;
	/**
	 * The ExchangeCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExchangeCountry;
	/**
	 * The PhoneLineType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneLineType;
	/**
	 * The PhoneContacts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadEnhancementPlusTypePhoneContacts
	 */
	public $PhoneContacts;
	/**
	 * The AlternativePhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlternativePhoneNumber;
	/**
	 * The PhoneNumberErrorDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberErrorDesc;
	/**
	 * The PhoneNumberErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberErrorCode;
	/**
	 * The EmailAddressOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddressOut;
	/**
	 * The IsEmailAddressFree
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsEmailAddressFree;
	/**
	 * The IsEmailAddressGood
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsEmailAddressGood;
	/**
	 * The EmailNotesDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailNotesDesc;
	/**
	 * The EmailNotesCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailNotesCode;
	/**
	 * The EmailErrorDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailErrorDesc;
	/**
	 * The EmailErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailErrorCode;
	/**
	 * The IPAddressCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressCity;
	/**
	 * The IPAddressRegion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressRegion;
	/**
	 * The IPAddressCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressCountry;
	/**
	 * The IPAddressCountryISO2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressCountryISO2;
	/**
	 * The IPAddressCountryISO3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressCountryISO3;
	/**
	 * The IPAddressCertainty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressCertainty;
	/**
	 * The IPAddressISP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressISP;
	/**
	 * The IPAddressNetblockOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressNetblockOwner;
	/**
	 * The IPAddressIsProxy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressIsProxy;
	/**
	 * The IPAddressProxyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressProxyType;
	/**
	 * The IPAddressErrorDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressErrorDesc;
	/**
	 * The IPAddressErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressErrorCode;
	/**
	 * The DEBUG
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DEBUG;
	/**
	 * Constructor
	 * @param string NameIn
	 * @param string EmailAddressIn
	 * @param string PhoneNumberIn
	 * @param string Address1In
	 * @param string Address2In
	 * @param string CityIn
	 * @param string RegionIn
	 * @param string PostalCodeIn
	 * @param string CountryIn
	 * @param string IPAddressIn
	 * @param string FirstNameOut
	 * @param string MiddleNameOut
	 * @param string LastNameOut
	 * @param string GenderOut
	 * @param string FirstNameFound
	 * @param string LastNameFound
	 * @param string NameNotesDesc
	 * @param string NameNotesCode
	 * @param string Address1Out
	 * @param string Address2Out
	 * @param string CityOut
	 * @param string CountyOut
	 * @param string RegionOut
	 * @param string PostalCodeOut
	 * @param string CountryOut
	 * @param string IsAddressDPV
	 * @param string IsAddressResidential
	 * @param string AddressNotesDesc
	 * @param string AddressNotesCode
	 * @param string AddressErrorDesc
	 * @param string AddressErrorCode
	 * @param string PhoneNumberOut
	 * @param string CarrierName
	 * @param string ExchangeCity
	 * @param string ExchangeRegion
	 * @param string ExchangeCountry
	 * @param string PhoneLineType
	 * @param SOLeadEnhancementPlusTypePhoneContacts PhoneContacts
	 * @param string AlternativePhoneNumber
	 * @param string PhoneNumberErrorDesc
	 * @param string PhoneNumberErrorCode
	 * @param string EmailAddressOut
	 * @param string IsEmailAddressFree
	 * @param string IsEmailAddressGood
	 * @param string EmailNotesDesc
	 * @param string EmailNotesCode
	 * @param string EmailErrorDesc
	 * @param string EmailErrorCode
	 * @param string IPAddressCity
	 * @param string IPAddressRegion
	 * @param string IPAddressCountry
	 * @param string IPAddressCountryISO2
	 * @param string IPAddressCountryISO3
	 * @param string IPAddressCertainty
	 * @param string IPAddressISP
	 * @param string IPAddressNetblockOwner
	 * @param string IPAddressIsProxy
	 * @param string IPAddressProxyType
	 * @param string IPAddressErrorDesc
	 * @param string IPAddressErrorCode
	 * @param string DEBUG
	 * @return SOLeadEnhancementPlusTypeLead
	 */
	public function __construct($_NameIn = null,$_EmailAddressIn = null,$_PhoneNumberIn = null,$_Address1In = null,$_Address2In = null,$_CityIn = null,$_RegionIn = null,$_PostalCodeIn = null,$_CountryIn = null,$_IPAddressIn = null,$_FirstNameOut = null,$_MiddleNameOut = null,$_LastNameOut = null,$_GenderOut = null,$_FirstNameFound = null,$_LastNameFound = null,$_NameNotesDesc = null,$_NameNotesCode = null,$_Address1Out = null,$_Address2Out = null,$_CityOut = null,$_CountyOut = null,$_RegionOut = null,$_PostalCodeOut = null,$_CountryOut = null,$_IsAddressDPV = null,$_IsAddressResidential = null,$_AddressNotesDesc = null,$_AddressNotesCode = null,$_AddressErrorDesc = null,$_AddressErrorCode = null,$_PhoneNumberOut = null,$_CarrierName = null,$_ExchangeCity = null,$_ExchangeRegion = null,$_ExchangeCountry = null,$_PhoneLineType = null,$_PhoneContacts = null,$_AlternativePhoneNumber = null,$_PhoneNumberErrorDesc = null,$_PhoneNumberErrorCode = null,$_EmailAddressOut = null,$_IsEmailAddressFree = null,$_IsEmailAddressGood = null,$_EmailNotesDesc = null,$_EmailNotesCode = null,$_EmailErrorDesc = null,$_EmailErrorCode = null,$_IPAddressCity = null,$_IPAddressRegion = null,$_IPAddressCountry = null,$_IPAddressCountryISO2 = null,$_IPAddressCountryISO3 = null,$_IPAddressCertainty = null,$_IPAddressISP = null,$_IPAddressNetblockOwner = null,$_IPAddressIsProxy = null,$_IPAddressProxyType = null,$_IPAddressErrorDesc = null,$_IPAddressErrorCode = null,$_DEBUG = null)
	{
		SOLeadEnhancementPlusWsdlClass::__construct(array('NameIn'=>$_NameIn,'EmailAddressIn'=>$_EmailAddressIn,'PhoneNumberIn'=>$_PhoneNumberIn,'Address1In'=>$_Address1In,'Address2In'=>$_Address2In,'CityIn'=>$_CityIn,'RegionIn'=>$_RegionIn,'PostalCodeIn'=>$_PostalCodeIn,'CountryIn'=>$_CountryIn,'IPAddressIn'=>$_IPAddressIn,'FirstNameOut'=>$_FirstNameOut,'MiddleNameOut'=>$_MiddleNameOut,'LastNameOut'=>$_LastNameOut,'GenderOut'=>$_GenderOut,'FirstNameFound'=>$_FirstNameFound,'LastNameFound'=>$_LastNameFound,'NameNotesDesc'=>$_NameNotesDesc,'NameNotesCode'=>$_NameNotesCode,'Address1Out'=>$_Address1Out,'Address2Out'=>$_Address2Out,'CityOut'=>$_CityOut,'CountyOut'=>$_CountyOut,'RegionOut'=>$_RegionOut,'PostalCodeOut'=>$_PostalCodeOut,'CountryOut'=>$_CountryOut,'IsAddressDPV'=>$_IsAddressDPV,'IsAddressResidential'=>$_IsAddressResidential,'AddressNotesDesc'=>$_AddressNotesDesc,'AddressNotesCode'=>$_AddressNotesCode,'AddressErrorDesc'=>$_AddressErrorDesc,'AddressErrorCode'=>$_AddressErrorCode,'PhoneNumberOut'=>$_PhoneNumberOut,'CarrierName'=>$_CarrierName,'ExchangeCity'=>$_ExchangeCity,'ExchangeRegion'=>$_ExchangeRegion,'ExchangeCountry'=>$_ExchangeCountry,'PhoneLineType'=>$_PhoneLineType,'PhoneContacts'=>$_PhoneContacts,'AlternativePhoneNumber'=>$_AlternativePhoneNumber,'PhoneNumberErrorDesc'=>$_PhoneNumberErrorDesc,'PhoneNumberErrorCode'=>$_PhoneNumberErrorCode,'EmailAddressOut'=>$_EmailAddressOut,'IsEmailAddressFree'=>$_IsEmailAddressFree,'IsEmailAddressGood'=>$_IsEmailAddressGood,'EmailNotesDesc'=>$_EmailNotesDesc,'EmailNotesCode'=>$_EmailNotesCode,'EmailErrorDesc'=>$_EmailErrorDesc,'EmailErrorCode'=>$_EmailErrorCode,'IPAddressCity'=>$_IPAddressCity,'IPAddressRegion'=>$_IPAddressRegion,'IPAddressCountry'=>$_IPAddressCountry,'IPAddressCountryISO2'=>$_IPAddressCountryISO2,'IPAddressCountryISO3'=>$_IPAddressCountryISO3,'IPAddressCertainty'=>$_IPAddressCertainty,'IPAddressISP'=>$_IPAddressISP,'IPAddressNetblockOwner'=>$_IPAddressNetblockOwner,'IPAddressIsProxy'=>$_IPAddressIsProxy,'IPAddressProxyType'=>$_IPAddressProxyType,'IPAddressErrorDesc'=>$_IPAddressErrorDesc,'IPAddressErrorCode'=>$_IPAddressErrorCode,'DEBUG'=>$_DEBUG));
	}
	/**
	 * Set NameIn
	 * @param string NameIn
	 * @return string
	 */
	public function setNameIn($_NameIn)
	{
		return ($this->NameIn = $_NameIn);
	}
	/**
	 * Get NameIn
	 * @return string
	 */
	public function getNameIn()
	{
		return $this->NameIn;
	}
	/**
	 * Set EmailAddressIn
	 * @param string EmailAddressIn
	 * @return string
	 */
	public function setEmailAddressIn($_EmailAddressIn)
	{
		return ($this->EmailAddressIn = $_EmailAddressIn);
	}
	/**
	 * Get EmailAddressIn
	 * @return string
	 */
	public function getEmailAddressIn()
	{
		return $this->EmailAddressIn;
	}
	/**
	 * Set PhoneNumberIn
	 * @param string PhoneNumberIn
	 * @return string
	 */
	public function setPhoneNumberIn($_PhoneNumberIn)
	{
		return ($this->PhoneNumberIn = $_PhoneNumberIn);
	}
	/**
	 * Get PhoneNumberIn
	 * @return string
	 */
	public function getPhoneNumberIn()
	{
		return $this->PhoneNumberIn;
	}
	/**
	 * Set Address1In
	 * @param string Address1In
	 * @return string
	 */
	public function setAddress1In($_Address1In)
	{
		return ($this->Address1In = $_Address1In);
	}
	/**
	 * Get Address1In
	 * @return string
	 */
	public function getAddress1In()
	{
		return $this->Address1In;
	}
	/**
	 * Set Address2In
	 * @param string Address2In
	 * @return string
	 */
	public function setAddress2In($_Address2In)
	{
		return ($this->Address2In = $_Address2In);
	}
	/**
	 * Get Address2In
	 * @return string
	 */
	public function getAddress2In()
	{
		return $this->Address2In;
	}
	/**
	 * Set CityIn
	 * @param string CityIn
	 * @return string
	 */
	public function setCityIn($_CityIn)
	{
		return ($this->CityIn = $_CityIn);
	}
	/**
	 * Get CityIn
	 * @return string
	 */
	public function getCityIn()
	{
		return $this->CityIn;
	}
	/**
	 * Set RegionIn
	 * @param string RegionIn
	 * @return string
	 */
	public function setRegionIn($_RegionIn)
	{
		return ($this->RegionIn = $_RegionIn);
	}
	/**
	 * Get RegionIn
	 * @return string
	 */
	public function getRegionIn()
	{
		return $this->RegionIn;
	}
	/**
	 * Set PostalCodeIn
	 * @param string PostalCodeIn
	 * @return string
	 */
	public function setPostalCodeIn($_PostalCodeIn)
	{
		return ($this->PostalCodeIn = $_PostalCodeIn);
	}
	/**
	 * Get PostalCodeIn
	 * @return string
	 */
	public function getPostalCodeIn()
	{
		return $this->PostalCodeIn;
	}
	/**
	 * Set CountryIn
	 * @param string CountryIn
	 * @return string
	 */
	public function setCountryIn($_CountryIn)
	{
		return ($this->CountryIn = $_CountryIn);
	}
	/**
	 * Get CountryIn
	 * @return string
	 */
	public function getCountryIn()
	{
		return $this->CountryIn;
	}
	/**
	 * Set IPAddressIn
	 * @param string IPAddressIn
	 * @return string
	 */
	public function setIPAddressIn($_IPAddressIn)
	{
		return ($this->IPAddressIn = $_IPAddressIn);
	}
	/**
	 * Get IPAddressIn
	 * @return string
	 */
	public function getIPAddressIn()
	{
		return $this->IPAddressIn;
	}
	/**
	 * Set FirstNameOut
	 * @param string FirstNameOut
	 * @return string
	 */
	public function setFirstNameOut($_FirstNameOut)
	{
		return ($this->FirstNameOut = $_FirstNameOut);
	}
	/**
	 * Get FirstNameOut
	 * @return string
	 */
	public function getFirstNameOut()
	{
		return $this->FirstNameOut;
	}
	/**
	 * Set MiddleNameOut
	 * @param string MiddleNameOut
	 * @return string
	 */
	public function setMiddleNameOut($_MiddleNameOut)
	{
		return ($this->MiddleNameOut = $_MiddleNameOut);
	}
	/**
	 * Get MiddleNameOut
	 * @return string
	 */
	public function getMiddleNameOut()
	{
		return $this->MiddleNameOut;
	}
	/**
	 * Set LastNameOut
	 * @param string LastNameOut
	 * @return string
	 */
	public function setLastNameOut($_LastNameOut)
	{
		return ($this->LastNameOut = $_LastNameOut);
	}
	/**
	 * Get LastNameOut
	 * @return string
	 */
	public function getLastNameOut()
	{
		return $this->LastNameOut;
	}
	/**
	 * Set GenderOut
	 * @param string GenderOut
	 * @return string
	 */
	public function setGenderOut($_GenderOut)
	{
		return ($this->GenderOut = $_GenderOut);
	}
	/**
	 * Get GenderOut
	 * @return string
	 */
	public function getGenderOut()
	{
		return $this->GenderOut;
	}
	/**
	 * Set FirstNameFound
	 * @param string FirstNameFound
	 * @return string
	 */
	public function setFirstNameFound($_FirstNameFound)
	{
		return ($this->FirstNameFound = $_FirstNameFound);
	}
	/**
	 * Get FirstNameFound
	 * @return string
	 */
	public function getFirstNameFound()
	{
		return $this->FirstNameFound;
	}
	/**
	 * Set LastNameFound
	 * @param string LastNameFound
	 * @return string
	 */
	public function setLastNameFound($_LastNameFound)
	{
		return ($this->LastNameFound = $_LastNameFound);
	}
	/**
	 * Get LastNameFound
	 * @return string
	 */
	public function getLastNameFound()
	{
		return $this->LastNameFound;
	}
	/**
	 * Set NameNotesDesc
	 * @param string NameNotesDesc
	 * @return string
	 */
	public function setNameNotesDesc($_NameNotesDesc)
	{
		return ($this->NameNotesDesc = $_NameNotesDesc);
	}
	/**
	 * Get NameNotesDesc
	 * @return string
	 */
	public function getNameNotesDesc()
	{
		return $this->NameNotesDesc;
	}
	/**
	 * Set NameNotesCode
	 * @param string NameNotesCode
	 * @return string
	 */
	public function setNameNotesCode($_NameNotesCode)
	{
		return ($this->NameNotesCode = $_NameNotesCode);
	}
	/**
	 * Get NameNotesCode
	 * @return string
	 */
	public function getNameNotesCode()
	{
		return $this->NameNotesCode;
	}
	/**
	 * Set Address1Out
	 * @param string Address1Out
	 * @return string
	 */
	public function setAddress1Out($_Address1Out)
	{
		return ($this->Address1Out = $_Address1Out);
	}
	/**
	 * Get Address1Out
	 * @return string
	 */
	public function getAddress1Out()
	{
		return $this->Address1Out;
	}
	/**
	 * Set Address2Out
	 * @param string Address2Out
	 * @return string
	 */
	public function setAddress2Out($_Address2Out)
	{
		return ($this->Address2Out = $_Address2Out);
	}
	/**
	 * Get Address2Out
	 * @return string
	 */
	public function getAddress2Out()
	{
		return $this->Address2Out;
	}
	/**
	 * Set CityOut
	 * @param string CityOut
	 * @return string
	 */
	public function setCityOut($_CityOut)
	{
		return ($this->CityOut = $_CityOut);
	}
	/**
	 * Get CityOut
	 * @return string
	 */
	public function getCityOut()
	{
		return $this->CityOut;
	}
	/**
	 * Set CountyOut
	 * @param string CountyOut
	 * @return string
	 */
	public function setCountyOut($_CountyOut)
	{
		return ($this->CountyOut = $_CountyOut);
	}
	/**
	 * Get CountyOut
	 * @return string
	 */
	public function getCountyOut()
	{
		return $this->CountyOut;
	}
	/**
	 * Set RegionOut
	 * @param string RegionOut
	 * @return string
	 */
	public function setRegionOut($_RegionOut)
	{
		return ($this->RegionOut = $_RegionOut);
	}
	/**
	 * Get RegionOut
	 * @return string
	 */
	public function getRegionOut()
	{
		return $this->RegionOut;
	}
	/**
	 * Set PostalCodeOut
	 * @param string PostalCodeOut
	 * @return string
	 */
	public function setPostalCodeOut($_PostalCodeOut)
	{
		return ($this->PostalCodeOut = $_PostalCodeOut);
	}
	/**
	 * Get PostalCodeOut
	 * @return string
	 */
	public function getPostalCodeOut()
	{
		return $this->PostalCodeOut;
	}
	/**
	 * Set CountryOut
	 * @param string CountryOut
	 * @return string
	 */
	public function setCountryOut($_CountryOut)
	{
		return ($this->CountryOut = $_CountryOut);
	}
	/**
	 * Get CountryOut
	 * @return string
	 */
	public function getCountryOut()
	{
		return $this->CountryOut;
	}
	/**
	 * Set IsAddressDPV
	 * @param string IsAddressDPV
	 * @return string
	 */
	public function setIsAddressDPV($_IsAddressDPV)
	{
		return ($this->IsAddressDPV = $_IsAddressDPV);
	}
	/**
	 * Get IsAddressDPV
	 * @return string
	 */
	public function getIsAddressDPV()
	{
		return $this->IsAddressDPV;
	}
	/**
	 * Set IsAddressResidential
	 * @param string IsAddressResidential
	 * @return string
	 */
	public function setIsAddressResidential($_IsAddressResidential)
	{
		return ($this->IsAddressResidential = $_IsAddressResidential);
	}
	/**
	 * Get IsAddressResidential
	 * @return string
	 */
	public function getIsAddressResidential()
	{
		return $this->IsAddressResidential;
	}
	/**
	 * Set AddressNotesDesc
	 * @param string AddressNotesDesc
	 * @return string
	 */
	public function setAddressNotesDesc($_AddressNotesDesc)
	{
		return ($this->AddressNotesDesc = $_AddressNotesDesc);
	}
	/**
	 * Get AddressNotesDesc
	 * @return string
	 */
	public function getAddressNotesDesc()
	{
		return $this->AddressNotesDesc;
	}
	/**
	 * Set AddressNotesCode
	 * @param string AddressNotesCode
	 * @return string
	 */
	public function setAddressNotesCode($_AddressNotesCode)
	{
		return ($this->AddressNotesCode = $_AddressNotesCode);
	}
	/**
	 * Get AddressNotesCode
	 * @return string
	 */
	public function getAddressNotesCode()
	{
		return $this->AddressNotesCode;
	}
	/**
	 * Set AddressErrorDesc
	 * @param string AddressErrorDesc
	 * @return string
	 */
	public function setAddressErrorDesc($_AddressErrorDesc)
	{
		return ($this->AddressErrorDesc = $_AddressErrorDesc);
	}
	/**
	 * Get AddressErrorDesc
	 * @return string
	 */
	public function getAddressErrorDesc()
	{
		return $this->AddressErrorDesc;
	}
	/**
	 * Set AddressErrorCode
	 * @param string AddressErrorCode
	 * @return string
	 */
	public function setAddressErrorCode($_AddressErrorCode)
	{
		return ($this->AddressErrorCode = $_AddressErrorCode);
	}
	/**
	 * Get AddressErrorCode
	 * @return string
	 */
	public function getAddressErrorCode()
	{
		return $this->AddressErrorCode;
	}
	/**
	 * Set PhoneNumberOut
	 * @param string PhoneNumberOut
	 * @return string
	 */
	public function setPhoneNumberOut($_PhoneNumberOut)
	{
		return ($this->PhoneNumberOut = $_PhoneNumberOut);
	}
	/**
	 * Get PhoneNumberOut
	 * @return string
	 */
	public function getPhoneNumberOut()
	{
		return $this->PhoneNumberOut;
	}
	/**
	 * Set CarrierName
	 * @param string CarrierName
	 * @return string
	 */
	public function setCarrierName($_CarrierName)
	{
		return ($this->CarrierName = $_CarrierName);
	}
	/**
	 * Get CarrierName
	 * @return string
	 */
	public function getCarrierName()
	{
		return $this->CarrierName;
	}
	/**
	 * Set ExchangeCity
	 * @param string ExchangeCity
	 * @return string
	 */
	public function setExchangeCity($_ExchangeCity)
	{
		return ($this->ExchangeCity = $_ExchangeCity);
	}
	/**
	 * Get ExchangeCity
	 * @return string
	 */
	public function getExchangeCity()
	{
		return $this->ExchangeCity;
	}
	/**
	 * Set ExchangeRegion
	 * @param string ExchangeRegion
	 * @return string
	 */
	public function setExchangeRegion($_ExchangeRegion)
	{
		return ($this->ExchangeRegion = $_ExchangeRegion);
	}
	/**
	 * Get ExchangeRegion
	 * @return string
	 */
	public function getExchangeRegion()
	{
		return $this->ExchangeRegion;
	}
	/**
	 * Set ExchangeCountry
	 * @param string ExchangeCountry
	 * @return string
	 */
	public function setExchangeCountry($_ExchangeCountry)
	{
		return ($this->ExchangeCountry = $_ExchangeCountry);
	}
	/**
	 * Get ExchangeCountry
	 * @return string
	 */
	public function getExchangeCountry()
	{
		return $this->ExchangeCountry;
	}
	/**
	 * Set PhoneLineType
	 * @param string PhoneLineType
	 * @return string
	 */
	public function setPhoneLineType($_PhoneLineType)
	{
		return ($this->PhoneLineType = $_PhoneLineType);
	}
	/**
	 * Get PhoneLineType
	 * @return string
	 */
	public function getPhoneLineType()
	{
		return $this->PhoneLineType;
	}
	/**
	 * Set PhoneContacts
	 * @param PhoneContacts PhoneContacts
	 * @return PhoneContacts
	 */
	public function setPhoneContacts($_PhoneContacts)
	{
		return ($this->PhoneContacts = $_PhoneContacts);
	}
	/**
	 * Get PhoneContacts
	 * @return SOLeadEnhancementPlusTypePhoneContacts
	 */
	public function getPhoneContacts()
	{
		return $this->PhoneContacts;
	}
	/**
	 * Set AlternativePhoneNumber
	 * @param string AlternativePhoneNumber
	 * @return string
	 */
	public function setAlternativePhoneNumber($_AlternativePhoneNumber)
	{
		return ($this->AlternativePhoneNumber = $_AlternativePhoneNumber);
	}
	/**
	 * Get AlternativePhoneNumber
	 * @return string
	 */
	public function getAlternativePhoneNumber()
	{
		return $this->AlternativePhoneNumber;
	}
	/**
	 * Set PhoneNumberErrorDesc
	 * @param string PhoneNumberErrorDesc
	 * @return string
	 */
	public function setPhoneNumberErrorDesc($_PhoneNumberErrorDesc)
	{
		return ($this->PhoneNumberErrorDesc = $_PhoneNumberErrorDesc);
	}
	/**
	 * Get PhoneNumberErrorDesc
	 * @return string
	 */
	public function getPhoneNumberErrorDesc()
	{
		return $this->PhoneNumberErrorDesc;
	}
	/**
	 * Set PhoneNumberErrorCode
	 * @param string PhoneNumberErrorCode
	 * @return string
	 */
	public function setPhoneNumberErrorCode($_PhoneNumberErrorCode)
	{
		return ($this->PhoneNumberErrorCode = $_PhoneNumberErrorCode);
	}
	/**
	 * Get PhoneNumberErrorCode
	 * @return string
	 */
	public function getPhoneNumberErrorCode()
	{
		return $this->PhoneNumberErrorCode;
	}
	/**
	 * Set EmailAddressOut
	 * @param string EmailAddressOut
	 * @return string
	 */
	public function setEmailAddressOut($_EmailAddressOut)
	{
		return ($this->EmailAddressOut = $_EmailAddressOut);
	}
	/**
	 * Get EmailAddressOut
	 * @return string
	 */
	public function getEmailAddressOut()
	{
		return $this->EmailAddressOut;
	}
	/**
	 * Set IsEmailAddressFree
	 * @param string IsEmailAddressFree
	 * @return string
	 */
	public function setIsEmailAddressFree($_IsEmailAddressFree)
	{
		return ($this->IsEmailAddressFree = $_IsEmailAddressFree);
	}
	/**
	 * Get IsEmailAddressFree
	 * @return string
	 */
	public function getIsEmailAddressFree()
	{
		return $this->IsEmailAddressFree;
	}
	/**
	 * Set IsEmailAddressGood
	 * @param string IsEmailAddressGood
	 * @return string
	 */
	public function setIsEmailAddressGood($_IsEmailAddressGood)
	{
		return ($this->IsEmailAddressGood = $_IsEmailAddressGood);
	}
	/**
	 * Get IsEmailAddressGood
	 * @return string
	 */
	public function getIsEmailAddressGood()
	{
		return $this->IsEmailAddressGood;
	}
	/**
	 * Set EmailNotesDesc
	 * @param string EmailNotesDesc
	 * @return string
	 */
	public function setEmailNotesDesc($_EmailNotesDesc)
	{
		return ($this->EmailNotesDesc = $_EmailNotesDesc);
	}
	/**
	 * Get EmailNotesDesc
	 * @return string
	 */
	public function getEmailNotesDesc()
	{
		return $this->EmailNotesDesc;
	}
	/**
	 * Set EmailNotesCode
	 * @param string EmailNotesCode
	 * @return string
	 */
	public function setEmailNotesCode($_EmailNotesCode)
	{
		return ($this->EmailNotesCode = $_EmailNotesCode);
	}
	/**
	 * Get EmailNotesCode
	 * @return string
	 */
	public function getEmailNotesCode()
	{
		return $this->EmailNotesCode;
	}
	/**
	 * Set EmailErrorDesc
	 * @param string EmailErrorDesc
	 * @return string
	 */
	public function setEmailErrorDesc($_EmailErrorDesc)
	{
		return ($this->EmailErrorDesc = $_EmailErrorDesc);
	}
	/**
	 * Get EmailErrorDesc
	 * @return string
	 */
	public function getEmailErrorDesc()
	{
		return $this->EmailErrorDesc;
	}
	/**
	 * Set EmailErrorCode
	 * @param string EmailErrorCode
	 * @return string
	 */
	public function setEmailErrorCode($_EmailErrorCode)
	{
		return ($this->EmailErrorCode = $_EmailErrorCode);
	}
	/**
	 * Get EmailErrorCode
	 * @return string
	 */
	public function getEmailErrorCode()
	{
		return $this->EmailErrorCode;
	}
	/**
	 * Set IPAddressCity
	 * @param string IPAddressCity
	 * @return string
	 */
	public function setIPAddressCity($_IPAddressCity)
	{
		return ($this->IPAddressCity = $_IPAddressCity);
	}
	/**
	 * Get IPAddressCity
	 * @return string
	 */
	public function getIPAddressCity()
	{
		return $this->IPAddressCity;
	}
	/**
	 * Set IPAddressRegion
	 * @param string IPAddressRegion
	 * @return string
	 */
	public function setIPAddressRegion($_IPAddressRegion)
	{
		return ($this->IPAddressRegion = $_IPAddressRegion);
	}
	/**
	 * Get IPAddressRegion
	 * @return string
	 */
	public function getIPAddressRegion()
	{
		return $this->IPAddressRegion;
	}
	/**
	 * Set IPAddressCountry
	 * @param string IPAddressCountry
	 * @return string
	 */
	public function setIPAddressCountry($_IPAddressCountry)
	{
		return ($this->IPAddressCountry = $_IPAddressCountry);
	}
	/**
	 * Get IPAddressCountry
	 * @return string
	 */
	public function getIPAddressCountry()
	{
		return $this->IPAddressCountry;
	}
	/**
	 * Set IPAddressCountryISO2
	 * @param string IPAddressCountryISO2
	 * @return string
	 */
	public function setIPAddressCountryISO2($_IPAddressCountryISO2)
	{
		return ($this->IPAddressCountryISO2 = $_IPAddressCountryISO2);
	}
	/**
	 * Get IPAddressCountryISO2
	 * @return string
	 */
	public function getIPAddressCountryISO2()
	{
		return $this->IPAddressCountryISO2;
	}
	/**
	 * Set IPAddressCountryISO3
	 * @param string IPAddressCountryISO3
	 * @return string
	 */
	public function setIPAddressCountryISO3($_IPAddressCountryISO3)
	{
		return ($this->IPAddressCountryISO3 = $_IPAddressCountryISO3);
	}
	/**
	 * Get IPAddressCountryISO3
	 * @return string
	 */
	public function getIPAddressCountryISO3()
	{
		return $this->IPAddressCountryISO3;
	}
	/**
	 * Set IPAddressCertainty
	 * @param string IPAddressCertainty
	 * @return string
	 */
	public function setIPAddressCertainty($_IPAddressCertainty)
	{
		return ($this->IPAddressCertainty = $_IPAddressCertainty);
	}
	/**
	 * Get IPAddressCertainty
	 * @return string
	 */
	public function getIPAddressCertainty()
	{
		return $this->IPAddressCertainty;
	}
	/**
	 * Set IPAddressISP
	 * @param string IPAddressISP
	 * @return string
	 */
	public function setIPAddressISP($_IPAddressISP)
	{
		return ($this->IPAddressISP = $_IPAddressISP);
	}
	/**
	 * Get IPAddressISP
	 * @return string
	 */
	public function getIPAddressISP()
	{
		return $this->IPAddressISP;
	}
	/**
	 * Set IPAddressNetblockOwner
	 * @param string IPAddressNetblockOwner
	 * @return string
	 */
	public function setIPAddressNetblockOwner($_IPAddressNetblockOwner)
	{
		return ($this->IPAddressNetblockOwner = $_IPAddressNetblockOwner);
	}
	/**
	 * Get IPAddressNetblockOwner
	 * @return string
	 */
	public function getIPAddressNetblockOwner()
	{
		return $this->IPAddressNetblockOwner;
	}
	/**
	 * Set IPAddressIsProxy
	 * @param string IPAddressIsProxy
	 * @return string
	 */
	public function setIPAddressIsProxy($_IPAddressIsProxy)
	{
		return ($this->IPAddressIsProxy = $_IPAddressIsProxy);
	}
	/**
	 * Get IPAddressIsProxy
	 * @return string
	 */
	public function getIPAddressIsProxy()
	{
		return $this->IPAddressIsProxy;
	}
	/**
	 * Set IPAddressProxyType
	 * @param string IPAddressProxyType
	 * @return string
	 */
	public function setIPAddressProxyType($_IPAddressProxyType)
	{
		return ($this->IPAddressProxyType = $_IPAddressProxyType);
	}
	/**
	 * Get IPAddressProxyType
	 * @return string
	 */
	public function getIPAddressProxyType()
	{
		return $this->IPAddressProxyType;
	}
	/**
	 * Set IPAddressErrorDesc
	 * @param string IPAddressErrorDesc
	 * @return string
	 */
	public function setIPAddressErrorDesc($_IPAddressErrorDesc)
	{
		return ($this->IPAddressErrorDesc = $_IPAddressErrorDesc);
	}
	/**
	 * Get IPAddressErrorDesc
	 * @return string
	 */
	public function getIPAddressErrorDesc()
	{
		return $this->IPAddressErrorDesc;
	}
	/**
	 * Set IPAddressErrorCode
	 * @param string IPAddressErrorCode
	 * @return string
	 */
	public function setIPAddressErrorCode($_IPAddressErrorCode)
	{
		return ($this->IPAddressErrorCode = $_IPAddressErrorCode);
	}
	/**
	 * Get IPAddressErrorCode
	 * @return string
	 */
	public function getIPAddressErrorCode()
	{
		return $this->IPAddressErrorCode;
	}
	/**
	 * Set DEBUG
	 * @param string DEBUG
	 * @return string
	 */
	public function setDEBUG($_DEBUG)
	{
		return ($this->DEBUG = $_DEBUG);
	}
	/**
	 * Get DEBUG
	 * @return string
	 */
	public function getDEBUG()
	{
		return $this->DEBUG;
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