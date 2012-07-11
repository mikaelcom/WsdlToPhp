<?php
/**
 * Class file for XiExchangesTypeGetSettlementDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetSettlementDateResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetSettlementDateResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetSettlementDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeSettlementSchedule
	 */
	public $GetSettlementDateResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeSettlementSchedule GetSettlementDateResult
	 * @return XiExchangesTypeGetSettlementDateResponse
	 */
	public function __construct($_GetSettlementDateResult = null)
	{
		parent::__construct(array('GetSettlementDateResult'=>$_GetSettlementDateResult));
	}
	/**
	 * Set GetSettlementDateResult
	 * @param SettlementSchedule GetSettlementDateResult
	 * @return SettlementSchedule
	 */
	public function setGetSettlementDateResult($_GetSettlementDateResult)
	{
		return ($this->GetSettlementDateResult = $_GetSettlementDateResult);
	}
	/**
	 * Get GetSettlementDateResult
	 * @return XiExchangesTypeSettlementSchedule
	 */
	public function getGetSettlementDateResult()
	{
		return $this->GetSettlementDateResult;
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