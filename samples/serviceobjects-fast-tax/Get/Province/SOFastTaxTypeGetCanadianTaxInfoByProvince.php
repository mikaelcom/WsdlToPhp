<?php
/**
 * Class file for SOFastTaxTypeGetCanadianTaxInfoByProvince
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetCanadianTaxInfoByProvince
 * @date 08/07/2012
 */
class SOFastTaxTypeGetCanadianTaxInfoByProvince extends SOFastTaxWsdlClass
{
	/**
	 * The Province
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Province;
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
	 * @param string Province
	 * @param string LicenseKey
	 * @return SOFastTaxTypeGetCanadianTaxInfoByProvince
	 */
	public function __construct($_Province = null,$_LicenseKey = null)
	{
		parent::__construct(array('Province'=>$_Province,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Province
	 * @param string Province
	 * @return string
	 */
	public function setProvince($_Province)
	{
		return ($this->Province = $_Province);
	}
	/**
	 * Get Province
	 * @return string
	 */
	public function getProvince()
	{
		return $this->Province;
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