<?php
/**
 * Class file for XiExchangesTypeExchangeDate
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeExchangeDate
 * @date 08/07/2012
 */
class XiExchangesTypeExchangeDate extends XiExchangesTypeCommon
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
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Date
	 * @return XiExchangesTypeExchangeDate
	 */
	public function __construct($_Symbol = null,$_Date = null)
	{
		XiExchangesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Date'=>$_Date));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>