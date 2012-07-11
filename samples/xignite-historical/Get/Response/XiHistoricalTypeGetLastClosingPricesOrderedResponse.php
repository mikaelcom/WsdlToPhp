<?php
/**
 * Class file for XiHistoricalTypeGetLastClosingPricesOrderedResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetLastClosingPricesOrderedResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetLastClosingPricesOrderedResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetLastClosingPricesOrderedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public $GetLastClosingPricesOrderedResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfHistoricalQuote GetLastClosingPricesOrderedResult
	 * @return XiHistoricalTypeGetLastClosingPricesOrderedResponse
	 */
	public function __construct($_GetLastClosingPricesOrderedResult = null)
	{
		parent::__construct(array('GetLastClosingPricesOrderedResult'=>new XiHistoricalTypeArrayOfHistoricalQuote($_GetLastClosingPricesOrderedResult)));
	}
	/**
	 * Set GetLastClosingPricesOrderedResult
	 * @param ArrayOfHistoricalQuote GetLastClosingPricesOrderedResult
	 * @return ArrayOfHistoricalQuote
	 */
	public function setGetLastClosingPricesOrderedResult($_GetLastClosingPricesOrderedResult)
	{
		return ($this->GetLastClosingPricesOrderedResult = $_GetLastClosingPricesOrderedResult);
	}
	/**
	 * Get GetLastClosingPricesOrderedResult
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function getGetLastClosingPricesOrderedResult()
	{
		return $this->GetLastClosingPricesOrderedResult;
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