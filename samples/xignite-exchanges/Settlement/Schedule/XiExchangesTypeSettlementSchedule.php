<?php
/**
 * Class file for XiExchangesTypeSettlementSchedule
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeSettlementSchedule
 * @date 08/07/2012
 */
class XiExchangesTypeSettlementSchedule extends XiExchangesTypeCommon
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
	 * The TradeDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TradeDate;
	/**
	 * The SettlementDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SettlementDate;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string TradeDate
	 * @param string SettlementDate
	 * @return XiExchangesTypeSettlementSchedule
	 */
	public function __construct($_Symbol = null,$_TradeDate = null,$_SettlementDate = null)
	{
		XiExchangesWsdlClass::__construct(array('Symbol'=>$_Symbol,'TradeDate'=>$_TradeDate,'SettlementDate'=>$_SettlementDate));
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
	 * Set SettlementDate
	 * @param string SettlementDate
	 * @return string
	 */
	public function setSettlementDate($_SettlementDate)
	{
		return ($this->SettlementDate = $_SettlementDate);
	}
	/**
	 * Get SettlementDate
	 * @return string
	 */
	public function getSettlementDate()
	{
		return $this->SettlementDate;
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