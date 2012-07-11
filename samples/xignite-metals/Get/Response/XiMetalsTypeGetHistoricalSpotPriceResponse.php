<?php
/**
 * Class file for XiMetalsTypeGetHistoricalSpotPriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalSpotPriceResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalSpotPriceResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalSpotPriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalMetalQuote
	 */
	public $GetHistoricalSpotPriceResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeHistoricalMetalQuote GetHistoricalSpotPriceResult
	 * @return XiMetalsTypeGetHistoricalSpotPriceResponse
	 */
	public function __construct($_GetHistoricalSpotPriceResult = null)
	{
		parent::__construct(array('GetHistoricalSpotPriceResult'=>$_GetHistoricalSpotPriceResult));
	}
	/**
	 * Set GetHistoricalSpotPriceResult
	 * @param HistoricalMetalQuote GetHistoricalSpotPriceResult
	 * @return HistoricalMetalQuote
	 */
	public function setGetHistoricalSpotPriceResult($_GetHistoricalSpotPriceResult)
	{
		return ($this->GetHistoricalSpotPriceResult = $_GetHistoricalSpotPriceResult);
	}
	/**
	 * Get GetHistoricalSpotPriceResult
	 * @return XiMetalsTypeHistoricalMetalQuote
	 */
	public function getGetHistoricalSpotPriceResult()
	{
		return $this->GetHistoricalSpotPriceResult;
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