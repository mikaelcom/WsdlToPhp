<?php
/**
 * Class file for XiExchangesTypeIsExchangeHoliday
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeIsExchangeHoliday
 * @date 08/07/2012
 */
class XiExchangesTypeIsExchangeHoliday extends XiExchangesWsdlClass
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
	 * The ForDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ForDate;
	/**
	 * Constructor
	 * @param string Exchange
	 * @param string ForDate
	 * @return XiExchangesTypeIsExchangeHoliday
	 */
	public function __construct($_Exchange = null,$_ForDate = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'ForDate'=>$_ForDate));
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
	 * Set ForDate
	 * @param string ForDate
	 * @return string
	 */
	public function setForDate($_ForDate)
	{
		return ($this->ForDate = $_ForDate);
	}
	/**
	 * Get ForDate
	 * @return string
	 */
	public function getForDate()
	{
		return $this->ForDate;
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