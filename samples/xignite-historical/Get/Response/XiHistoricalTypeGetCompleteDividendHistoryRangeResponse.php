<?php
/**
 * Class file for XiHistoricalTypeGetCompleteDividendHistoryRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetCompleteDividendHistoryRangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetCompleteDividendHistoryRangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetCompleteDividendHistoryRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeCompleteDividendHistory
	 */
	public $GetCompleteDividendHistoryRangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeCompleteDividendHistory GetCompleteDividendHistoryRangeResult
	 * @return XiHistoricalTypeGetCompleteDividendHistoryRangeResponse
	 */
	public function __construct($_GetCompleteDividendHistoryRangeResult = null)
	{
		parent::__construct(array('GetCompleteDividendHistoryRangeResult'=>$_GetCompleteDividendHistoryRangeResult));
	}
	/**
	 * Set GetCompleteDividendHistoryRangeResult
	 * @param CompleteDividendHistory GetCompleteDividendHistoryRangeResult
	 * @return CompleteDividendHistory
	 */
	public function setGetCompleteDividendHistoryRangeResult($_GetCompleteDividendHistoryRangeResult)
	{
		return ($this->GetCompleteDividendHistoryRangeResult = $_GetCompleteDividendHistoryRangeResult);
	}
	/**
	 * Get GetCompleteDividendHistoryRangeResult
	 * @return XiHistoricalTypeCompleteDividendHistory
	 */
	public function getGetCompleteDividendHistoryRangeResult()
	{
		return $this->GetCompleteDividendHistoryRangeResult;
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