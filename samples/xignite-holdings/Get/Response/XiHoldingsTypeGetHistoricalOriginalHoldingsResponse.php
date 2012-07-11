<?php
/**
 * Class file for XiHoldingsTypeGetHistoricalOriginalHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHistoricalOriginalHoldingsResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHistoricalOriginalHoldingsResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetHistoricalOriginalHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeManagerHoldings
	 */
	public $GetHistoricalOriginalHoldingsResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManagerHoldings GetHistoricalOriginalHoldingsResult
	 * @return XiHoldingsTypeGetHistoricalOriginalHoldingsResponse
	 */
	public function __construct($_GetHistoricalOriginalHoldingsResult = null)
	{
		parent::__construct(array('GetHistoricalOriginalHoldingsResult'=>$_GetHistoricalOriginalHoldingsResult));
	}
	/**
	 * Set GetHistoricalOriginalHoldingsResult
	 * @param ManagerHoldings GetHistoricalOriginalHoldingsResult
	 * @return ManagerHoldings
	 */
	public function setGetHistoricalOriginalHoldingsResult($_GetHistoricalOriginalHoldingsResult)
	{
		return ($this->GetHistoricalOriginalHoldingsResult = $_GetHistoricalOriginalHoldingsResult);
	}
	/**
	 * Get GetHistoricalOriginalHoldingsResult
	 * @return XiHoldingsTypeManagerHoldings
	 */
	public function getGetHistoricalOriginalHoldingsResult()
	{
		return $this->GetHistoricalOriginalHoldingsResult;
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