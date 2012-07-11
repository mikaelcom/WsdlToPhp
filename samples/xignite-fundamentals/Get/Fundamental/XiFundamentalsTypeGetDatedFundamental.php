<?php
/**
 * Class file for XiFundamentalsTypeGetDatedFundamental
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetDatedFundamental
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetDatedFundamental extends XiFundamentalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeDatedFundamentalTypes
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeDatedFundamentalTypes Type
	 * @param string Identifier
	 * @param XiFundamentalsTypeIdentifierTypes IdentifierType
	 * @param string AsOfDate
	 * @return XiFundamentalsTypeGetDatedFundamental
	 */
	public function __construct($_Type,$_Identifier = null,$_IdentifierType,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param DatedFundamentalTypes Type
	 * @return DatedFundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFundamentalsTypeDatedFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundamentalsTypeDatedFundamentalTypes
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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