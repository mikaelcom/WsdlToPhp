<?php
/**
 * Class file for SOPackTrackTypeEagle_GetTrackingInfo
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeEagle_GetTrackingInfo
 * @date 08/07/2012
 */
class SOPackTrackTypeEagle_GetTrackingInfo extends SOPackTrackWsdlClass
{
	/**
	 * The TrackingNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TrackingNumber;
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
	 * @param string TrackingNumber
	 * @param string LicenseKey
	 * @return SOPackTrackTypeEagle_GetTrackingInfo
	 */
	public function __construct($_TrackingNumber = null,$_LicenseKey = null)
	{
		parent::__construct(array('TrackingNumber'=>$_TrackingNumber,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set TrackingNumber
	 * @param string TrackingNumber
	 * @return string
	 */
	public function setTrackingNumber($_TrackingNumber)
	{
		return ($this->TrackingNumber = $_TrackingNumber);
	}
	/**
	 * Get TrackingNumber
	 * @return string
	 */
	public function getTrackingNumber()
	{
		return $this->TrackingNumber;
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