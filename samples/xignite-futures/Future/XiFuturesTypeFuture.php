<?php
/**
 * Class file for XiFuturesTypeFuture
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeFuture
 * @date 08/07/2012
 */
class XiFuturesTypeFuture extends XiFuturesTypeCommon
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
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
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
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The ExchangeSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExchangeSymbol;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureTypes
	 */
	public $Type;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param int Month
	 * @param int Year
	 * @param string Exchange
	 * @param string ExchangeSymbol
	 * @param XiFuturesTypeFutureTypes Type
	 * @return XiFuturesTypeFuture
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Month,$_Year,$_Exchange = null,$_ExchangeSymbol = null,$_Type)
	{
		XiFuturesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Month'=>$_Month,'Year'=>$_Year,'Exchange'=>$_Exchange,'ExchangeSymbol'=>$_ExchangeSymbol,'Type'=>$_Type));
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
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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
	 * Set Exchange
	 * @param string Exchange
	 * @return string
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return string
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set ExchangeSymbol
	 * @param string ExchangeSymbol
	 * @return string
	 */
	public function setExchangeSymbol($_ExchangeSymbol)
	{
		return ($this->ExchangeSymbol = $_ExchangeSymbol);
	}
	/**
	 * Get ExchangeSymbol
	 * @return string
	 */
	public function getExchangeSymbol()
	{
		return $this->ExchangeSymbol;
	}
	/**
	 * Set Type
	 * @param FutureTypes Type
	 * @return FutureTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFuturesTypeFutureTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFuturesTypeFutureTypes
	 */
	public function getType()
	{
		return $this->Type;
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