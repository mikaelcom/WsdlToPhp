<?php
/**
 * Class file for SOFastQuoteTypeGetIndexInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeGetIndexInfoResponse
 * @date 08/07/2012
 */
class SOFastQuoteTypeGetIndexInfoResponse extends SOFastQuoteWsdlClass
{
	/**
	 * The GetIndexInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastQuoteTypeStockInfo
	 */
	public $GetIndexInfoResult;
	/**
	 * Constructor
	 * @param SOFastQuoteTypeStockInfo GetIndexInfoResult
	 * @return SOFastQuoteTypeGetIndexInfoResponse
	 */
	public function __construct($_GetIndexInfoResult = null)
	{
		parent::__construct(array('GetIndexInfoResult'=>$_GetIndexInfoResult));
	}
	/**
	 * Set GetIndexInfoResult
	 * @param StockInfo GetIndexInfoResult
	 * @return StockInfo
	 */
	public function setGetIndexInfoResult($_GetIndexInfoResult)
	{
		return ($this->GetIndexInfoResult = $_GetIndexInfoResult);
	}
	/**
	 * Get GetIndexInfoResult
	 * @return SOFastQuoteTypeStockInfo
	 */
	public function getGetIndexInfoResult()
	{
		return $this->GetIndexInfoResult;
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