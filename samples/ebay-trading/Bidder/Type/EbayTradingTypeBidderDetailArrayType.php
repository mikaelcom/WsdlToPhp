<?php
/**
 * Class file for EbayTradingTypeBidderDetailArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidderDetailArrayType
 * Documentation : A collection of Bidder Detail.
 * @date 04/07/2012
 */
class EbayTradingTypeBidderDetailArrayType extends EbayTradingWsdlClass
{
	/**
	 * The BidderDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details about a Live Auctions bidder. Returned if at least one bidder has requested approval.
	 * @var EbayTradingTypeBidderDetailType
	 */
	public $BidderDetail;
	/**
	 * Constructor
	 * @param EbayTradingTypeBidderDetailType BidderDetail
	 * @return EbayTradingTypeBidderDetailArrayType
	 */
	public function __construct($_BidderDetail = null)
	{
		parent::__construct(array('BidderDetail'=>$_BidderDetail));
	}
	/**
	 * Set BidderDetail
	 * @param BidderDetailType BidderDetail
	 * @return BidderDetailType
	 */
	public function setBidderDetail($_BidderDetail)
	{
		return ($this->BidderDetail = $_BidderDetail);
	}
	/**
	 * Get BidderDetail
	 * @return EbayTradingTypeBidderDetailType
	 */
	public function getBidderDetail()
	{
		return $this->BidderDetail;
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