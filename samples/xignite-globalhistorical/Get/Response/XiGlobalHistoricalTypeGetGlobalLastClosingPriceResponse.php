<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalLastClosingPriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalLastClosingPriceResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalLastClosingPriceResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetGlobalLastClosingPriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public $GetGlobalLastClosingPriceResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuote GetGlobalLastClosingPriceResult
	 * @return XiGlobalHistoricalTypeGetGlobalLastClosingPriceResponse
	 */
	public function __construct($_GetGlobalLastClosingPriceResult = null)
	{
		parent::__construct(array('GetGlobalLastClosingPriceResult'=>$_GetGlobalLastClosingPriceResult));
	}
	/**
	 * Set GetGlobalLastClosingPriceResult
	 * @param GlobalHistoricalQuote GetGlobalLastClosingPriceResult
	 * @return GlobalHistoricalQuote
	 */
	public function setGetGlobalLastClosingPriceResult($_GetGlobalLastClosingPriceResult)
	{
		return ($this->GetGlobalLastClosingPriceResult = $_GetGlobalLastClosingPriceResult);
	}
	/**
	 * Get GetGlobalLastClosingPriceResult
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function getGetGlobalLastClosingPriceResult()
	{
		return $this->GetGlobalLastClosingPriceResult;
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