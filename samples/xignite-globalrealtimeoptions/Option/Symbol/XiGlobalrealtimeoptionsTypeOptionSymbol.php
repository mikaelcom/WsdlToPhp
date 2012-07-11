<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeOptionSymbol
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeOptionSymbol
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeOptionSymbol extends XiGlobalrealtimeoptionsTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The SymbologyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SymbologyType;
	/**
	 * The BaseSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BaseSymbol;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeOptionTypes
	 */
	public $Type;
	/**
	 * The ExpirationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExpirationDate;
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
	 * Constructor
	 * @param string Symbol
	 * @param string SymbologyType
	 * @param string BaseSymbol
	 * @param XiGlobalrealtimeoptionsTypeOptionTypes Type
	 * @param string ExpirationDate
	 * @param int Month
	 * @param int Year
	 * @param double StrikePrice
	 * @return XiGlobalrealtimeoptionsTypeOptionSymbol
	 */
	public function __construct($_Symbol = null,$_SymbologyType = null,$_BaseSymbol = null,$_Type,$_ExpirationDate = null,$_Month,$_Year,$_StrikePrice)
	{
		XiGlobalrealtimeoptionsWsdlClass::__construct(array('Symbol'=>$_Symbol,'SymbologyType'=>$_SymbologyType,'BaseSymbol'=>$_BaseSymbol,'Type'=>$_Type,'ExpirationDate'=>$_ExpirationDate,'Month'=>$_Month,'Year'=>$_Year,'StrikePrice'=>$_StrikePrice));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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
	 * Set BaseSymbol
	 * @param string BaseSymbol
	 * @return string
	 */
	public function setBaseSymbol($_BaseSymbol)
	{
		return ($this->BaseSymbol = $_BaseSymbol);
	}
	/**
	 * Get BaseSymbol
	 * @return string
	 */
	public function getBaseSymbol()
	{
		return $this->BaseSymbol;
	}
	/**
	 * Set Type
	 * @param OptionTypes Type
	 * @return OptionTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiGlobalrealtimeoptionsTypeOptionTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiGlobalrealtimeoptionsTypeOptionTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set ExpirationDate
	 * @param string ExpirationDate
	 * @return string
	 */
	public function setExpirationDate($_ExpirationDate)
	{
		return ($this->ExpirationDate = $_ExpirationDate);
	}
	/**
	 * Get ExpirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->ExpirationDate;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>