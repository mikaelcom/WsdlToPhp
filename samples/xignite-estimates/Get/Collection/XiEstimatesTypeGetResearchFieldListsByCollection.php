<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldListsByCollection
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldListsByCollection
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldListsByCollection extends XiEstimatesWsdlClass
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
	 * The EstimateFieldTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimateFieldTypes
	 */
	public $EstimateFieldTypes;
	/**
	 * Constructor
	 * @param string Identifiers
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeArrayOfEstimateFieldTypes EstimateFieldTypes
	 * @return XiEstimatesTypeGetResearchFieldListsByCollection
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_EstimateFieldTypes = null)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'EstimateFieldTypes'=>new XiEstimatesTypeArrayOfEstimateFieldTypes($_EstimateFieldTypes)));
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
	 * Set EstimateFieldTypes
	 * @param ArrayOfEstimateFieldTypes EstimateFieldTypes
	 * @return ArrayOfEstimateFieldTypes
	 */
	public function setEstimateFieldTypes($_EstimateFieldTypes)
	{
		return ($this->EstimateFieldTypes = $_EstimateFieldTypes);
	}
	/**
	 * Get EstimateFieldTypes
	 * @return XiEstimatesTypeArrayOfEstimateFieldTypes
	 */
	public function getEstimateFieldTypes()
	{
		return $this->EstimateFieldTypes;
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