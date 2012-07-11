<?php
/**
 * Class file for XiEstimatesTypeGetResearchReportCustom
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchReportCustom
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchReportCustom extends XiEstimatesWsdlClass
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
	 * The ReportTemplate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeResearchReportTemplate
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
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeResearchReportTemplate ReportTemplate
	 * @param string DefaultValue
	 * @return XiEstimatesTypeGetResearchReportCustom
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
	 * @return XiEstimatesTypeResearchReportTemplate
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