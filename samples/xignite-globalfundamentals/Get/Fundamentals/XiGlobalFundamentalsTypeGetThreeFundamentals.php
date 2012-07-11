<?php
/**
 * Class file for XiGlobalFundamentalsTypeGetThreeFundamentals
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGetThreeFundamentals
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGetThreeFundamentals extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Type1
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public $Type1;
	/**
	 * The Type2
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public $Type2;
	/**
	 * The Type3
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public $Type3;
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
	 * Constructor
	 * @param XiGlobalFundamentalsTypeGlobalFundamentalTypes Type1
	 * @param XiGlobalFundamentalsTypeGlobalFundamentalTypes Type2
	 * @param XiGlobalFundamentalsTypeGlobalFundamentalTypes Type3
	 * @param string Identifier
	 * @param XiGlobalFundamentalsTypeIdentifierTypes IdentifierType
	 * @return XiGlobalFundamentalsTypeGetThreeFundamentals
	 */
	public function __construct($_Type1,$_Type2,$_Type3,$_Identifier = null,$_IdentifierType)
	{
		parent::__construct(array('Type1'=>$_Type1,'Type2'=>$_Type2,'Type3'=>$_Type3,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set Type1
	 * @param GlobalFundamentalTypes Type1
	 * @return GlobalFundamentalTypes
	 */
	public function setType1($_Type1)
	{
		return ($this->Type1 = XiGlobalFundamentalsTypeGlobalFundamentalTypes::valueIsValid($_Type1)?$_Type1:null);
	}
	/**
	 * Get Type1
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function getType1()
	{
		return $this->Type1;
	}
	/**
	 * Set Type2
	 * @param GlobalFundamentalTypes Type2
	 * @return GlobalFundamentalTypes
	 */
	public function setType2($_Type2)
	{
		return ($this->Type2 = XiGlobalFundamentalsTypeGlobalFundamentalTypes::valueIsValid($_Type2)?$_Type2:null);
	}
	/**
	 * Get Type2
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function getType2()
	{
		return $this->Type2;
	}
	/**
	 * Set Type3
	 * @param GlobalFundamentalTypes Type3
	 * @return GlobalFundamentalTypes
	 */
	public function setType3($_Type3)
	{
		return ($this->Type3 = XiGlobalFundamentalsTypeGlobalFundamentalTypes::valueIsValid($_Type3)?$_Type3:null);
	}
	/**
	 * Get Type3
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
	 */
	public function getType3()
	{
		return $this->Type3;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>