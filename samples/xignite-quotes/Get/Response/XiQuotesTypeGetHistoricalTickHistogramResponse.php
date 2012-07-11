<?php
/**
 * Class file for XiQuotesTypeGetHistoricalTickHistogramResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetHistoricalTickHistogramResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetHistoricalTickHistogramResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetHistoricalTickHistogramResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeHistogram
	 */
	public $GetHistoricalTickHistogramResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeHistogram GetHistoricalTickHistogramResult
	 * @return XiQuotesTypeGetHistoricalTickHistogramResponse
	 */
	public function __construct($_GetHistoricalTickHistogramResult = null)
	{
		parent::__construct(array('GetHistoricalTickHistogramResult'=>$_GetHistoricalTickHistogramResult));
	}
	/**
	 * Set GetHistoricalTickHistogramResult
	 * @param Histogram GetHistoricalTickHistogramResult
	 * @return Histogram
	 */
	public function setGetHistoricalTickHistogramResult($_GetHistoricalTickHistogramResult)
	{
		return ($this->GetHistoricalTickHistogramResult = $_GetHistoricalTickHistogramResult);
	}
	/**
	 * Get GetHistoricalTickHistogramResult
	 * @return XiQuotesTypeHistogram
	 */
	public function getGetHistoricalTickHistogramResult()
	{
		return $this->GetHistoricalTickHistogramResult;
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