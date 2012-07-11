<?php
/**
 * Class file for XiAnalystsTypeGetResearchReportTemplate
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchReportTemplate
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchReportTemplate extends XiAnalystsWsdlClass
{
	/**
	 * The AnalystsResearchReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalystsResearchReportTypes
	 */
	public $AnalystsResearchReportType;
	/**
	 * Constructor
	 * @param XiAnalystsTypeAnalystsResearchReportTypes AnalystsResearchReportType
	 * @return XiAnalystsTypeGetResearchReportTemplate
	 */
	public function __construct($_AnalystsResearchReportType)
	{
		parent::__construct(array('AnalystsResearchReportType'=>$_AnalystsResearchReportType));
	}
	/**
	 * Set AnalystsResearchReportType
	 * @param AnalystsResearchReportTypes AnalystsResearchReportType
	 * @return AnalystsResearchReportTypes
	 */
	public function setAnalystsResearchReportType($_AnalystsResearchReportType)
	{
		return ($this->AnalystsResearchReportType = XiAnalystsTypeAnalystsResearchReportTypes::valueIsValid($_AnalystsResearchReportType)?$_AnalystsResearchReportType:null);
	}
	/**
	 * Get AnalystsResearchReportType
	 * @return XiAnalystsTypeAnalystsResearchReportTypes
	 */
	public function getAnalystsResearchReportType()
	{
		return $this->AnalystsResearchReportType;
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