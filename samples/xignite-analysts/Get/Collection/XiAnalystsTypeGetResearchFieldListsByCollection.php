<?php
/**
 * Class file for XiAnalystsTypeGetResearchFieldListsByCollection
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeGetResearchFieldListsByCollection
 * @date 08/07/2012
 */
class XiAnalystsTypeGetResearchFieldListsByCollection extends XiAnalystsWsdlClass
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
	 * The AnalystFieldTypes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiAnalystsTypeArrayOfAnalystFieldTypes
	 */
	public $AnalystFieldTypes;
	/**
	 * Constructor
	 * @param string Identifiers
	 * @param XiAnalystsTypeIdentifierTypes IdentifierType
	 * @param XiAnalystsTypeArrayOfAnalystFieldTypes AnalystFieldTypes
	 * @return XiAnalystsTypeGetResearchFieldListsByCollection
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_AnalystFieldTypes = null)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'AnalystFieldTypes'=>new XiAnalystsTypeArrayOfAnalystFieldTypes($_AnalystFieldTypes)));
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