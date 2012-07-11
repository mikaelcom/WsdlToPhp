<?php
/**
 * Class file for SOGeoPhoneWirelessTypeGeophoneWirelessResult
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneWirelessTypeGeophoneWirelessResult
 * @date 08/07/2012
 */
class SOGeoPhoneWirelessTypeGeophoneWirelessResult extends SOGeoPhoneWirelessWsdlClass
{
	/**
	 * The Providers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneWirelessTypeProviders
	 */
	public $Providers;
	/**
	 * The Contacts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneWirelessTypeContacts
	 */
	public $Contacts;
	/**
	 * The DEBUG
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DEBUG;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneWirelessTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOGeoPhoneWirelessTypeProviders Providers
	 * @param SOGeoPhoneWirelessTypeContacts Contacts
	 * @param string DEBUG
	 * @param SOGeoPhoneWirelessTypeError Error
	 * @return SOGeoPhoneWirelessTypeGeophoneWirelessResult
	 */
	public function __construct($_Providers = null,$_Contacts = null,$_DEBUG = null,$_Error = null)
	{
		parent::__construct(array('Providers'=>$_Providers,'Contacts'=>$_Contacts,'DEBUG'=>$_DEBUG,'Error'=>$_Error));
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
	 * @return SOGeoPhoneWirelessTypeProviders
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
	 * @return SOGeoPhoneWirelessTypeContacts
	 */
	public function getContacts()
	{
		return $this->Contacts;
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
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOGeoPhoneWirelessTypeError
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