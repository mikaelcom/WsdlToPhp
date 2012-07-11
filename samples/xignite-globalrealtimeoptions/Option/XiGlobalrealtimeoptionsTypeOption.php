<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeOption
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeOption extends XiGlobalrealtimeoptionsTypeCommon
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
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
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
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
	/**
	 * The LastSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastSize;
	/**
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Open;
	/**
	 * The Close
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Close;
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
	 * The OpenInterestDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OpenInterestDate;
	/**
	 * The PreviousClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousClose;
	/**
	 * The PreviousCloseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PreviousCloseDate;
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
	 * The Bid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Bid;
	/**
	 * The BidDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BidDate;
	/**
	 * The BidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BidTime;
	/**
	 * The BidSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BidSize;
	/**
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ask;
	/**
	 * The AskDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AskDate;
	/**
	 * The AskTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AskTime;
	/**
	 * The AskSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AskSize;
	/**
	 * The InTheMoney
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $InTheMoney;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
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
	 * @param string Currency
	 * @param string Date
	 * @param string Time
	 * @param double Last
	 * @param double LastSize
	 * @param double Open
	 * @param double Close
	 * @param double High
	 * @param double Low
	 * @param double Volume
	 * @param double OpenInterest
	 * @param string OpenInterestDate
	 * @param double PreviousClose
	 * @param string PreviousCloseDate
	 * @param double Change
	 * @param double PercentChange
	 * @param double Bid
	 * @param string BidDate
	 * @param string BidTime
	 * @param double BidSize
	 * @param double Ask
	 * @param string AskDate
	 * @param string AskTime
	 * @param double AskSize
	 * @param boolean InTheMoney
	 * @param string Exchange
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function __construct($_Symbol = null,$_SymbologyType = null,$_BaseSymbol = null,$_Type,$_ExpirationDate = null,$_Month,$_Year,$_StrikePrice,$_Currency = null,$_Date = null,$_Time = null,$_Last,$_LastSize,$_Open,$_Close,$_High,$_Low,$_Volume,$_OpenInterest,$_OpenInterestDate = null,$_PreviousClose,$_PreviousCloseDate = null,$_Change,$_PercentChange,$_Bid,$_BidDate = null,$_BidTime = null,$_BidSize,$_Ask,$_AskDate = null,$_AskTime = null,$_AskSize,$_InTheMoney,$_Exchange = null)
	{
		XiGlobalrealtimeoptionsWsdlClass::__construct(array('Symbol'=>$_Symbol,'SymbologyType'=>$_SymbologyType,'BaseSymbol'=>$_BaseSymbol,'Type'=>$_Type,'ExpirationDate'=>$_ExpirationDate,'Month'=>$_Month,'Year'=>$_Year,'StrikePrice'=>$_StrikePrice,'Currency'=>$_Currency,'Date'=>$_Date,'Time'=>$_Time,'Last'=>$_Last,'LastSize'=>$_LastSize,'Open'=>$_Open,'Close'=>$_Close,'High'=>$_High,'Low'=>$_Low,'Volume'=>$_Volume,'OpenInterest'=>$_OpenInterest,'OpenInterestDate'=>$_OpenInterestDate,'PreviousClose'=>$_PreviousClose,'PreviousCloseDate'=>$_PreviousCloseDate,'Change'=>$_Change,'PercentChange'=>$_PercentChange,'Bid'=>$_Bid,'BidDate'=>$_BidDate,'BidTime'=>$_BidTime,'BidSize'=>$_BidSize,'Ask'=>$_Ask,'AskDate'=>$_AskDate,'AskTime'=>$_AskTime,'AskSize'=>$_AskSize,'InTheMoney'=>$_InTheMoney,'Exchange'=>$_Exchange));
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
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
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
	 * Set LastSize
	 * @param double LastSize
	 * @return double
	 */
	public function setLastSize($_LastSize)
	{
		return ($this->LastSize = $_LastSize);
	}
	/**
	 * Get LastSize
	 * @return double
	 */
	public function getLastSize()
	{
		return $this->LastSize;
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
	 * Set Close
	 * @param double Close
	 * @return double
	 */
	public function setClose($_Close)
	{
		return ($this->Close = $_Close);
	}
	/**
	 * Get Close
	 * @return double
	 */
	public function getClose()
	{
		return $this->Close;
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
	 * Set OpenInterestDate
	 * @param string OpenInterestDate
	 * @return string
	 */
	public function setOpenInterestDate($_OpenInterestDate)
	{
		return ($this->OpenInterestDate = $_OpenInterestDate);
	}
	/**
	 * Get OpenInterestDate
	 * @return string
	 */
	public function getOpenInterestDate()
	{
		return $this->OpenInterestDate;
	}
	/**
	 * Set PreviousClose
	 * @param double PreviousClose
	 * @return double
	 */
	public function setPreviousClose($_PreviousClose)
	{
		return ($this->PreviousClose = $_PreviousClose);
	}
	/**
	 * Get PreviousClose
	 * @return double
	 */
	public function getPreviousClose()
	{
		return $this->PreviousClose;
	}
	/**
	 * Set PreviousCloseDate
	 * @param string PreviousCloseDate
	 * @return string
	 */
	public function setPreviousCloseDate($_PreviousCloseDate)
	{
		return ($this->PreviousCloseDate = $_PreviousCloseDate);
	}
	/**
	 * Get PreviousCloseDate
	 * @return string
	 */
	public function getPreviousCloseDate()
	{
		return $this->PreviousCloseDate;
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
	 * Set Bid
	 * @param double Bid
	 * @return double
	 */
	public function setBid($_Bid)
	{
		return ($this->Bid = $_Bid);
	}
	/**
	 * Get Bid
	 * @return double
	 */
	public function getBid()
	{
		return $this->Bid;
	}
	/**
	 * Set BidDate
	 * @param string BidDate
	 * @return string
	 */
	public function setBidDate($_BidDate)
	{
		return ($this->BidDate = $_BidDate);
	}
	/**
	 * Get BidDate
	 * @return string
	 */
	public function getBidDate()
	{
		return $this->BidDate;
	}
	/**
	 * Set BidTime
	 * @param string BidTime
	 * @return string
	 */
	public function setBidTime($_BidTime)
	{
		return ($this->BidTime = $_BidTime);
	}
	/**
	 * Get BidTime
	 * @return string
	 */
	public function getBidTime()
	{
		return $this->BidTime;
	}
	/**
	 * Set BidSize
	 * @param double BidSize
	 * @return double
	 */
	public function setBidSize($_BidSize)
	{
		return ($this->BidSize = $_BidSize);
	}
	/**
	 * Get BidSize
	 * @return double
	 */
	public function getBidSize()
	{
		return $this->BidSize;
	}
	/**
	 * Set Ask
	 * @param double Ask
	 * @return double
	 */
	public function setAsk($_Ask)
	{
		return ($this->Ask = $_Ask);
	}
	/**
	 * Get Ask
	 * @return double
	 */
	public function getAsk()
	{
		return $this->Ask;
	}
	/**
	 * Set AskDate
	 * @param string AskDate
	 * @return string
	 */
	public function setAskDate($_AskDate)
	{
		return ($this->AskDate = $_AskDate);
	}
	/**
	 * Get AskDate
	 * @return string
	 */
	public function getAskDate()
	{
		return $this->AskDate;
	}
	/**
	 * Set AskTime
	 * @param string AskTime
	 * @return string
	 */
	public function setAskTime($_AskTime)
	{
		return ($this->AskTime = $_AskTime);
	}
	/**
	 * Get AskTime
	 * @return string
	 */
	public function getAskTime()
	{
		return $this->AskTime;
	}
	/**
	 * Set AskSize
	 * @param double AskSize
	 * @return double
	 */
	public function setAskSize($_AskSize)
	{
		return ($this->AskSize = $_AskSize);
	}
	/**
	 * Get AskSize
	 * @return double
	 */
	public function getAskSize()
	{
		return $this->AskSize;
	}
	/**
	 * Set InTheMoney
	 * @param boolean InTheMoney
	 * @return boolean
	 */
	public function setInTheMoney($_InTheMoney)
	{
		return ($this->InTheMoney = $_InTheMoney);
	}
	/**
	 * Get InTheMoney
	 * @return boolean
	 */
	public function getInTheMoney()
	{
		return $this->InTheMoney;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>