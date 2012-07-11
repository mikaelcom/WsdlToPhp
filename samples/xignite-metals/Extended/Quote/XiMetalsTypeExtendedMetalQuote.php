<?php
/**
 * Class file for XiMetalsTypeExtendedMetalQuote
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeExtendedMetalQuote
 * @date 08/07/2012
 */
class XiMetalsTypeExtendedMetalQuote extends XiMetalsTypeCommon
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
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalCurrencyTypes
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
	 * The Rate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Rate;
	/**
	 * The Bid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Bid;
	/**
	 * The BidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BidTime;
	/**
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ask;
	/**
	 * The AskTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AskTime;
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
	 * Constructor
	 * @param string Symbol
	 * @param XiMetalsTypeMetalTypes Type
	 * @param XiMetalsTypeMetalCurrencyTypes Currency
	 * @param string Date
	 * @param string Time
	 * @param double Rate
	 * @param double Bid
	 * @param string BidTime
	 * @param double Ask
	 * @param string AskTime
	 * @param double High
	 * @param double Low
	 * @param string OneDayDate
	 * @param double OneDayPrice
	 * @param double OneDayChange
	 * @param double OneDayChangePercent
	 * @return XiMetalsTypeExtendedMetalQuote
	 */
	public function __construct($_Symbol = null,$_Type,$_Currency,$_Date = null,$_Time = null,$_Rate,$_Bid,$_BidTime = null,$_Ask,$_AskTime = null,$_High,$_Low,$_OneDayDate = null,$_OneDayPrice,$_OneDayChange,$_OneDayChangePercent)
	{
		XiMetalsWsdlClass::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'Currency'=>$_Currency,'Date'=>$_Date,'Time'=>$_Time,'Rate'=>$_Rate,'Bid'=>$_Bid,'BidTime'=>$_BidTime,'Ask'=>$_Ask,'AskTime'=>$_AskTime,'High'=>$_High,'Low'=>$_Low,'OneDayDate'=>$_OneDayDate,'OneDayPrice'=>$_OneDayPrice,'OneDayChange'=>$_OneDayChange,'OneDayChangePercent'=>$_OneDayChangePercent));
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
	 * Set Type
	 * @param MetalTypes Type
	 * @return MetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeMetalTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param MetalCurrencyTypes Currency
	 * @return MetalCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMetalsTypeMetalCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeMetalCurrencyTypes
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
	 * Set Rate
	 * @param double Rate
	 * @return double
	 */
	public function setRate($_Rate)
	{
		return ($this->Rate = $_Rate);
	}
	/**
	 * Get Rate
	 * @return double
	 */
	public function getRate()
	{
		return $this->Rate;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>