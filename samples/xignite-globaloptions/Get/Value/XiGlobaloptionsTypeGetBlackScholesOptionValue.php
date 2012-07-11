<?php
/**
 * Class file for XiGlobaloptionsTypeGetBlackScholesOptionValue
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetBlackScholesOptionValue
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetBlackScholesOptionValue extends XiGlobaloptionsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeOptionTypes
	 */
	public $Type;
	/**
	 * The StockPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StockPrice;
	/**
	 * The StrikePrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StrikePrice;
	/**
	 * The YearsToMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YearsToMaturity;
	/**
	 * The RiskFreeRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RiskFreeRate;
	/**
	 * The Volatility
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volatility;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeOptionTypes Type
	 * @param double StockPrice
	 * @param double StrikePrice
	 * @param double YearsToMaturity
	 * @param double RiskFreeRate
	 * @param double Volatility
	 * @return XiGlobaloptionsTypeGetBlackScholesOptionValue
	 */
	public function __construct($_Type,$_StockPrice,$_StrikePrice,$_YearsToMaturity,$_RiskFreeRate,$_Volatility)
	{
		parent::__construct(array('Type'=>$_Type,'StockPrice'=>$_StockPrice,'StrikePrice'=>$_StrikePrice,'YearsToMaturity'=>$_YearsToMaturity,'RiskFreeRate'=>$_RiskFreeRate,'Volatility'=>$_Volatility));
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
	 * Set StockPrice
	 * @param double StockPrice
	 * @return double
	 */
	public function setStockPrice($_StockPrice)
	{
		return ($this->StockPrice = $_StockPrice);
	}
	/**
	 * Get StockPrice
	 * @return double
	 */
	public function getStockPrice()
	{
		return $this->StockPrice;
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
	 * Set YearsToMaturity
	 * @param double YearsToMaturity
	 * @return double
	 */
	public function setYearsToMaturity($_YearsToMaturity)
	{
		return ($this->YearsToMaturity = $_YearsToMaturity);
	}
	/**
	 * Get YearsToMaturity
	 * @return double
	 */
	public function getYearsToMaturity()
	{
		return $this->YearsToMaturity;
	}
	/**
	 * Set RiskFreeRate
	 * @param double RiskFreeRate
	 * @return double
	 */
	public function setRiskFreeRate($_RiskFreeRate)
	{
		return ($this->RiskFreeRate = $_RiskFreeRate);
	}
	/**
	 * Get RiskFreeRate
	 * @return double
	 */
	public function getRiskFreeRate()
	{
		return $this->RiskFreeRate;
	}
	/**
	 * Set Volatility
	 * @param double Volatility
	 * @return double
	 */
	public function setVolatility($_Volatility)
	{
		return ($this->Volatility = $_Volatility);
	}
	/**
	 * Get Volatility
	 * @return double
	 */
	public function getVolatility()
	{
		return $this->Volatility;
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