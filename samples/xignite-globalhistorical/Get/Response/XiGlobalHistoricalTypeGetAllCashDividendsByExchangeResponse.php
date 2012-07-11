<?php
/**
 * Class file for XiGlobalHistoricalTypeGetAllCashDividendsByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetAllCashDividendsByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetAllCashDividendsByExchangeResponse extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GetAllCashDividendsByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfDividendHistory
	 */
	public $GetAllCashDividendsByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeArrayOfDividendHistory GetAllCashDividendsByExchangeResult
	 * @return XiGlobalHistoricalTypeGetAllCashDividendsByExchangeResponse
	 */
	public function __construct($_GetAllCashDividendsByExchangeResult = null)
	{
		parent::__construct(array('GetAllCashDividendsByExchangeResult'=>new XiGlobalHistoricalTypeArrayOfDividendHistory($_GetAllCashDividendsByExchangeResult)));
	}
	/**
	 * Set GetAllCashDividendsByExchangeResult
	 * @param ArrayOfDividendHistory GetAllCashDividendsByExchangeResult
	 * @return ArrayOfDividendHistory
	 */
	public function setGetAllCashDividendsByExchangeResult($_GetAllCashDividendsByExchangeResult)
	{
		return ($this->GetAllCashDividendsByExchangeResult = $_GetAllCashDividendsByExchangeResult);
	}
	/**
	 * Get GetAllCashDividendsByExchangeResult
	 * @return XiGlobalHistoricalTypeArrayOfDividendHistory
	 */
	public function getGetAllCashDividendsByExchangeResult()
	{
		return $this->GetAllCashDividendsByExchangeResult;
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