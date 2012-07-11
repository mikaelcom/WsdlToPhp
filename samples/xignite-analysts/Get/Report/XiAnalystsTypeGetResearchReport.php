<?php
/**
 * Class file for XiAnalystsTypeGetResearchReport
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchReport
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchReport extends XiAnalystsWsdlClass
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
	 * @var XiAnalystsTypeIdentifierTypes
	 */
	public $IdentifierType;
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
	 * @param string Identifier
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeAnalystsResearchReportTypes AnalystsResearchReportType
	 * @return XiAnalystsTypeGetResearchReport
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AnalystsResearchReportType)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AnalystsResearchReportType'=>$_AnalystsResearchReportType));
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
		return ($this->IdentifierType = XiAnalystsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiAnalystsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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