<?php
/**
 * Class file for XiGlobalquotesTypeTick
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeTick
 * @date 08/07/2012
 */
class XiGlobalquotesTypeTick extends XiGlobalquotesWsdlClass
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
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
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
	 * The First
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $First;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Quantity;
	/**
	 * The Trades
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Trades;
	/**
	 * The TWAP
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TWAP;
	/**
	 * The VWAP
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $VWAP;
	/**
	 * Constructor
	 * @param string Date
	 * @param string Time
	 * @param string UTCDate
	 * @param string UTCTime
	 * @param double Last
	 * @param double High
	 * @param double Low
	 * @param double First
	 * @param double Quantity
	 * @param int Trades
	 * @param double TWAP
	 * @param double VWAP
	 * @return XiGlobalquotesTypeTick
	 */
	public function __construct($_Date = null,$_Time = null,$_UTCDate = null,$_UTCTime = null,$_Last,$_High,$_Low,$_First,$_Quantity,$_Trades,$_TWAP,$_VWAP)
	{
		parent::__construct(array('Date'=>$_Date,'Time'=>$_Time,'UTCDate'=>$_UTCDate,'UTCTime'=>$_UTCTime,'Last'=>$_Last,'High'=>$_High,'Low'=>$_Low,'First'=>$_First,'Quantity'=>$_Quantity,'Trades'=>$_Trades,'TWAP'=>$_TWAP,'VWAP'=>$_VWAP));
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
	 * Set First
	 * @param double First
	 * @return double
	 */
	public function setFirst($_First)
	{
		return ($this->First = $_First);
	}
	/**
	 * Get First
	 * @return double
	 */
	public function getFirst()
	{
		return $this->First;
	}
	/**
	 * Set Quantity
	 * @param double Quantity
	 * @return double
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return double
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Trades
	 * @param int Trades
	 * @return int
	 */
	public function setTrades($_Trades)
	{
		return ($this->Trades = $_Trades);
	}
	/**
	 * Get Trades
	 * @return int
	 */
	public function getTrades()
	{
		return $this->Trades;
	}
	/**
	 * Set TWAP
	 * @param double TWAP
	 * @return double
	 */
	public function setTWAP($_TWAP)
	{
		return ($this->TWAP = $_TWAP);
	}
	/**
	 * Get TWAP
	 * @return double
	 */
	public function getTWAP()
	{
		return $this->TWAP;
	}
	/**
	 * Set VWAP
	 * @param double VWAP
	 * @return double
	 */
	public function setVWAP($_VWAP)
	{
		return ($this->VWAP = $_VWAP);
	}
	/**
	 * Get VWAP
	 * @return double
	 */
	public function getVWAP()
	{
		return $this->VWAP;
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