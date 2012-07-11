<?php
/**
 * Class file for XiCurrenciesTypeCrossRateChange
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCrossRateChange
 * @date 08/07/2012
 */
class XiCurrenciesTypeCrossRateChange extends XiCurrenciesTypeCommon
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
	 * @var XiCurrenciesTypeQuoteTypes
	 */
	public $Type;
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
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ask;
	/**
	 * The Changes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeArrayOfChange
	 */
	public $Changes;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiCurrenciesTypeQuoteTypes Type
	 * @param XiCurrenciesTypeCurrency From
	 * @param XiCurrenciesTypeCurrency To
	 * @param string Date
	 * @param string Time
	 * @param double Rate
	 * @param double Bid
	 * @param double Ask
	 * @param XiCurrenciesTypeArrayOfChange Changes
	 * @return XiCurrenciesTypeCrossRateChange
	 */
	public function __construct($_Symbol = null,$_Type,$_From = null,$_To = null,$_Date = null,$_Time = null,$_Rate,$_Bid,$_Ask,$_Changes = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'From'=>$_From,'To'=>$_To,'Date'=>$_Date,'Time'=>$_Time,'Rate'=>$_Rate,'Bid'=>$_Bid,'Ask'=>$_Ask,'Changes'=>new XiCurrenciesTypeArrayOfChange($_Changes)));
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
	 * @param QuoteTypes Type
	 * @return QuoteTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiCurrenciesTypeQuoteTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiCurrenciesTypeQuoteTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Set Changes
	 * @param ArrayOfChange Changes
	 * @return ArrayOfChange
	 */
	public function setChanges($_Changes)
	{
		return ($this->Changes = $_Changes);
	}
	/**
	 * Get Changes
	 * @return XiCurrenciesTypeArrayOfChange
	 */
	public function getChanges()
	{
		return $this->Changes;
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