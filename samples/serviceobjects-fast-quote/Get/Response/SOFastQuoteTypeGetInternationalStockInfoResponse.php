<?php
/**
 * Class file for SOFastQuoteTypeGetInternationalStockInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeGetInternationalStockInfoResponse
 * @date 08/07/2012
 */
class SOFastQuoteTypeGetInternationalStockInfoResponse extends SOFastQuoteWsdlClass
{
	/**
	 * The GetInternationalStockInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastQuoteTypeStockInfo
	 */
	public $GetInternationalStockInfoResult;
	/**
	 * Constructor
	 * @param SOFastQuoteTypeStockInfo GetInternationalStockInfoResult
	 * @return SOFastQuoteTypeGetInternationalStockInfoResponse
	 */
	public function __construct($_GetInternationalStockInfoResult = null)
	{
		parent::__construct(array('GetInternationalStockInfoResult'=>$_GetInternationalStockInfoResult));
	}
	/**
	 * Set GetInternationalStockInfoResult
	 * @param StockInfo GetInternationalStockInfoResult
	 * @return StockInfo
	 */
	public function setGetInternationalStockInfoResult($_GetInternationalStockInfoResult)
	{
		return ($this->GetInternationalStockInfoResult = $_GetInternationalStockInfoResult);
	}
	/**
	 * Get GetInternationalStockInfoResult
	 * @return SOFastQuoteTypeStockInfo
	 */
	public function getGetInternationalStockInfoResult()
	{
		return $this->GetInternationalStockInfoResult;
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