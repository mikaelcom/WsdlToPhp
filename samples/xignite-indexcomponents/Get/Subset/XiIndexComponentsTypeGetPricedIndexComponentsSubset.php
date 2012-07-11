<?php
/**
 * Class file for XiIndexComponentsTypeGetPricedIndexComponentsSubset
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeGetPricedIndexComponentsSubset
 * @date 08/07/2012
 */
class XiIndexComponentsTypeGetPricedIndexComponentsSubset extends XiIndexComponentsWsdlClass
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
	 * @var XiIndexComponentsTypeIdentifierTypes
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
	 * The StartIndex
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StartIndex;
	/**
	 * The EndIndex
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $EndIndex;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiIndexComponentsTypeIdentifierTypes IdentifierType
	 * @param string AsOfDate
	 * @param int StartIndex
	 * @param int EndIndex
	 * @return XiIndexComponentsTypeGetPricedIndexComponentsSubset
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AsOfDate = null,$_StartIndex,$_EndIndex)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AsOfDate'=>$_AsOfDate,'StartIndex'=>$_StartIndex,'EndIndex'=>$_EndIndex));
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
		return ($this->IdentifierType = XiIndexComponentsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiIndexComponentsTypeIdentifierTypes
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
	 * Set StartIndex
	 * @param int StartIndex
	 * @return int
	 */
	public function setStartIndex($_StartIndex)
	{
		return ($this->StartIndex = $_StartIndex);
	}
	/**
	 * Get StartIndex
	 * @return int
	 */
	public function getStartIndex()
	{
		return $this->StartIndex;
	}
	/**
	 * Set EndIndex
	 * @param int EndIndex
	 * @return int
	 */
	public function setEndIndex($_EndIndex)
	{
		return ($this->EndIndex = $_EndIndex);
	}
	/**
	 * Get EndIndex
	 * @return int
	 */
	public function getEndIndex()
	{
		return $this->EndIndex;
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