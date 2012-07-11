<?php
/**
 * Class file for XiAnalystsTypeGetResearchFields
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFields
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFields extends XiAnalystsWsdlClass
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
	 * The AnalystFieldType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalystFieldTypes
	 */
	public $AnalystFieldType;
	/**
	 * Constructor
	 * @param string Identifiers
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeAnalystFieldTypes AnalystFieldType
	 * @return XiAnalystsTypeGetResearchFields
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_AnalystFieldType)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'AnalystFieldType'=>$_AnalystFieldType));
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
	 * Set AnalystFieldType
	 * @param AnalystFieldTypes AnalystFieldType
	 * @return AnalystFieldTypes
	 */
	public function setAnalystFieldType($_AnalystFieldType)
	{
		return ($this->AnalystFieldType = XiAnalystsTypeAnalystFieldTypes::valueIsValid($_AnalystFieldType)?$_AnalystFieldType:null);
	}
	/**
	 * Get AnalystFieldType
	 * @return XiAnalystsTypeAnalystFieldTypes
	 */
	public function getAnalystFieldType()
	{
		return $this->AnalystFieldType;
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