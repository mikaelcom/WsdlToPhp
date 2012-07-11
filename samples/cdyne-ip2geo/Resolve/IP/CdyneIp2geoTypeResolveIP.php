<?php
/**
 * Class file for CdyneIp2geoTypeResolveIP
 * @date 02/07/2012
 */
/**
 * Class CdyneIp2geoTypeResolveIP
 * @date 02/07/2012
 */
class CdyneIp2geoTypeResolveIP extends CdyneIp2geoWsdlClass
{
	/**
	 * The ipAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ipAddress;
	/**
	 * The licenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $licenseKey;
	/**
	 * Constructor
	 * @param string ipAddress
	 * @param string licenseKey
	 * @return CdyneIp2geoTypeResolveIP
	 */
	public function __construct($_ipAddress = null,$_licenseKey = null)
	{
		parent::__construct(array('ipAddress'=>$_ipAddress,'licenseKey'=>$_licenseKey));
	}
	/**
	 * Set ipAddress
	 * @param string ipAddress
	 * @return string
	 */
	public function setIpAddress($_ipAddress)
	{
		return ($this->ipAddress = $_ipAddress);
	}
	/**
	 * Get ipAddress
	 * @return string
	 */
	public function getIpAddress()
	{
		return $this->ipAddress;
	}
	/**
	 * Set licenseKey
	 * @param string licenseKey
	 * @return string
	 */
	public function setLicenseKey($_licenseKey)
	{
		return ($this->licenseKey = $_licenseKey);
	}
	/**
	 * Get licenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->licenseKey;
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