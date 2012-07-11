<?php
/**
 * Class file for SONcoaLiveTypeJobSummaryReportResponse
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeJobSummaryReportResponse
 * @date 06/07/2012
 */
class SONcoaLiveTypeJobSummaryReportResponse extends SONcoaLiveWsdlClass
{
	/**
	 * The Jobs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeArrayOfJobInfo
	 */
	public $Jobs;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeArrayOfJobInfo Jobs
	 * @param SONcoaLiveTypeError Error
	 * @return SONcoaLiveTypeJobSummaryReportResponse
	 */
	public function __construct($_Jobs = null,$_Error = null)
	{
		parent::__construct(array('Jobs'=>new SONcoaLiveTypeArrayOfJobInfo($_Jobs),'Error'=>$_Error));
	}
	/**
	 * Set Jobs
	 * @param ArrayOfJobInfo Jobs
	 * @return ArrayOfJobInfo
	 */
	public function setJobs($_Jobs)
	{
		return ($this->Jobs = $_Jobs);
	}
	/**
	 * Get Jobs
	 * @return SONcoaLiveTypeArrayOfJobInfo
	 */
	public function getJobs()
	{
		return $this->Jobs;
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SONcoaLiveTypeError
	 */
	public function getError()
	{
		return $this->Error;
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