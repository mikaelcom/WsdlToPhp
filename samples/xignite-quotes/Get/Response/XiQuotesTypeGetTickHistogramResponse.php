<?php
/**
 * Class file for XiQuotesTypeGetTickHistogramResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTickHistogramResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTickHistogramResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTickHistogramResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeHistogram
	 */
	public $GetTickHistogramResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeHistogram GetTickHistogramResult
	 * @return XiQuotesTypeGetTickHistogramResponse
	 */
	public function __construct($_GetTickHistogramResult = null)
	{
		parent::__construct(array('GetTickHistogramResult'=>$_GetTickHistogramResult));
	}
	/**
	 * Set GetTickHistogramResult
	 * @param Histogram GetTickHistogramResult
	 * @return Histogram
	 */
	public function setGetTickHistogramResult($_GetTickHistogramResult)
	{
		return ($this->GetTickHistogramResult = $_GetTickHistogramResult);
	}
	/**
	 * Get GetTickHistogramResult
	 * @return XiQuotesTypeHistogram
	 */
	public function getGetTickHistogramResult()
	{
		return $this->GetTickHistogramResult;
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