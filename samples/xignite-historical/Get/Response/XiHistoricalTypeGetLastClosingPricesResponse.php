<?php
/**
 * Class file for XiHistoricalTypeGetLastClosingPricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetLastClosingPricesResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetLastClosingPricesResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetLastClosingPricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public $GetLastClosingPricesResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeArrayOfHistoricalQuote GetLastClosingPricesResult
	 * @return XiHistoricalTypeGetLastClosingPricesResponse
	 */
	public function __construct($_GetLastClosingPricesResult = null)
	{
		parent::__construct(array('GetLastClosingPricesResult'=>new XiHistoricalTypeArrayOfHistoricalQuote($_GetLastClosingPricesResult)));
	}
	/**
	 * Set GetLastClosingPricesResult
	 * @param ArrayOfHistoricalQuote GetLastClosingPricesResult
	 * @return ArrayOfHistoricalQuote
	 */
	public function setGetLastClosingPricesResult($_GetLastClosingPricesResult)
	{
		return ($this->GetLastClosingPricesResult = $_GetLastClosingPricesResult);
	}
	/**
	 * Get GetLastClosingPricesResult
	 * @return XiHistoricalTypeArrayOfHistoricalQuote
	 */
	public function getGetLastClosingPricesResult()
	{
		return $this->GetLastClosingPricesResult;
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