<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetDatedFundamental
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetDatedFundamental
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetDatedFundamental extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes
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
	 * @var XiGlobalFundamentalsTypeIdentifierTypes
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
	 * @param XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes Type
	 * @param string Identifier
	 * @param XiGlobalFundamentalsTypeIdentifierTypes IdentifierType
	 * @param string AsOfDate
	 * @return XiGlobalFundamentalsTypeGetDatedFundamental
	 */
	public function __construct($_Type,$_Identifier = null,$_IdentifierType,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param DatedGlobalFundamentalTypes Type
	 * @return DatedGlobalFundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiGlobalFundamentalsTypeDatedGlobalFundamentalTypes
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
		return ($this->IdentifierType = XiGlobalFundamentalsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalFundamentalsTypeIdentifierTypes
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