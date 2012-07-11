<?php
/**
 * Class file for XiFuturesTypeGetFutureOptionsByStrikePrice
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetFutureOptionsByStrikePrice
 * @date 08/07/2012
 */
class XiFuturesTypeGetFutureOptionsByStrikePrice extends XiFuturesWsdlClass
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
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeOptionTypes
	 */
	public $Type;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The StrikePrices
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StrikePrices;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiFuturesTypeOptionTypes Type
	 * @param int Year
	 * @param string StrikePrices
	 * @return XiFuturesTypeGetFutureOptionsByStrikePrice
	 */
	public function __construct($_Symbol = null,$_Type,$_Year,$_StrikePrices = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'Year'=>$_Year,'StrikePrices'=>$_StrikePrices));
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
	 * Set Type
	 * @param OptionTypes Type
	 * @return OptionTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFuturesTypeOptionTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFuturesTypeOptionTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Set StrikePrices
	 * @param string StrikePrices
	 * @return string
	 */
	public function setStrikePrices($_StrikePrices)
	{
		return ($this->StrikePrices = $_StrikePrices);
	}
	/**
	 * Get StrikePrices
	 * @return string
	 */
	public function getStrikePrices()
	{
		return $this->StrikePrices;
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