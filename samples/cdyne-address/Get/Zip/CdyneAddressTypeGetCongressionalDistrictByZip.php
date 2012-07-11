<?php
/**
 * Class file for CdyneAddressTypeGetCongressionalDistrictByZip
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeGetCongressionalDistrictByZip
 * @date 02/07/2012
 */
class CdyneAddressTypeGetCongressionalDistrictByZip extends CdyneAddressWsdlClass
{
	/**
	 * The Zipcode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zipcode;
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
	 * @param string Zipcode
	 * @param string LicenseKey
	 * @return CdyneAddressTypeGetCongressionalDistrictByZip
	 */
	public function __construct($_Zipcode = null,$_LicenseKey = null)
	{
		parent::__construct(array('Zipcode'=>$_Zipcode,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Zipcode
	 * @param string Zipcode
	 * @return string
	 */
	public function setZipcode($_Zipcode)
	{
		return ($this->Zipcode = $_Zipcode);
	}
	/**
	 * Get Zipcode
	 * @return string
	 */
	public function getZipcode()
	{
		return $this->Zipcode;
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