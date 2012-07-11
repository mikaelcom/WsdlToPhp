<?php
/**
 * Class file for SONcoaLiveTypeGetCASSSummaryReportResponse
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeGetCASSSummaryReportResponse
 * @date 06/07/2012
 */
class SONcoaLiveTypeGetCASSSummaryReportResponse extends SONcoaLiveWsdlClass
{
	/**
	 * The GetCASSSummaryReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONcoaLiveTypeCASSSummaryReportResponse
	 */
	public $GetCASSSummaryReportResult;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeCASSSummaryReportResponse GetCASSSummaryReportResult
	 * @return SONcoaLiveTypeGetCASSSummaryReportResponse
	 */
	public function __construct($_GetCASSSummaryReportResult = null)
	{
		parent::__construct(array('GetCASSSummaryReportResult'=>$_GetCASSSummaryReportResult));
	}
	/**
	 * Set GetCASSSummaryReportResult
	 * @param CASSSummaryReportResponse GetCASSSummaryReportResult
	 * @return CASSSummaryReportResponse
	 */
	public function setGetCASSSummaryReportResult($_GetCASSSummaryReportResult)
	{
		return ($this->GetCASSSummaryReportResult = $_GetCASSSummaryReportResult);
	}
	/**
	 * Get GetCASSSummaryReportResult
	 * @return SONcoaLiveTypeCASSSummaryReportResponse
	 */
	public function getGetCASSSummaryReportResult()
	{
		return $this->GetCASSSummaryReportResult;
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