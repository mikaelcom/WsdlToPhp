<?php
/**
 * Class file for XiAnalystsTypeGetResearchField
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchField
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchField extends XiAnalystsWsdlClass
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
	 * The AnalystFieldType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeAnalystFieldTypes
	 */
	public $AnalystFieldType;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeAnalystFieldTypes AnalystFieldType
	 * @return XiAnalystsTypeGetResearchField
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AnalystFieldType)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AnalystFieldType'=>$_AnalystFieldType));
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