<?php
/**
 * Class file for XiIndicesTypeGetHistoricalValuesAsOfResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetHistoricalValuesAsOfResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetHistoricalValuesAsOfResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetHistoricalValuesAsOfResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeIndexQuotes
	 */
	public $GetHistoricalValuesAsOfResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndexQuotes GetHistoricalValuesAsOfResult
	 * @return XiIndicesTypeGetHistoricalValuesAsOfResponse
	 */
	public function __construct($_GetHistoricalValuesAsOfResult = null)
	{
		parent::__construct(array('GetHistoricalValuesAsOfResult'=>$_GetHistoricalValuesAsOfResult));
	}
	/**
	 * Set GetHistoricalValuesAsOfResult
	 * @param IndexQuotes GetHistoricalValuesAsOfResult
	 * @return IndexQuotes
	 */
	public function setGetHistoricalValuesAsOfResult($_GetHistoricalValuesAsOfResult)
	{
		return ($this->GetHistoricalValuesAsOfResult = $_GetHistoricalValuesAsOfResult);
	}
	/**
	 * Get GetHistoricalValuesAsOfResult
	 * @return XiIndicesTypeIndexQuotes
	 */
	public function getGetHistoricalValuesAsOfResult()
	{
		return $this->GetHistoricalValuesAsOfResult;
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