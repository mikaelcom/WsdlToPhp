<?php
/**
 * Class file for XiRealTimeTypeBook
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeBook
 * @date 08/07/2012
 */
class XiRealTimeTypeBook extends XiRealTimeTypeCommon
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
	 * The Bids
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfOrderSummary
	 */
	public $Bids;
	/**
	 * The Asks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfOrderSummary
	 */
	public $Asks;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiRealTimeTypeArrayOfOrderSummary Bids
	 * @param XiRealTimeTypeArrayOfOrderSummary Asks
	 * @return XiRealTimeTypeBook
	 */
	public function __construct($_Symbol = null,$_Bids = null,$_Asks = null)
	{
		XiRealTimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'Bids'=>new XiRealTimeTypeArrayOfOrderSummary($_Bids),'Asks'=>new XiRealTimeTypeArrayOfOrderSummary($_Asks)));
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
	 * Set Bids
	 * @param ArrayOfOrderSummary Bids
	 * @return ArrayOfOrderSummary
	 */
	public function setBids($_Bids)
	{
		return ($this->Bids = $_Bids);
	}
	/**
	 * Get Bids
	 * @return XiRealTimeTypeArrayOfOrderSummary
	 */
	public function getBids()
	{
		return $this->Bids;
	}
	/**
	 * Set Asks
	 * @param ArrayOfOrderSummary Asks
	 * @return ArrayOfOrderSummary
	 */
	public function setAsks($_Asks)
	{
		return ($this->Asks = $_Asks);
	}
	/**
	 * Get Asks
	 * @return XiRealTimeTypeArrayOfOrderSummary
	 */
	public function getAsks()
	{
		return $this->Asks;
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