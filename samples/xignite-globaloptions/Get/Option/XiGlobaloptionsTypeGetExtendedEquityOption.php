<?php
/**
 * Class file for XiGlobaloptionsTypeGetExtendedEquityOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetExtendedEquityOption
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetExtendedEquityOption extends XiGlobaloptionsWsdlClass
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
	 * @var XiGlobaloptionsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeOptionTypes
	 */
	public $Type;
	/**
	 * The Month
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Month;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The StrikePrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StrikePrice;
	/**
	 * The SymbologyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SymbologyType;
	/**
	 * The OptionExchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OptionExchange;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiGlobaloptionsTypeIdentifierTypes IdentifierType
	 * @param XiGlobaloptionsTypeOptionTypes Type
	 * @param int Month
	 * @param int Year
	 * @param double StrikePrice
	 * @param string SymbologyType
	 * @param string OptionExchange
	 * @return XiGlobaloptionsTypeGetExtendedEquityOption
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Type,$_Month,$_Year,$_StrikePrice,$_SymbologyType = null,$_OptionExchange = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Type'=>$_Type,'Month'=>$_Month,'Year'=>$_Year,'StrikePrice'=>$_StrikePrice,'SymbologyType'=>$_SymbologyType,'OptionExchange'=>$_OptionExchange));
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
		return ($this->IdentifierType = XiGlobaloptionsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobaloptionsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set Type
	 * @param OptionTypes Type
	 * @return OptionTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiGlobaloptionsTypeOptionTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiGlobaloptionsTypeOptionTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Month
	 * @param int Month
	 * @return int
	 */
	public function setMonth($_Month)
	{
		return ($this->Month = $_Month);
	}
	/**
	 * Get Month
	 * @return int
	 */
	public function getMonth()
	{
		return $this->Month;
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set StrikePrice
	 * @param double StrikePrice
	 * @return double
	 */
	public function setStrikePrice($_StrikePrice)
	{
		return ($this->StrikePrice = $_StrikePrice);
	}
	/**
	 * Get StrikePrice
	 * @return double
	 */
	public function getStrikePrice()
	{
		return $this->StrikePrice;
	}
	/**
	 * Set SymbologyType
	 * @param string SymbologyType
	 * @return string
	 */
	public function setSymbologyType($_SymbologyType)
	{
		return ($this->SymbologyType = $_SymbologyType);
	}
	/**
	 * Get SymbologyType
	 * @return string
	 */
	public function getSymbologyType()
	{
		return $this->SymbologyType;
	}
	/**
	 * Set OptionExchange
	 * @param string OptionExchange
	 * @return string
	 */
	public function setOptionExchange($_OptionExchange)
	{
		return ($this->OptionExchange = $_OptionExchange);
	}
	/**
	 * Get OptionExchange
	 * @return string
	 */
	public function getOptionExchange()
	{
		return $this->OptionExchange;
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