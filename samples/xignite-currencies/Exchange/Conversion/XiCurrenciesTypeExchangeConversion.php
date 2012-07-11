<?php
/**
 * Class file for XiCurrenciesTypeExchangeConversion
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeExchangeConversion
 * @date 08/07/2012
 */
class XiCurrenciesTypeExchangeConversion extends XiCurrenciesTypeCommon
{
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
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Amount;
	/**
	 * The ExchangeRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExchangeRate;
	/**
	 * The Result
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Result;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrency From
	 * @param XiCurrenciesTypeCurrency To
	 * @param string Date
	 * @param string Time
	 * @param double Amount
	 * @param double ExchangeRate
	 * @param double Result
	 * @return XiCurrenciesTypeExchangeConversion
	 */
	public function __construct($_From = null,$_To = null,$_Date = null,$_Time = null,$_Amount,$_ExchangeRate,$_Result)
	{
		XiCurrenciesWsdlClass::__construct(array('From'=>$_From,'To'=>$_To,'Date'=>$_Date,'Time'=>$_Time,'Amount'=>$_Amount,'ExchangeRate'=>$_ExchangeRate,'Result'=>$_Result));
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
	 * Set ExchangeRate
	 * @param double ExchangeRate
	 * @return double
	 */
	public function setExchangeRate($_ExchangeRate)
	{
		return ($this->ExchangeRate = $_ExchangeRate);
	}
	/**
	 * Get ExchangeRate
	 * @return double
	 */
	public function getExchangeRate()
	{
		return $this->ExchangeRate;
	}
	/**
	 * Set Result
	 * @param double Result
	 * @return double
	 */
	public function setResult($_Result)
	{
		return ($this->Result = $_Result);
	}
	/**
	 * Get Result
	 * @return double
	 */
	public function getResult()
	{
		return $this->Result;
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