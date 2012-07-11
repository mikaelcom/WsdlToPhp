<?php
/**
 * Class file for XiCurrenciesTypeForwardRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeForwardRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeForwardRate extends XiCurrenciesTypeCommon
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
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrency
	 */
	public $From;
	/**
	 * The To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrency
	 */
	public $To;
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
	 * The Factor
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Factor;
	/**
	 * The Forwards
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfForward
	 */
	public $Forwards;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiCurrenciesTypeCurrency From
	 * @param XiCurrenciesTypeCurrency To
	 * @param string Date
	 * @param string Time
	 * @param double Bid
	 * @param string BidTime
	 * @param double Ask
	 * @param string AskTime
	 * @param int Factor
	 * @param XiCurrenciesTypeArrayOfForward Forwards
	 * @return XiCurrenciesTypeForwardRate
	 */
	public function __construct($_Symbol = null,$_From = null,$_To = null,$_Date = null,$_Time = null,$_Bid,$_BidTime = null,$_Ask,$_AskTime = null,$_Factor,$_Forwards = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Symbol'=>$_Symbol,'From'=>$_From,'To'=>$_To,'Date'=>$_Date,'Time'=>$_Time,'Bid'=>$_Bid,'BidTime'=>$_BidTime,'Ask'=>$_Ask,'AskTime'=>$_AskTime,'Factor'=>$_Factor,'Forwards'=>new XiCurrenciesTypeArrayOfForward($_Forwards)));
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
	 * Set From
	 * @param Currency From
	 * @return Currency
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return XiCurrenciesTypeCurrency
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set To
	 * @param Currency To
	 * @return Currency
	 */
	public function setTo($_To)
	{
		return ($this->To = $_To);
	}
	/**
	 * Get To
	 * @return XiCurrenciesTypeCurrency
	 */
	public function getTo()
	{
		return $this->To;
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
	 * Set Factor
	 * @param int Factor
	 * @return int
	 */
	public function setFactor($_Factor)
	{
		return ($this->Factor = $_Factor);
	}
	/**
	 * Get Factor
	 * @return int
	 */
	public function getFactor()
	{
		return $this->Factor;
	}
	/**
	 * Set Forwards
	 * @param ArrayOfForward Forwards
	 * @return ArrayOfForward
	 */
	public function setForwards($_Forwards)
	{
		return ($this->Forwards = $_Forwards);
	}
	/**
	 * Get Forwards
	 * @return XiCurrenciesTypeArrayOfForward
	 */
	public function getForwards()
	{
		return $this->Forwards;
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