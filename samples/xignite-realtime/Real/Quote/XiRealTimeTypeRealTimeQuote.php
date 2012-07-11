<?php
/**
 * Class file for XiRealTimeTypeRealTimeQuote
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeRealTimeQuote
 * @date 08/07/2012
 */
class XiRealTimeTypeRealTimeQuote extends XiRealTimeTypeCommon
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
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Quantity;
	/**
	 * The ChangeFromPrevious
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeFromPrevious;
	/**
	 * The PercentChangeFromPrevious
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChangeFromPrevious;
	/**
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Open;
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
	 * @var int
	 */
	public $BidQuantity;
	/**
	 * The AskQuantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $AskQuantity;
	/**
	 * The Volume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
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
	 * The Highest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Highest;
	/**
	 * The Lowest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Lowest;
	/**
	 * The Rank
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Rank;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string CUSIP
	 * @param string CIK
	 * @param string Name
	 * @param string Date
	 * @param string Time
	 * @param double Last
	 * @param int Quantity
	 * @param double ChangeFromPrevious
	 * @param double PercentChangeFromPrevious
	 * @param double Open
	 * @param double ChangeFromOpen
	 * @param double PercentChangeFromOpen
	 * @param double Bid
	 * @param double Ask
	 * @param double Spread
	 * @param int BidQuantity
	 * @param int AskQuantity
	 * @param int Volume
	 * @param int ECNVolume
	 * @param double Highest
	 * @param double Lowest
	 * @param string Rank
	 * @return XiRealTimeTypeRealTimeQuote
	 */
	public function __construct($_Symbol = null,$_CUSIP = null,$_CIK = null,$_Name = null,$_Date = null,$_Time = null,$_Last,$_Quantity,$_ChangeFromPrevious,$_PercentChangeFromPrevious,$_Open,$_ChangeFromOpen,$_PercentChangeFromOpen,$_Bid,$_Ask,$_Spread,$_BidQuantity,$_AskQuantity,$_Volume,$_ECNVolume,$_Highest,$_Lowest,$_Rank = null)
	{
		XiRealTimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'CUSIP'=>$_CUSIP,'CIK'=>$_CIK,'Name'=>$_Name,'Date'=>$_Date,'Time'=>$_Time,'Last'=>$_Last,'Quantity'=>$_Quantity,'ChangeFromPrevious'=>$_ChangeFromPrevious,'PercentChangeFromPrevious'=>$_PercentChangeFromPrevious,'Open'=>$_Open,'ChangeFromOpen'=>$_ChangeFromOpen,'PercentChangeFromOpen'=>$_PercentChangeFromOpen,'Bid'=>$_Bid,'Ask'=>$_Ask,'Spread'=>$_Spread,'BidQuantity'=>$_BidQuantity,'AskQuantity'=>$_AskQuantity,'Volume'=>$_Volume,'ECNVolume'=>$_ECNVolume,'Highest'=>$_Highest,'Lowest'=>$_Lowest,'Rank'=>$_Rank));
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
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set ChangeFromPrevious
	 * @param double ChangeFromPrevious
	 * @return double
	 */
	public function setChangeFromPrevious($_ChangeFromPrevious)
	{
		return ($this->ChangeFromPrevious = $_ChangeFromPrevious);
	}
	/**
	 * Get ChangeFromPrevious
	 * @return double
	 */
	public function getChangeFromPrevious()
	{
		return $this->ChangeFromPrevious;
	}
	/**
	 * Set PercentChangeFromPrevious
	 * @param double PercentChangeFromPrevious
	 * @return double
	 */
	public function setPercentChangeFromPrevious($_PercentChangeFromPrevious)
	{
		return ($this->PercentChangeFromPrevious = $_PercentChangeFromPrevious);
	}
	/**
	 * Get PercentChangeFromPrevious
	 * @return double
	 */
	public function getPercentChangeFromPrevious()
	{
		return $this->PercentChangeFromPrevious;
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
	 * Set Volume
	 * @param int Volume
	 * @return int
	 */
	public function setVolume($_Volume)
	{
		return ($this->Volume = $_Volume);
	}
	/**
	 * Get Volume
	 * @return int
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
	 * Set Rank
	 * @param string Rank
	 * @return string
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return string
	 */
	public function getRank()
	{
		return $this->Rank;
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