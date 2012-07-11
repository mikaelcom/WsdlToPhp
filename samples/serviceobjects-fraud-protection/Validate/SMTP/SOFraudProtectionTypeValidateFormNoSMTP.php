<?php
/**
 * Class file for SOFraudProtectionTypeValidateFormNoSMTP
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeValidateFormNoSMTP
 * @date 08/07/2012
 */
class SOFraudProtectionTypeValidateFormNoSMTP extends SOFraudProtectionWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
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
	 * The Address2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2;
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
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The IPAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddress;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Email
	 * @param string PhoneNumber
	 * @param string Address
	 * @param string Address2
	 * @param string City
	 * @param string State
	 * @param string PostalCode
	 * @param string IPAddress
	 * @param string LicenseKey
	 * @return SOFraudProtectionTypeValidateFormNoSMTP
	 */
	public function __construct($_Name = null,$_Email = null,$_PhoneNumber = null,$_Address = null,$_Address2 = null,$_City = null,$_State = null,$_PostalCode = null,$_IPAddress = null,$_LicenseKey = null)
	{
		parent::__construct(array('Name'=>$_Name,'Email'=>$_Email,'PhoneNumber'=>$_PhoneNumber,'Address'=>$_Address,'Address2'=>$_Address2,'City'=>$_City,'State'=>$_State,'PostalCode'=>$_PostalCode,'IPAddress'=>$_IPAddress,'LicenseKey'=>$_LicenseKey));
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
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
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
	 * Set Address2
	 * @param string Address2
	 * @return string
	 */
	public function setAddress2($_Address2)
	{
		return ($this->Address2 = $_Address2);
	}
	/**
	 * Get Address2
	 * @return string
	 */
	public function getAddress2()
	{
		return $this->Address2;
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
	 * Set IPAddress
	 * @param string IPAddress
	 * @return string
	 */
	public function setIPAddress($_IPAddress)
	{
		return ($this->IPAddress = $_IPAddress);
	}
	/**
	 * Get IPAddress
	 * @return string
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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