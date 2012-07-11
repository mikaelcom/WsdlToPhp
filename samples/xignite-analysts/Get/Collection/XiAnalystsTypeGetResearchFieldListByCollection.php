<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldListByCollection
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldListByCollection
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldListByCollection extends XiAnalystsWsdlClass
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
	 * The AnalystFieldTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystFieldTypes
	 */
	public $AnalystFieldTypes;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeArrayOfAnalystFieldTypes AnalystFieldTypes
	 * @return XiAnalystsTypeGetResearchFieldListByCollection
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AnalystFieldTypes = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AnalystFieldTypes'=>new XiAnalystsTypeArrayOfAnalystFieldTypes($_AnalystFieldTypes)));
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
	 * Set AnalystFieldTypes
	 * @param ArrayOfAnalystFieldTypes AnalystFieldTypes
	 * @return ArrayOfAnalystFieldTypes
	 */
	public function setAnalystFieldTypes($_AnalystFieldTypes)
	{
		return ($this->AnalystFieldTypes = $_AnalystFieldTypes);
	}
	/**
	 * Get AnalystFieldTypes
	 * @return XiAnalystsTypeArrayOfAnalystFieldTypes
	 */
	public function getAnalystFieldTypes()
	{
		return $this->AnalystFieldTypes;
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