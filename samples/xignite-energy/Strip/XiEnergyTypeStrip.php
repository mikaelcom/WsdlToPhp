<?php
/**
 * Class file for XiEnergyTypeStrip
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeStrip
 * @date 08/07/2012
 */
class XiEnergyTypeStrip extends XiEnergyTypeCommon
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
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
	 * The Total
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Total;
	/**
	 * The Contracts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Contracts;
	/**
	 * The Quotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $Quotes;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string AsOfDate
	 * @param string StartDate
	 * @param string EndDate
	 * @param double High
	 * @param double Low
	 * @param double Average
	 * @param double Total
	 * @param int Contracts
	 * @param XiEnergyTypeArrayOfFutureQuote Quotes
	 * @return XiEnergyTypeStrip
	 */
	public function __construct($_Symbol = null,$_AsOfDate = null,$_StartDate = null,$_EndDate = null,$_High,$_Low,$_Average,$_Total,$_Contracts,$_Quotes = null)
	{
		XiEnergyWsdlClass::__construct(array('Symbol'=>$_Symbol,'AsOfDate'=>$_AsOfDate,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'High'=>$_High,'Low'=>$_Low,'Average'=>$_Average,'Total'=>$_Total,'Contracts'=>$_Contracts,'Quotes'=>new XiEnergyTypeArrayOfFutureQuote($_Quotes)));
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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
	 * Set Total
	 * @param double Total
	 * @return double
	 */
	public function setTotal($_Total)
	{
		return ($this->Total = $_Total);
	}
	/**
	 * Get Total
	 * @return double
	 */
	public function getTotal()
	{
		return $this->Total;
	}
	/**
	 * Set Contracts
	 * @param int Contracts
	 * @return int
	 */
	public function setContracts($_Contracts)
	{
		return ($this->Contracts = $_Contracts);
	}
	/**
	 * Get Contracts
	 * @return int
	 */
	public function getContracts()
	{
		return $this->Contracts;
	}
	/**
	 * Set Quotes
	 * @param ArrayOfFutureQuote Quotes
	 * @return ArrayOfFutureQuote
	 */
	public function setQuotes($_Quotes)
	{
		return ($this->Quotes = $_Quotes);
	}
	/**
	 * Get Quotes
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getQuotes()
	{
		return $this->Quotes;
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