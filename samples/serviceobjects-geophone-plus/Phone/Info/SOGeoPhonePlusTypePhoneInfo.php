<?php
/**
 * Class file for SOGeoPhonePlusTypePhoneInfo
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusTypePhoneInfo
 * @date 08/07/2012
 */
class SOGeoPhonePlusTypePhoneInfo extends SOGeoPhonePlusWsdlClass
{
	/**
	 * The PhoneNumberIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberIn;
	/**
	 * The PhoneNumberClean
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberClean;
	/**
	 * The Providers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhonePlusTypeProviders
	 */
	public $Providers;
	/**
	 * The Contacts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhonePlusTypeContacts
	 */
	public $Contacts;
	/**
	 * Constructor
	 * @param string PhoneNumberIn
	 * @param string PhoneNumberClean
	 * @param SOGeoPhonePlusTypeProviders Providers
	 * @param SOGeoPhonePlusTypeContacts Contacts
	 * @return SOGeoPhonePlusTypePhoneInfo
	 */
	public function __construct($_PhoneNumberIn = null,$_PhoneNumberClean = null,$_Providers = null,$_Contacts = null)
	{
		parent::__construct(array('PhoneNumberIn'=>$_PhoneNumberIn,'PhoneNumberClean'=>$_PhoneNumberClean,'Providers'=>$_Providers,'Contacts'=>$_Contacts));
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
	 * Set PhoneNumberClean
	 * @param string PhoneNumberClean
	 * @return string
	 */
	public function setPhoneNumberClean($_PhoneNumberClean)
	{
		return ($this->PhoneNumberClean = $_PhoneNumberClean);
	}
	/**
	 * Get PhoneNumberClean
	 * @return string
	 */
	public function getPhoneNumberClean()
	{
		return $this->PhoneNumberClean;
	}
	/**
	 * Set Providers
	 * @param Providers Providers
	 * @return Providers
	 */
	public function setProviders($_Providers)
	{
		return ($this->Providers = $_Providers);
	}
	/**
	 * Get Providers
	 * @return SOGeoPhonePlusTypeProviders
	 */
	public function getProviders()
	{
		return $this->Providers;
	}
	/**
	 * Set Contacts
	 * @param Contacts Contacts
	 * @return Contacts
	 */
	public function setContacts($_Contacts)
	{
		return ($this->Contacts = $_Contacts);
	}
	/**
	 * Get Contacts
	 * @return SOGeoPhonePlusTypeContacts
	 */
	public function getContacts()
	{
		return $this->Contacts;
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