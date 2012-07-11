<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldList
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldList
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldList extends XiEstimatesWsdlClass
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
	 * The EstimateGroup
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimateGroups
	 */
	public $EstimateGroup;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeEstimateGroups EstimateGroup
	 * @return XiEstimatesTypeGetResearchFieldList
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_EstimateGroup)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'EstimateGroup'=>$_EstimateGroup));
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