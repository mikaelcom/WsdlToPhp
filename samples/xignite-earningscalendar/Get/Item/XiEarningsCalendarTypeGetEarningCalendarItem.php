<?php
/**
 * Class file for XiEarningsCalendarTypeGetEarningCalendarItem
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetEarningCalendarItem
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetEarningCalendarItem extends XiEarningsCalendarWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeEarningCalendarItemTypes
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
	 * @var XiEarningsCalendarTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeEarningCalendarItemTypes Type
	 * @param string Identifier
	 * @param XiEarningsCalendarTypeIdentifierTypes IdentifierType
	 * @return XiEarningsCalendarTypeGetEarningCalendarItem
	 */
	public function __construct($_Type,$_Identifier = null,$_IdentifierType)
	{
		parent::__construct(array('Type'=>$_Type,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType));
	}
	/**
	 * Set Type
	 * @param EarningCalendarItemTypes Type
	 * @return EarningCalendarItemTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiEarningsCalendarTypeEarningCalendarItemTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiEarningsCalendarTypeEarningCalendarItemTypes
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
		return ($this->IdentifierType = XiEarningsCalendarTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiEarningsCalendarTypeIdentifierTypes
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