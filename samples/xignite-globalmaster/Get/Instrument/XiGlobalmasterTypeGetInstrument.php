<?php
/**
 * Class file for XiGlobalmasterTypeGetInstrument
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetInstrument
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetInstrument extends XiGlobalmasterWsdlClass
{
	/**
	 * The IncludeRelated
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeInstrumentRelatedTypes
	 */
	public $IncludeRelated;
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
	 * @var XiGlobalmasterTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeInstrumentRelatedTypes IncludeRelated
	 * @param string Identifier
	 * @param XiGlobalmasterTypeIdentifierTypes IdentifierType
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiGlobalmasterTypeGetInstrument
	 */
	public function __construct($_IncludeRelated,$_Identifier = null,$_IdentifierType,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('IncludeRelated'=>$_IncludeRelated,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set IncludeRelated
	 * @param InstrumentRelatedTypes IncludeRelated
	 * @return InstrumentRelatedTypes
	 */
	public function setIncludeRelated($_IncludeRelated)
	{
		return ($this->IncludeRelated = XiGlobalmasterTypeInstrumentRelatedTypes::valueIsValid($_IncludeRelated)?$_IncludeRelated:null);
	}
	/**
	 * Get IncludeRelated
	 * @return XiGlobalmasterTypeInstrumentRelatedTypes
	 */
	public function getIncludeRelated()
	{
		return $this->IncludeRelated;
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
		return ($this->IdentifierType = XiGlobalmasterTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalmasterTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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