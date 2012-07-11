<?php
/**
 * Class file for XiQuotesTypeQuote
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeQuote
 * @date 08/07/2012
 */
class XiQuotesTypeQuote extends XiQuotesTypeCommon
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
	 * The Previous_Close
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Previous_Close;
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
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string Date
	 * @param string Time
	 * @param double Open
	 * @param double High
	 * @param double Low
	 * @param double Last
	 * @param double Volume
	 * @param double Change
	 * @param double PercentChange
	 * @param string Previous_Close
	 * @param string Bid
	 * @param string Bid_Size
	 * @param string Ask
	 * @param string Ask_Size
	 * @param string High_52_Weeks
	 * @param string Low_52_Weeks
	 * @return XiQuotesTypeQuote
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Date = null,$_Time = null,$_Open,$_High,$_Low,$_Last,$_Volume,$_Change,$_PercentChange,$_Previous_Close = null,$_Bid = null,$_Bid_Size = null,$_Ask = null,$_Ask_Size = null,$_High_52_Weeks = null,$_Low_52_Weeks = null)
	{
		XiQuotesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Date'=>$_Date,'Time'=>$_Time,'Open'=>$_Open,'High'=>$_High,'Low'=>$_Low,'Last'=>$_Last,'Volume'=>$_Volume,'Change'=>$_Change,'PercentChange'=>$_PercentChange,'Previous_Close'=>$_Previous_Close,'Bid'=>$_Bid,'Bid_Size'=>$_Bid_Size,'Ask'=>$_Ask,'Ask_Size'=>$_Ask_Size,'High_52_Weeks'=>$_High_52_Weeks,'Low_52_Weeks'=>$_Low_52_Weeks));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>