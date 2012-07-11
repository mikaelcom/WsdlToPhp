<?php
/**
 * Class file for XiEstimatesTypeGetResearchReport
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchReport
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchReport extends XiEstimatesWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeIdentifierTypes
	 */
	public $IdentifierType;
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
	 * @param string Identifier
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeEstimatesResearchReportTypes EstimatesResearchReportType
	 * @return XiEstimatesTypeGetResearchReport
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_EstimatesResearchReportType)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'EstimatesResearchReportType'=>$_EstimatesResearchReportType));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiEstimatesTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiEstimatesTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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