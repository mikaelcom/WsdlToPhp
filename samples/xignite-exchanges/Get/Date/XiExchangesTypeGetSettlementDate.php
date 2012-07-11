<?php
/**
 * Class file for XiExchangesTypeGetSettlementDate
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetSettlementDate
 * @date 08/07/2012
 */
class XiExchangesTypeGetSettlementDate extends XiExchangesWsdlClass
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
	 * The TradeDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TradeDate;
	/**
	 * Constructor
	 * @param string Exchange
	 * @param string TradeDate
	 * @return XiExchangesTypeGetSettlementDate
	 */
	public function __construct($_Exchange = null,$_TradeDate = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'TradeDate'=>$_TradeDate));
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
	 * Set TradeDate
	 * @param string TradeDate
	 * @return string
	 */
	public function setTradeDate($_TradeDate)
	{
		return ($this->TradeDate = $_TradeDate);
	}
	/**
	 * Get TradeDate
	 * @return string
	 */
	public function getTradeDate()
	{
		return $this->TradeDate;
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