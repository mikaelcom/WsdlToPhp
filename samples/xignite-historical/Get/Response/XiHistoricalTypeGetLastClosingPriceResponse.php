<?php
/**
 * Class file for XiHistoricalTypeGetLastClosingPriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetLastClosingPriceResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetLastClosingPriceResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetLastClosingPriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuote
	 */
	public $GetLastClosingPriceResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuote GetLastClosingPriceResult
	 * @return XiHistoricalTypeGetLastClosingPriceResponse
	 */
	public function __construct($_GetLastClosingPriceResult = null)
	{
		parent::__construct(array('GetLastClosingPriceResult'=>$_GetLastClosingPriceResult));
	}
	/**
	 * Set GetLastClosingPriceResult
	 * @param HistoricalQuote GetLastClosingPriceResult
	 * @return HistoricalQuote
	 */
	public function setGetLastClosingPriceResult($_GetLastClosingPriceResult)
	{
		return ($this->GetLastClosingPriceResult = $_GetLastClosingPriceResult);
	}
	/**
	 * Get GetLastClosingPriceResult
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function getGetLastClosingPriceResult()
	{
		return $this->GetLastClosingPriceResult;
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