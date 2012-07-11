<?php
/**
 * Class file for SOLeadValidateTypeContact_V2
 * @date 06/07/2012
 */
/**
 * Class SOLeadValidateTypeContact_V2
 * @date 06/07/2012
 */
class SOLeadValidateTypeContact_V2 extends SOLeadValidateTypeResultContainer
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
	 * The BusinessNameIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessNameIn;
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
	 * The StateIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateIn;
	/**
	 * The ZipIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipIn;
	/**
	 * The CountryIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryIn;
	/**
	 * The Phone1In
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone1In;
	/**
	 * The Phone2In
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2In;
	/**
	 * The EmailAddressIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddressIn;
	/**
	 * The IPAddressIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddressIn;
	/**
	 * The GenderIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GenderIn;
	/**
	 * The DateOfBirthIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateOfBirthIn;
	/**
	 * The UTCCaptureTimeIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCCaptureTimeIn;
	/**
	 * The FirstNameOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstNameOut;
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
	 * The StateOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateOut;
	/**
	 * The ZipOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipOut;
	/**
	 * The IsDeliverableOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsDeliverableOut;
	/**
	 * The Phone1LineOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone1LineOut;
	/**
	 * The Phone1TypeOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone1TypeOut;
	/**
	 * The Phone2LineOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2LineOut;
	/**
	 * The Phone2TypeOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2TypeOut;
	/**
	 * The EmailOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailOut;
	/**
	 * The IPCountryOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPCountryOut;
	/**
	 * The LeadTypeOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LeadTypeOut;
	/**
	 * The AlternativePhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlternativePhone;
	/**
	 * The AlternativeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlternativeName;
	/**
	 * The AlternativeAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlternativeAddress;
	/**
	 * The TestType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TestType;
	/**
	 * The OverallCertainty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OverallCertainty;
	/**
	 * The OverallQuality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OverallQuality;
	/**
	 * The NameQuality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameQuality;
	/**
	 * The EmailQuality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailQuality;
	/**
	 * The IPQuality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPQuality;
	/**
	 * The PhoneQuality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneQuality;
	/**
	 * The AddressQuality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressQuality;
	/**
	 * The BusinessQuality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessQuality;
	/**
	 * The PhoneContacts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOLeadValidateTypePhoneContacts
	 */
	public $PhoneContacts;
	/**
	 * The WarningDesc1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WarningDesc1;
	/**
	 * The WarningCode1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WarningCode1;
	/**
	 * The WarningDesc2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WarningDesc2;
	/**
	 * The WarningCode2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WarningCode2;
	/**
	 * The WarningDesc3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WarningDesc3;
	/**
	 * The WarningCode3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WarningCode3;
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
	 * @param string BusinessNameIn
	 * @param string Address1In
	 * @param string Address2In
	 * @param string CityIn
	 * @param string StateIn
	 * @param string ZipIn
	 * @param string CountryIn
	 * @param string Phone1In
	 * @param string Phone2In
	 * @param string EmailAddressIn
	 * @param string IPAddressIn
	 * @param string GenderIn
	 * @param string DateOfBirthIn
	 * @param string UTCCaptureTimeIn
	 * @param string FirstNameOut
	 * @param string LastNameOut
	 * @param string GenderOut
	 * @param string Address1Out
	 * @param string Address2Out
	 * @param string CityOut
	 * @param string StateOut
	 * @param string ZipOut
	 * @param string IsDeliverableOut
	 * @param string Phone1LineOut
	 * @param string Phone1TypeOut
	 * @param string Phone2LineOut
	 * @param string Phone2TypeOut
	 * @param string EmailOut
	 * @param string IPCountryOut
	 * @param string LeadTypeOut
	 * @param string AlternativePhone
	 * @param string AlternativeName
	 * @param string AlternativeAddress
	 * @param string TestType
	 * @param string OverallCertainty
	 * @param string OverallQuality
	 * @param string NameQuality
	 * @param string EmailQuality
	 * @param string IPQuality
	 * @param string PhoneQuality
	 * @param string AddressQuality
	 * @param string BusinessQuality
	 * @param SOLeadValidateTypePhoneContacts PhoneContacts
	 * @param string WarningDesc1
	 * @param string WarningCode1
	 * @param string WarningDesc2
	 * @param string WarningCode2
	 * @param string WarningDesc3
	 * @param string WarningCode3
	 * @param string DEBUG
	 * @return SOLeadValidateTypeContact_V2
	 */
	public function __construct($_NameIn = null,$_BusinessNameIn = null,$_Address1In = null,$_Address2In = null,$_CityIn = null,$_StateIn = null,$_ZipIn = null,$_CountryIn = null,$_Phone1In = null,$_Phone2In = null,$_EmailAddressIn = null,$_IPAddressIn = null,$_GenderIn = null,$_DateOfBirthIn = null,$_UTCCaptureTimeIn = null,$_FirstNameOut = null,$_LastNameOut = null,$_GenderOut = null,$_Address1Out = null,$_Address2Out = null,$_CityOut = null,$_StateOut = null,$_ZipOut = null,$_IsDeliverableOut = null,$_Phone1LineOut = null,$_Phone1TypeOut = null,$_Phone2LineOut = null,$_Phone2TypeOut = null,$_EmailOut = null,$_IPCountryOut = null,$_LeadTypeOut = null,$_AlternativePhone = null,$_AlternativeName = null,$_AlternativeAddress = null,$_TestType = null,$_OverallCertainty = null,$_OverallQuality = null,$_NameQuality = null,$_EmailQuality = null,$_IPQuality = null,$_PhoneQuality = null,$_AddressQuality = null,$_BusinessQuality = null,$_PhoneContacts = null,$_WarningDesc1 = null,$_WarningCode1 = null,$_WarningDesc2 = null,$_WarningCode2 = null,$_WarningDesc3 = null,$_WarningCode3 = null,$_DEBUG = null)
	{
		SOLeadValidateWsdlClass::__construct(array('NameIn'=>$_NameIn,'BusinessNameIn'=>$_BusinessNameIn,'Address1In'=>$_Address1In,'Address2In'=>$_Address2In,'CityIn'=>$_CityIn,'StateIn'=>$_StateIn,'ZipIn'=>$_ZipIn,'CountryIn'=>$_CountryIn,'Phone1In'=>$_Phone1In,'Phone2In'=>$_Phone2In,'EmailAddressIn'=>$_EmailAddressIn,'IPAddressIn'=>$_IPAddressIn,'GenderIn'=>$_GenderIn,'DateOfBirthIn'=>$_DateOfBirthIn,'UTCCaptureTimeIn'=>$_UTCCaptureTimeIn,'FirstNameOut'=>$_FirstNameOut,'LastNameOut'=>$_LastNameOut,'GenderOut'=>$_GenderOut,'Address1Out'=>$_Address1Out,'Address2Out'=>$_Address2Out,'CityOut'=>$_CityOut,'StateOut'=>$_StateOut,'ZipOut'=>$_ZipOut,'IsDeliverableOut'=>$_IsDeliverableOut,'Phone1LineOut'=>$_Phone1LineOut,'Phone1TypeOut'=>$_Phone1TypeOut,'Phone2LineOut'=>$_Phone2LineOut,'Phone2TypeOut'=>$_Phone2TypeOut,'EmailOut'=>$_EmailOut,'IPCountryOut'=>$_IPCountryOut,'LeadTypeOut'=>$_LeadTypeOut,'AlternativePhone'=>$_AlternativePhone,'AlternativeName'=>$_AlternativeName,'AlternativeAddress'=>$_AlternativeAddress,'TestType'=>$_TestType,'OverallCertainty'=>$_OverallCertainty,'OverallQuality'=>$_OverallQuality,'NameQuality'=>$_NameQuality,'EmailQuality'=>$_EmailQuality,'IPQuality'=>$_IPQuality,'PhoneQuality'=>$_PhoneQuality,'AddressQuality'=>$_AddressQuality,'BusinessQuality'=>$_BusinessQuality,'PhoneContacts'=>$_PhoneContacts,'WarningDesc1'=>$_WarningDesc1,'WarningCode1'=>$_WarningCode1,'WarningDesc2'=>$_WarningDesc2,'WarningCode2'=>$_WarningCode2,'WarningDesc3'=>$_WarningDesc3,'WarningCode3'=>$_WarningCode3,'DEBUG'=>$_DEBUG));
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
	 * Set BusinessNameIn
	 * @param string BusinessNameIn
	 * @return string
	 */
	public function setBusinessNameIn($_BusinessNameIn)
	{
		return ($this->BusinessNameIn = $_BusinessNameIn);
	}
	/**
	 * Get BusinessNameIn
	 * @return string
	 */
	public function getBusinessNameIn()
	{
		return $this->BusinessNameIn;
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
	 * Set StateIn
	 * @param string StateIn
	 * @return string
	 */
	public function setStateIn($_StateIn)
	{
		return ($this->StateIn = $_StateIn);
	}
	/**
	 * Get StateIn
	 * @return string
	 */
	public function getStateIn()
	{
		return $this->StateIn;
	}
	/**
	 * Set ZipIn
	 * @param string ZipIn
	 * @return string
	 */
	public function setZipIn($_ZipIn)
	{
		return ($this->ZipIn = $_ZipIn);
	}
	/**
	 * Get ZipIn
	 * @return string
	 */
	public function getZipIn()
	{
		return $this->ZipIn;
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
	 * Set Phone1In
	 * @param string Phone1In
	 * @return string
	 */
	public function setPhone1In($_Phone1In)
	{
		return ($this->Phone1In = $_Phone1In);
	}
	/**
	 * Get Phone1In
	 * @return string
	 */
	public function getPhone1In()
	{
		return $this->Phone1In;
	}
	/**
	 * Set Phone2In
	 * @param string Phone2In
	 * @return string
	 */
	public function setPhone2In($_Phone2In)
	{
		return ($this->Phone2In = $_Phone2In);
	}
	/**
	 * Get Phone2In
	 * @return string
	 */
	public function getPhone2In()
	{
		return $this->Phone2In;
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
	 * Set GenderIn
	 * @param string GenderIn
	 * @return string
	 */
	public function setGenderIn($_GenderIn)
	{
		return ($this->GenderIn = $_GenderIn);
	}
	/**
	 * Get GenderIn
	 * @return string
	 */
	public function getGenderIn()
	{
		return $this->GenderIn;
	}
	/**
	 * Set DateOfBirthIn
	 * @param string DateOfBirthIn
	 * @return string
	 */
	public function setDateOfBirthIn($_DateOfBirthIn)
	{
		return ($this->DateOfBirthIn = $_DateOfBirthIn);
	}
	/**
	 * Get DateOfBirthIn
	 * @return string
	 */
	public function getDateOfBirthIn()
	{
		return $this->DateOfBirthIn;
	}
	/**
	 * Set UTCCaptureTimeIn
	 * @param string UTCCaptureTimeIn
	 * @return string
	 */
	public function setUTCCaptureTimeIn($_UTCCaptureTimeIn)
	{
		return ($this->UTCCaptureTimeIn = $_UTCCaptureTimeIn);
	}
	/**
	 * Get UTCCaptureTimeIn
	 * @return string
	 */
	public function getUTCCaptureTimeIn()
	{
		return $this->UTCCaptureTimeIn;
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
	 * Set StateOut
	 * @param string StateOut
	 * @return string
	 */
	public function setStateOut($_StateOut)
	{
		return ($this->StateOut = $_StateOut);
	}
	/**
	 * Get StateOut
	 * @return string
	 */
	public function getStateOut()
	{
		return $this->StateOut;
	}
	/**
	 * Set ZipOut
	 * @param string ZipOut
	 * @return string
	 */
	public function setZipOut($_ZipOut)
	{
		return ($this->ZipOut = $_ZipOut);
	}
	/**
	 * Get ZipOut
	 * @return string
	 */
	public function getZipOut()
	{
		return $this->ZipOut;
	}
	/**
	 * Set IsDeliverableOut
	 * @param string IsDeliverableOut
	 * @return string
	 */
	public function setIsDeliverableOut($_IsDeliverableOut)
	{
		return ($this->IsDeliverableOut = $_IsDeliverableOut);
	}
	/**
	 * Get IsDeliverableOut
	 * @return string
	 */
	public function getIsDeliverableOut()
	{
		return $this->IsDeliverableOut;
	}
	/**
	 * Set Phone1LineOut
	 * @param string Phone1LineOut
	 * @return string
	 */
	public function setPhone1LineOut($_Phone1LineOut)
	{
		return ($this->Phone1LineOut = $_Phone1LineOut);
	}
	/**
	 * Get Phone1LineOut
	 * @return string
	 */
	public function getPhone1LineOut()
	{
		return $this->Phone1LineOut;
	}
	/**
	 * Set Phone1TypeOut
	 * @param string Phone1TypeOut
	 * @return string
	 */
	public function setPhone1TypeOut($_Phone1TypeOut)
	{
		return ($this->Phone1TypeOut = $_Phone1TypeOut);
	}
	/**
	 * Get Phone1TypeOut
	 * @return string
	 */
	public function getPhone1TypeOut()
	{
		return $this->Phone1TypeOut;
	}
	/**
	 * Set Phone2LineOut
	 * @param string Phone2LineOut
	 * @return string
	 */
	public function setPhone2LineOut($_Phone2LineOut)
	{
		return ($this->Phone2LineOut = $_Phone2LineOut);
	}
	/**
	 * Get Phone2LineOut
	 * @return string
	 */
	public function getPhone2LineOut()
	{
		return $this->Phone2LineOut;
	}
	/**
	 * Set Phone2TypeOut
	 * @param string Phone2TypeOut
	 * @return string
	 */
	public function setPhone2TypeOut($_Phone2TypeOut)
	{
		return ($this->Phone2TypeOut = $_Phone2TypeOut);
	}
	/**
	 * Get Phone2TypeOut
	 * @return string
	 */
	public function getPhone2TypeOut()
	{
		return $this->Phone2TypeOut;
	}
	/**
	 * Set EmailOut
	 * @param string EmailOut
	 * @return string
	 */
	public function setEmailOut($_EmailOut)
	{
		return ($this->EmailOut = $_EmailOut);
	}
	/**
	 * Get EmailOut
	 * @return string
	 */
	public function getEmailOut()
	{
		return $this->EmailOut;
	}
	/**
	 * Set IPCountryOut
	 * @param string IPCountryOut
	 * @return string
	 */
	public function setIPCountryOut($_IPCountryOut)
	{
		return ($this->IPCountryOut = $_IPCountryOut);
	}
	/**
	 * Get IPCountryOut
	 * @return string
	 */
	public function getIPCountryOut()
	{
		return $this->IPCountryOut;
	}
	/**
	 * Set LeadTypeOut
	 * @param string LeadTypeOut
	 * @return string
	 */
	public function setLeadTypeOut($_LeadTypeOut)
	{
		return ($this->LeadTypeOut = $_LeadTypeOut);
	}
	/**
	 * Get LeadTypeOut
	 * @return string
	 */
	public function getLeadTypeOut()
	{
		return $this->LeadTypeOut;
	}
	/**
	 * Set AlternativePhone
	 * @param string AlternativePhone
	 * @return string
	 */
	public function setAlternativePhone($_AlternativePhone)
	{
		return ($this->AlternativePhone = $_AlternativePhone);
	}
	/**
	 * Get AlternativePhone
	 * @return string
	 */
	public function getAlternativePhone()
	{
		return $this->AlternativePhone;
	}
	/**
	 * Set AlternativeName
	 * @param string AlternativeName
	 * @return string
	 */
	public function setAlternativeName($_AlternativeName)
	{
		return ($this->AlternativeName = $_AlternativeName);
	}
	/**
	 * Get AlternativeName
	 * @return string
	 */
	public function getAlternativeName()
	{
		return $this->AlternativeName;
	}
	/**
	 * Set AlternativeAddress
	 * @param string AlternativeAddress
	 * @return string
	 */
	public function setAlternativeAddress($_AlternativeAddress)
	{
		return ($this->AlternativeAddress = $_AlternativeAddress);
	}
	/**
	 * Get AlternativeAddress
	 * @return string
	 */
	public function getAlternativeAddress()
	{
		return $this->AlternativeAddress;
	}
	/**
	 * Set TestType
	 * @param string TestType
	 * @return string
	 */
	public function setTestType($_TestType)
	{
		return ($this->TestType = $_TestType);
	}
	/**
	 * Get TestType
	 * @return string
	 */
	public function getTestType()
	{
		return $this->TestType;
	}
	/**
	 * Set OverallCertainty
	 * @param string OverallCertainty
	 * @return string
	 */
	public function setOverallCertainty($_OverallCertainty)
	{
		return ($this->OverallCertainty = $_OverallCertainty);
	}
	/**
	 * Get OverallCertainty
	 * @return string
	 */
	public function getOverallCertainty()
	{
		return $this->OverallCertainty;
	}
	/**
	 * Set OverallQuality
	 * @param string OverallQuality
	 * @return string
	 */
	public function setOverallQuality($_OverallQuality)
	{
		return ($this->OverallQuality = $_OverallQuality);
	}
	/**
	 * Get OverallQuality
	 * @return string
	 */
	public function getOverallQuality()
	{
		return $this->OverallQuality;
	}
	/**
	 * Set NameQuality
	 * @param string NameQuality
	 * @return string
	 */
	public function setNameQuality($_NameQuality)
	{
		return ($this->NameQuality = $_NameQuality);
	}
	/**
	 * Get NameQuality
	 * @return string
	 */
	public function getNameQuality()
	{
		return $this->NameQuality;
	}
	/**
	 * Set EmailQuality
	 * @param string EmailQuality
	 * @return string
	 */
	public function setEmailQuality($_EmailQuality)
	{
		return ($this->EmailQuality = $_EmailQuality);
	}
	/**
	 * Get EmailQuality
	 * @return string
	 */
	public function getEmailQuality()
	{
		return $this->EmailQuality;
	}
	/**
	 * Set IPQuality
	 * @param string IPQuality
	 * @return string
	 */
	public function setIPQuality($_IPQuality)
	{
		return ($this->IPQuality = $_IPQuality);
	}
	/**
	 * Get IPQuality
	 * @return string
	 */
	public function getIPQuality()
	{
		return $this->IPQuality;
	}
	/**
	 * Set PhoneQuality
	 * @param string PhoneQuality
	 * @return string
	 */
	public function setPhoneQuality($_PhoneQuality)
	{
		return ($this->PhoneQuality = $_PhoneQuality);
	}
	/**
	 * Get PhoneQuality
	 * @return string
	 */
	public function getPhoneQuality()
	{
		return $this->PhoneQuality;
	}
	/**
	 * Set AddressQuality
	 * @param string AddressQuality
	 * @return string
	 */
	public function setAddressQuality($_AddressQuality)
	{
		return ($this->AddressQuality = $_AddressQuality);
	}
	/**
	 * Get AddressQuality
	 * @return string
	 */
	public function getAddressQuality()
	{
		return $this->AddressQuality;
	}
	/**
	 * Set BusinessQuality
	 * @param string BusinessQuality
	 * @return string
	 */
	public function setBusinessQuality($_BusinessQuality)
	{
		return ($this->BusinessQuality = $_BusinessQuality);
	}
	/**
	 * Get BusinessQuality
	 * @return string
	 */
	public function getBusinessQuality()
	{
		return $this->BusinessQuality;
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
	 * @return SOLeadValidateTypePhoneContacts
	 */
	public function getPhoneContacts()
	{
		return $this->PhoneContacts;
	}
	/**
	 * Set WarningDesc1
	 * @param string WarningDesc1
	 * @return string
	 */
	public function setWarningDesc1($_WarningDesc1)
	{
		return ($this->WarningDesc1 = $_WarningDesc1);
	}
	/**
	 * Get WarningDesc1
	 * @return string
	 */
	public function getWarningDesc1()
	{
		return $this->WarningDesc1;
	}
	/**
	 * Set WarningCode1
	 * @param string WarningCode1
	 * @return string
	 */
	public function setWarningCode1($_WarningCode1)
	{
		return ($this->WarningCode1 = $_WarningCode1);
	}
	/**
	 * Get WarningCode1
	 * @return string
	 */
	public function getWarningCode1()
	{
		return $this->WarningCode1;
	}
	/**
	 * Set WarningDesc2
	 * @param string WarningDesc2
	 * @return string
	 */
	public function setWarningDesc2($_WarningDesc2)
	{
		return ($this->WarningDesc2 = $_WarningDesc2);
	}
	/**
	 * Get WarningDesc2
	 * @return string
	 */
	public function getWarningDesc2()
	{
		return $this->WarningDesc2;
	}
	/**
	 * Set WarningCode2
	 * @param string WarningCode2
	 * @return string
	 */
	public function setWarningCode2($_WarningCode2)
	{
		return ($this->WarningCode2 = $_WarningCode2);
	}
	/**
	 * Get WarningCode2
	 * @return string
	 */
	public function getWarningCode2()
	{
		return $this->WarningCode2;
	}
	/**
	 * Set WarningDesc3
	 * @param string WarningDesc3
	 * @return string
	 */
	public function setWarningDesc3($_WarningDesc3)
	{
		return ($this->WarningDesc3 = $_WarningDesc3);
	}
	/**
	 * Get WarningDesc3
	 * @return string
	 */
	public function getWarningDesc3()
	{
		return $this->WarningDesc3;
	}
	/**
	 * Set WarningCode3
	 * @param string WarningCode3
	 * @return string
	 */
	public function setWarningCode3($_WarningCode3)
	{
		return ($this->WarningCode3 = $_WarningCode3);
	}
	/**
	 * Get WarningCode3
	 * @return string
	 */
	public function getWarningCode3()
	{
		return $this->WarningCode3;
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