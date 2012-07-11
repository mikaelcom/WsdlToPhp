<?php
/**
 * Class file for XiMetalsTypeGetHistoricalSpotPriceRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalSpotPriceRangeResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalSpotPriceRangeResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalSpotPriceRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalMetalQuotes
	 */
	public $GetHistoricalSpotPriceRangeResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalMetalQuotes GetHistoricalSpotPriceRangeResult
	 * @return XiMetalsTypeGetHistoricalSpotPriceRangeResponse
	 */
	public function __construct($_GetHistoricalSpotPriceRangeResult = null)
	{
		parent::__construct(array('GetHistoricalSpotPriceRangeResult'=>$_GetHistoricalSpotPriceRangeResult));
	}
	/**
	 * Set GetHistoricalSpotPriceRangeResult
	 * @param HistoricalMetalQuotes GetHistoricalSpotPriceRangeResult
	 * @return HistoricalMetalQuotes
	 */
	public function setGetHistoricalSpotPriceRangeResult($_GetHistoricalSpotPriceRangeResult)
	{
		return ($this->GetHistoricalSpotPriceRangeResult = $_GetHistoricalSpotPriceRangeResult);
	}
	/**
	 * Get GetHistoricalSpotPriceRangeResult
	 * @return XiMetalsTypeHistoricalMetalQuotes
	 */
	public function getGetHistoricalSpotPriceRangeResult()
	{
		return $this->GetHistoricalSpotPriceRangeResult;
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