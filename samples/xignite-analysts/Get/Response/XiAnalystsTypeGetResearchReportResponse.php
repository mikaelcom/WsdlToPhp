<?php
/**
 * Class file for XiAnalystsTypeGetResearchReportResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchReportResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchReportResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeResearchReport
	 */
	public $GetResearchReportResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeResearchReport GetResearchReportResult
	 * @return XiAnalystsTypeGetResearchReportResponse
	 */
	public function __construct($_GetResearchReportResult = null)
	{
		parent::__construct(array('GetResearchReportResult'=>$_GetResearchReportResult));
	}
	/**
	 * Set GetResearchReportResult
	 * @param ResearchReport GetResearchReportResult
	 * @return ResearchReport
	 */
	public function setGetResearchReportResult($_GetResearchReportResult)
	{
		return ($this->GetResearchReportResult = $_GetResearchReportResult);
	}
	/**
	 * Get GetResearchReportResult
	 * @return XiAnalystsTypeResearchReport
	 */
	public function getGetResearchReportResult()
	{
		return $this->GetResearchReportResult;
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