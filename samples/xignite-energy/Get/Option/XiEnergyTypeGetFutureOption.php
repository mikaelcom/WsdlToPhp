<?php
/**
 * Class file for XiEnergyTypeGetFutureOption
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetFutureOption
 * @date 08/07/2012
 */
class XiEnergyTypeGetFutureOption extends XiEnergyWsdlClass
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
	 * @var XiEnergyTypeOptionTypes
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
	 * Constructor
	 * @param string Symbol
	 * @param XiEnergyTypeOptionTypes Type
	 * @param int Month
	 * @param int Year
	 * @param double StrikePrice
	 * @return XiEnergyTypeGetFutureOption
	 */
	public function __construct($_Symbol = null,$_Type,$_Month,$_Year,$_StrikePrice)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'Month'=>$_Month,'Year'=>$_Year,'StrikePrice'=>$_StrikePrice));
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
		return ($this->Type = XiEnergyTypeOptionTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiEnergyTypeOptionTypes
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>