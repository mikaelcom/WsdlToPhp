<?php
/**
 * Class file for XiMetalsTypeMetalQuote
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeMetalQuote
 * @date 08/07/2012
 */
class XiMetalsTypeMetalQuote extends XiMetalsTypeCommon
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
	 * @return XiMetalsTypeMetalQuote
	 */
	public function __construct($_Symbol = null,$_Type,$_Currency,$_Date = null,$_Time = null,$_Rate,$_Bid,$_BidTime = null,$_Ask,$_AskTime = null)
	{
		XiMetalsWsdlClass::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'Currency'=>$_Currency,'Date'=>$_Date,'Time'=>$_Time,'Rate'=>$_Rate,'Bid'=>$_Bid,'BidTime'=>$_BidTime,'Ask'=>$_Ask,'AskTime'=>$_AskTime));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>