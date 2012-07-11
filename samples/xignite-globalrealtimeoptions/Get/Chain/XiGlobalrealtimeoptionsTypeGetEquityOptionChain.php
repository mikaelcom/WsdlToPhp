<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetEquityOptionChain
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetEquityOptionChain
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetEquityOptionChain extends XiGlobalrealtimeoptionsWsdlClass
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
	 * @var XiGlobalrealtimeoptionsTypeIdentifierTypes
	 */
	public $IdentifierType;
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
	 * @param XiGlobalrealtimeoptionsTypeIdentifierTypes IdentifierType
	 * @param int Month
	 * @param int Year
	 * @param string SymbologyType
	 * @param string OptionExchange
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionChain
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Month,$_Year,$_SymbologyType = null,$_OptionExchange = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Month'=>$_Month,'Year'=>$_Year,'SymbologyType'=>$_SymbologyType,'OptionExchange'=>$_OptionExchange));
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
		return ($this->IdentifierType = XiGlobalrealtimeoptionsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalrealtimeoptionsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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