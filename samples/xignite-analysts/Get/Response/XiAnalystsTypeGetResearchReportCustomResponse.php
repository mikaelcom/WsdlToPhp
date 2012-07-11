<?php
/**
 * Class file for XiAnalystsTypeGetResearchReportCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchReportCustomResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchReportCustomResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchReportCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeResearchReport
	 */
	public $GetResearchReportCustomResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeResearchReport GetResearchReportCustomResult
	 * @return XiAnalystsTypeGetResearchReportCustomResponse
	 */
	public function __construct($_GetResearchReportCustomResult = null)
	{
		parent::__construct(array('GetResearchReportCustomResult'=>$_GetResearchReportCustomResult));
	}
	/**
	 * Set GetResearchReportCustomResult
	 * @param ResearchReport GetResearchReportCustomResult
	 * @return ResearchReport
	 */
	public function setGetResearchReportCustomResult($_GetResearchReportCustomResult)
	{
		return ($this->GetResearchReportCustomResult = $_GetResearchReportCustomResult);
	}
	/**
	 * Get GetResearchReportCustomResult
	 * @return XiAnalystsTypeResearchReport
	 */
	public function getGetResearchReportCustomResult()
	{
		return $this->GetResearchReportCustomResult;
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