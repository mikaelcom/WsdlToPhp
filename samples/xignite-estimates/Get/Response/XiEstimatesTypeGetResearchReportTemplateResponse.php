<?php
/**
 * Class file for XiEstimatesTypeGetResearchReportTemplateResponse
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchReportTemplateResponse
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchReportTemplateResponse extends XiEstimatesWsdlClass
{
	/**
	 * The GetResearchReportTemplateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeResearchReportTemplate
	 */
	public $GetResearchReportTemplateResult;
	/**
	 * Constructor
	 * @param XiEstimatesTypeResearchReportTemplate GetResearchReportTemplateResult
	 * @return XiEstimatesTypeGetResearchReportTemplateResponse
	 */
	public function __construct($_GetResearchReportTemplateResult = null)
	{
		parent::__construct(array('GetResearchReportTemplateResult'=>$_GetResearchReportTemplateResult));
	}
	/**
	 * Set GetResearchReportTemplateResult
	 * @param ResearchReportTemplate GetResearchReportTemplateResult
	 * @return ResearchReportTemplate
	 */
	public function setGetResearchReportTemplateResult($_GetResearchReportTemplateResult)
	{
		return ($this->GetResearchReportTemplateResult = $_GetResearchReportTemplateResult);
	}
	/**
	 * Get GetResearchReportTemplateResult
	 * @return XiEstimatesTypeResearchReportTemplate
	 */
	public function getGetResearchReportTemplateResult()
	{
		return $this->GetResearchReportTemplateResult;
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