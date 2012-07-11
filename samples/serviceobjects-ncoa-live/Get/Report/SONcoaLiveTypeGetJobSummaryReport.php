<?php
/**
 * Class file for SONcoaLiveTypeGetJobSummaryReport
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeGetJobSummaryReport
 * @date 06/07/2012
 */
class SONcoaLiveTypeGetJobSummaryReport extends SONcoaLiveWsdlClass
{
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
	 * @param string LicenseKey
	 * @return SONcoaLiveTypeGetJobSummaryReport
	 */
	public function __construct($_LicenseKey = null)
	{
		parent::__construct(array('LicenseKey'=>$_LicenseKey));
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