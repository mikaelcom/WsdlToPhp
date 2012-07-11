<?php
/**
 * Class file for XiRatesTypeGetAuctionResultsResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetAuctionResultsResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetAuctionResultsResponse extends XiRatesWsdlClass
{
	/**
	 * The GetAuctionResultsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfAuctionResult
	 */
	public $GetAuctionResultsResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfAuctionResult GetAuctionResultsResult
	 * @return XiRatesTypeGetAuctionResultsResponse
	 */
	public function __construct($_GetAuctionResultsResult = null)
	{
		parent::__construct(array('GetAuctionResultsResult'=>new XiRatesTypeArrayOfAuctionResult($_GetAuctionResultsResult)));
	}
	/**
	 * Set GetAuctionResultsResult
	 * @param ArrayOfAuctionResult GetAuctionResultsResult
	 * @return ArrayOfAuctionResult
	 */
	public function setGetAuctionResultsResult($_GetAuctionResultsResult)
	{
		return ($this->GetAuctionResultsResult = $_GetAuctionResultsResult);
	}
	/**
	 * Get GetAuctionResultsResult
	 * @return XiRatesTypeArrayOfAuctionResult
	 */
	public function getGetAuctionResultsResult()
	{
		return $this->GetAuctionResultsResult;
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