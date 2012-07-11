<?php
/**
 * Class file for SONcoaLiveTypeGetNCOALinkSummaryReportResponse
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeGetNCOALinkSummaryReportResponse
 * @date 06/07/2012
 */
class SONcoaLiveTypeGetNCOALinkSummaryReportResponse extends SONcoaLiveWsdlClass
{
	/**
	 * The GetNCOALinkSummaryReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeNCOALinkSummaryReportResponse
	 */
	public $GetNCOALinkSummaryReportResult;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeNCOALinkSummaryReportResponse GetNCOALinkSummaryReportResult
	 * @return SONcoaLiveTypeGetNCOALinkSummaryReportResponse
	 */
	public function __construct($_GetNCOALinkSummaryReportResult = null)
	{
		parent::__construct(array('GetNCOALinkSummaryReportResult'=>$_GetNCOALinkSummaryReportResult));
	}
	/**
	 * Set GetNCOALinkSummaryReportResult
	 * @param NCOALinkSummaryReportResponse GetNCOALinkSummaryReportResult
	 * @return NCOALinkSummaryReportResponse
	 */
	public function setGetNCOALinkSummaryReportResult($_GetNCOALinkSummaryReportResult)
	{
		return ($this->GetNCOALinkSummaryReportResult = $_GetNCOALinkSummaryReportResult);
	}
	/**
	 * Get GetNCOALinkSummaryReportResult
	 * @return SONcoaLiveTypeNCOALinkSummaryReportResponse
	 */
	public function getGetNCOALinkSummaryReportResult()
	{
		return $this->GetNCOALinkSummaryReportResult;
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