<?php
/**
 * Class file for SOPhoneAppendTypeGetBusinessPhoneAppend_V2
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendTypeGetBusinessPhoneAppend_V2
 * @date 08/07/2012
 */
class SOPhoneAppendTypeGetBusinessPhoneAppend_V2 extends SOPhoneAppendWsdlClass
{
	/**
	 * The BusinessName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessName;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address;
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
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string BusinessName
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string LicenseKey
	 * @return SOPhoneAppendTypeGetBusinessPhoneAppend_V2
	 */
	public function __construct($_BusinessName = null,$_Address = null,$_City = null,$_State = null,$_Zip = null,$_LicenseKey = null)
	{
		parent::__construct(array('BusinessName'=>$_BusinessName,'Address'=>$_Address,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set BusinessName
	 * @param string BusinessName
	 * @return string
	 */
	public function setBusinessName($_BusinessName)
	{
		return ($this->BusinessName = $_BusinessName);
	}
	/**
	 * Get BusinessName
	 * @return string
	 */
	public function getBusinessName()
	{
		return $this->BusinessName;
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