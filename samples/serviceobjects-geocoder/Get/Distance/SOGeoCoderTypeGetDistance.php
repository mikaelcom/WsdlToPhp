<?php
/**
 * Class file for SOGeoCoderTypeGetDistance
 * @date 05/07/2012
 */
/**
 * Class SOGeoCoderTypeGetDistance
 * @date 05/07/2012
 */
class SOGeoCoderTypeGetDistance extends SOGeoCoderWsdlClass
{
	/**
	 * The FromLatitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromLatitude;
	/**
	 * The FromLongitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromLongitude;
	/**
	 * The ToLatitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToLatitude;
	/**
	 * The ToLongitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToLongitude;
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
	 * @param string FromLatitude
	 * @param string FromLongitude
	 * @param string ToLatitude
	 * @param string ToLongitude
	 * @param string LicenseKey
	 * @return SOGeoCoderTypeGetDistance
	 */
	public function __construct($_FromLatitude = null,$_FromLongitude = null,$_ToLatitude = null,$_ToLongitude = null,$_LicenseKey = null)
	{
		parent::__construct(array('FromLatitude'=>$_FromLatitude,'FromLongitude'=>$_FromLongitude,'ToLatitude'=>$_ToLatitude,'ToLongitude'=>$_ToLongitude,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set FromLatitude
	 * @param string FromLatitude
	 * @return string
	 */
	public function setFromLatitude($_FromLatitude)
	{
		return ($this->FromLatitude = $_FromLatitude);
	}
	/**
	 * Get FromLatitude
	 * @return string
	 */
	public function getFromLatitude()
	{
		return $this->FromLatitude;
	}
	/**
	 * Set FromLongitude
	 * @param string FromLongitude
	 * @return string
	 */
	public function setFromLongitude($_FromLongitude)
	{
		return ($this->FromLongitude = $_FromLongitude);
	}
	/**
	 * Get FromLongitude
	 * @return string
	 */
	public function getFromLongitude()
	{
		return $this->FromLongitude;
	}
	/**
	 * Set ToLatitude
	 * @param string ToLatitude
	 * @return string
	 */
	public function setToLatitude($_ToLatitude)
	{
		return ($this->ToLatitude = $_ToLatitude);
	}
	/**
	 * Get ToLatitude
	 * @return string
	 */
	public function getToLatitude()
	{
		return $this->ToLatitude;
	}
	/**
	 * Set ToLongitude
	 * @param string ToLongitude
	 * @return string
	 */
	public function setToLongitude($_ToLongitude)
	{
		return ($this->ToLongitude = $_ToLongitude);
	}
	/**
	 * Get ToLongitude
	 * @return string
	 */
	public function getToLongitude()
	{
		return $this->ToLongitude;
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