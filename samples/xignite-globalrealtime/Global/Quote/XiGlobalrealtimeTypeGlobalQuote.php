<?php
/**
 * Class file for XiGlobalrealtimeTypeGlobalQuote
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGlobalQuote
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGlobalQuote extends XiGlobalrealtimeTypeQuoteWithSecurity
{
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
	 * The UTCDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCDate;
	/**
	 * The UTCTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCTime;
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
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
	/**
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volume;
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
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ask;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param string Date
	 * @param string Time
	 * @param string UTCDate
	 * @param string UTCTime
	 * @param double Open
	 * @param double Close
	 * @param double High
	 * @param double Low
	 * @param double Last
	 * @param double Volume
	 * @param double PreviousClose
	 * @param string PreviousCloseDate
	 * @param double Change
	 * @param double PercentChange
	 * @param double Bid
	 * @param double Ask
	 * @param string Currency
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function __construct($_Date = null,$_Time = null,$_UTCDate = null,$_UTCTime = null,$_Open,$_Close,$_High,$_Low,$_Last,$_Volume,$_PreviousClose,$_PreviousCloseDate = null,$_Change,$_PercentChange,$_Bid,$_Ask,$_Currency = null)
	{
		XiGlobalrealtimeWsdlClass::__construct(array('Date'=>$_Date,'Time'=>$_Time,'UTCDate'=>$_UTCDate,'UTCTime'=>$_UTCTime,'Open'=>$_Open,'Close'=>$_Close,'High'=>$_High,'Low'=>$_Low,'Last'=>$_Last,'Volume'=>$_Volume,'PreviousClose'=>$_PreviousClose,'PreviousCloseDate'=>$_PreviousCloseDate,'Change'=>$_Change,'PercentChange'=>$_PercentChange,'Bid'=>$_Bid,'Ask'=>$_Ask,'Currency'=>$_Currency));
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
	 * Set UTCDate
	 * @param string UTCDate
	 * @return string
	 */
	public function setUTCDate($_UTCDate)
	{
		return ($this->UTCDate = $_UTCDate);
	}
	/**
	 * Get UTCDate
	 * @return string
	 */
	public function getUTCDate()
	{
		return $this->UTCDate;
	}
	/**
	 * Set UTCTime
	 * @param string UTCTime
	 * @return string
	 */
	public function setUTCTime($_UTCTime)
	{
		return ($this->UTCTime = $_UTCTime);
	}
	/**
	 * Get UTCTime
	 * @return string
	 */
	public function getUTCTime()
	{
		return $this->UTCTime;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>