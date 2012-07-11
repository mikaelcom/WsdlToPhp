<?php
/**
 * Class file for CdyneAddressTypeAlternateCities
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeAlternateCities
 * @date 02/07/2012
 */
class CdyneAddressTypeAlternateCities extends CdyneAddressWsdlClass
{
	/**
	 * The zipcode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $zipcode;
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
	 * @param string zipcode
	 * @param string LicenseKey
	 * @return CdyneAddressTypeAlternateCities
	 */
	public function __construct($_zipcode = null,$_LicenseKey = null)
	{
		parent::__construct(array('zipcode'=>$_zipcode,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set zipcode
	 * @param string zipcode
	 * @return string
	 */
	public function setZipcode($_zipcode)
	{
		return ($this->zipcode = $_zipcode);
	}
	/**
	 * Get zipcode
	 * @return string
	 */
	public function getZipcode()
	{
		return $this->zipcode;
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