<?php
/**
 * Class file for XiHistoricalTypeGetLastClosingPriceAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetLastClosingPriceAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetLastClosingPriceAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetLastClosingPriceAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalQuote
	 */
	public $GetLastClosingPriceAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalQuote GetLastClosingPriceAdjustedResult
	 * @return XiHistoricalTypeGetLastClosingPriceAdjustedResponse
	 */
	public function __construct($_GetLastClosingPriceAdjustedResult = null)
	{
		parent::__construct(array('GetLastClosingPriceAdjustedResult'=>$_GetLastClosingPriceAdjustedResult));
	}
	/**
	 * Set GetLastClosingPriceAdjustedResult
	 * @param HistoricalQuote GetLastClosingPriceAdjustedResult
	 * @return HistoricalQuote
	 */
	public function setGetLastClosingPriceAdjustedResult($_GetLastClosingPriceAdjustedResult)
	{
		return ($this->GetLastClosingPriceAdjustedResult = $_GetLastClosingPriceAdjustedResult);
	}
	/**
	 * Get GetLastClosingPriceAdjustedResult
	 * @return XiHistoricalTypeHistoricalQuote
	 */
	public function getGetLastClosingPriceAdjustedResult()
	{
		return $this->GetLastClosingPriceAdjustedResult;
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