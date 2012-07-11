<?php
/**
 * Class file for XiExchangesTypeListHolidays
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeListHolidays
 * @date 08/07/2012
 */
class XiExchangesTypeListHolidays extends XiExchangesWsdlClass
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
	 * The ForYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ForYear;
	/**
	 * Constructor
	 * @param string Exchange
	 * @param int ForYear
	 * @return XiExchangesTypeListHolidays
	 */
	public function __construct($_Exchange = null,$_ForYear)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'ForYear'=>$_ForYear));
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
	 * Set ForYear
	 * @param int ForYear
	 * @return int
	 */
	public function setForYear($_ForYear)
	{
		return ($this->ForYear = $_ForYear);
	}
	/**
	 * Get ForYear
	 * @return int
	 */
	public function getForYear()
	{
		return $this->ForYear;
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