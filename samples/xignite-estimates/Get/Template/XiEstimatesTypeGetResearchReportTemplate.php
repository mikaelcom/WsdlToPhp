<?php
/**
 * Class file for XiEstimatesTypeGetResearchReportTemplate
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchReportTemplate
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchReportTemplate extends XiEstimatesWsdlClass
{
	/**
	 * The EstimatesResearchReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimatesResearchReportTypes
	 */
	public $EstimatesResearchReportType;
	/**
	 * Constructor
	 * @param XiEstimatesTypeEstimatesResearchReportTypes EstimatesResearchReportType
	 * @return XiEstimatesTypeGetResearchReportTemplate
	 */
	public function __construct($_EstimatesResearchReportType)
	{
		parent::__construct(array('EstimatesResearchReportType'=>$_EstimatesResearchReportType));
	}
	/**
	 * Set EstimatesResearchReportType
	 * @param EstimatesResearchReportTypes EstimatesResearchReportType
	 * @return EstimatesResearchReportTypes
	 */
	public function setEstimatesResearchReportType($_EstimatesResearchReportType)
	{
		return ($this->EstimatesResearchReportType = XiEstimatesTypeEstimatesResearchReportTypes::valueIsValid($_EstimatesResearchReportType)?$_EstimatesResearchReportType:null);
	}
	/**
	 * Get EstimatesResearchReportType
	 * @return XiEstimatesTypeEstimatesResearchReportTypes
	 */
	public function getEstimatesResearchReportType()
	{
		return $this->EstimatesResearchReportType;
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