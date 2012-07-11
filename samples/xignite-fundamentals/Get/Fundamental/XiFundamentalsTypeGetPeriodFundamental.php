<?php
/**
 * Class file for XiFundamentalsTypeGetPeriodFundamental
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetPeriodFundamental
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetPeriodFundamental extends XiFundamentalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypePeriodFundamentalTypes
	 */
	public $Type;
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
	 * @var XiFundamentalsTypeIdentifierTypes
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
	 * @param XiFundamentalsTypePeriodFundamentalTypes Type
	 * @param string Identifier
	 * @param XiFundamentalsTypeIdentifierTypes IdentifierType
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiFundamentalsTypeGetPeriodFundamental
	 */
	public function __construct($_Type,$_Identifier = null,$_IdentifierType,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Type
	 * @param PeriodFundamentalTypes Type
	 * @return PeriodFundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFundamentalsTypePeriodFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundamentalsTypePeriodFundamentalTypes
	 */
	public function getType()
	{
		return $this->Type;
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
		return ($this->IdentifierType = XiFundamentalsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiFundamentalsTypeIdentifierTypes
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