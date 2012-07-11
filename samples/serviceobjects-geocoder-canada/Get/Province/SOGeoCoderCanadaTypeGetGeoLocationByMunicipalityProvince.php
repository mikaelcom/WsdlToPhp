<?php
/**
 * Class file for SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince
 * @date 06/07/2012
 */
/**
 * Class SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince
 * @date 06/07/2012
 */
class SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince extends SOGeoCoderCanadaWsdlClass
{
	/**
	 * The Municipality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Municipality;
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
	 * @param string Municipality
	 * @param string Province
	 * @param string LicenseKey
	 * @return SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince
	 */
	public function __construct($_Municipality = null,$_Province = null,$_LicenseKey = null)
	{
		parent::__construct(array('Municipality'=>$_Municipality,'Province'=>$_Province,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Municipality
	 * @param string Municipality
	 * @return string
	 */
	public function setMunicipality($_Municipality)
	{
		return ($this->Municipality = $_Municipality);
	}
	/**
	 * Get Municipality
	 * @return string
	 */
	public function getMunicipality()
	{
		return $this->Municipality;
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