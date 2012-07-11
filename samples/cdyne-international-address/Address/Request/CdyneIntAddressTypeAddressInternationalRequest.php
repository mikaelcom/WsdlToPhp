<?php
/**
 * Class file for CdyneIntAddressTypeAddressInternationalRequest
 * @date 03/07/2012
 */
/**
 * Class CdyneIntAddressTypeAddressInternationalRequest
 * @date 03/07/2012
 */
class CdyneIntAddressTypeAddressInternationalRequest extends CdyneIntAddressWsdlClass
{
	/**
	 * The AddressFields
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneIntAddressTypeArrayOfKeyValue
	 */
	public $AddressFields;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * The ReturnFields
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneIntAddressTypeArrayOfstring
	 */
	public $ReturnFields;
	/**
	 * The ReturnNativeOutput
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $ReturnNativeOutput;
	/**
	 * Constructor
	 * @param CdyneIntAddressTypeArrayOfKeyValue AddressFields
	 * @param string LicenseKey
	 * @param CdyneIntAddressTypeArrayOfstring ReturnFields
	 * @param boolean ReturnNativeOutput
	 * @return CdyneIntAddressTypeAddressInternationalRequest
	 */
	public function __construct($_AddressFields = null,$_LicenseKey = null,$_ReturnFields = null,$_ReturnNativeOutput = null)
	{
		parent::__construct(array('AddressFields'=>new CdyneIntAddressTypeArrayOfKeyValue($_AddressFields),'LicenseKey'=>$_LicenseKey,'ReturnFields'=>new CdyneIntAddressTypeArrayOfstring($_ReturnFields),'ReturnNativeOutput'=>$_ReturnNativeOutput));
	}
	/**
	 * Set AddressFields
	 * @param ArrayOfKeyValue AddressFields
	 * @return ArrayOfKeyValue
	 */
	public function setAddressFields($_AddressFields)
	{
		return ($this->AddressFields = $_AddressFields);
	}
	/**
	 * Get AddressFields
	 * @return CdyneIntAddressTypeArrayOfKeyValue
	 */
	public function getAddressFields()
	{
		return $this->AddressFields;
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
	 * Set ReturnFields
	 * @param ArrayOfstring ReturnFields
	 * @return ArrayOfstring
	 */
	public function setReturnFields($_ReturnFields)
	{
		return ($this->ReturnFields = $_ReturnFields);
	}
	/**
	 * Get ReturnFields
	 * @return CdyneIntAddressTypeArrayOfstring
	 */
	public function getReturnFields()
	{
		return $this->ReturnFields;
	}
	/**
	 * Set ReturnNativeOutput
	 * @param boolean ReturnNativeOutput
	 * @return boolean
	 */
	public function setReturnNativeOutput($_ReturnNativeOutput)
	{
		return ($this->ReturnNativeOutput = $_ReturnNativeOutput);
	}
	/**
	 * Get ReturnNativeOutput
	 * @return boolean
	 */
	public function getReturnNativeOutput()
	{
		return $this->ReturnNativeOutput;
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