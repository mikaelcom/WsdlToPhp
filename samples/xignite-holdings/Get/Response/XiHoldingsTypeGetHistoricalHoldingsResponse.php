<?php
/**
 * Class file for XiHoldingsTypeGetHistoricalHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHistoricalHoldingsResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHistoricalHoldingsResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetHistoricalHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeManagerHoldings
	 */
	public $GetHistoricalHoldingsResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManagerHoldings GetHistoricalHoldingsResult
	 * @return XiHoldingsTypeGetHistoricalHoldingsResponse
	 */
	public function __construct($_GetHistoricalHoldingsResult = null)
	{
		parent::__construct(array('GetHistoricalHoldingsResult'=>$_GetHistoricalHoldingsResult));
	}
	/**
	 * Set GetHistoricalHoldingsResult
	 * @param ManagerHoldings GetHistoricalHoldingsResult
	 * @return ManagerHoldings
	 */
	public function setGetHistoricalHoldingsResult($_GetHistoricalHoldingsResult)
	{
		return ($this->GetHistoricalHoldingsResult = $_GetHistoricalHoldingsResult);
	}
	/**
	 * Get GetHistoricalHoldingsResult
	 * @return XiHoldingsTypeManagerHoldings
	 */
	public function getGetHistoricalHoldingsResult()
	{
		return $this->GetHistoricalHoldingsResult;
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