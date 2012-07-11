<?php
/**
 * Class file for SOLeadValidateTypeValidateLead
 * @date 06/07/2012
 */
/**
 * Class SOLeadValidateTypeValidateLead
 * @date 06/07/2012
 */
class SOLeadValidateTypeValidateLead extends SOLeadValidateWsdlClass
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
	 * The Address1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address1;
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
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Phone1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone1;
	/**
	 * The Phone2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The IP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IP;
	/**
	 * The TestType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TestType;
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
	 * @param string Address1
	 * @param string Address2
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string Country
	 * @param string Phone1
	 * @param string Phone2
	 * @param string Email
	 * @param string IP
	 * @param string TestType
	 * @param string LicenseKey
	 * @return SOLeadValidateTypeValidateLead
	 */
	public function __construct($_Name = null,$_Address1 = null,$_Address2 = null,$_City = null,$_State = null,$_Zip = null,$_Country = null,$_Phone1 = null,$_Phone2 = null,$_Email = null,$_IP = null,$_TestType = null,$_LicenseKey = null)
	{
		parent::__construct(array('Name'=>$_Name,'Address1'=>$_Address1,'Address2'=>$_Address2,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'Country'=>$_Country,'Phone1'=>$_Phone1,'Phone2'=>$_Phone2,'Email'=>$_Email,'IP'=>$_IP,'TestType'=>$_TestType,'LicenseKey'=>$_LicenseKey));
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
	 * Set Address1
	 * @param string Address1
	 * @return string
	 */
	public function setAddress1($_Address1)
	{
		return ($this->Address1 = $_Address1);
	}
	/**
	 * Get Address1
	 * @return string
	 */
	public function getAddress1()
	{
		return $this->Address1;
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
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Phone1
	 * @param string Phone1
	 * @return string
	 */
	public function setPhone1($_Phone1)
	{
		return ($this->Phone1 = $_Phone1);
	}
	/**
	 * Get Phone1
	 * @return string
	 */
	public function getPhone1()
	{
		return $this->Phone1;
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
	 * Set IP
	 * @param string IP
	 * @return string
	 */
	public function setIP($_IP)
	{
		return ($this->IP = $_IP);
	}
	/**
	 * Get IP
	 * @return string
	 */
	public function getIP()
	{
		return $this->IP;
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