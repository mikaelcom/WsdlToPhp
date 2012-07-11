<?php
/**
 * Class file for XiHistoricalTypeGetLastClosingPricesOrderedAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetLastClosingPricesOrderedAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetLastClosingPricesOrderedAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetLastClosingPricesOrderedAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public $GetLastClosingPricesOrderedAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfHistoricalQuote GetLastClosingPricesOrderedAdjustedResult
	 * @return XiHistoricalTypeGetLastClosingPricesOrderedAdjustedResponse
	 */
	public function __construct($_GetLastClosingPricesOrderedAdjustedResult = null)
	{
		parent::__construct(array('GetLastClosingPricesOrderedAdjustedResult'=>new XiHistoricalTypeArrayOfHistoricalQuote($_GetLastClosingPricesOrderedAdjustedResult)));
	}
	/**
	 * Set GetLastClosingPricesOrderedAdjustedResult
	 * @param ArrayOfHistoricalQuote GetLastClosingPricesOrderedAdjustedResult
	 * @return ArrayOfHistoricalQuote
	 */
	public function setGetLastClosingPricesOrderedAdjustedResult($_GetLastClosingPricesOrderedAdjustedResult)
	{
		return ($this->GetLastClosingPricesOrderedAdjustedResult = $_GetLastClosingPricesOrderedAdjustedResult);
	}
	/**
	 * Get GetLastClosingPricesOrderedAdjustedResult
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function getGetLastClosingPricesOrderedAdjustedResult()
	{
		return $this->GetLastClosingPricesOrderedAdjustedResult;
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