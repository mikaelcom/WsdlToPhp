<?php
/**
 * Class file for XiEstimatesTypeGetResearchField
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeGetResearchField
 * @date 08/07/2012
 */
class XiEstimatesTypeGetResearchField extends XiEstimatesWsdlClass
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
	 * The EstimateFieldType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeEstimateFieldTypes
	 */
	public $EstimateFieldType;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiEstimatesTypeIdentifierTypes IdentifierType
	 * @param XiEstimatesTypeEstimateFieldTypes EstimateFieldType
	 * @return XiEstimatesTypeGetResearchField
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_EstimateFieldType)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'EstimateFieldType'=>$_EstimateFieldType));
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