<?php
/**
 * Class file for SOFastQuoteTypeGetOTCStockInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeGetOTCStockInfoResponse
 * @date 08/07/2012
 */
class SOFastQuoteTypeGetOTCStockInfoResponse extends SOFastQuoteWsdlClass
{
	/**
	 * The GetOTCStockInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastQuoteTypeStockInfo
	 */
	public $GetOTCStockInfoResult;
	/**
	 * Constructor
	 * @param SOFastQuoteTypeStockInfo GetOTCStockInfoResult
	 * @return SOFastQuoteTypeGetOTCStockInfoResponse
	 */
	public function __construct($_GetOTCStockInfoResult = null)
	{
		parent::__construct(array('GetOTCStockInfoResult'=>$_GetOTCStockInfoResult));
	}
	/**
	 * Set GetOTCStockInfoResult
	 * @param StockInfo GetOTCStockInfoResult
	 * @return StockInfo
	 */
	public function setGetOTCStockInfoResult($_GetOTCStockInfoResult)
	{
		return ($this->GetOTCStockInfoResult = $_GetOTCStockInfoResult);
	}
	/**
	 * Get GetOTCStockInfoResult
	 * @return SOFastQuoteTypeStockInfo
	 */
	public function getGetOTCStockInfoResult()
	{
		return $this->GetOTCStockInfoResult;
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