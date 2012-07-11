<?php
/**
 * Class file for SOCurrencyExchangeTypeGetCountryCurrency
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeGetCountryCurrency
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeGetCountryCurrency extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
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
	 * @param string Country
	 * @param string LicenseKey
	 * @return SOCurrencyExchangeTypeGetCountryCurrency
	 */
	public function __construct($_Country = null,$_LicenseKey = null)
	{
		parent::__construct(array('Country'=>$_Country,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
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