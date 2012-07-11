<?php
/**
 * Class file for XiIndicesTypeGetHistoricalValuesRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetHistoricalValuesRangeResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetHistoricalValuesRangeResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetHistoricalValuesRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeIndexQuotes
	 */
	public $GetHistoricalValuesRangeResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexQuotes GetHistoricalValuesRangeResult
	 * @return XiIndicesTypeGetHistoricalValuesRangeResponse
	 */
	public function __construct($_GetHistoricalValuesRangeResult = null)
	{
		parent::__construct(array('GetHistoricalValuesRangeResult'=>$_GetHistoricalValuesRangeResult));
	}
	/**
	 * Set GetHistoricalValuesRangeResult
	 * @param IndexQuotes GetHistoricalValuesRangeResult
	 * @return IndexQuotes
	 */
	public function setGetHistoricalValuesRangeResult($_GetHistoricalValuesRangeResult)
	{
		return ($this->GetHistoricalValuesRangeResult = $_GetHistoricalValuesRangeResult);
	}
	/**
	 * Get GetHistoricalValuesRangeResult
	 * @return XiIndicesTypeIndexQuotes
	 */
	public function getGetHistoricalValuesRangeResult()
	{
		return $this->GetHistoricalValuesRangeResult;
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