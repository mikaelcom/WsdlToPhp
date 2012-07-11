<?php
/**
 * Class file for XiMetalsTypeSpotMarketSummary
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeSpotMarketSummary
 * @date 08/07/2012
 */
class XiMetalsTypeSpotMarketSummary extends XiMetalsTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypePureMetalTypes
	 */
	public $Type;
	/**
	 * The USMarketStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMarketStatuses
	 */
	public $USMarketStatus;
	/**
	 * The MarketHours
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketHours;
	/**
	 * The MarketMinutes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketMinutes;
	/**
	 * The MarketMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MarketMessage;
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
	 * The Mid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Mid;
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
	 * The OneDayDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OneDayDate;
	/**
	 * The OneDayPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneDayPrice;
	/**
	 * The OneDayChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneDayChange;
	/**
	 * The OneDayChangePercent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneDayChangePercent;
	/**
	 * The OneMonthDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OneMonthDate;
	/**
	 * The OneMonthPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneMonthPrice;
	/**
	 * The OneMonthChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneMonthChange;
	/**
	 * The OneMonthChangePercent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneMonthChangePercent;
	/**
	 * The OneYearDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OneYearDate;
	/**
	 * The OneYearPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneYearPrice;
	/**
	 * The OneYearChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneYearChange;
	/**
	 * The OneYearChangePercent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OneYearChangePercent;
	/**
	 * Constructor
	 * @param XiMetalsTypePureMetalTypes Type
	 * @param XiMetalsTypeMarketStatuses USMarketStatus
	 * @param double MarketHours
	 * @param double MarketMinutes
	 * @param string MarketMessage
	 * @param double Bid
	 * @param double Ask
	 * @param double Mid
	 * @param double High
	 * @param double Low
	 * @param string OneDayDate
	 * @param double OneDayPrice
	 * @param double OneDayChange
	 * @param double OneDayChangePercent
	 * @param string OneMonthDate
	 * @param double OneMonthPrice
	 * @param double OneMonthChange
	 * @param double OneMonthChangePercent
	 * @param string OneYearDate
	 * @param double OneYearPrice
	 * @param double OneYearChange
	 * @param double OneYearChangePercent
	 * @return XiMetalsTypeSpotMarketSummary
	 */
	public function __construct($_Type,$_USMarketStatus,$_MarketHours,$_MarketMinutes,$_MarketMessage = null,$_Bid,$_Ask,$_Mid,$_High,$_Low,$_OneDayDate = null,$_OneDayPrice,$_OneDayChange,$_OneDayChangePercent,$_OneMonthDate = null,$_OneMonthPrice,$_OneMonthChange,$_OneMonthChangePercent,$_OneYearDate = null,$_OneYearPrice,$_OneYearChange,$_OneYearChangePercent)
	{
		XiMetalsWsdlClass::__construct(array('Type'=>$_Type,'USMarketStatus'=>$_USMarketStatus,'MarketHours'=>$_MarketHours,'MarketMinutes'=>$_MarketMinutes,'MarketMessage'=>$_MarketMessage,'Bid'=>$_Bid,'Ask'=>$_Ask,'Mid'=>$_Mid,'High'=>$_High,'Low'=>$_Low,'OneDayDate'=>$_OneDayDate,'OneDayPrice'=>$_OneDayPrice,'OneDayChange'=>$_OneDayChange,'OneDayChangePercent'=>$_OneDayChangePercent,'OneMonthDate'=>$_OneMonthDate,'OneMonthPrice'=>$_OneMonthPrice,'OneMonthChange'=>$_OneMonthChange,'OneMonthChangePercent'=>$_OneMonthChangePercent,'OneYearDate'=>$_OneYearDate,'OneYearPrice'=>$_OneYearPrice,'OneYearChange'=>$_OneYearChange,'OneYearChangePercent'=>$_OneYearChangePercent));
	}
	/**
	 * Set Type
	 * @param PureMetalTypes Type
	 * @return PureMetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypePureMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypePureMetalTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set USMarketStatus
	 * @param MarketStatuses USMarketStatus
	 * @return MarketStatuses
	 */
	public function setUSMarketStatus($_USMarketStatus)
	{
		return ($this->USMarketStatus = XiMetalsTypeMarketStatuses::valueIsValid($_USMarketStatus)?$_USMarketStatus:null);
	}
	/**
	 * Get USMarketStatus
	 * @return XiMetalsTypeMarketStatuses
	 */
	public function getUSMarketStatus()
	{
		return $this->USMarketStatus;
	}
	/**
	 * Set MarketHours
	 * @param double MarketHours
	 * @return double
	 */
	public function setMarketHours($_MarketHours)
	{
		return ($this->MarketHours = $_MarketHours);
	}
	/**
	 * Get MarketHours
	 * @return double
	 */
	public function getMarketHours()
	{
		return $this->MarketHours;
	}
	/**
	 * Set MarketMinutes
	 * @param double MarketMinutes
	 * @return double
	 */
	public function setMarketMinutes($_MarketMinutes)
	{
		return ($this->MarketMinutes = $_MarketMinutes);
	}
	/**
	 * Get MarketMinutes
	 * @return double
	 */
	public function getMarketMinutes()
	{
		return $this->MarketMinutes;
	}
	/**
	 * Set MarketMessage
	 * @param string MarketMessage
	 * @return string
	 */
	public function setMarketMessage($_MarketMessage)
	{
		return ($this->MarketMessage = $_MarketMessage);
	}
	/**
	 * Get MarketMessage
	 * @return string
	 */
	public function getMarketMessage()
	{
		return $this->MarketMessage;
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
	 * Set Mid
	 * @param double Mid
	 * @return double
	 */
	public function setMid($_Mid)
	{
		return ($this->Mid = $_Mid);
	}
	/**
	 * Get Mid
	 * @return double
	 */
	public function getMid()
	{
		return $this->Mid;
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
	 * Set OneDayDate
	 * @param string OneDayDate
	 * @return string
	 */
	public function setOneDayDate($_OneDayDate)
	{
		return ($this->OneDayDate = $_OneDayDate);
	}
	/**
	 * Get OneDayDate
	 * @return string
	 */
	public function getOneDayDate()
	{
		return $this->OneDayDate;
	}
	/**
	 * Set OneDayPrice
	 * @param double OneDayPrice
	 * @return double
	 */
	public function setOneDayPrice($_OneDayPrice)
	{
		return ($this->OneDayPrice = $_OneDayPrice);
	}
	/**
	 * Get OneDayPrice
	 * @return double
	 */
	public function getOneDayPrice()
	{
		return $this->OneDayPrice;
	}
	/**
	 * Set OneDayChange
	 * @param double OneDayChange
	 * @return double
	 */
	public function setOneDayChange($_OneDayChange)
	{
		return ($this->OneDayChange = $_OneDayChange);
	}
	/**
	 * Get OneDayChange
	 * @return double
	 */
	public function getOneDayChange()
	{
		return $this->OneDayChange;
	}
	/**
	 * Set OneDayChangePercent
	 * @param double OneDayChangePercent
	 * @return double
	 */
	public function setOneDayChangePercent($_OneDayChangePercent)
	{
		return ($this->OneDayChangePercent = $_OneDayChangePercent);
	}
	/**
	 * Get OneDayChangePercent
	 * @return double
	 */
	public function getOneDayChangePercent()
	{
		return $this->OneDayChangePercent;
	}
	/**
	 * Set OneMonthDate
	 * @param string OneMonthDate
	 * @return string
	 */
	public function setOneMonthDate($_OneMonthDate)
	{
		return ($this->OneMonthDate = $_OneMonthDate);
	}
	/**
	 * Get OneMonthDate
	 * @return string
	 */
	public function getOneMonthDate()
	{
		return $this->OneMonthDate;
	}
	/**
	 * Set OneMonthPrice
	 * @param double OneMonthPrice
	 * @return double
	 */
	public function setOneMonthPrice($_OneMonthPrice)
	{
		return ($this->OneMonthPrice = $_OneMonthPrice);
	}
	/**
	 * Get OneMonthPrice
	 * @return double
	 */
	public function getOneMonthPrice()
	{
		return $this->OneMonthPrice;
	}
	/**
	 * Set OneMonthChange
	 * @param double OneMonthChange
	 * @return double
	 */
	public function setOneMonthChange($_OneMonthChange)
	{
		return ($this->OneMonthChange = $_OneMonthChange);
	}
	/**
	 * Get OneMonthChange
	 * @return double
	 */
	public function getOneMonthChange()
	{
		return $this->OneMonthChange;
	}
	/**
	 * Set OneMonthChangePercent
	 * @param double OneMonthChangePercent
	 * @return double
	 */
	public function setOneMonthChangePercent($_OneMonthChangePercent)
	{
		return ($this->OneMonthChangePercent = $_OneMonthChangePercent);
	}
	/**
	 * Get OneMonthChangePercent
	 * @return double
	 */
	public function getOneMonthChangePercent()
	{
		return $this->OneMonthChangePercent;
	}
	/**
	 * Set OneYearDate
	 * @param string OneYearDate
	 * @return string
	 */
	public function setOneYearDate($_OneYearDate)
	{
		return ($this->OneYearDate = $_OneYearDate);
	}
	/**
	 * Get OneYearDate
	 * @return string
	 */
	public function getOneYearDate()
	{
		return $this->OneYearDate;
	}
	/**
	 * Set OneYearPrice
	 * @param double OneYearPrice
	 * @return double
	 */
	public function setOneYearPrice($_OneYearPrice)
	{
		return ($this->OneYearPrice = $_OneYearPrice);
	}
	/**
	 * Get OneYearPrice
	 * @return double
	 */
	public function getOneYearPrice()
	{
		return $this->OneYearPrice;
	}
	/**
	 * Set OneYearChange
	 * @param double OneYearChange
	 * @return double
	 */
	public function setOneYearChange($_OneYearChange)
	{
		return ($this->OneYearChange = $_OneYearChange);
	}
	/**
	 * Get OneYearChange
	 * @return double
	 */
	public function getOneYearChange()
	{
		return $this->OneYearChange;
	}
	/**
	 * Set OneYearChangePercent
	 * @param double OneYearChangePercent
	 * @return double
	 */
	public function setOneYearChangePercent($_OneYearChangePercent)
	{
		return ($this->OneYearChangePercent = $_OneYearChangePercent);
	}
	/**
	 * Get OneYearChangePercent
	 * @return double
	 */
	public function getOneYearChangePercent()
	{
		return $this->OneYearChangePercent;
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