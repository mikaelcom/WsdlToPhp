<?php
/**
 * Class file for XiCurrenciesTypeHistoricalCrossRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeHistoricalCrossRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeHistoricalCrossRate extends XiCurrenciesTypeCommon
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
	 * The First
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $First;
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
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiCurrenciesTypeQuoteTypes Type
	 * @param XiCurrenciesTypeCurrency From
	 * @param XiCurrenciesTypeCurrency To
	 * @param string Date
	 * @param double First
	 * @param double Last
	 * @param double High
	 * @param double Low
	 * @param string Text
	 * @return XiCurrenciesTypeHistoricalCrossRate
	 */
	public function __construct($_Symbol = null,$_Type,$_From = null,$_To = null,$_Date = null,$_First,$_Last,$_High,$_Low,$_Text = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Type'=>$_Type,'From'=>$_From,'To'=>$_To,'Date'=>$_Date,'First'=>$_First,'Last'=>$_Last,'High'=>$_High,'Low'=>$_Low,'Text'=>$_Text));
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
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
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