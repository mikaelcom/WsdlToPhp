<?php
/**
 * Class file for XiRatesTypeGetAuctionResultResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetAuctionResultResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetAuctionResultResponse extends XiRatesWsdlClass
{
	/**
	 * The GetAuctionResultResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeAuctionResult
	 */
	public $GetAuctionResultResult;
	/**
	 * Constructor
	 * @param XiRatesTypeAuctionResult GetAuctionResultResult
	 * @return XiRatesTypeGetAuctionResultResponse
	 */
	public function __construct($_GetAuctionResultResult = null)
	{
		parent::__construct(array('GetAuctionResultResult'=>$_GetAuctionResultResult));
	}
	/**
	 * Set GetAuctionResultResult
	 * @param AuctionResult GetAuctionResultResult
	 * @return AuctionResult
	 */
	public function setGetAuctionResultResult($_GetAuctionResultResult)
	{
		return ($this->GetAuctionResultResult = $_GetAuctionResultResult);
	}
	/**
	 * Get GetAuctionResultResult
	 * @return XiRatesTypeAuctionResult
	 */
	public function getGetAuctionResultResult()
	{
		return $this->GetAuctionResultResult;
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