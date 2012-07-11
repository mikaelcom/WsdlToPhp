<?php
/**
 * Class file for XiHistoricalTypeGetHistoricalHighLowResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetHistoricalHighLowResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetHistoricalHighLowResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetHistoricalHighLowResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeHistoricalHighLow
	 */
	public $GetHistoricalHighLowResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeHistoricalHighLow GetHistoricalHighLowResult
	 * @return XiHistoricalTypeGetHistoricalHighLowResponse
	 */
	public function __construct($_GetHistoricalHighLowResult = null)
	{
		parent::__construct(array('GetHistoricalHighLowResult'=>$_GetHistoricalHighLowResult));
	}
	/**
	 * Set GetHistoricalHighLowResult
	 * @param HistoricalHighLow GetHistoricalHighLowResult
	 * @return HistoricalHighLow
	 */
	public function setGetHistoricalHighLowResult($_GetHistoricalHighLowResult)
	{
		return ($this->GetHistoricalHighLowResult = $_GetHistoricalHighLowResult);
	}
	/**
	 * Get GetHistoricalHighLowResult
	 * @return XiHistoricalTypeHistoricalHighLow
	 */
	public function getGetHistoricalHighLowResult()
	{
		return $this->GetHistoricalHighLowResult;
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