<?php
/**
 * Class file for SONcoaLiveTypeGetCASSSummaryReport
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeGetCASSSummaryReport
 * @date 06/07/2012
 */
class SONcoaLiveTypeGetCASSSummaryReport extends SONcoaLiveWsdlClass
{
	/**
	 * The JobId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $JobId;
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
	 * @param string JobId
	 * @param string LicenseKey
	 * @return SONcoaLiveTypeGetCASSSummaryReport
	 */
	public function __construct($_JobId = null,$_LicenseKey = null)
	{
		parent::__construct(array('JobId'=>$_JobId,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set JobId
	 * @param string JobId
	 * @return string
	 */
	public function setJobId($_JobId)
	{
		return ($this->JobId = $_JobId);
	}
	/**
	 * Get JobId
	 * @return string
	 */
	public function getJobId()
	{
		return $this->JobId;
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