<?php
/**
 * Class file for XiMetalsTypeGetSpotMarketSummaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetSpotMarketSummaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetSpotMarketSummaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetSpotMarketSummaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeSpotMarketSummary
	 */
	public $GetSpotMarketSummaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeSpotMarketSummary GetSpotMarketSummaryResult
	 * @return XiMetalsTypeGetSpotMarketSummaryResponse
	 */
	public function __construct($_GetSpotMarketSummaryResult = null)
	{
		parent::__construct(array('GetSpotMarketSummaryResult'=>$_GetSpotMarketSummaryResult));
	}
	/**
	 * Set GetSpotMarketSummaryResult
	 * @param SpotMarketSummary GetSpotMarketSummaryResult
	 * @return SpotMarketSummary
	 */
	public function setGetSpotMarketSummaryResult($_GetSpotMarketSummaryResult)
	{
		return ($this->GetSpotMarketSummaryResult = $_GetSpotMarketSummaryResult);
	}
	/**
	 * Get GetSpotMarketSummaryResult
	 * @return XiMetalsTypeSpotMarketSummary
	 */
	public function getGetSpotMarketSummaryResult()
	{
		return $this->GetSpotMarketSummaryResult;
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