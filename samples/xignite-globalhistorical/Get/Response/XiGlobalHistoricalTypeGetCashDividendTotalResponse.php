<?php
/**
 * Class file for XiGlobalHistoricalTypeGetCashDividendTotalResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetCashDividendTotalResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetCashDividendTotalResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetCashDividendTotalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeDividendTotal
	 */
	public $GetCashDividendTotalResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeDividendTotal GetCashDividendTotalResult
	 * @return XiGlobalHistoricalTypeGetCashDividendTotalResponse
	 */
	public function __construct($_GetCashDividendTotalResult = null)
	{
		parent::__construct(array('GetCashDividendTotalResult'=>$_GetCashDividendTotalResult));
	}
	/**
	 * Set GetCashDividendTotalResult
	 * @param DividendTotal GetCashDividendTotalResult
	 * @return DividendTotal
	 */
	public function setGetCashDividendTotalResult($_GetCashDividendTotalResult)
	{
		return ($this->GetCashDividendTotalResult = $_GetCashDividendTotalResult);
	}
	/**
	 * Get GetCashDividendTotalResult
	 * @return XiGlobalHistoricalTypeDividendTotal
	 */
	public function getGetCashDividendTotalResult()
	{
		return $this->GetCashDividendTotalResult;
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