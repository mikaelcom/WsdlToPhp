<?php
/**
 * Class file for XiFundamentalsTypeGetFourFundamentals
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetFourFundamentals
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetFourFundamentals extends XiFundamentalsWsdlClass
{
	/**
	 * The Type1
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalTypes
	 */
	public $Type1;
	/**
	 * The Type2
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalTypes
	 */
	public $Type2;
	/**
	 * The Type3
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalTypes
	 */
	public $Type3;
	/**
	 * The Type4
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalTypes
	 */
	public $Type4;
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
	 * Constructor
	 * @param XiFundamentalsTypeFundamentalTypes Type1
	 * @param XiFundamentalsTypeFundamentalTypes Type2
	 * @param XiFundamentalsTypeFundamentalTypes Type3
	 * @param XiFundamentalsTypeFundamentalTypes Type4
	 * @param string Identifier
	 * @param XiFundamentalsTypeIdentifierTypes IdentifierType
	 * @return XiFundamentalsTypeGetFourFundamentals
	 */
	public function __construct($_Type1,$_Type2,$_Type3,$_Type4,$_Identifier = null,$_IdentifierType)
	{
		parent::__construct(array('Type1'=>$_Type1,'Type2'=>$_Type2,'Type3'=>$_Type3,'Type4'=>$_Type4,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set Type1
	 * @param FundamentalTypes Type1
	 * @return FundamentalTypes
	 */
	public function setType1($_Type1)
	{
		return ($this->Type1 = XiFundamentalsTypeFundamentalTypes::valueIsValid($_Type1)?$_Type1:null);
	}
	/**
	 * Get Type1
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function getType1()
	{
		return $this->Type1;
	}
	/**
	 * Set Type2
	 * @param FundamentalTypes Type2
	 * @return FundamentalTypes
	 */
	public function setType2($_Type2)
	{
		return ($this->Type2 = XiFundamentalsTypeFundamentalTypes::valueIsValid($_Type2)?$_Type2:null);
	}
	/**
	 * Get Type2
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function getType2()
	{
		return $this->Type2;
	}
	/**
	 * Set Type3
	 * @param FundamentalTypes Type3
	 * @return FundamentalTypes
	 */
	public function setType3($_Type3)
	{
		return ($this->Type3 = XiFundamentalsTypeFundamentalTypes::valueIsValid($_Type3)?$_Type3:null);
	}
	/**
	 * Get Type3
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function getType3()
	{
		return $this->Type3;
	}
	/**
	 * Set Type4
	 * @param FundamentalTypes Type4
	 * @return FundamentalTypes
	 */
	public function setType4($_Type4)
	{
		return ($this->Type4 = XiFundamentalsTypeFundamentalTypes::valueIsValid($_Type4)?$_Type4:null);
	}
	/**
	 * Get Type4
	 * @return XiFundamentalsTypeFundamentalTypes
	 */
	public function getType4()
	{
		return $this->Type4;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>