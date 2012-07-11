<?php
/**
 * Class file for XiEstimatesTypeGetResearchFields
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFields
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFields extends XiEstimatesWsdlClass
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
	 * The EstimateFieldType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimateFieldTypes
	 */
	public $EstimateFieldType;
	/**
	 * Constructor
	 * @param string Identifiers
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeEstimateFieldTypes EstimateFieldType
	 * @return XiEstimatesTypeGetResearchFields
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_EstimateFieldType)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'EstimateFieldType'=>$_EstimateFieldType));
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
	 * Set EstimateFieldType
	 * @param EstimateFieldTypes EstimateFieldType
	 * @return EstimateFieldTypes
	 */
	public function setEstimateFieldType($_EstimateFieldType)
	{
		return ($this->EstimateFieldType = XiEstimatesTypeEstimateFieldTypes::valueIsValid($_EstimateFieldType)?$_EstimateFieldType:null);
	}
	/**
	 * Get EstimateFieldType
	 * @return XiEstimatesTypeEstimateFieldTypes
	 */
	public function getEstimateFieldType()
	{
		return $this->EstimateFieldType;
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