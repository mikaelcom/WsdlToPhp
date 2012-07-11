<?php
/**
 * Class file for XiEstimatesTypeGetResearchReportCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchReportCustomResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchReportCustomResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchReportCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeResearchReport
	 */
	public $GetResearchReportCustomResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeResearchReport GetResearchReportCustomResult
	 * @return XiEstimatesTypeGetResearchReportCustomResponse
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
	 * @return XiEstimatesTypeResearchReport
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