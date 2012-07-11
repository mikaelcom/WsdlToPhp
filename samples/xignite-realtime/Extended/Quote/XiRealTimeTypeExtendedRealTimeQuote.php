<?php
/**
 * Class file for XiRealTimeTypeExtendedRealTimeQuote
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeExtendedRealTimeQuote
 * @date 08/07/2012
 */
class XiRealTimeTypeExtendedRealTimeQuote extends XiRealTimeTypeCommon
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
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The LastPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastPrice;
	/**
	 * The LastQuantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastQuantity;
	/**
	 * The LastTradeType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeOrderTypes
	 */
	public $LastTradeType;
	/**
	 * The LastTradeDirection
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeDirectionTypes
	 */
	public $LastTradeDirection;
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
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Volume;
	/**
	 * The ECNVolume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ECNVolume;
	/**
	 * The LastMarketClosePrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastMarketClosePrice;
	/**
	 * The ChangeFromLastMarketClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromLastMarketClose;
	/**
	 * The PercentChangeFromLastMarketClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromLastMarketClose;
	/**
	 * The LastClosePrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastClosePrice;
	/**
	 * The ChangeFromLastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromLastClose;
	/**
	 * The PercentChangeFromLastClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromLastClose;
	/**
	 * The OpenPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OpenPrice;
	/**
	 * The ChangeFromOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromOpen;
	/**
	 * The PercentChangeFromOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromOpen;
	/**
	 * The MarketOpenPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketOpenPrice;
	/**
	 * The ChangeFromMarketOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromMarketOpen;
	/**
	 * The PercentChangeFromMarketOpen
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromMarketOpen;
	/**
	 * The MarketClosePrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketClosePrice;
	/**
	 * The ChangeFromMarketClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromMarketClose;
	/**
	 * The PercentChangeFromMarketClose
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromMarketClose;
	/**
	 * The PreviousTradePrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreviousTradePrice;
	/**
	 * The ChangeFromPreviousTrade
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromPreviousTrade;
	/**
	 * The PercentChangeFromPreviousTrade
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromPreviousTrade;
	/**
	 * The BidPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BidPrice;
	/**
	 * The BidQuantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $BidQuantity;
	/**
	 * The BidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BidTime;
	/**
	 * The Bids
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Bids;
	/**
	 * The BidVolume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $BidVolume;
	/**
	 * The AverageBid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AverageBid;
	/**
	 * The AskPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AskPrice;
	/**
	 * The AskQuantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $AskQuantity;
	/**
	 * The AskTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AskTime;
	/**
	 * The Asks
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Asks;
	/**
	 * The AverageAsk
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AverageAsk;
	/**
	 * The AskVolume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $AskVolume;
	/**
	 * The Spread
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Spread;
	/**
	 * The Highest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Highest;
	/**
	 * The HighestTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HighestTime;
	/**
	 * The Lowest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Lowest;
	/**
	 * The LowestTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LowestTime;
	/**
	 * The TotalOrders
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TotalOrders;
	/**
	 * The TotalCancellations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TotalCancellations;
	/**
	 * The TotalExecutions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TotalExecutions;
	/**
	 * The TotalQuantityOrdered
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $TotalQuantityOrdered;
	/**
	 * The TotalQuantityExecuted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $TotalQuantityExecuted;
	/**
	 * The TotalQuantityCancelled
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $TotalQuantityCancelled;
	/**
	 * The AverageOrderSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AverageOrderSize;
	/**
	 * The AverageExecutionSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AverageExecutionSize;
	/**
	 * The SharesOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $SharesOutstanding;
	/**
	 * The MarketCap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketCap;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string CUSIP
	 * @param string CIK
	 * @param string Name
	 * @param double LastPrice
	 * @param double LastQuantity
	 * @param XiRealTimeTypeOrderTypes LastTradeType
	 * @param XiRealTimeTypeDirectionTypes LastTradeDirection
	 * @param string Date
	 * @param string Time
	 * @param double Volume
	 * @param int ECNVolume
	 * @param double LastMarketClosePrice
	 * @param double ChangeFromLastMarketClose
	 * @param double PercentChangeFromLastMarketClose
	 * @param double LastClosePrice
	 * @param double ChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @param double OpenPrice
	 * @param double ChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @param double MarketOpenPrice
	 * @param double ChangeFromMarketOpen
	 * @param double PercentChangeFromMarketOpen
	 * @param double MarketClosePrice
	 * @param double ChangeFromMarketClose
	 * @param double PercentChangeFromMarketClose
	 * @param double PreviousTradePrice
	 * @param double ChangeFromPreviousTrade
	 * @param double PercentChangeFromPreviousTrade
	 * @param double BidPrice
	 * @param int BidQuantity
	 * @param string BidTime
	 * @param int Bids
	 * @param int BidVolume
	 * @param double AverageBid
	 * @param double AskPrice
	 * @param int AskQuantity
	 * @param string AskTime
	 * @param int Asks
	 * @param double AverageAsk
	 * @param int AskVolume
	 * @param double Spread
	 * @param double Highest
	 * @param string HighestTime
	 * @param double Lowest
	 * @param string LowestTime
	 * @param int TotalOrders
	 * @param int TotalCancellations
	 * @param int TotalExecutions
	 * @param long TotalQuantityOrdered
	 * @param long TotalQuantityExecuted
	 * @param long TotalQuantityCancelled
	 * @param double AverageOrderSize
	 * @param double AverageExecutionSize
	 * @param long SharesOutstanding
	 * @param double MarketCap
	 * @return XiRealTimeTypeExtendedRealTimeQuote
	 */
	public function __construct($_Symbol = null,$_CUSIP = null,$_CIK = null,$_Name = null,$_LastPrice,$_LastQuantity,$_LastTradeType,$_LastTradeDirection,$_Date = null,$_Time = null,$_Volume,$_ECNVolume,$_LastMarketClosePrice,$_ChangeFromLastMarketClose,$_PercentChangeFromLastMarketClose,$_LastClosePrice,$_ChangeFromLastClose,$_PercentChangeFromLastClose,$_OpenPrice,$_ChangeFromOpen,$_PercentChangeFromOpen,$_MarketOpenPrice,$_ChangeFromMarketOpen,$_PercentChangeFromMarketOpen,$_MarketClosePrice,$_ChangeFromMarketClose,$_PercentChangeFromMarketClose,$_PreviousTradePrice,$_ChangeFromPreviousTrade,$_PercentChangeFromPreviousTrade,$_BidPrice,$_BidQuantity,$_BidTime = null,$_Bids,$_BidVolume,$_AverageBid,$_AskPrice,$_AskQuantity,$_AskTime = null,$_Asks,$_AverageAsk,$_AskVolume,$_Spread,$_Highest,$_HighestTime = null,$_Lowest,$_LowestTime = null,$_TotalOrders,$_TotalCancellations,$_TotalExecutions,$_TotalQuantityOrdered,$_TotalQuantityExecuted,$_TotalQuantityCancelled,$_AverageOrderSize,$_AverageExecutionSize,$_SharesOutstanding,$_MarketCap)
	{
		XiRealTimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'CUSIP'=>$_CUSIP,'CIK'=>$_CIK,'Name'=>$_Name,'LastPrice'=>$_LastPrice,'LastQuantity'=>$_LastQuantity,'LastTradeType'=>$_LastTradeType,'LastTradeDirection'=>$_LastTradeDirection,'Date'=>$_Date,'Time'=>$_Time,'Volume'=>$_Volume,'ECNVolume'=>$_ECNVolume,'LastMarketClosePrice'=>$_LastMarketClosePrice,'ChangeFromLastMarketClose'=>$_ChangeFromLastMarketClose,'PercentChangeFromLastMarketClose'=>$_PercentChangeFromLastMarketClose,'LastClosePrice'=>$_LastClosePrice,'ChangeFromLastClose'=>$_ChangeFromLastClose,'PercentChangeFromLastClose'=>$_PercentChangeFromLastClose,'OpenPrice'=>$_OpenPrice,'ChangeFromOpen'=>$_ChangeFromOpen,'PercentChangeFromOpen'=>$_PercentChangeFromOpen,'MarketOpenPrice'=>$_MarketOpenPrice,'ChangeFromMarketOpen'=>$_ChangeFromMarketOpen,'PercentChangeFromMarketOpen'=>$_PercentChangeFromMarketOpen,'MarketClosePrice'=>$_MarketClosePrice,'ChangeFromMarketClose'=>$_ChangeFromMarketClose,'PercentChangeFromMarketClose'=>$_PercentChangeFromMarketClose,'PreviousTradePrice'=>$_PreviousTradePrice,'ChangeFromPreviousTrade'=>$_ChangeFromPreviousTrade,'PercentChangeFromPreviousTrade'=>$_PercentChangeFromPreviousTrade,'BidPrice'=>$_BidPrice,'BidQuantity'=>$_BidQuantity,'BidTime'=>$_BidTime,'Bids'=>$_Bids,'BidVolume'=>$_BidVolume,'AverageBid'=>$_AverageBid,'AskPrice'=>$_AskPrice,'AskQuantity'=>$_AskQuantity,'AskTime'=>$_AskTime,'Asks'=>$_Asks,'AverageAsk'=>$_AverageAsk,'AskVolume'=>$_AskVolume,'Spread'=>$_Spread,'Highest'=>$_Highest,'HighestTime'=>$_HighestTime,'Lowest'=>$_Lowest,'LowestTime'=>$_LowestTime,'TotalOrders'=>$_TotalOrders,'TotalCancellations'=>$_TotalCancellations,'TotalExecutions'=>$_TotalExecutions,'TotalQuantityOrdered'=>$_TotalQuantityOrdered,'TotalQuantityExecuted'=>$_TotalQuantityExecuted,'TotalQuantityCancelled'=>$_TotalQuantityCancelled,'AverageOrderSize'=>$_AverageOrderSize,'AverageExecutionSize'=>$_AverageExecutionSize,'SharesOutstanding'=>$_SharesOutstanding,'MarketCap'=>$_MarketCap));
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
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
	}
	/**
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
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
	 * Set LastPrice
	 * @param double LastPrice
	 * @return double
	 */
	public function setLastPrice($_LastPrice)
	{
		return ($this->LastPrice = $_LastPrice);
	}
	/**
	 * Get LastPrice
	 * @return double
	 */
	public function getLastPrice()
	{
		return $this->LastPrice;
	}
	/**
	 * Set LastQuantity
	 * @param double LastQuantity
	 * @return double
	 */
	public function setLastQuantity($_LastQuantity)
	{
		return ($this->LastQuantity = $_LastQuantity);
	}
	/**
	 * Get LastQuantity
	 * @return double
	 */
	public function getLastQuantity()
	{
		return $this->LastQuantity;
	}
	/**
	 * Set LastTradeType
	 * @param OrderTypes LastTradeType
	 * @return OrderTypes
	 */
	public function setLastTradeType($_LastTradeType)
	{
		return ($this->LastTradeType = XiRealTimeTypeOrderTypes::valueIsValid($_LastTradeType)?$_LastTradeType:null);
	}
	/**
	 * Get LastTradeType
	 * @return XiRealTimeTypeOrderTypes
	 */
	public function getLastTradeType()
	{
		return $this->LastTradeType;
	}
	/**
	 * Set LastTradeDirection
	 * @param DirectionTypes LastTradeDirection
	 * @return DirectionTypes
	 */
	public function setLastTradeDirection($_LastTradeDirection)
	{
		return ($this->LastTradeDirection = XiRealTimeTypeDirectionTypes::valueIsValid($_LastTradeDirection)?$_LastTradeDirection:null);
	}
	/**
	 * Get LastTradeDirection
	 * @return XiRealTimeTypeDirectionTypes
	 */
	public function getLastTradeDirection()
	{
		return $this->LastTradeDirection;
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
	 * Set ECNVolume
	 * @param int ECNVolume
	 * @return int
	 */
	public function setECNVolume($_ECNVolume)
	{
		return ($this->ECNVolume = $_ECNVolume);
	}
	/**
	 * Get ECNVolume
	 * @return int
	 */
	public function getECNVolume()
	{
		return $this->ECNVolume;
	}
	/**
	 * Set LastMarketClosePrice
	 * @param double LastMarketClosePrice
	 * @return double
	 */
	public function setLastMarketClosePrice($_LastMarketClosePrice)
	{
		return ($this->LastMarketClosePrice = $_LastMarketClosePrice);
	}
	/**
	 * Get LastMarketClosePrice
	 * @return double
	 */
	public function getLastMarketClosePrice()
	{
		return $this->LastMarketClosePrice;
	}
	/**
	 * Set ChangeFromLastMarketClose
	 * @param double ChangeFromLastMarketClose
	 * @return double
	 */
	public function setChangeFromLastMarketClose($_ChangeFromLastMarketClose)
	{
		return ($this->ChangeFromLastMarketClose = $_ChangeFromLastMarketClose);
	}
	/**
	 * Get ChangeFromLastMarketClose
	 * @return double
	 */
	public function getChangeFromLastMarketClose()
	{
		return $this->ChangeFromLastMarketClose;
	}
	/**
	 * Set PercentChangeFromLastMarketClose
	 * @param double PercentChangeFromLastMarketClose
	 * @return double
	 */
	public function setPercentChangeFromLastMarketClose($_PercentChangeFromLastMarketClose)
	{
		return ($this->PercentChangeFromLastMarketClose = $_PercentChangeFromLastMarketClose);
	}
	/**
	 * Get PercentChangeFromLastMarketClose
	 * @return double
	 */
	public function getPercentChangeFromLastMarketClose()
	{
		return $this->PercentChangeFromLastMarketClose;
	}
	/**
	 * Set LastClosePrice
	 * @param double LastClosePrice
	 * @return double
	 */
	public function setLastClosePrice($_LastClosePrice)
	{
		return ($this->LastClosePrice = $_LastClosePrice);
	}
	/**
	 * Get LastClosePrice
	 * @return double
	 */
	public function getLastClosePrice()
	{
		return $this->LastClosePrice;
	}
	/**
	 * Set ChangeFromLastClose
	 * @param double ChangeFromLastClose
	 * @return double
	 */
	public function setChangeFromLastClose($_ChangeFromLastClose)
	{
		return ($this->ChangeFromLastClose = $_ChangeFromLastClose);
	}
	/**
	 * Get ChangeFromLastClose
	 * @return double
	 */
	public function getChangeFromLastClose()
	{
		return $this->ChangeFromLastClose;
	}
	/**
	 * Set PercentChangeFromLastClose
	 * @param double PercentChangeFromLastClose
	 * @return double
	 */
	public function setPercentChangeFromLastClose($_PercentChangeFromLastClose)
	{
		return ($this->PercentChangeFromLastClose = $_PercentChangeFromLastClose);
	}
	/**
	 * Get PercentChangeFromLastClose
	 * @return double
	 */
	public function getPercentChangeFromLastClose()
	{
		return $this->PercentChangeFromLastClose;
	}
	/**
	 * Set OpenPrice
	 * @param double OpenPrice
	 * @return double
	 */
	public function setOpenPrice($_OpenPrice)
	{
		return ($this->OpenPrice = $_OpenPrice);
	}
	/**
	 * Get OpenPrice
	 * @return double
	 */
	public function getOpenPrice()
	{
		return $this->OpenPrice;
	}
	/**
	 * Set ChangeFromOpen
	 * @param double ChangeFromOpen
	 * @return double
	 */
	public function setChangeFromOpen($_ChangeFromOpen)
	{
		return ($this->ChangeFromOpen = $_ChangeFromOpen);
	}
	/**
	 * Get ChangeFromOpen
	 * @return double
	 */
	public function getChangeFromOpen()
	{
		return $this->ChangeFromOpen;
	}
	/**
	 * Set PercentChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @return double
	 */
	public function setPercentChangeFromOpen($_PercentChangeFromOpen)
	{
		return ($this->PercentChangeFromOpen = $_PercentChangeFromOpen);
	}
	/**
	 * Get PercentChangeFromOpen
	 * @return double
	 */
	public function getPercentChangeFromOpen()
	{
		return $this->PercentChangeFromOpen;
	}
	/**
	 * Set MarketOpenPrice
	 * @param double MarketOpenPrice
	 * @return double
	 */
	public function setMarketOpenPrice($_MarketOpenPrice)
	{
		return ($this->MarketOpenPrice = $_MarketOpenPrice);
	}
	/**
	 * Get MarketOpenPrice
	 * @return double
	 */
	public function getMarketOpenPrice()
	{
		return $this->MarketOpenPrice;
	}
	/**
	 * Set ChangeFromMarketOpen
	 * @param double ChangeFromMarketOpen
	 * @return double
	 */
	public function setChangeFromMarketOpen($_ChangeFromMarketOpen)
	{
		return ($this->ChangeFromMarketOpen = $_ChangeFromMarketOpen);
	}
	/**
	 * Get ChangeFromMarketOpen
	 * @return double
	 */
	public function getChangeFromMarketOpen()
	{
		return $this->ChangeFromMarketOpen;
	}
	/**
	 * Set PercentChangeFromMarketOpen
	 * @param double PercentChangeFromMarketOpen
	 * @return double
	 */
	public function setPercentChangeFromMarketOpen($_PercentChangeFromMarketOpen)
	{
		return ($this->PercentChangeFromMarketOpen = $_PercentChangeFromMarketOpen);
	}
	/**
	 * Get PercentChangeFromMarketOpen
	 * @return double
	 */
	public function getPercentChangeFromMarketOpen()
	{
		return $this->PercentChangeFromMarketOpen;
	}
	/**
	 * Set MarketClosePrice
	 * @param double MarketClosePrice
	 * @return double
	 */
	public function setMarketClosePrice($_MarketClosePrice)
	{
		return ($this->MarketClosePrice = $_MarketClosePrice);
	}
	/**
	 * Get MarketClosePrice
	 * @return double
	 */
	public function getMarketClosePrice()
	{
		return $this->MarketClosePrice;
	}
	/**
	 * Set ChangeFromMarketClose
	 * @param double ChangeFromMarketClose
	 * @return double
	 */
	public function setChangeFromMarketClose($_ChangeFromMarketClose)
	{
		return ($this->ChangeFromMarketClose = $_ChangeFromMarketClose);
	}
	/**
	 * Get ChangeFromMarketClose
	 * @return double
	 */
	public function getChangeFromMarketClose()
	{
		return $this->ChangeFromMarketClose;
	}
	/**
	 * Set PercentChangeFromMarketClose
	 * @param double PercentChangeFromMarketClose
	 * @return double
	 */
	public function setPercentChangeFromMarketClose($_PercentChangeFromMarketClose)
	{
		return ($this->PercentChangeFromMarketClose = $_PercentChangeFromMarketClose);
	}
	/**
	 * Get PercentChangeFromMarketClose
	 * @return double
	 */
	public function getPercentChangeFromMarketClose()
	{
		return $this->PercentChangeFromMarketClose;
	}
	/**
	 * Set PreviousTradePrice
	 * @param double PreviousTradePrice
	 * @return double
	 */
	public function setPreviousTradePrice($_PreviousTradePrice)
	{
		return ($this->PreviousTradePrice = $_PreviousTradePrice);
	}
	/**
	 * Get PreviousTradePrice
	 * @return double
	 */
	public function getPreviousTradePrice()
	{
		return $this->PreviousTradePrice;
	}
	/**
	 * Set ChangeFromPreviousTrade
	 * @param double ChangeFromPreviousTrade
	 * @return double
	 */
	public function setChangeFromPreviousTrade($_ChangeFromPreviousTrade)
	{
		return ($this->ChangeFromPreviousTrade = $_ChangeFromPreviousTrade);
	}
	/**
	 * Get ChangeFromPreviousTrade
	 * @return double
	 */
	public function getChangeFromPreviousTrade()
	{
		return $this->ChangeFromPreviousTrade;
	}
	/**
	 * Set PercentChangeFromPreviousTrade
	 * @param double PercentChangeFromPreviousTrade
	 * @return double
	 */
	public function setPercentChangeFromPreviousTrade($_PercentChangeFromPreviousTrade)
	{
		return ($this->PercentChangeFromPreviousTrade = $_PercentChangeFromPreviousTrade);
	}
	/**
	 * Get PercentChangeFromPreviousTrade
	 * @return double
	 */
	public function getPercentChangeFromPreviousTrade()
	{
		return $this->PercentChangeFromPreviousTrade;
	}
	/**
	 * Set BidPrice
	 * @param double BidPrice
	 * @return double
	 */
	public function setBidPrice($_BidPrice)
	{
		return ($this->BidPrice = $_BidPrice);
	}
	/**
	 * Get BidPrice
	 * @return double
	 */
	public function getBidPrice()
	{
		return $this->BidPrice;
	}
	/**
	 * Set BidQuantity
	 * @param int BidQuantity
	 * @return int
	 */
	public function setBidQuantity($_BidQuantity)
	{
		return ($this->BidQuantity = $_BidQuantity);
	}
	/**
	 * Get BidQuantity
	 * @return int
	 */
	public function getBidQuantity()
	{
		return $this->BidQuantity;
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
	 * Set Bids
	 * @param int Bids
	 * @return int
	 */
	public function setBids($_Bids)
	{
		return ($this->Bids = $_Bids);
	}
	/**
	 * Get Bids
	 * @return int
	 */
	public function getBids()
	{
		return $this->Bids;
	}
	/**
	 * Set BidVolume
	 * @param int BidVolume
	 * @return int
	 */
	public function setBidVolume($_BidVolume)
	{
		return ($this->BidVolume = $_BidVolume);
	}
	/**
	 * Get BidVolume
	 * @return int
	 */
	public function getBidVolume()
	{
		return $this->BidVolume;
	}
	/**
	 * Set AverageBid
	 * @param double AverageBid
	 * @return double
	 */
	public function setAverageBid($_AverageBid)
	{
		return ($this->AverageBid = $_AverageBid);
	}
	/**
	 * Get AverageBid
	 * @return double
	 */
	public function getAverageBid()
	{
		return $this->AverageBid;
	}
	/**
	 * Set AskPrice
	 * @param double AskPrice
	 * @return double
	 */
	public function setAskPrice($_AskPrice)
	{
		return ($this->AskPrice = $_AskPrice);
	}
	/**
	 * Get AskPrice
	 * @return double
	 */
	public function getAskPrice()
	{
		return $this->AskPrice;
	}
	/**
	 * Set AskQuantity
	 * @param int AskQuantity
	 * @return int
	 */
	public function setAskQuantity($_AskQuantity)
	{
		return ($this->AskQuantity = $_AskQuantity);
	}
	/**
	 * Get AskQuantity
	 * @return int
	 */
	public function getAskQuantity()
	{
		return $this->AskQuantity;
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
	 * Set Asks
	 * @param int Asks
	 * @return int
	 */
	public function setAsks($_Asks)
	{
		return ($this->Asks = $_Asks);
	}
	/**
	 * Get Asks
	 * @return int
	 */
	public function getAsks()
	{
		return $this->Asks;
	}
	/**
	 * Set AverageAsk
	 * @param double AverageAsk
	 * @return double
	 */
	public function setAverageAsk($_AverageAsk)
	{
		return ($this->AverageAsk = $_AverageAsk);
	}
	/**
	 * Get AverageAsk
	 * @return double
	 */
	public function getAverageAsk()
	{
		return $this->AverageAsk;
	}
	/**
	 * Set AskVolume
	 * @param int AskVolume
	 * @return int
	 */
	public function setAskVolume($_AskVolume)
	{
		return ($this->AskVolume = $_AskVolume);
	}
	/**
	 * Get AskVolume
	 * @return int
	 */
	public function getAskVolume()
	{
		return $this->AskVolume;
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
	 * Set Highest
	 * @param double Highest
	 * @return double
	 */
	public function setHighest($_Highest)
	{
		return ($this->Highest = $_Highest);
	}
	/**
	 * Get Highest
	 * @return double
	 */
	public function getHighest()
	{
		return $this->Highest;
	}
	/**
	 * Set HighestTime
	 * @param string HighestTime
	 * @return string
	 */
	public function setHighestTime($_HighestTime)
	{
		return ($this->HighestTime = $_HighestTime);
	}
	/**
	 * Get HighestTime
	 * @return string
	 */
	public function getHighestTime()
	{
		return $this->HighestTime;
	}
	/**
	 * Set Lowest
	 * @param double Lowest
	 * @return double
	 */
	public function setLowest($_Lowest)
	{
		return ($this->Lowest = $_Lowest);
	}
	/**
	 * Get Lowest
	 * @return double
	 */
	public function getLowest()
	{
		return $this->Lowest;
	}
	/**
	 * Set LowestTime
	 * @param string LowestTime
	 * @return string
	 */
	public function setLowestTime($_LowestTime)
	{
		return ($this->LowestTime = $_LowestTime);
	}
	/**
	 * Get LowestTime
	 * @return string
	 */
	public function getLowestTime()
	{
		return $this->LowestTime;
	}
	/**
	 * Set TotalOrders
	 * @param int TotalOrders
	 * @return int
	 */
	public function setTotalOrders($_TotalOrders)
	{
		return ($this->TotalOrders = $_TotalOrders);
	}
	/**
	 * Get TotalOrders
	 * @return int
	 */
	public function getTotalOrders()
	{
		return $this->TotalOrders;
	}
	/**
	 * Set TotalCancellations
	 * @param int TotalCancellations
	 * @return int
	 */
	public function setTotalCancellations($_TotalCancellations)
	{
		return ($this->TotalCancellations = $_TotalCancellations);
	}
	/**
	 * Get TotalCancellations
	 * @return int
	 */
	public function getTotalCancellations()
	{
		return $this->TotalCancellations;
	}
	/**
	 * Set TotalExecutions
	 * @param int TotalExecutions
	 * @return int
	 */
	public function setTotalExecutions($_TotalExecutions)
	{
		return ($this->TotalExecutions = $_TotalExecutions);
	}
	/**
	 * Get TotalExecutions
	 * @return int
	 */
	public function getTotalExecutions()
	{
		return $this->TotalExecutions;
	}
	/**
	 * Set TotalQuantityOrdered
	 * @param long TotalQuantityOrdered
	 * @return long
	 */
	public function setTotalQuantityOrdered($_TotalQuantityOrdered)
	{
		return ($this->TotalQuantityOrdered = $_TotalQuantityOrdered);
	}
	/**
	 * Get TotalQuantityOrdered
	 * @return long
	 */
	public function getTotalQuantityOrdered()
	{
		return $this->TotalQuantityOrdered;
	}
	/**
	 * Set TotalQuantityExecuted
	 * @param long TotalQuantityExecuted
	 * @return long
	 */
	public function setTotalQuantityExecuted($_TotalQuantityExecuted)
	{
		return ($this->TotalQuantityExecuted = $_TotalQuantityExecuted);
	}
	/**
	 * Get TotalQuantityExecuted
	 * @return long
	 */
	public function getTotalQuantityExecuted()
	{
		return $this->TotalQuantityExecuted;
	}
	/**
	 * Set TotalQuantityCancelled
	 * @param long TotalQuantityCancelled
	 * @return long
	 */
	public function setTotalQuantityCancelled($_TotalQuantityCancelled)
	{
		return ($this->TotalQuantityCancelled = $_TotalQuantityCancelled);
	}
	/**
	 * Get TotalQuantityCancelled
	 * @return long
	 */
	public function getTotalQuantityCancelled()
	{
		return $this->TotalQuantityCancelled;
	}
	/**
	 * Set AverageOrderSize
	 * @param double AverageOrderSize
	 * @return double
	 */
	public function setAverageOrderSize($_AverageOrderSize)
	{
		return ($this->AverageOrderSize = $_AverageOrderSize);
	}
	/**
	 * Get AverageOrderSize
	 * @return double
	 */
	public function getAverageOrderSize()
	{
		return $this->AverageOrderSize;
	}
	/**
	 * Set AverageExecutionSize
	 * @param double AverageExecutionSize
	 * @return double
	 */
	public function setAverageExecutionSize($_AverageExecutionSize)
	{
		return ($this->AverageExecutionSize = $_AverageExecutionSize);
	}
	/**
	 * Get AverageExecutionSize
	 * @return double
	 */
	public function getAverageExecutionSize()
	{
		return $this->AverageExecutionSize;
	}
	/**
	 * Set SharesOutstanding
	 * @param long SharesOutstanding
	 * @return long
	 */
	public function setSharesOutstanding($_SharesOutstanding)
	{
		return ($this->SharesOutstanding = $_SharesOutstanding);
	}
	/**
	 * Get SharesOutstanding
	 * @return long
	 */
	public function getSharesOutstanding()
	{
		return $this->SharesOutstanding;
	}
	/**
	 * Set MarketCap
	 * @param double MarketCap
	 * @return double
	 */
	public function setMarketCap($_MarketCap)
	{
		return ($this->MarketCap = $_MarketCap);
	}
	/**
	 * Get MarketCap
	 * @return double
	 */
	public function getMarketCap()
	{
		return $this->MarketCap;
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