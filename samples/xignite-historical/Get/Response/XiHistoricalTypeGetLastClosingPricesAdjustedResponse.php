<?php
/**
 * Class file for XiHistoricalTypeGetLastClosingPricesAdjustedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetLastClosingPricesAdjustedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetLastClosingPricesAdjustedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetLastClosingPricesAdjustedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public $GetLastClosingPricesAdjustedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfHistoricalQuote GetLastClosingPricesAdjustedResult
	 * @return XiHistoricalTypeGetLastClosingPricesAdjustedResponse
	 */
	public function __construct($_GetLastClosingPricesAdjustedResult = null)
	{
		parent::__construct(array('GetLastClosingPricesAdjustedResult'=>new XiHistoricalTypeArrayOfHistoricalQuote($_GetLastClosingPricesAdjustedResult)));
	}
	/**
	 * Set GetLastClosingPricesAdjustedResult
	 * @param ArrayOfHistoricalQuote GetLastClosingPricesAdjustedResult
	 * @return ArrayOfHistoricalQuote
	 */
	public function setGetLastClosingPricesAdjustedResult($_GetLastClosingPricesAdjustedResult)
	{
		return ($this->GetLastClosingPricesAdjustedResult = $_GetLastClosingPricesAdjustedResult);
	}
	/**
	 * Get GetLastClosingPricesAdjustedResult
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function getGetLastClosingPricesAdjustedResult()
	{
		return $this->GetLastClosingPricesAdjustedResult;
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