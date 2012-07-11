<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoByAddress
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoByAddress
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoByAddress extends SOFastTaxWsdlClass
{
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
	 * The ZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipCode;
	/**
	 * The TaxType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TaxType;
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
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @param string ZipCode
	 * @param string TaxType
	 * @param string LicenseKey
	 * @return SOFastTaxTypeGetTaxInfoByAddress
	 */
	public function __construct($_Address = null,$_City = null,$_State = null,$_ZipCode = null,$_TaxType = null,$_LicenseKey = null)
	{
		parent::__construct(array('Address'=>$_Address,'City'=>$_City,'State'=>$_State,'ZipCode'=>$_ZipCode,'TaxType'=>$_TaxType,'LicenseKey'=>$_LicenseKey));
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
	 * Set ZipCode
	 * @param string ZipCode
	 * @return string
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return string
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
	}
	/**
	 * Set TaxType
	 * @param string TaxType
	 * @return string
	 */
	public function setTaxType($_TaxType)
	{
		return ($this->TaxType = $_TaxType);
	}
	/**
	 * Get TaxType
	 * @return string
	 */
	public function getTaxType()
	{
		return $this->TaxType;
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