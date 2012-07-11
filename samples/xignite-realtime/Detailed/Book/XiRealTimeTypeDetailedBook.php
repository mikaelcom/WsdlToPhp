<?php
/**
 * Class file for XiRealTimeTypeDetailedBook
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeDetailedBook
 * @date 08/07/2012
 */
class XiRealTimeTypeDetailedBook extends XiRealTimeTypeCommon
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
	 * @var XiRealTimeTypeArrayOfOrder
	 */
	public $Bids;
	/**
	 * The Asks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfOrder
	 */
	public $Asks;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiRealTimeTypeArrayOfOrder Bids
	 * @param XiRealTimeTypeArrayOfOrder Asks
	 * @return XiRealTimeTypeDetailedBook
	 */
	public function __construct($_Symbol = null,$_Bids = null,$_Asks = null)
	{
		XiRealTimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'Bids'=>new XiRealTimeTypeArrayOfOrder($_Bids),'Asks'=>new XiRealTimeTypeArrayOfOrder($_Asks)));
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
	 * @param ArrayOfOrder Bids
	 * @return ArrayOfOrder
	 */
	public function setBids($_Bids)
	{
		return ($this->Bids = $_Bids);
	}
	/**
	 * Get Bids
	 * @return XiRealTimeTypeArrayOfOrder
	 */
	public function getBids()
	{
		return $this->Bids;
	}
	/**
	 * Set Asks
	 * @param ArrayOfOrder Asks
	 * @return ArrayOfOrder
	 */
	public function setAsks($_Asks)
	{
		return ($this->Asks = $_Asks);
	}
	/**
	 * Get Asks
	 * @return XiRealTimeTypeArrayOfOrder
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