<?php
/**
 * Class file for SOFastQuoteTypeGetStockInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeGetStockInfoResponse
 * @date 08/07/2012
 */
class SOFastQuoteTypeGetStockInfoResponse extends SOFastQuoteWsdlClass
{
	/**
	 * The GetStockInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastQuoteTypeStockInfo
	 */
	public $GetStockInfoResult;
	/**
	 * Constructor
	 * @param SOFastQuoteTypeStockInfo GetStockInfoResult
	 * @return SOFastQuoteTypeGetStockInfoResponse
	 */
	public function __construct($_GetStockInfoResult = null)
	{
		parent::__construct(array('GetStockInfoResult'=>$_GetStockInfoResult));
	}
	/**
	 * Set GetStockInfoResult
	 * @param StockInfo GetStockInfoResult
	 * @return StockInfo
	 */
	public function setGetStockInfoResult($_GetStockInfoResult)
	{
		return ($this->GetStockInfoResult = $_GetStockInfoResult);
	}
	/**
	 * Get GetStockInfoResult
	 * @return SOFastQuoteTypeStockInfo
	 */
	public function getGetStockInfoResult()
	{
		return $this->GetStockInfoResult;
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