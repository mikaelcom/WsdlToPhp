<?php
/**
 * Class file for XiAnalystsTypeGetResearchReportCustom
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchReportCustom
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchReportCustom extends XiAnalystsWsdlClass
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
	 * The ReportTemplate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeResearchReportTemplate
	 */
	public $ReportTemplate;
	/**
	 * The DefaultValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DefaultValue;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeResearchReportTemplate ReportTemplate
	 * @param string DefaultValue
	 * @return XiAnalystsTypeGetResearchReportCustom
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_ReportTemplate = null,$_DefaultValue = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'ReportTemplate'=>$_ReportTemplate,'DefaultValue'=>$_DefaultValue));
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
	 * Set ReportTemplate
	 * @param ResearchReportTemplate ReportTemplate
	 * @return ResearchReportTemplate
	 */
	public function setReportTemplate($_ReportTemplate)
	{
		return ($this->ReportTemplate = $_ReportTemplate);
	}
	/**
	 * Get ReportTemplate
	 * @return XiAnalystsTypeResearchReportTemplate
	 */
	public function getReportTemplate()
	{
		return $this->ReportTemplate;
	}
	/**
	 * Set DefaultValue
	 * @param string DefaultValue
	 * @return string
	 */
	public function setDefaultValue($_DefaultValue)
	{
		return ($this->DefaultValue = $_DefaultValue);
	}
	/**
	 * Get DefaultValue
	 * @return string
	 */
	public function getDefaultValue()
	{
		return $this->DefaultValue;
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