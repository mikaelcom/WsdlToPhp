<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalLastClosingPricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalLastClosingPricesResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalLastClosingPricesResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalLastClosingPricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
	 */
	public $GetGlobalLastClosingPricesResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote GetGlobalLastClosingPricesResult
	 * @return XiGlobalHistoricalTypeGetGlobalLastClosingPricesResponse
	 */
	public function __construct($_GetGlobalLastClosingPricesResult = null)
	{
		parent::__construct(array('GetGlobalLastClosingPricesResult'=>new XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote($_GetGlobalLastClosingPricesResult)));
	}
	/**
	 * Set GetGlobalLastClosingPricesResult
	 * @param ArrayOfGlobalHistoricalQuote GetGlobalLastClosingPricesResult
	 * @return ArrayOfGlobalHistoricalQuote
	 */
	public function setGetGlobalLastClosingPricesResult($_GetGlobalLastClosingPricesResult)
	{
		return ($this->GetGlobalLastClosingPricesResult = $_GetGlobalLastClosingPricesResult);
	}
	/**
	 * Get GetGlobalLastClosingPricesResult
	 * @return XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuote
	 */
	public function getGetGlobalLastClosingPricesResult()
	{
		return $this->GetGlobalLastClosingPricesResult;
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