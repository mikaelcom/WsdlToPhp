<?php
/**
 * Class file for XiExchangesTypeIsExchangeOpenOnDate
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeIsExchangeOpenOnDate
 * @date 08/07/2012
 */
class XiExchangesTypeIsExchangeOpenOnDate extends XiExchangesWsdlClass
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
	 * The OnDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OnDate;
	/**
	 * Constructor
	 * @param string Exchange
	 * @param string OnDate
	 * @return XiExchangesTypeIsExchangeOpenOnDate
	 */
	public function __construct($_Exchange = null,$_OnDate = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'OnDate'=>$_OnDate));
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
	 * Set OnDate
	 * @param string OnDate
	 * @return string
	 */
	public function setOnDate($_OnDate)
	{
		return ($this->OnDate = $_OnDate);
	}
	/**
	 * Get OnDate
	 * @return string
	 */
	public function getOnDate()
	{
		return $this->OnDate;
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