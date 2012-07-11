<?php
/**
 * Class file for XiAnalystsTypeGetResearchReportTemplateResponse
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchReportTemplateResponse
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchReportTemplateResponse extends XiAnalystsWsdlClass
{
	/**
	 * The GetResearchReportTemplateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeResearchReportTemplate
	 */
	public $GetResearchReportTemplateResult;
	/**
	 * Constructor
	 * @param XiAnalystsTypeResearchReportTemplate GetResearchReportTemplateResult
	 * @return XiAnalystsTypeGetResearchReportTemplateResponse
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
	 * @return XiAnalystsTypeResearchReportTemplate
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