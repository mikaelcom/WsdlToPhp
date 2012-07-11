<?php
/**
 * Class file for XiQuotesTypeGetMarketChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetMarketChartResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetMarketChartResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetMarketChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeHTMLResult
	 */
	public $GetMarketChartResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeHTMLResult GetMarketChartResult
	 * @return XiQuotesTypeGetMarketChartResponse
	 */
	public function __construct($_GetMarketChartResult = null)
	{
		parent::__construct(array('GetMarketChartResult'=>$_GetMarketChartResult));
	}
	/**
	 * Set GetMarketChartResult
	 * @param HTMLResult GetMarketChartResult
	 * @return HTMLResult
	 */
	public function setGetMarketChartResult($_GetMarketChartResult)
	{
		return ($this->GetMarketChartResult = $_GetMarketChartResult);
	}
	/**
	 * Get GetMarketChartResult
	 * @return XiQuotesTypeHTMLResult
	 */
	public function getGetMarketChartResult()
	{
		return $this->GetMarketChartResult;
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