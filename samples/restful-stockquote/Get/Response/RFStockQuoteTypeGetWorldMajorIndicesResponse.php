<?php
/**
 * Class file for RFStockQuoteTypeGetWorldMajorIndicesResponse
 * @date 15/08/2012
 */
/**
 * Class RFStockQuoteTypeGetWorldMajorIndicesResponse
 * @date 15/08/2012
 */
class RFStockQuoteTypeGetWorldMajorIndicesResponse extends RFStockQuoteWsdlClass
{
	/**
	 * The GetWorldMajorIndicesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFStockQuoteTypeArrayOfStockQuote
	 */
	public $GetWorldMajorIndicesResult;
	/**
	 * Constructor
	 * @param RFStockQuoteTypeArrayOfStockQuote GetWorldMajorIndicesResult
	 * @return RFStockQuoteTypeGetWorldMajorIndicesResponse
	 */
	public function __construct($_GetWorldMajorIndicesResult = null)
	{
		parent::__construct(array('GetWorldMajorIndicesResult'=>new RFStockQuoteTypeArrayOfStockQuote($_GetWorldMajorIndicesResult)));
	}
	/**
	 * Set GetWorldMajorIndicesResult
	 * @param ArrayOfStockQuote GetWorldMajorIndicesResult
	 * @return ArrayOfStockQuote
	 */
	public function setGetWorldMajorIndicesResult($_GetWorldMajorIndicesResult)
	{
		return ($this->GetWorldMajorIndicesResult = $_GetWorldMajorIndicesResult);
	}
	/**
	 * Get GetWorldMajorIndicesResult
	 * @return RFStockQuoteTypeArrayOfStockQuote
	 */
	public function getGetWorldMajorIndicesResult()
	{
		return $this->GetWorldMajorIndicesResult;
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