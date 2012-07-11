<?php
/**
 * Class file for XiExchangesTypeGetExchangeHoursUTC
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeHoursUTC
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeHoursUTC extends XiExchangesWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param string Exchange
	 * @param string AsOfDate
	 * @return XiExchangesTypeGetExchangeHoursUTC
	 */
	public function __construct($_Exchange = null,$_AsOfDate = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Exchange
	 * @param string Exchange
	 * @return string
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return string
	 */
	public function getExchange()
	{
		return $this->Exchange;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>