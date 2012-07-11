<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldLists
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldLists
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldLists extends XiAnalystsWsdlClass
{
	/**
	 * The Identifiers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifiers;
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
	 * @param string Identifiers
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeAnalysisGroups AnalysisGroup
	 * @return XiAnalystsTypeGetResearchFieldLists
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_AnalysisGroup)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'AnalysisGroup'=>$_AnalysisGroup));
	}
	/**
	 * Set Identifiers
	 * @param string Identifiers
	 * @return string
	 */
	public function setIdentifiers($_Identifiers)
	{
		return ($this->Identifiers = $_Identifiers);
	}
	/**
	 * Get Identifiers
	 * @return string
	 */
	public function getIdentifiers()
	{
		return $this->Identifiers;
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