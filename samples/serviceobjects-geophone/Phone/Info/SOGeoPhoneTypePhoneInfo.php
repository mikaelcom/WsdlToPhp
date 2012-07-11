<?php
/**
 * Class file for SOGeoPhoneTypePhoneInfo
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypePhoneInfo
 * @date 08/07/2012
 */
class SOGeoPhoneTypePhoneInfo extends SOGeoPhoneWsdlClass
{
	/**
	 * The Providers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypeProviders
	 */
	public $Providers;
	/**
	 * The Contacts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypeContacts
	 */
	public $Contacts;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypeProviders Providers
	 * @param SOGeoPhoneTypeContacts Contacts
	 * @param SOGeoPhoneTypeErr Error
	 * @return SOGeoPhoneTypePhoneInfo
	 */
	public function __construct($_Providers = null,$_Contacts = null,$_Error = null)
	{
		parent::__construct(array('Providers'=>$_Providers,'Contacts'=>$_Contacts,'Error'=>$_Error));
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
	 * @return SOGeoPhoneTypeProviders
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
	 * @return SOGeoPhoneTypeContacts
	 */
	public function getContacts()
	{
		return $this->Contacts;
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
	 * @return SOGeoPhoneTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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