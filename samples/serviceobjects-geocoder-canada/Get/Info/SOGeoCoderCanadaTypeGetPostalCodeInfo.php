<?php
/**
 * Class file for SOGeoCoderCanadaTypeGetPostalCodeInfo
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaTypeGetPostalCodeInfo
 * @date 06/07/2012
 */
class SOGeoCoderCanadaTypeGetPostalCodeInfo extends SOGeoCoderCanadaWsdlClass
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
	 * @param string LicenseKey
	 * @return SOGeoCoderCanadaTypeGetPostalCodeInfo
	 */
	public function __construct($_PostalCode = null,$_LicenseKey = null)
	{
		parent::__construct(array('PostalCode'=>$_PostalCode,'LicenseKey'=>$_LicenseKey));
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