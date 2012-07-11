<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfo
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfo
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfo extends SOFastTaxWsdlClass
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
	 * @param string PostalCode
	 * @param string TaxType
	 * @param string LicenseKey
	 * @return SOFastTaxTypeGetTaxInfo
	 */
	public function __construct($_PostalCode = null,$_TaxType = null,$_LicenseKey = null)
	{
		parent::__construct(array('PostalCode'=>$_PostalCode,'TaxType'=>$_TaxType,'LicenseKey'=>$_LicenseKey));
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