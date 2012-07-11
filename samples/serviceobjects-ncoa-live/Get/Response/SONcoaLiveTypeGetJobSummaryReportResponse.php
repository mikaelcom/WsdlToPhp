<?php
/**
 * Class file for SONcoaLiveTypeGetJobSummaryReportResponse
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeGetJobSummaryReportResponse
 * @date 06/07/2012
 */
class SONcoaLiveTypeGetJobSummaryReportResponse extends SONcoaLiveWsdlClass
{
	/**
	 * The GetJobSummaryReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeJobSummaryReportResponse
	 */
	public $GetJobSummaryReportResult;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeJobSummaryReportResponse GetJobSummaryReportResult
	 * @return SONcoaLiveTypeGetJobSummaryReportResponse
	 */
	public function __construct($_GetJobSummaryReportResult = null)
	{
		parent::__construct(array('GetJobSummaryReportResult'=>$_GetJobSummaryReportResult));
	}
	/**
	 * Set GetJobSummaryReportResult
	 * @param JobSummaryReportResponse GetJobSummaryReportResult
	 * @return JobSummaryReportResponse
	 */
	public function setGetJobSummaryReportResult($_GetJobSummaryReportResult)
	{
		return ($this->GetJobSummaryReportResult = $_GetJobSummaryReportResult);
	}
	/**
	 * Get GetJobSummaryReportResult
	 * @return SONcoaLiveTypeJobSummaryReportResponse
	 */
	public function getGetJobSummaryReportResult()
	{
		return $this->GetJobSummaryReportResult;
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