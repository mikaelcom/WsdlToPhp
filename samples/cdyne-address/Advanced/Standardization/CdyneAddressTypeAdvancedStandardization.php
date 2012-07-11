<?php
/**
 * Class file for CdyneAddressTypeAdvancedStandardization
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeAdvancedStandardization
 * @date 02/07/2012
 */
class CdyneAddressTypeAdvancedStandardization extends CdyneAddressWsdlClass
{
	/**
	 * The addressToCheck
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeAddress
	 */
	public $addressToCheck;
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
	 * @param CdyneAddressTypeAddress addressToCheck
	 * @param string LicenseKey
	 * @return CdyneAddressTypeAdvancedStandardization
	 */
	public function __construct($_addressToCheck = null,$_LicenseKey = null)
	{
		parent::__construct(array('addressToCheck'=>$_addressToCheck,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set addressToCheck
	 * @param Address addressToCheck
	 * @return Address
	 */
	public function setAddressToCheck($_addressToCheck)
	{
		return ($this->addressToCheck = $_addressToCheck);
	}
	/**
	 * Get addressToCheck
	 * @return CdyneAddressTypeAddress
	 */
	public function getAddressToCheck()
	{
		return $this->addressToCheck;
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