<?php
/**
 * Class file for SOPackTrackTypeUnitedVan_GetTrackingInfo
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeUnitedVan_GetTrackingInfo
 * @date 08/07/2012
 */
class SOPackTrackTypeUnitedVan_GetTrackingInfo extends SOPackTrackWsdlClass
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
	 * The FirstFive
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstFive;
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
	 * @param string FirstFive
	 * @param string LicenseKey
	 * @return SOPackTrackTypeUnitedVan_GetTrackingInfo
	 */
	public function __construct($_TrackingNumber = null,$_FirstFive = null,$_LicenseKey = null)
	{
		parent::__construct(array('TrackingNumber'=>$_TrackingNumber,'FirstFive'=>$_FirstFive,'LicenseKey'=>$_LicenseKey));
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
	 * Set FirstFive
	 * @param string FirstFive
	 * @return string
	 */
	public function setFirstFive($_FirstFive)
	{
		return ($this->FirstFive = $_FirstFive);
	}
	/**
	 * Get FirstFive
	 * @return string
	 */
	public function getFirstFive()
	{
		return $this->FirstFive;
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