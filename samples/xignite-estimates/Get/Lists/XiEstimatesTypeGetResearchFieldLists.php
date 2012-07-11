<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldLists
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldLists
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldLists extends XiEstimatesWsdlClass
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
	 * @var XiEstimatesTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The EstimateGroup
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimateGroups
	 */
	public $EstimateGroup;
	/**
	 * Constructor
	 * @param string Identifiers
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeEstimateGroups EstimateGroup
	 * @return XiEstimatesTypeGetResearchFieldLists
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_EstimateGroup)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'EstimateGroup'=>$_EstimateGroup));
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
	 * Set EstimateGroup
	 * @param EstimateGroups EstimateGroup
	 * @return EstimateGroups
	 */
	public function setEstimateGroup($_EstimateGroup)
	{
		return ($this->EstimateGroup = XiEstimatesTypeEstimateGroups::valueIsValid($_EstimateGroup)?$_EstimateGroup:null);
	}
	/**
	 * Get EstimateGroup
	 * @return XiEstimatesTypeEstimateGroups
	 */
	public function getEstimateGroup()
	{
		return $this->EstimateGroup;
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