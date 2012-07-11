<?php
/**
 * Class file for XiRatesTypeEuroDollarFRA
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeEuroDollarFRA
 * @date 08/07/2012
 */
class XiRatesTypeEuroDollarFRA extends XiRatesTypeCommon
{
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Last
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Last;
	/**
	 * The Rate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Rate;
	/**
	 * Constructor
	 * @param string Date
	 * @param string Symbol
	 * @param double Last
	 * @param double Rate
	 * @return XiRatesTypeEuroDollarFRA
	 */
	public function __construct($_Date = null,$_Symbol = null,$_Last,$_Rate)
	{
		XiRatesWsdlClass::__construct(array('Date'=>$_Date,'Symbol'=>$_Symbol,'Last'=>$_Last,'Rate'=>$_Rate));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>