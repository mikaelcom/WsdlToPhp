<?php
/**
 * Class file for XiBATSRealTimeTypeRealQuote
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeRealQuote
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeRealQuote extends XiBATSRealTimeTypeCommon
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
	 * The CompanyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyName;
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
	 * The PreviousClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousClose;
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
	 * The Bid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Bid;
	/**
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ask;
	/**
	 * The Spread
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Spread;
	/**
	 * The BidQuantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BidQuantity;
	/**
	 * The AskQuantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AskQuantity;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string CompanyName
	 * @param string Date
	 * @param string Time
	 * @param double Open
	 * @param double Close
	 * @param double PreviousClose
	 * @param double High
	 * @param double Low
	 * @param double Last
	 * @param double Change
	 * @param double PercentChange
	 * @param double Volume
	 * @param double Bid
	 * @param double Ask
	 * @param double Spread
	 * @param double BidQuantity
	 * @param double AskQuantity
	 * @return XiBATSRealTimeTypeRealQuote
	 */
	public function __construct($_Symbol = null,$_CompanyName = null,$_Date = null,$_Time = null,$_Open,$_Close,$_PreviousClose,$_High,$_Low,$_Last,$_Change,$_PercentChange,$_Volume,$_Bid,$_Ask,$_Spread,$_BidQuantity,$_AskQuantity)
	{
		XiBATSRealTimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'CompanyName'=>$_CompanyName,'Date'=>$_Date,'Time'=>$_Time,'Open'=>$_Open,'Close'=>$_Close,'PreviousClose'=>$_PreviousClose,'High'=>$_High,'Low'=>$_Low,'Last'=>$_Last,'Change'=>$_Change,'PercentChange'=>$_PercentChange,'Volume'=>$_Volume,'Bid'=>$_Bid,'Ask'=>$_Ask,'Spread'=>$_Spread,'BidQuantity'=>$_BidQuantity,'AskQuantity'=>$_AskQuantity));
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
	 * Set CompanyName
	 * @param string CompanyName
	 * @return string
	 */
	public function setCompanyName($_CompanyName)
	{
		return ($this->CompanyName = $_CompanyName);
	}
	/**
	 * Get CompanyName
	 * @return string
	 */
	public function getCompanyName()
	{
		return $this->CompanyName;
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
	 * Set Spread
	 * @param double Spread
	 * @return double
	 */
	public function setSpread($_Spread)
	{
		return ($this->Spread = $_Spread);
	}
	/**
	 * Get Spread
	 * @return double
	 */
	public function getSpread()
	{
		return $this->Spread;
	}
	/**
	 * Set BidQuantity
	 * @param double BidQuantity
	 * @return double
	 */
	public function setBidQuantity($_BidQuantity)
	{
		return ($this->BidQuantity = $_BidQuantity);
	}
	/**
	 * Get BidQuantity
	 * @return double
	 */
	public function getBidQuantity()
	{
		return $this->BidQuantity;
	}
	/**
	 * Set AskQuantity
	 * @param double AskQuantity
	 * @return double
	 */
	public function setAskQuantity($_AskQuantity)
	{
		return ($this->AskQuantity = $_AskQuantity);
	}
	/**
	 * Get AskQuantity
	 * @return double
	 */
	public function getAskQuantity()
	{
		return $this->AskQuantity;
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