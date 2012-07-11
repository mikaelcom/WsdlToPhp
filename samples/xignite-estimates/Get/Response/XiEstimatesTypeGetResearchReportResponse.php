<?php
/**
 * Class file for XiEstimatesTypeGetResearchReportResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchReportResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchReportResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeResearchReport
	 */
	public $GetResearchReportResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeResearchReport GetResearchReportResult
	 * @return XiEstimatesTypeGetResearchReportResponse
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
	 * @return XiEstimatesTypeResearchReport
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