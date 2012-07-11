<?php
/**
 * Class file for XiHistoricalTypeGetDividendHistoryRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetDividendHistoryRangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetDividendHistoryRangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetDividendHistoryRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeDividendHistory
	 */
	public $GetDividendHistoryRangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeDividendHistory GetDividendHistoryRangeResult
	 * @return XiHistoricalTypeGetDividendHistoryRangeResponse
	 */
	public function __construct($_GetDividendHistoryRangeResult = null)
	{
		parent::__construct(array('GetDividendHistoryRangeResult'=>$_GetDividendHistoryRangeResult));
	}
	/**
	 * Set GetDividendHistoryRangeResult
	 * @param DividendHistory GetDividendHistoryRangeResult
	 * @return DividendHistory
	 */
	public function setGetDividendHistoryRangeResult($_GetDividendHistoryRangeResult)
	{
		return ($this->GetDividendHistoryRangeResult = $_GetDividendHistoryRangeResult);
	}
	/**
	 * Get GetDividendHistoryRangeResult
	 * @return XiHistoricalTypeDividendHistory
	 */
	public function getGetDividendHistoryRangeResult()
	{
		return $this->GetDividendHistoryRangeResult;
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