<?php
/**
 * Class file for XiHistoricalTypeGetExtendedDividendHistoryRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetExtendedDividendHistoryRangeResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetExtendedDividendHistoryRangeResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetExtendedDividendHistoryRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeExtendedDividendHistory
	 */
	public $GetExtendedDividendHistoryRangeResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeExtendedDividendHistory GetExtendedDividendHistoryRangeResult
	 * @return XiHistoricalTypeGetExtendedDividendHistoryRangeResponse
	 */
	public function __construct($_GetExtendedDividendHistoryRangeResult = null)
	{
		parent::__construct(array('GetExtendedDividendHistoryRangeResult'=>$_GetExtendedDividendHistoryRangeResult));
	}
	/**
	 * Set GetExtendedDividendHistoryRangeResult
	 * @param ExtendedDividendHistory GetExtendedDividendHistoryRangeResult
	 * @return ExtendedDividendHistory
	 */
	public function setGetExtendedDividendHistoryRangeResult($_GetExtendedDividendHistoryRangeResult)
	{
		return ($this->GetExtendedDividendHistoryRangeResult = $_GetExtendedDividendHistoryRangeResult);
	}
	/**
	 * Get GetExtendedDividendHistoryRangeResult
	 * @return XiHistoricalTypeExtendedDividendHistory
	 */
	public function getGetExtendedDividendHistoryRangeResult()
	{
		return $this->GetExtendedDividendHistoryRangeResult;
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