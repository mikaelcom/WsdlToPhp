<?php
/**
 * Class file for XiFuturesTypeFutureOption
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeFutureOption
 * @date 08/07/2012
 */
class XiFuturesTypeFutureOption extends XiFuturesTypeCommon
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
	 * The BaseSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BaseSymbol;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeOptionTypes
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
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Change;
	/**
	 * The PercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChange;
	/**
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volume;
	/**
	 * The OpenInterest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OpenInterest;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Low;
	/**
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Open;
	/**
	 * The Previous
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Previous;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string BaseSymbol
	 * @param string Date
	 * @param string Time
	 * @param XiFuturesTypeOptionTypes Type
	 * @param int Month
	 * @param int Year
	 * @param double StrikePrice
	 * @param double Last
	 * @param double Change
	 * @param double PercentChange
	 * @param double Volume
	 * @param double OpenInterest
	 * @param double High
	 * @param double Low
	 * @param double Open
	 * @param double Previous
	 * @return XiFuturesTypeFutureOption
	 */
	public function __construct($_Symbol = null,$_BaseSymbol = null,$_Date = null,$_Time = null,$_Type,$_Month,$_Year,$_StrikePrice,$_Last,$_Change,$_PercentChange,$_Volume,$_OpenInterest,$_High,$_Low,$_Open,$_Previous)
	{
		XiFuturesWsdlClass::__construct(array('Symbol'=>$_Symbol,'BaseSymbol'=>$_BaseSymbol,'Date'=>$_Date,'Time'=>$_Time,'Type'=>$_Type,'Month'=>$_Month,'Year'=>$_Year,'StrikePrice'=>$_StrikePrice,'Last'=>$_Last,'Change'=>$_Change,'PercentChange'=>$_PercentChange,'Volume'=>$_Volume,'OpenInterest'=>$_OpenInterest,'High'=>$_High,'Low'=>$_Low,'Open'=>$_Open,'Previous'=>$_Previous));
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
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
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
	 * Set Last
	 * @param double Last
	 * @return double
	 */
	public function setLast($_Last)
	{
		return ($this->Last = $_Last);
	}
	/**
	 * Get Last
	 * @return double
	 */
	public function getLast()
	{
		return $this->Last;
	}
	/**
	 * Set Change
	 * @param double Change
	 * @return double
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return double
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set PercentChange
	 * @param double PercentChange
	 * @return double
	 */
	public function setPercentChange($_PercentChange)
	{
		return ($this->PercentChange = $_PercentChange);
	}
	/**
	 * Get PercentChange
	 * @return double
	 */
	public function getPercentChange()
	{
		return $this->PercentChange;
	}
	/**
	 * Set Volume
	 * @param double Volume
	 * @return double
	 */
	public function setVolume($_Volume)
	{
		return ($this->Volume = $_Volume);
	}
	/**
	 * Get Volume
	 * @return double
	 */
	public function getVolume()
	{
		return $this->Volume;
	}
	/**
	 * Set OpenInterest
	 * @param double OpenInterest
	 * @return double
	 */
	public function setOpenInterest($_OpenInterest)
	{
		return ($this->OpenInterest = $_OpenInterest);
	}
	/**
	 * Get OpenInterest
	 * @return double
	 */
	public function getOpenInterest()
	{
		return $this->OpenInterest;
	}
	/**
	 * Set High
	 * @param double High
	 * @return double
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return double
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param double Low
	 * @return double
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return double
	 */
	public function getLow()
	{
		return $this->Low;
	}
	/**
	 * Set Open
	 * @param double Open
	 * @return double
	 */
	public function setOpen($_Open)
	{
		return ($this->Open = $_Open);
	}
	/**
	 * Get Open
	 * @return double
	 */
	public function getOpen()
	{
		return $this->Open;
	}
	/**
	 * Set Previous
	 * @param double Previous
	 * @return double
	 */
	public function setPrevious($_Previous)
	{
		return ($this->Previous = $_Previous);
	}
	/**
	 * Get Previous
	 * @return double
	 */
	public function getPrevious()
	{
		return $this->Previous;
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