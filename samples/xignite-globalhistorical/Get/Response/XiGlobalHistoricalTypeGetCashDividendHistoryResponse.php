<?php
/**
 * Class file for XiGlobalHistoricalTypeGetCashDividendHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetCashDividendHistoryResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetCashDividendHistoryResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetCashDividendHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeDividendHistory
	 */
	public $GetCashDividendHistoryResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeDividendHistory GetCashDividendHistoryResult
	 * @return XiGlobalHistoricalTypeGetCashDividendHistoryResponse
	 */
	public function __construct($_GetCashDividendHistoryResult = null)
	{
		parent::__construct(array('GetCashDividendHistoryResult'=>$_GetCashDividendHistoryResult));
	}
	/**
	 * Set GetCashDividendHistoryResult
	 * @param DividendHistory GetCashDividendHistoryResult
	 * @return DividendHistory
	 */
	public function setGetCashDividendHistoryResult($_GetCashDividendHistoryResult)
	{
		return ($this->GetCashDividendHistoryResult = $_GetCashDividendHistoryResult);
	}
	/**
	 * Get GetCashDividendHistoryResult
	 * @return XiGlobalHistoricalTypeDividendHistory
	 */
	public function getGetCashDividendHistoryResult()
	{
		return $this->GetCashDividendHistoryResult;
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