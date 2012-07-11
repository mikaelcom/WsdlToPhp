<?php
/**
 * Class file for SOGeoCashTypeGetATMLocationsByZipStreet
 * @date 08/07/2012
 */
/**
 * Class SOGeoCashTypeGetATMLocationsByZipStreet
 * @date 08/07/2012
 */
class SOGeoCashTypeGetATMLocationsByZipStreet extends SOGeoCashWsdlClass
{
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The StreetName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StreetName;
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
	 * @param string PostalCode
	 * @param string StreetName
	 * @param string LicenseKey
	 * @return SOGeoCashTypeGetATMLocationsByZipStreet
	 */
	public function __construct($_PostalCode = null,$_StreetName = null,$_LicenseKey = null)
	{
		parent::__construct(array('PostalCode'=>$_PostalCode,'StreetName'=>$_StreetName,'LicenseKey'=>$_LicenseKey));
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
	 * Set StreetName
	 * @param string StreetName
	 * @return string
	 */
	public function setStreetName($_StreetName)
	{
		return ($this->StreetName = $_StreetName);
	}
	/**
	 * Get StreetName
	 * @return string
	 */
	public function getStreetName()
	{
		return $this->StreetName;
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