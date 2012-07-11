<?php
/**
 * Class file for XiGlobalrealtimeTypeIntradayVWAP
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeIntradayVWAP
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeIntradayVWAP extends XiGlobalrealtimeTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeSecurity
	 */
	public $Security;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndTime;
	/**
	 * The UTCStartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCStartDate;
	/**
	 * The UTCStartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCStartTime;
	/**
	 * The UTCEndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCEndDate;
	/**
	 * The UTCEndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UTCEndTime;
	/**
	 * The VWAPType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeIntradayVWAPTypes
	 */
	public $VWAPType;
	/**
	 * The VWAP
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $VWAP;
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
	 * The Average
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Average;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Amount;
	/**
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volume;
	/**
	 * The Trades
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Trades;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeSecurity Security
	 * @param string Date
	 * @param string StartTime
	 * @param string EndTime
	 * @param string UTCStartDate
	 * @param string UTCStartTime
	 * @param string UTCEndDate
	 * @param string UTCEndTime
	 * @param XiGlobalrealtimeTypeIntradayVWAPTypes VWAPType
	 * @param double VWAP
	 * @param double High
	 * @param double Low
	 * @param double Average
	 * @param double Amount
	 * @param double Volume
	 * @param int Trades
	 * @return XiGlobalrealtimeTypeIntradayVWAP
	 */
	public function __construct($_Security = null,$_Date = null,$_StartTime = null,$_EndTime = null,$_UTCStartDate = null,$_UTCStartTime = null,$_UTCEndDate = null,$_UTCEndTime = null,$_VWAPType,$_VWAP,$_High,$_Low,$_Average,$_Amount,$_Volume,$_Trades)
	{
		XiGlobalrealtimeWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'UTCStartDate'=>$_UTCStartDate,'UTCStartTime'=>$_UTCStartTime,'UTCEndDate'=>$_UTCEndDate,'UTCEndTime'=>$_UTCEndTime,'VWAPType'=>$_VWAPType,'VWAP'=>$_VWAP,'High'=>$_High,'Low'=>$_Low,'Average'=>$_Average,'Amount'=>$_Amount,'Volume'=>$_Volume,'Trades'=>$_Trades));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalrealtimeTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set StartTime
	 * @param string StartTime
	 * @return string
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return string
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param string EndTime
	 * @return string
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return string
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set UTCStartDate
	 * @param string UTCStartDate
	 * @return string
	 */
	public function setUTCStartDate($_UTCStartDate)
	{
		return ($this->UTCStartDate = $_UTCStartDate);
	}
	/**
	 * Get UTCStartDate
	 * @return string
	 */
	public function getUTCStartDate()
	{
		return $this->UTCStartDate;
	}
	/**
	 * Set UTCStartTime
	 * @param string UTCStartTime
	 * @return string
	 */
	public function setUTCStartTime($_UTCStartTime)
	{
		return ($this->UTCStartTime = $_UTCStartTime);
	}
	/**
	 * Get UTCStartTime
	 * @return string
	 */
	public function getUTCStartTime()
	{
		return $this->UTCStartTime;
	}
	/**
	 * Set UTCEndDate
	 * @param string UTCEndDate
	 * @return string
	 */
	public function setUTCEndDate($_UTCEndDate)
	{
		return ($this->UTCEndDate = $_UTCEndDate);
	}
	/**
	 * Get UTCEndDate
	 * @return string
	 */
	public function getUTCEndDate()
	{
		return $this->UTCEndDate;
	}
	/**
	 * Set UTCEndTime
	 * @param string UTCEndTime
	 * @return string
	 */
	public function setUTCEndTime($_UTCEndTime)
	{
		return ($this->UTCEndTime = $_UTCEndTime);
	}
	/**
	 * Get UTCEndTime
	 * @return string
	 */
	public function getUTCEndTime()
	{
		return $this->UTCEndTime;
	}
	/**
	 * Set VWAPType
	 * @param IntradayVWAPTypes VWAPType
	 * @return IntradayVWAPTypes
	 */
	public function setVWAPType($_VWAPType)
	{
		return ($this->VWAPType = XiGlobalrealtimeTypeIntradayVWAPTypes::valueIsValid($_VWAPType)?$_VWAPType:null);
	}
	/**
	 * Get VWAPType
	 * @return XiGlobalrealtimeTypeIntradayVWAPTypes
	 */
	public function getVWAPType()
	{
		return $this->VWAPType;
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
	 * Set Average
	 * @param double Average
	 * @return double
	 */
	public function setAverage($_Average)
	{
		return ($this->Average = $_Average);
	}
	/**
	 * Get Average
	 * @return double
	 */
	public function getAverage()
	{
		return $this->Average;
	}
	/**
	 * Set Amount
	 * @param double Amount
	 * @return double
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return double
	 */
	public function getAmount()
	{
		return $this->Amount;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>