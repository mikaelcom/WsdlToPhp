<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldList
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldList
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldList extends XiAnalystsWsdlClass
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
	 * The AnalysisGroup
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalysisGroups
	 */
	public $AnalysisGroup;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeAnalysisGroups AnalysisGroup
	 * @return XiAnalystsTypeGetResearchFieldList
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AnalysisGroup)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AnalysisGroup'=>$_AnalysisGroup));
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
	 * Set AnalysisGroup
	 * @param AnalysisGroups AnalysisGroup
	 * @return AnalysisGroups
	 */
	public function setAnalysisGroup($_AnalysisGroup)
	{
		return ($this->AnalysisGroup = XiAnalystsTypeAnalysisGroups::valueIsValid($_AnalysisGroup)?$_AnalysisGroup:null);
	}
	/**
	 * Get AnalysisGroup
	 * @return XiAnalystsTypeAnalysisGroups
	 */
	public function getAnalysisGroup()
	{
		return $this->AnalysisGroup;
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