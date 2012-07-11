<?php
/**
 * Class file for XiHoldingsTypeGetHistoricalAmendedHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHistoricalAmendedHoldingsResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHistoricalAmendedHoldingsResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetHistoricalAmendedHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeManagerHoldings
	 */
	public $GetHistoricalAmendedHoldingsResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManagerHoldings GetHistoricalAmendedHoldingsResult
	 * @return XiHoldingsTypeGetHistoricalAmendedHoldingsResponse
	 */
	public function __construct($_GetHistoricalAmendedHoldingsResult = null)
	{
		parent::__construct(array('GetHistoricalAmendedHoldingsResult'=>$_GetHistoricalAmendedHoldingsResult));
	}
	/**
	 * Set GetHistoricalAmendedHoldingsResult
	 * @param ManagerHoldings GetHistoricalAmendedHoldingsResult
	 * @return ManagerHoldings
	 */
	public function setGetHistoricalAmendedHoldingsResult($_GetHistoricalAmendedHoldingsResult)
	{
		return ($this->GetHistoricalAmendedHoldingsResult = $_GetHistoricalAmendedHoldingsResult);
	}
	/**
	 * Get GetHistoricalAmendedHoldingsResult
	 * @return XiHoldingsTypeManagerHoldings
	 */
	public function getGetHistoricalAmendedHoldingsResult()
	{
		return $this->GetHistoricalAmendedHoldingsResult;
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