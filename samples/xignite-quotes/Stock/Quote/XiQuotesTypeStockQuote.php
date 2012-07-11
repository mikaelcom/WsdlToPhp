<?php
/**
 * Class file for XiQuotesTypeStockQuote
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeStockQuote
 * @date 08/07/2012
 */
class XiQuotesTypeStockQuote extends XiQuotesWsdlClass
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
	 * The Previous_Close
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Previous_Close;
	/**
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Open;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Low;
	/**
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Last;
	/**
	 * The Bid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Bid;
	/**
	 * The Bid_Size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Bid_Size;
	/**
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Ask;
	/**
	 * The Ask_Size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Ask_Size;
	/**
	 * The Percent_Change
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Percent_Change;
	/**
	 * The Change
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Change;
	/**
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Volume;
	/**
	 * The High_52_Weeks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $High_52_Weeks;
	/**
	 * The Low_52_Weeks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Low_52_Weeks;
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
	 * Constructor
	 * @param string Symbol
	 * @param string Previous_Close
	 * @param string Open
	 * @param string High
	 * @param string Low
	 * @param string Last
	 * @param string Bid
	 * @param string Bid_Size
	 * @param string Ask
	 * @param string Ask_Size
	 * @param string Percent_Change
	 * @param string Change
	 * @param string Volume
	 * @param string High_52_Weeks
	 * @param string Low_52_Weeks
	 * @param string Date
	 * @param string Time
	 * @return XiQuotesTypeStockQuote
	 */
	public function __construct($_Symbol = null,$_Previous_Close = null,$_Open = null,$_High = null,$_Low = null,$_Last = null,$_Bid = null,$_Bid_Size = null,$_Ask = null,$_Ask_Size = null,$_Percent_Change = null,$_Change = null,$_Volume = null,$_High_52_Weeks = null,$_Low_52_Weeks = null,$_Date = null,$_Time = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Previous_Close'=>$_Previous_Close,'Open'=>$_Open,'High'=>$_High,'Low'=>$_Low,'Last'=>$_Last,'Bid'=>$_Bid,'Bid_Size'=>$_Bid_Size,'Ask'=>$_Ask,'Ask_Size'=>$_Ask_Size,'Percent_Change'=>$_Percent_Change,'Change'=>$_Change,'Volume'=>$_Volume,'High_52_Weeks'=>$_High_52_Weeks,'Low_52_Weeks'=>$_Low_52_Weeks,'Date'=>$_Date,'Time'=>$_Time));
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
	 * Set Previous_Close
	 * @param string Previous_Close
	 * @return string
	 */
	public function setPrevious_Close($_Previous_Close)
	{
		return ($this->Previous_Close = $_Previous_Close);
	}
	/**
	 * Get Previous_Close
	 * @return string
	 */
	public function getPrevious_Close()
	{
		return $this->Previous_Close;
	}
	/**
	 * Set Open
	 * @param string Open
	 * @return string
	 */
	public function setOpen($_Open)
	{
		return ($this->Open = $_Open);
	}
	/**
	 * Get Open
	 * @return string
	 */
	public function getOpen()
	{
		return $this->Open;
	}
	/**
	 * Set High
	 * @param string High
	 * @return string
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return string
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param string Low
	 * @return string
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return string
	 */
	public function getLow()
	{
		return $this->Low;
	}
	/**
	 * Set Last
	 * @param string Last
	 * @return string
	 */
	public function setLast($_Last)
	{
		return ($this->Last = $_Last);
	}
	/**
	 * Get Last
	 * @return string
	 */
	public function getLast()
	{
		return $this->Last;
	}
	/**
	 * Set Bid
	 * @param string Bid
	 * @return string
	 */
	public function setBid($_Bid)
	{
		return ($this->Bid = $_Bid);
	}
	/**
	 * Get Bid
	 * @return string
	 */
	public function getBid()
	{
		return $this->Bid;
	}
	/**
	 * Set Bid_Size
	 * @param string Bid_Size
	 * @return string
	 */
	public function setBid_Size($_Bid_Size)
	{
		return ($this->Bid_Size = $_Bid_Size);
	}
	/**
	 * Get Bid_Size
	 * @return string
	 */
	public function getBid_Size()
	{
		return $this->Bid_Size;
	}
	/**
	 * Set Ask
	 * @param string Ask
	 * @return string
	 */
	public function setAsk($_Ask)
	{
		return ($this->Ask = $_Ask);
	}
	/**
	 * Get Ask
	 * @return string
	 */
	public function getAsk()
	{
		return $this->Ask;
	}
	/**
	 * Set Ask_Size
	 * @param string Ask_Size
	 * @return string
	 */
	public function setAsk_Size($_Ask_Size)
	{
		return ($this->Ask_Size = $_Ask_Size);
	}
	/**
	 * Get Ask_Size
	 * @return string
	 */
	public function getAsk_Size()
	{
		return $this->Ask_Size;
	}
	/**
	 * Set Percent_Change
	 * @param string Percent_Change
	 * @return string
	 */
	public function setPercent_Change($_Percent_Change)
	{
		return ($this->Percent_Change = $_Percent_Change);
	}
	/**
	 * Get Percent_Change
	 * @return string
	 */
	public function getPercent_Change()
	{
		return $this->Percent_Change;
	}
	/**
	 * Set Change
	 * @param string Change
	 * @return string
	 */
	public function setChange($_Change)
	{
		return ($this->Change = $_Change);
	}
	/**
	 * Get Change
	 * @return string
	 */
	public function getChange()
	{
		return $this->Change;
	}
	/**
	 * Set Volume
	 * @param string Volume
	 * @return string
	 */
	public function setVolume($_Volume)
	{
		return ($this->Volume = $_Volume);
	}
	/**
	 * Get Volume
	 * @return string
	 */
	public function getVolume()
	{
		return $this->Volume;
	}
	/**
	 * Set High_52_Weeks
	 * @param string High_52_Weeks
	 * @return string
	 */
	public function setHigh_52_Weeks($_High_52_Weeks)
	{
		return ($this->High_52_Weeks = $_High_52_Weeks);
	}
	/**
	 * Get High_52_Weeks
	 * @return string
	 */
	public function getHigh_52_Weeks()
	{
		return $this->High_52_Weeks;
	}
	/**
	 * Set Low_52_Weeks
	 * @param string Low_52_Weeks
	 * @return string
	 */
	public function setLow_52_Weeks($_Low_52_Weeks)
	{
		return ($this->Low_52_Weeks = $_Low_52_Weeks);
	}
	/**
	 * Get Low_52_Weeks
	 * @return string
	 */
	public function getLow_52_Weeks()
	{
		return $this->Low_52_Weeks;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>