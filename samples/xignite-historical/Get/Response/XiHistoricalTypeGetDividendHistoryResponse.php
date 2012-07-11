<?php
/**
 * Class file for XiHistoricalTypeGetDividendHistoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetDividendHistoryResponse
 * @date 08/07/2012
 */
class XiHistoricalTypeGetDividendHistoryResponse extends XiHistoricalWsdlClass
{
	/**
	 * The GetDividendHistoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeDividendHistory
	 */
	public $GetDividendHistoryResult;
	/**
	 * Constructor
	 * @param XiHistoricalTypeDividendHistory GetDividendHistoryResult
	 * @return XiHistoricalTypeGetDividendHistoryResponse
	 */
	public function __construct($_GetDividendHistoryResult = null)
	{
		parent::__construct(array('GetDividendHistoryResult'=>$_GetDividendHistoryResult));
	}
	/**
	 * Set GetDividendHistoryResult
	 * @param DividendHistory GetDividendHistoryResult
	 * @return DividendHistory
	 */
	public function setGetDividendHistoryResult($_GetDividendHistoryResult)
	{
		return ($this->GetDividendHistoryResult = $_GetDividendHistoryResult);
	}
	/**
	 * Get GetDividendHistoryResult
	 * @return XiHistoricalTypeDividendHistory
	 */
	public function getGetDividendHistoryResult()
	{
		return $this->GetDividendHistoryResult;
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