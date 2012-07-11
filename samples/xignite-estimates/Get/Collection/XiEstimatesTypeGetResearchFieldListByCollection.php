<?php
/**
 * Class file for XiEstimatesTypeGetResearchFieldListByCollection
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchFieldListByCollection
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchFieldListByCollection extends XiEstimatesWsdlClass
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
	 * The EstimateFieldTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfEstimateFieldTypes
	 */
	public $EstimateFieldTypes;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeArrayOfEstimateFieldTypes EstimateFieldTypes
	 * @return XiEstimatesTypeGetResearchFieldListByCollection
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_EstimateFieldTypes = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'EstimateFieldTypes'=>new XiEstimatesTypeArrayOfEstimateFieldTypes($_EstimateFieldTypes)));
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