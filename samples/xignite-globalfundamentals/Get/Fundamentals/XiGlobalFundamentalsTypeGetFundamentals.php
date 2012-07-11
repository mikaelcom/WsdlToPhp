<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetFundamentals
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetFundamentals
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetFundamentals extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public $Type;
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
	 * @var XiGlobalFundamentalsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeGlobalFundamentalTypes Type
	 * @param string Identifiers
	 * @param XiGlobalFundamentalsTypeIdentifierTypes IdentifierType
	 * @return XiGlobalFundamentalsTypeGetFundamentals
	 */
	public function __construct($_Type,$_Identifiers = null,$_IdentifierType)
	{
		parent::__construct(array('Type'=>$_Type,'Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set Type
	 * @param GlobalFundamentalTypes Type
	 * @return GlobalFundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiGlobalFundamentalsTypeGlobalFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>